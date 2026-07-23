<?php

use App\Livewire\Auth\DownloadRegistrations;
use App\Livewire\Noauth\Draft;
use App\Livewire\Noauth\Referral;
use App\Livewire\Noauth\Saveddetails;
use App\Mail\AdminSubmission;
use App\Mail\ClientSubmission;
use App\Models\FormDraft;
use App\Models\SubmittedFormData;
use App\Models\User;
use App\Support\HtmlSanitizer;
use App\Support\ReferralDocument;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Livewire;

test('invalid and expired draft links are handled safely', function () {
    $this->get('/draft/not-a-real-draft')->assertNotFound();

    $draft = FormDraft::create([
        'uuid' => (string) Str::uuid(),
        'form_data' => ['participants_name' => 'Expired Person'],
        'max_step' => 6,
        'current_step' => 6,
        'expires_at' => now()->subMinute(),
    ]);

    $this->get("/draft/{$draft->uuid}")->assertStatus(410);
});

test('saved draft is deleted after successful submission', function () {
    Mail::fake();

    $draft = FormDraft::create([
        'uuid' => (string) Str::uuid(),
        'form_data' => validReferralFormData(),
        'max_step' => 6,
        'current_step' => 6,
        'expires_at' => now()->addDay(),
    ]);

    $component = Livewire::test(Saveddetails::class, ['uuid' => $draft->uuid]);

    session()->put("saved_details_form_started_at_{$draft->uuid}", now()->subSeconds(3)->timestamp);

    $component
        ->set('agree', true)
        ->set('initials', 'AB')
        ->set('name_of_person_signing', 'Valid Signer')
        ->set('email_of_person_signing', 'signer@example.com')
        ->call('submit')
        ->assertRedirect('/thank-you');

    expect(FormDraft::whereKey($draft->id)->exists())->toBeFalse();
    expect(SubmittedFormData::count())->toBe(1);
    Mail::assertQueued(ClientSubmission::class);
    Mail::assertQueued(AdminSubmission::class);
});

test('new referral final submit validates all steps even when current step is manipulated', function () {
    Mail::fake();

    $component = Livewire::test(Referral::class);
    session()->put('referral_form_started_at', now()->subSeconds(3)->timestamp);

    $component
        ->set('currentStep', 6)
        ->set('agree', true)
        ->set('initials', 'AB')
        ->set('name_of_person_signing', 'Valid Signer')
        ->set('email_of_person_signing', 'signer@example.com')
        ->call('submit')
        ->assertHasErrors(['participants_name', 'gender', 'email', 'residential_address']);

    expect(SubmittedFormData::count())->toBe(0);
    Mail::assertNothingQueued();
});

test('saved draft final submit validates all steps even when current step is manipulated', function () {
    Mail::fake();

    $draft = FormDraft::create([
        'uuid' => (string) Str::uuid(),
        'form_data' => [],
        'max_step' => 6,
        'current_step' => 6,
        'expires_at' => now()->addDay(),
    ]);

    $component = Livewire::test(Saveddetails::class, ['uuid' => $draft->uuid]);
    session()->put("saved_details_form_started_at_{$draft->uuid}", now()->subSeconds(3)->timestamp);

    $component
        ->set('currentStep', 6)
        ->set('agree', true)
        ->set('initials', 'AB')
        ->set('name_of_person_signing', 'Valid Signer')
        ->set('email_of_person_signing', 'signer@example.com')
        ->call('submit')
        ->assertHasErrors(['participants_name', 'gender', 'email', 'residential_address']);

    expect(SubmittedFormData::count())->toBe(0);
    expect(FormDraft::whereKey($draft->id)->exists())->toBeTrue();
    Mail::assertNothingQueued();
});

test('draft saving is protected by honeypot and rate limiting', function () {
    session()->put('referral_form_started_at', now()->subSeconds(3)->timestamp);

    Livewire::test(Referral::class)
        ->set('website', 'bot-value')
        ->call('saveProgress')
        ->assertHasErrors(['form']);

    expect(FormDraft::count())->toBe(0);

    RateLimiter::clear('referral_draft_save:127.0.0.1');
    for ($attempt = 0; $attempt < 5; $attempt++) {
        RateLimiter::hit('referral_draft_save:127.0.0.1', 600);
    }

    Livewire::test(Referral::class)
        ->call('saveProgress')
        ->assertHasErrors(['form']);

    expect(FormDraft::count())->toBe(0);
});

test('draft email sending is rate limited per ip and draft link', function () {
    Mail::fake();

    $url = 'https://example.test/draft/'.Str::uuid();
    session()->put('draft_url', $url);

    $key = 'draft_email:127.0.0.1:'.sha1($url);
    RateLimiter::clear($key);
    for ($attempt = 0; $attempt < 3; $attempt++) {
        RateLimiter::hit($key, 600);
    }

    Livewire::test(Draft::class)
        ->set('email', 'person@example.com')
        ->call('sendemail')
        ->assertHasErrors(['form']);

    Mail::assertNothingQueued();
});

