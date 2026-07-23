<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Artisan;
use App\Models\FormDraft;
use App\Models\SubmittedFormData;
use App\Support\ReferralDocument;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('data:prune-sensitive', function () {
    $expiredDraftCutoff = now()->subDays(config('data-retention.drafts.delete_expired_after_days'));
    $submittedFormCutoff = now()->subDays(config('data-retention.submitted_forms.delete_after_days'));

    $deletedDrafts = 0;
    FormDraft::where('expires_at', '<=', $expiredDraftCutoff)->chunkById(100, function ($drafts) use (&$deletedDrafts) {
        foreach ($drafts as $draft) {
            ReferralDocument::delete($draft->form_data[ReferralDocument::PATH_KEY] ?? null);
            $draft->delete();
            $deletedDrafts++;
        }
    });

    $deletedSubmittedForms = 0;
    SubmittedFormData::where('created_at', '<=', $submittedFormCutoff)->chunkById(100, function ($submissions) use (&$deletedSubmittedForms) {
        foreach ($submissions as $submission) {
            ReferralDocument::delete($submission->form_data[ReferralDocument::PATH_KEY] ?? null);
            $submission->delete();
            $deletedSubmittedForms++;
        }
    });

    $this->info("Deleted {$deletedDrafts} expired drafts and {$deletedSubmittedForms} submitted forms past retention.");
})->purpose('Delete expired drafts and submitted forms past retention');

Artisan::command('data:encrypt-sensitive-existing', function () {
    $drafts = 0;
    $submittedForms = 0;

    FormDraft::query()->chunkById(100, function ($records) use (&$drafts) {
        foreach ($records as $record) {
            $record->form_data = $record->form_data;
            $record->save();
            $drafts++;
        }
    });

    SubmittedFormData::query()->chunkById(100, function ($records) use (&$submittedForms) {
        foreach ($records as $record) {
            $record->form_data = $record->form_data;
            $record->save();
            $submittedForms++;
        }
    });

    $this->info("Encrypted {$drafts} drafts and {$submittedForms} submitted form records.");
})->purpose('Encrypt existing sensitive form payloads');

Schedule::command('data:prune-sensitive')->dailyAt('02:00');
