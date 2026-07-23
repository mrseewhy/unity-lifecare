<?php

namespace App\Livewire\Noauth;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\FormDraft;

use Illuminate\Support\Str;
use App\Mail\AdminSubmission;
use App\Mail\ClientSubmission;
use Livewire\Attributes\Layout;
use App\Models\SubmittedFormData;
use App\Support\ReferralDocument;
use App\Support\ReferralValidationRules;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Livewire\WithFileUploads;

#[Layout('master', ['title' => ' Unity Lifecare | Visitors Registration '])]
class Referral extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $maxStep = 1;

    //Step 1
    public $participants_name, $DOB, $gender, $email, $home_phone, $mobile_phone, $preferred_name, $religious_requirements, $cultural_requirements, $communication_device, $physical_assistance, $other_considerations, $emergency_phone, $emergency_email, $language_spoken, $residential_address, $postal_address, $interpreter_required;

    //Step 2
    public $guardianship_in_place, $guardian_1_name, $guardian_1_relationship_to_participant, $guardian_1_as_primary_carer, $participant_lives_with_guardian_1,  $guardian_1_residential_address, $guardian_1_postal_address, $guardian_1_as_emergency_contact, $guardian_1_home_phone, $guardian_1_mobile_phone, $guardian_1_email;
    public $guardian_2_name, $guardian_2_relationship_to_participant, $guardian_2_as_primary_carer, $participant_lives_with_guardian_2,   $guardian_2_residential_address, $guardian_2_postal_address, $guardian_2_as_emergency_contact, $guardian_2_home_phone, $guardian_2_mobile_phone, $guardian_2_email;

    //Step 3
    public $behaviour_management_plan_in_place,  $medical_conditions, $behaviour_support_plan_collected, $behaviour_support_plan_ndis;

    //Step 4

    public $other_support;

    public $other_services_provider_1_name,  $other_services_provider_1_address, $other_services_provider_1_phone, $other_services_provider_1_email, $other_services_provider_1_frequency_of_use;
    public $other_services_provider_2_name, $other_services_provider_2_address,  $other_services_provider_2_phone, $other_services_provider_2_email, $other_services_provider_2_frequency_of_use;


    //Step 5
    public $medicare_number, $expiry_date, $reference_number, $membership_number, $private_healthcare_provider,   $doctor_name,  $doctors_phone_number, $doctors_address, $ndis_number, $ndis_start_date, $ndis_end_date, $ndis_funding, $type_ndis_funding, $plan_managed_name, $plan_managed_email,  $plan_managed_phone, $ndis_funding_others_details, $supporting_document, $additional_comments;

    //Step 6
    public  $planned_achievements, $immediate_planned_achievements, $six_months_planned_achievements, $next_year_planned_achievements, $agree, $initials, $name_of_person_signing, $email_of_person_signing,  $relationship_to_the_participant, $date_of_signature, $website;


    public $formData = [];


    public function mount()
    {
        // Load session data if available
        $savedData = Session::get('formData', []);
        $this->date_of_signature = Carbon::now()->toDateString();
        session()->put('referral_form_started_at', now()->timestamp);

        if (!empty($savedData)) {
            $this->formData = array_merge($this->formData, $savedData);
            $this->maxStep = Session::get('maxStep', 1);
            $this->currentStep = Session::get('currentStep', 1);
            // Load Step 1 data if available
            $this->participants_name = $savedData['participants_name'] ?? $this->participants_name;
            $this->DOB = $savedData['DOB'] ?? $this->DOB;
            $this->gender = $savedData['gender'] ?? $this->gender;
            $this->home_phone = $savedData['home_phone'] ?? $this->home_phone;
            $this->mobile_phone = $savedData['mobile_phone'] ?? $this->mobile_phone;
            $this->email = $savedData['email'] ?? $this->email;
            $this->preferred_name = $savedData['preferred_name'] ?? $this->preferred_name;
            $this->religious_requirements = $savedData['religious_requirements'] ?? $this->religious_requirements;
            $this->cultural_requirements = $savedData['cultural_requirements'] ?? $this->cultural_requirements;
            $this->communication_device = $savedData['communication_device'] ?? $this->communication_device;
            $this->physical_assistance = $savedData['physical_assistance'] ?? $this->physical_assistance;
            $this->other_considerations = $savedData['other_considerations'] ?? $this->other_considerations;
            $this->emergency_phone = $savedData['emergency_phone'] ?? $this->emergency_phone;
            $this->emergency_email = $savedData['emergency_email'] ?? $this->emergency_email;
            $this->language_spoken = $savedData['language_spoken'] ?? $this->language_spoken;
            $this->interpreter_required = $savedData['interpreter_required'] ?? $this->interpreter_required;
            $this->residential_address = $savedData['residential_address'] ?? $this->residential_address;
            $this->postal_address = $savedData['postal_address'] ?? $this->postal_address;


            //Step 2
            $this->guardianship_in_place = $savedData['guardianship_in_place'] ?? $this->guardianship_in_place;

            $this->guardian_1_name = $savedData['guardian_1_name'] ?? $this->guardian_1_name;
            $this->guardian_1_as_primary_carer = $savedData['guardian_1_as_primary_carer'] ?? $this->guardian_1_as_primary_carer;
            $this->participant_lives_with_guardian_1 = $savedData['participant_lives_with_guardian_1'] ?? $this->participant_lives_with_guardian_1;
            $this->guardian_1_as_emergency_contact = $savedData['guardian_1_as_emergency_contact'] ?? $this->guardian_1_as_emergency_contact;
            $this->guardian_1_relationship_to_participant = $savedData['guardian_1_relationship_to_participant'] ?? $this->guardian_1_relationship_to_participant;
            $this->guardian_1_residential_address = $savedData['guardian_1_residential_address'] ?? $this->guardian_1_residential_address;
            $this->guardian_1_postal_address = $savedData['guardian_1_postal_address'] ?? $this->guardian_1_postal_address;
            $this->guardian_1_home_phone = $savedData['guardian_1_home_phone'] ?? $this->guardian_1_home_phone;
            $this->guardian_1_mobile_phone = $savedData['guardian_1_mobile_phone'] ?? $this->guardian_1_mobile_phone;
            $this->guardian_1_email = $savedData['guardian_1_email'] ?? $this->guardian_1_email;


            $this->guardian_2_name = $savedData['guardian_2_name'] ?? $this->guardian_2_name;
            $this->guardian_2_as_primary_carer = $savedData['guardian_2_as_primary_carer'] ?? $this->guardian_2_as_primary_carer;
            $this->participant_lives_with_guardian_2 = $savedData['participant_lives_with_guardian_2'] ?? $this->participant_lives_with_guardian_2;
            $this->guardian_2_as_emergency_contact = $savedData['guardian_2_as_emergency_contact'] ?? $this->guardian_2_as_emergency_contact;
            $this->guardian_2_relationship_to_participant = $savedData['guardian_2_relationship_to_participant'] ?? $this->guardian_2_relationship_to_participant;
            $this->guardian_2_residential_address = $savedData['guardian_2_residential_address'] ?? $this->guardian_2_residential_address;
            $this->guardian_2_postal_address = $savedData['guardian_2_postal_address'] ?? $this->guardian_2_postal_address;
            $this->guardian_2_home_phone = $savedData['guardian_2_home_phone'] ?? $this->guardian_2_home_phone;
            $this->guardian_2_mobile_phone = $savedData['guardian_2_mobile_phone'] ?? $this->guardian_2_mobile_phone;
            $this->guardian_2_email = $savedData['guardian_2_email'] ?? $this->guardian_2_email;

            //Step 3
            $this->behaviour_management_plan_in_place = $savedData['behaviour_management_plan_in_place'] ?? $this->behaviour_management_plan_in_place;

            $this->medical_conditions = $savedData['medical_conditions'] ?? $this->medical_conditions;
            $this->behaviour_support_plan_collected = $savedData['behaviour_support_plan_collected'] ?? $this->behaviour_support_plan_collected;
            $this->behaviour_support_plan_ndis = $savedData['behaviour_support_plan_ndis'] ?? $this->behaviour_support_plan_ndis;



            //Step 4
            $this->other_support = $savedData['other_support'] ?? $this->other_support;
            $this->other_services_provider_1_address = $savedData['other_services_provider_1_address'] ?? $this->other_services_provider_1_address;
            $this->other_services_provider_1_name = $savedData['other_services_provider_1_name'] ?? $this->other_services_provider_1_name;
            $this->other_services_provider_1_phone = $savedData['other_services_provider_1_phone'] ?? $this->other_services_provider_1_phone;
            $this->other_services_provider_1_email = $savedData['other_services_provider_1_email'] ?? $this->other_services_provider_1_email;
            $this->other_services_provider_1_frequency_of_use = $savedData['other_services_provider_1_frequency_of_use'] ?? $this->other_services_provider_1_frequency_of_use;

            $this->other_services_provider_2_address = $savedData['other_services_provider_2_address'] ?? $this->other_services_provider_2_address;
            $this->other_services_provider_2_name = $savedData['other_services_provider_2_name'] ?? $this->other_services_provider_2_name;
            $this->other_services_provider_2_phone = $savedData['other_services_provider_2_phone'] ?? $this->other_services_provider_2_phone;
            $this->other_services_provider_2_email = $savedData['other_services_provider_2_email'] ?? $this->other_services_provider_2_email;
            $this->other_services_provider_2_frequency_of_use = $savedData['other_services_provider_2_frequency_of_use'] ?? $this->other_services_provider_2_frequency_of_use;

            //Step 5
            $this->medicare_number = $savedData['medicare_number'] ?? $this->medicare_number;
            $this->expiry_date = $savedData['expiry_date'] ?? $this->expiry_date;
            $this->reference_number = $savedData['reference_number'] ?? $this->reference_number;
            $this->membership_number = $savedData['membership_number'] ?? $this->membership_number;
            $this->private_healthcare_provider = $savedData['private_healthcare_provider'] ?? $this->private_healthcare_provider;
            $this->doctor_name = $savedData['doctor_name'] ?? $this->doctor_name;
            $this->doctors_phone_number = $savedData['doctors_phone_number'] ?? $this->doctors_phone_number;
            $this->doctors_address = $savedData['doctors_address'] ?? $this->doctors_address;
            $this->ndis_number = $savedData['ndis_number'] ?? $this->ndis_number;
            $this->ndis_start_date = $savedData['ndis_start_date'] ?? $this->ndis_start_date;
            $this->ndis_end_date = $savedData['ndis_end_date'] ?? $this->ndis_end_date;

            $this->ndis_funding = $savedData['ndis_funding'] ?? $this->ndis_funding;
            $this->type_ndis_funding = $savedData['type_ndis_funding'] ?? $this->type_ndis_funding;
            $this->plan_managed_name = $savedData['plan_managed_name'] ?? $this->plan_managed_name;
            $this->plan_managed_email = $savedData['plan_managed_email'] ?? $this->plan_managed_email;
            $this->plan_managed_phone = $savedData['plan_managed_phone'] ?? $this->plan_managed_phone;
            $this->ndis_funding_others_details = $savedData['ndis_funding_others_details'] ?? $this->ndis_funding_others_details;
            $this->additional_comments = $savedData['additional_comments'] ?? $this->additional_comments;




            //Step 6
            $this->planned_achievements = $savedData['planned_achievements'] ?? $this->planned_achievements;
            $this->immediate_planned_achievements = $savedData['immediate_planned_achievements'] ?? $this->immediate_planned_achievements;
            $this->six_months_planned_achievements = $savedData['six_months_planned_achievements'] ?? $this->six_months_planned_achievements;
            $this->next_year_planned_achievements = $savedData['next_year_planned_achievements'] ?? $this->next_year_planned_achievements;
            $this->agree = $savedData['agree'] ?? $this->agree;
            $this->initials = $savedData['initials'] ?? $this->initials;
            $this->name_of_person_signing = $savedData['name_of_person_signing'] ?? $this->name_of_person_signing;
            $this->email_of_person_signing = $savedData['email_of_person_signing'] ?? $this->email_of_person_signing;
            $this->relationship_to_the_participant = $savedData['relationship_to_the_participant'] ?? $this->relationship_to_the_participant;
            $this->date_of_signature = $savedData['date_of_signature'] ?? $this->date_of_signature;
        }
    }


    public function nextStep()
    {
        $this->validateStep();
        $this->currentStep++;

        if ($this->currentStep > $this->maxStep) {
            $this->maxStep = $this->currentStep;
            Session::put('maxStep', $this->maxStep);
        }

        Session::put('formData', $this->formData);
        Session::put('currentStep', $this->currentStep);
    }


    public function prevStep()
    {
        $this->currentStep--;
    }


    //Save progress information and give url to user
    public function saveProgress()
    {
        $this->ensureIsHuman('referral_draft_save', 'referral_form_started_at');

        if ($this->currentStep === 1) {

            $currentStepData = [
                'participants_name' => $this->participants_name ?? null,
                'DOB' => $this->DOB ?? null,
                'gender' => $this->gender ?? null,
                'home_phone' => $this->home_phone ?? null,
                'mobile_phone' => $this->mobile_phone ?? null,
                'email' => $this->email ?? null,
                'preferred_name' => $this->preferred_name ?? null,
                'religious_requirements' => $this->religious_requirements ?? null,
                'cultural_requirements' => $this->cultural_requirements ?? null,
                'communication_device' => $this->communication_device ?? null,
                'physical_assistance' => $this->physical_assistance ?? null,
                'other_considerations' => $this->other_considerations ?? null,
                'emergency_phone' => $this->emergency_phone ?? null,
                'emergency_email' => $this->emergency_email ?? null,
                'language_spoken' => $this->language_spoken ?? null,
                'interpreter_required' => $this->interpreter_required ?? null,
                'residential_address' => $this->residential_address ?? null,
                'postal_address' => $this->postal_address ?? null,

            ];

            // Merge with existing form data to keep previous steps' data
            $this->formData = array_merge($currentStepData, $this->formData);
        } elseif ($this->currentStep === 2) {

            $currentStepData = [
                'guardianship_in_place' => $this->guardianship_in_place ?? null,

                'guardian_1_name' => $this->guardian_1_name ?? null,
                'guardian_1_as_primary_carer' => $this->guardian_1_as_primary_carer ?? null,
                'participant_lives_with_guardian_1' => $this->participant_lives_with_guardian_1 ?? null,
                'guardian_1_as_emergency_contact' => $this->guardian_1_as_emergency_contact ?? null,
                'guardian_1_relationship_to_participant' => $this->guardian_1_relationship_to_participant ?? null,
                'guardian_1_residential_address' => $this->guardian_1_residential_address ?? null,
                'guardian_1_postal_address' => $this->guardian_1_postal_address ?? null,
                'guardian_1_home_phone' => $this->guardian_1_home_phone ?? null,
                'guardian_1_mobile_phone' => $this->guardian_1_mobile_phone ?? null,
                'guardian_1_email' => $this->guardian_1_email ?? null,

                'guardian_2_name' => $this->guardian_2_name ?? null,
                'guardian_2_as_primary_carer' => $this->guardian_2_as_primary_carer ?? null,
                'participant_lives_with_guardian_2' => $this->participant_lives_with_guardian_2 ?? null,
                'guardian_2_as_emergency_contact' => $this->guardian_2_as_emergency_contact ?? null,
                'guardian_2_relationship_to_participant' => $this->guardian_2_relationship_to_participant ?? null,
                'guardian_2_residential_address' => $this->guardian_2_residential_address ?? null,
                'guardian_2_postal_address' => $this->guardian_2_postal_address ?? null,
                'guardian_2_home_phone' => $this->guardian_2_home_phone ?? null,
                'guardian_2_mobile_phone' => $this->guardian_2_mobile_phone ?? null,
                'guardian_2_email' => $this->guardian_2_email ?? null,
            ];

            // Merge with existing form data to keep previous steps' data
            $this->formData = array_merge($currentStepData, $this->formData);
        } elseif ($this->currentStep === 3) {
            $currentStepData = [
                'behaviour_management_plan_in_place' => $this->behaviour_management_plan_in_place ?? null,
                'medical_conditions' => $this->medical_conditions ?? null,
                'behaviour_support_plan_collected' => $this->behaviour_support_plan_collected ?? null,
                'behaviour_support_plan_ndis' => $this->behaviour_support_plan_ndis ?? null,
            ];

            // Merge with existing form data to keep previous steps' data
            $this->formData = array_merge($currentStepData, $this->formData);
        } elseif ($this->currentStep === 4) {
            $currentStepData = [
                'other_support' => $this->other_support ?? null,
                'other_services_provider_1_name' => $this->other_services_provider_1_name  ?? null,
                'other_services_provider_1_address' => $this->other_services_provider_1_address  ?? null,
                'other_services_provider_1_phone' => $this->other_services_provider_1_phone  ?? null,
                'other_services_provider_1_email' => $this->other_services_provider_1_email  ?? null,
                'other_services_provider_1_frequency_of_use' => $this->other_services_provider_1_frequency_of_use  ?? null,
                'other_services_provider_2_name' => $this->other_services_provider_2_name  ?? null,
                'other_services_provider_2_address' => $this->other_services_provider_2_address  ?? null,
                'other_services_provider_2_phone' => $this->other_services_provider_2_phone  ?? null,
                'other_services_provider_2_email' => $this->other_services_provider_2_email  ?? null,
                'other_services_provider_2_frequency_of_use' => $this->other_services_provider_2_frequency_of_use  ?? null,
            ];

            // Merge with existing form data to keep previous steps' data
            $this->formData = array_merge($currentStepData, $this->formData);
        } elseif ($this->currentStep === 5) {
            $this->storeSupportingDocumentIfUploaded();

            $currentStepData = [
                'medicare_number' => $this->medicare_number ?? null,
                'expiry_date' => $this->expiry_date ?? null,
                'reference_number' => $this->reference_number ?? null,
                'membership_number' => $this->membership_number ?? null,
                'private_healthcare_provider' => $this->private_healthcare_provider ?? null,
                'doctor_name' => $this->doctor_name ?? null,
                'doctors_phone_number' => $this->doctors_phone_number ?? null,
                'doctors_address' => $this->doctors_address ?? null,
                'ndis_number' => $this->ndis_number ?? null,
                'ndis_start_date' => $this->ndis_start_date ?? null,
                'ndis_end_date' => $this->ndis_end_date ?? null,

                'ndis_funding' => $this->ndis_funding ?? null,
                'type_ndis_funding' => $this->type_ndis_funding ?? null,
                'plan_managed_name' => $this->plan_managed_name ?? null,
                'plan_managed_email' => $this->plan_managed_email ?? null,
                'plan_managed_phone' => $this->plan_managed_phone ?? null,
                'ndis_funding_others_details' => $this->ndis_funding_others_details ?? null,
                ...$this->trustedDocumentMetadata(),
                'additional_comments' => $this->additional_comments ?? null

            ];

            // Merge with existing form data to keep previous steps' data
            $this->formData = array_merge($currentStepData, $this->formData);
        } elseif ($this->currentStep === 6) {

            $currentStepData = [
                'planned_achievements' => $this->planned_achievements ?? null,
                'immediate_planned_achievements' => $this->immediate_planned_achievements ?? null,
                'six_months_planned_achievements' => $this->six_months_planned_achievements ?? null,
                'next_year_planned_achievements' => $this->next_year_planned_achievements ?? null,
                'agree' => $this->agree ?? null,
                'initials' => $this->initials ?? null,
                'name_of_person_signing' => $this->name_of_person_signing ?? null,
                'email_of_person_signing' => $this->email_of_person_signing ?? null,
                'relationship_to_the_participant' => $this->relationship_to_the_participant ?? null,
                'date_of_signature' => $this->date_of_signature ?? null,
            ];

            // Merge with existing form data to keep previous steps' data
            $this->formData = array_merge($currentStepData, $this->formData);
        }

        // Session::put('formData', $this->formData);
        // Session::put('maxStep', $this->maxStep);
        // Session::put('currentStep', $this->currentStep);
        // dd(session()->get('formData'));
        $this->formData = array_merge($this->formDataWithoutDocumentMetadata(), $this->trustedDocumentMetadata());

        $uuid = Str::uuid();
        FormDraft::create([
            'uuid' => $uuid,
            'form_data' => $this->formData,
            'max_step' => $this->maxStep ?? 1,
            'current_step' => $this->currentStep,
            'expires_at' => now()->addDays(30),
        ]);
        // Create and return the URL
        $draftUrl = url("/draft/{$uuid}");

        // Show the user their URL
        session()->flash('draft_url', $draftUrl);
        session()->flash('message', ['type' => 'success', 'text' => 'Message saved!']);

        return $this->redirect('/draft-saved', ['navigate' => true]);
    }


    //Submit form to database
    public function submit()
    {
        $this->ensureIsHuman('referral_form', 'referral_form_started_at');
        $this->validateFinalForm();

        SubmittedFormData::create([
            'form_data' => $this->formData,
        ]);
        $data = [
            'name' => $this->formData['name_of_person_signing'],
            'email' => $this->formData['email_of_person_signing'],
            'appUrl' => config('app.url'),


        ];
        Mail::to($this->email_of_person_signing)->queue(new ClientSubmission($data));
        Mail::to('admin@unitylifecare.com.au')->queue(new AdminSubmission($data));
        $this->dispatch('messageReceived'); // Notify the unread count component
        $this->formData = []; // Clear form data after submission
        Session::forget(['formData', 'maxStep', 'currentStep', 'referral_supporting_document']); // Clear session after submission
        session()->flash('message', ['type' => 'success', 'text' => 'Form Completed, Thank you!']);

        return $this->redirect('/thank-you', navigate: true); // Redirect to a success page
    }

    private function validateFinalForm(): void
    {
        $this->currentStep = 6;

        $validatedData = $this->validate(ReferralValidationRules::all());
        $this->storeSupportingDocumentIfUploaded();
        unset($validatedData['supporting_document']);

        $this->formData = array_merge($this->formDataWithoutDocumentMetadata(), $validatedData, $this->trustedDocumentMetadata());
    }

    public function hasSupportingDocument(): bool
    {
        return ReferralDocument::hasDocument($this->formData);
    }

    public function supportingDocumentName(): ?string
    {
        return ReferralDocument::originalName($this->formData);
    }

    private function storeSupportingDocumentIfUploaded(): void
    {
        if (! $this->supporting_document) {
            return;
        }

        $metadata = ReferralDocument::store($this->supporting_document, $this->trustedDocumentMetadata()[ReferralDocument::PATH_KEY] ?? null);

        session()->put('referral_supporting_document', $metadata);

        $this->formData = array_merge($this->formDataWithoutDocumentMetadata(), $metadata);

        $this->supporting_document = null;
    }

    private function trustedDocumentMetadata(): array
    {
        return array_intersect_key(
            session('referral_supporting_document', []),
            array_flip(ReferralDocument::metadataKeys()),
        );
    }

    private function formDataWithoutDocumentMetadata(): array
    {
        return array_diff_key($this->formData, array_flip(ReferralDocument::metadataKeys()));
    }

    private function ensureIsHuman(string $action, string $startedAtKey): void
    {
        if (filled($this->website)) {
            throw ValidationException::withMessages([
                'form' => 'Unable to submit this form. Please try again.',
            ]);
        }

        $key = $action.':'.request()->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            throw ValidationException::withMessages([
                'form' => 'Too many attempts. Please wait a few minutes and try again.',
            ]);
        }

        RateLimiter::hit($key, 600);

        if (now()->timestamp - (int) session($startedAtKey, 0) < 2) {
            throw ValidationException::withMessages([
                'form' => 'Please wait a moment and try again.',
            ]);
        }
    }


    //Validate the form
    private function validateStep()
    {
        $validatedData = $this->validate(ReferralValidationRules::step((int) $this->currentStep));
        $this->storeSupportingDocumentIfUploaded();
        unset($validatedData['supporting_document']);

        if ($validatedData) {
            $this->formData = array_merge($validatedData, $this->formDataWithoutDocumentMetadata(), $this->trustedDocumentMetadata());
        }
    }
    public function render()
    {
        return view('livewire.noauth.referral');
    }
}