test('referral supporting document is stored privately and downloadable by approved staff', function () {
    Storage::fake('local');
    Mail::fake();

    $component = Livewire::test(Referral::class);
    session()->put('referral_form_started_at', now()->subSeconds(3)->timestamp);

    foreach (validReferralFormData() as $field => $value) {
        $component->set($field, $value);
    }

    $component
        ->set('supporting_document', UploadedFile::fake()->create('support-plan.pdf', 100, 'application/pdf'))
        ->call('submit')
        ->assertRedirect('/thank-you');

    $submission = SubmittedFormData::first();
    $formData = $submission->form_data;

    expect($formData[ReferralDocument::ORIGINAL_NAME_KEY])->toBe('support-plan.pdf');
    Storage::disk('local')->assertExists($formData[ReferralDocument::PATH_KEY]);

    $staff = User::factory()->create(['approved' => true, 'role' => 'manager']);

    $this->actingAs($staff)
        ->get(route('registration-document.download', $submission))
        ->assertOk();
});

test('supporting document only accepts pdf doc and docx files up to five megabytes', function () {
    Storage::fake('local');

    $component = Livewire::test(Referral::class);
    session()->put('referral_form_started_at', now()->subSeconds(3)->timestamp);

    foreach (validReferralFormData() as $field => $value) {
        $component->set($field, $value);
    }

    $component
        ->set('supporting_document', UploadedFile::fake()->create('malware.exe', 100, 'application/octet-stream'))
        ->call('submit')
        ->assertHasErrors(['supporting_document']);

    expect(config('livewire.temporary_file_upload.rules'))->toContain('max:5120');
});

test('forged supporting document metadata is not persisted without an upload', function () {
    Mail::fake();

    $component = Livewire::test(Referral::class);
    session()->put('referral_form_started_at', now()->subSeconds(3)->timestamp);

    foreach (validReferralFormData() as $field => $value) {
        $component->set($field, $value);
    }

    $component
        ->set('formData.'.ReferralDocument::PATH_KEY, 'referral-documents/forged.pdf')
        ->set('formData.'.ReferralDocument::ORIGINAL_NAME_KEY, 'forged.pdf')
        ->call('submit')
        ->assertRedirect('/thank-you');

    expect(SubmittedFormData::first()->form_data)->not->toHaveKeys(ReferralDocument::metadataKeys());
});

test('forged supporting document metadata is not persisted when saving drafts', function () {
    $component = Livewire::test(Referral::class);
    session()->put('referral_form_started_at', now()->subSeconds(3)->timestamp);

    $component
        ->set('currentStep', 1)
        ->set('participants_name', 'Draft Person')
        ->set('gender', 'female')
        ->set('email', 'draft@example.com')
        ->set('residential_address', '123 Test Street')
        ->set('formData.'.ReferralDocument::PATH_KEY, 'referral-documents/forged.pdf')
        ->set('formData.'.ReferralDocument::ORIGINAL_NAME_KEY, 'forged.pdf')
        ->call('saveProgress')
        ->assertRedirect('/draft-saved');

    expect(FormDraft::first()->form_data)->not->toHaveKeys(ReferralDocument::metadataKeys());
});

test('saved draft shows existing supporting document metadata', function () {
    $draft = FormDraft::create([
        'uuid' => (string) Str::uuid(),
        'form_data' => [
            ReferralDocument::PATH_KEY => 'referral-documents/existing.pdf',
            ReferralDocument::ORIGINAL_NAME_KEY => 'existing.pdf',
        ],
        'max_step' => 5,
        'current_step' => 5,
        'expires_at' => now()->addDay(),
    ]);

    Livewire::test(Saveddetails::class, ['uuid' => $draft->uuid])
        ->assertSet('formData.'.ReferralDocument::ORIGINAL_NAME_KEY, 'existing.pdf')
        ->assertSee('existing.pdf');
});

test('sensitive form data is encrypted while old plaintext json remains readable', function () {
    $draft = FormDraft::create([
        'uuid' => (string) Str::uuid(),
        'form_data' => ['participants_name' => 'Encrypted Person'],
        'max_step' => 1,
        'current_step' => 1,
        'expires_at' => now()->addDay(),
    ]);

    $raw = DB::table('form_drafts')->where('id', $draft->id)->value('form_data');

    expect($raw)->not->toContain('Encrypted Person')
        ->and($draft->fresh()->form_data['participants_name'])->toBe('Encrypted Person');

    DB::table('form_drafts')->insert([
        'uuid' => $uuid = (string) Str::uuid(),
        'form_data' => json_encode(['participants_name' => 'Legacy Person']),
        'max_step' => 1,
        'current_step' => 1,
        'expires_at' => now()->addDay(),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    expect(FormDraft::where('uuid', $uuid)->first()->form_data['participants_name'])->toBe('Legacy Person');
});

test('existing plaintext sensitive records can be encrypted with command', function () {
    DB::table('submitted_form_data')->insert([
        'form_data' => json_encode(['participants_name' => 'Plaintext Person']),
        'contacted' => false,
        'is_read' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    Artisan::call('data:encrypt-sensitive-existing');

    $record = SubmittedFormData::first();
    $raw = DB::table('submitted_form_data')->where('id', $record->id)->value('form_data');

    expect($raw)->not->toContain('Plaintext Person')
        ->and($record->fresh()->form_data['participants_name'])->toBe('Plaintext Person');
});

test('retention command prunes expired drafts and submitted forms past policy', function () {
    Storage::fake('local');

    config(['data-retention.drafts.delete_expired_after_days' => 0]);
    config(['data-retention.submitted_forms.delete_after_days' => 1]);

    Storage::disk('local')->put('referral-documents/expired-draft.pdf', 'draft');
    Storage::disk('local')->put('referral-documents/old-submission.pdf', 'submission');

    FormDraft::create([
        'uuid' => (string) Str::uuid(),
        'form_data' => [
            'name' => 'expired',
            ReferralDocument::PATH_KEY => 'referral-documents/expired-draft.pdf',
        ],
        'max_step' => 1,
        'current_step' => 1,
        'expires_at' => now()->subMinute(),
    ]);

    $activeDraft = FormDraft::create([
        'uuid' => (string) Str::uuid(),
        'form_data' => ['name' => 'active'],
        'max_step' => 1,
        'current_step' => 1,
        'expires_at' => now()->addDay(),
    ]);

    $oldSubmission = SubmittedFormData::create([
        'form_data' => [
            'name' => 'old',
            ReferralDocument::PATH_KEY => 'referral-documents/old-submission.pdf',
        ],
    ]);
    DB::table('submitted_form_data')->where('id', $oldSubmission->id)->update(['created_at' => now()->subDays(2)]);
    $recentSubmission = SubmittedFormData::create(['form_data' => ['name' => 'recent']]);

    Artisan::call('data:prune-sensitive');

    expect(FormDraft::whereKey($activeDraft->id)->exists())->toBeTrue();
    expect(SubmittedFormData::whereKey($recentSubmission->id)->exists())->toBeTrue();
    expect(FormDraft::count())->toBe(1);
    expect(SubmittedFormData::count())->toBe(1);
    Storage::disk('local')->assertMissing('referral-documents/expired-draft.pdf');
    Storage::disk('local')->assertMissing('referral-documents/old-submission.pdf');
});

test('blog and career html sanitizer removes scripts event handlers and unsafe links', function () {
    $html = '<p onclick="alert(1)">Hello</p><script>alert(1)</script><a href="javascript:alert(1)" style="color:red">bad</a><a href="https://example.com">good</a>';

    $sanitized = HtmlSanitizer::sanitize($html);

    expect($sanitized)->toContain('<p>Hello</p>')
        ->and($sanitized)->not->toContain('script')
        ->and($sanitized)->not->toContain('onclick')
        ->and($sanitized)->not->toContain('javascript:')
        ->and($sanitized)->toContain('href="https://example.com"');
});

test('csv export escapes formula-leading values', function () {
    $component = new DownloadRegistrations;
    $method = new \ReflectionMethod($component, 'escapeCsvValue');
    $method->setAccessible(true);

    expect($method->invoke($component, '=cmd|A1'))->toBe("'=cmd|A1")
        ->and($method->invoke($component, '+SUM(1,1)'))->toBe("'+SUM(1,1)")
        ->and($method->invoke($component, '@malicious'))->toBe("'@malicious")
        ->and($method->invoke($component, 'normal text'))->toBe('normal text');
});

test('csv export reads encrypted submitted form payloads', function () {
    $submission = SubmittedFormData::create([
        'form_data' => [
            'participants_name' => 'Encrypted Export Person',
            'email_of_person_signing' => 'signer@example.com',
        ],
    ]);

    $raw = DB::table('submitted_form_data')->where('id', $submission->id)->value('form_data');

    expect($raw)->not->toContain('Encrypted Export Person');

    Livewire::test(DownloadRegistrations::class)
        ->set('year', now()->year)
        ->call('fetchData')
        ->assertSet('data.0.form_data.participants_name', 'Encrypted Export Person')
        ->assertSet('data.0.form_data.email_of_person_signing', 'signer@example.com');
});

function validReferralFormData(): array
{
    return [
        'participants_name' => 'Valid Participant',
        'gender' => 'male',
        'email' => 'participant@example.com',
        'residential_address' => '1 Example Street',
        'guardianship_in_place' => 'no',
        'behaviour_management_plan_in_place' => 'no',
        'other_support' => 'no',
        'ndis_funding' => 'no',
        'agree' => true,
        'initials' => 'AB',
        'name_of_person_signing' => 'Valid Signer',
        'email_of_person_signing' => 'signer@example.com',
    ];
}
