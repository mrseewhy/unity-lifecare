<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use App\Models\FormDraft;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Layout;
use App\Models\SubmittedFormData;
use Illuminate\Support\Facades\Session;
use App\Mail\AdminSubmission;
use App\Mail\ClientSubmission;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;


#[Layout('master', ['title' => ' Unity Lifecare | Saved Details'])]

class Saveddetails extends Component
{
    // public $formData;

    public $currentStep;
    public $maxStep;
    public $uuid;
    public $draft;
    public $formData;


    // //Step 1
    // public $participants_name, $DOB, $gender, $NDIS_Number, $home_phone, $mobile_phone, $email, $language_spoken, $interpreter_required, $residential_address, $postal_address, $guardianship_in_place, $behaviour_management_plan_in_place;

    // //Step 2
    // public $guardian_1_name, $guardian_1_as_primary_carer, $participant_lives_with_guardian_1, $guardian_1_as_emergency_contact, $guardian_1_relationship_to_participant, $guardian_1_residential_address, $guardian_1_postal_address, $guardian_1_home_phone, $guardian_1_mobile_phone, $guardian_1_email;
    // public $guardian_2_name, $guardian_2_as_primary_carer, $participant_lives_with_guardian_2, $guardian_2_as_emergency_contact, $guardian_2_relationship_to_participant, $guardian_2_residential_address, $guardian_2_postal_address, $guardian_2_home_phone, $guardian_2_mobile_phone, $guardian_2_email;

    // //Step 3
    // public $medical_conditions, $behaviour_support_plan_collected, $behaviour_support_plan_ndis;

    // //Step 4

    // public $other_services_provider_1_address, $other_services_provider_1_name, $other_services_provider_1_phone, $other_services_provider_1_email, $other_services_provider_1_frequency_of_use;
    // public $other_services_provider_2_address, $other_services_provider_2_name, $other_services_provider_2_phone, $other_services_provider_2_email, $other_services_provider_2_frequency_of_use;


    // //Step 5
    // public $reference_number, $medicare_number, $expiry_date, $doctor_name, $membership_number, $doctors_phone_number, $private_healthcare_provider, $doctors_address, $ndis_number, $ndis_date, $ndis_name, $ndis_email, $comment, $preferred_name, $religious_requirements, $cultural_requirements, $communication_device, $physical_assistance, $other_considerations;

    // //Step 6
    // public $captcha, $planned_achievements, $immediate_planned_achievements, $six_months_planned_achievements, $next_year_planned_achievements, $agree, $signature, $name_of_person_signing, $email_of_person_signing,  $relationship_to_the_participant, $date_of_signature;


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
    public $medicare_number, $expiry_date, $reference_number, $membership_number, $private_healthcare_provider,   $doctor_name,  $doctors_phone_number, $doctors_address, $ndis_number, $ndis_start_date, $ndis_end_date, $ndis_funding, $type_ndis_funding, $plan_managed_name, $plan_managed_email,  $plan_managed_phone, $ndis_funding_others_details, $additional_comments;

    //Step 6
    public  $planned_achievements, $immediate_planned_achievements, $six_months_planned_achievements, $next_year_planned_achievements, $agree, $initials, $name_of_person_signing, $email_of_person_signing,  $relationship_to_the_participant, $date_of_signature, $captcha;


    public function mount($uuid)
    {
        $this->formData = FormDraft::where('uuid', $uuid)->first()->form_data;
        $this->currentStep = FormDraft::where('uuid', $uuid)->first()->current_step;
        $this->maxStep = FormDraft::where('uuid', $uuid)->first()->max_step;
        $this->uuid = $uuid;
        $this->draft = FormDraft::where('uuid', $uuid)->first();
        $this->date_of_signature = Carbon::now()->toDateString();
        // dd(($this->formData));

        if (!empty($this->formData)) {

            // Load Step 1 data if available
            // Load Step 1 data if available
            $this->participants_name = $this->formData['participants_name'] ?? $this->participants_name;
            $this->DOB =  $this->formData['DOB'] ?? $this->DOB;
            $this->gender =  $this->formData['gender'] ?? $this->gender;
            $this->home_phone =  $this->formData['home_phone'] ?? $this->home_phone;
            $this->mobile_phone =  $this->formData['mobile_phone'] ?? $this->mobile_phone;
            $this->email =  $this->formData['email'] ?? $this->email;
            $this->preferred_name =  $this->formData['preferred_name'] ?? $this->preferred_name;
            $this->religious_requirements =  $this->formData['religious_requirements'] ?? $this->religious_requirements;
            $this->cultural_requirements =  $this->formData['cultural_requirements'] ?? $this->cultural_requirements;
            $this->communication_device =  $this->formData['communication_device'] ?? $this->communication_device;
            $this->physical_assistance =  $this->formData['physical_assistance'] ?? $this->physical_assistance;
            $this->other_considerations =  $this->formData['other_considerations'] ?? $this->other_considerations;
            $this->emergency_phone =  $this->formData['emergency_phone'] ?? $this->emergency_phone;
            $this->emergency_email =  $this->formData['emergency_email'] ?? $this->emergency_email;
            $this->language_spoken =  $this->formData['language_spoken'] ?? $this->language_spoken;
            $this->interpreter_required =  $this->formData['interpreter_required'] ?? $this->interpreter_required;
            $this->residential_address =  $this->formData['residential_address'] ?? $this->residential_address;
            $this->postal_address =  $this->formData['postal_address'] ?? $this->postal_address;


            //Step 2
            $this->guardianship_in_place =  $this->formData['guardianship_in_place'] ?? $this->guardianship_in_place;

            $this->guardian_1_name =  $this->formData['guardian_1_name'] ?? $this->guardian_1_name;
            $this->guardian_1_as_primary_carer =  $this->formData['guardian_1_as_primary_carer'] ?? $this->guardian_1_as_primary_carer;
            $this->participant_lives_with_guardian_1 =  $this->formData['participant_lives_with_guardian_1'] ?? $this->participant_lives_with_guardian_1;
            $this->guardian_1_as_emergency_contact =  $this->formData['guardian_1_as_emergency_contact'] ?? $this->guardian_1_as_emergency_contact;
            $this->guardian_1_relationship_to_participant =  $this->formData['guardian_1_relationship_to_participant'] ?? $this->guardian_1_relationship_to_participant;
            $this->guardian_1_residential_address =  $this->formData['guardian_1_residential_address'] ?? $this->guardian_1_residential_address;
            $this->guardian_1_postal_address =  $this->formData['guardian_1_postal_address'] ?? $this->guardian_1_postal_address;
            $this->guardian_1_home_phone =  $this->formData['guardian_1_home_phone'] ?? $this->guardian_1_home_phone;
            $this->guardian_1_mobile_phone =  $this->formData['guardian_1_mobile_phone'] ?? $this->guardian_1_mobile_phone;
            $this->guardian_1_email =  $this->formData['guardian_1_email'] ?? $this->guardian_1_email;


            $this->guardian_2_name =  $this->formData['guardian_2_name'] ?? $this->guardian_2_name;
            $this->guardian_2_as_primary_carer =  $this->formData['guardian_2_as_primary_carer'] ?? $this->guardian_2_as_primary_carer;
            $this->participant_lives_with_guardian_2 =  $this->formData['participant_lives_with_guardian_2'] ?? $this->participant_lives_with_guardian_2;
            $this->guardian_2_as_emergency_contact =  $this->formData['guardian_2_as_emergency_contact'] ?? $this->guardian_2_as_emergency_contact;
            $this->guardian_2_relationship_to_participant =  $this->formData['guardian_2_relationship_to_participant'] ?? $this->guardian_2_relationship_to_participant;
            $this->guardian_2_residential_address =  $this->formData['guardian_2_residential_address'] ?? $this->guardian_2_residential_address;
            $this->guardian_2_postal_address =  $this->formData['guardian_2_postal_address'] ?? $this->guardian_2_postal_address;
            $this->guardian_2_home_phone =  $this->formData['guardian_2_home_phone'] ?? $this->guardian_2_home_phone;
            $this->guardian_2_mobile_phone =  $this->formData['guardian_2_mobile_phone'] ?? $this->guardian_2_mobile_phone;
            $this->guardian_2_email =  $this->formData['guardian_2_email'] ?? $this->guardian_2_email;

            //Step 3
            $this->behaviour_management_plan_in_place =  $this->formData['behaviour_management_plan_in_place'] ?? $this->behaviour_management_plan_in_place;

            $this->medical_conditions =  $this->formData['medical_conditions'] ?? $this->medical_conditions;
            $this->behaviour_support_plan_collected =  $this->formData['behaviour_support_plan_collected'] ?? $this->behaviour_support_plan_collected;
            $this->behaviour_support_plan_ndis =  $this->formData['behaviour_support_plan_ndis'] ?? $this->behaviour_support_plan_ndis;



            //Step 4
            $this->other_support = $this->formData['other_support'] ?? $this->other_support;
            $this->other_services_provider_1_address =  $this->formData['other_services_provider_1_address'] ?? $this->other_services_provider_1_address;
            $this->other_services_provider_1_name =  $this->formData['other_services_provider_1_name'] ?? $this->other_services_provider_1_name;
            $this->other_services_provider_1_phone =  $this->formData['other_services_provider_1_phone'] ?? $this->other_services_provider_1_phone;
            $this->other_services_provider_1_email =  $this->formData['other_services_provider_1_email'] ?? $this->other_services_provider_1_email;
            $this->other_services_provider_1_frequency_of_use =  $this->formData['other_services_provider_1_frequency_of_use'] ?? $this->other_services_provider_1_frequency_of_use;

            $this->other_services_provider_2_address =  $this->formData['other_services_provider_2_address'] ?? $this->other_services_provider_2_address;
            $this->other_services_provider_2_name =  $this->formData['other_services_provider_2_name'] ?? $this->other_services_provider_2_name;
            $this->other_services_provider_2_phone =  $this->formData['other_services_provider_2_phone'] ?? $this->other_services_provider_2_phone;
            $this->other_services_provider_2_email =  $this->formData['other_services_provider_2_email'] ?? $this->other_services_provider_2_email;
            $this->other_services_provider_2_frequency_of_use =  $this->formData['other_services_provider_2_frequency_of_use'] ?? $this->other_services_provider_2_frequency_of_use;

            //Step 5
            $this->medicare_number =  $this->formData['medicare_number'] ?? $this->medicare_number;
            $this->expiry_date =  $this->formData['expiry_date'] ?? $this->expiry_date;
            $this->reference_number =  $this->formData['reference_number'] ?? $this->reference_number;
            $this->membership_number =  $this->formData['membership_number'] ?? $this->membership_number;
            $this->private_healthcare_provider =  $this->formData['private_healthcare_provider'] ?? $this->private_healthcare_provider;
            $this->doctor_name =  $this->formData['doctor_name'] ?? $this->doctor_name;
            $this->doctors_phone_number =  $this->formData['doctors_phone_number'] ?? $this->doctors_phone_number;
            $this->doctors_address =  $this->formData['doctors_address'] ?? $this->doctors_address;
            $this->ndis_number =  $this->formData['ndis_number'] ?? $this->ndis_number;
            $this->ndis_start_date =  $this->formData['ndis_start_date'] ?? $this->ndis_start_date;
            $this->ndis_end_date =  $this->formData['ndis_end_date'] ?? $this->ndis_end_date;

            $this->ndis_funding =  $this->formData['ndis_funding'] ?? $this->ndis_funding;
            $this->type_ndis_funding =  $this->formData['type_ndis_funding'] ?? $this->type_ndis_funding;
            $this->plan_managed_name =  $this->formData['plan_managed_name'] ?? $this->plan_managed_name;
            $this->plan_managed_email =  $this->formData['plan_managed_email'] ?? $this->plan_managed_email;
            $this->plan_managed_phone =  $this->formData['plan_managed_phone'] ?? $this->plan_managed_phone;
            $this->ndis_funding_others_details =  $this->formData['ndis_funding_others_details'] ?? $this->ndis_funding_others_details;
            $this->additional_comments =  $this->formData['additional_comments'] ?? $this->additional_comments;




            //Step 6
            $this->planned_achievements =  $this->formData['planned_achievements'] ?? $this->planned_achievements;
            $this->immediate_planned_achievements =  $this->formData['immediate_planned_achievements'] ?? $this->immediate_planned_achievements;
            $this->six_months_planned_achievements =  $this->formData['six_months_planned_achievements'] ?? $this->six_months_planned_achievements;
            $this->next_year_planned_achievements =  $this->formData['next_year_planned_achievements'] ?? $this->next_year_planned_achievements;
            $this->agree =  $this->formData['agree'] ?? $this->agree;
            $this->initials =  $this->formData['initials'] ?? $this->initials;
            $this->name_of_person_signing =  $this->formData['name_of_person_signing'] ?? $this->name_of_person_signing;
            $this->email_of_person_signing =  $this->formData['email_of_person_signing'] ?? $this->email_of_person_signing;
            $this->relationship_to_the_participant =  $this->formData['relationship_to_the_participant'] ?? $this->relationship_to_the_participant;
            $this->date_of_signature =  $this->formData['date_of_signature'] ?? $this->date_of_signature;
        }
    }

    public function prevStep()
    {
        $this->currentStep--;
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
    // private function validateStep()
    // {
    //     if ($this->currentStep === 1) {

    //         $validationRulesForStep1 = [
    //             'participants_name' => 'required|min:2|string',
    //             'DOB' => 'nullable|date|before:today',
    //             'gender' => 'required|string|in:male,female',
    //             'NDIS_Number' => 'nullable|string|max:20',
    //             'home_phone' => 'nullable|string',
    //             'mobile_phone' => 'nullable|string',
    //             'email' => 'required|email',
    //             'language_spoken' => 'nullable|string',
    //             'interpreter_required' => 'nullable|in:yes,no',
    //             'residential_address' => 'required|string',
    //             'postal_address' => 'nullable|string',
    //             'guardianship_in_place' => 'nullable|in:yes,no',
    //             'behaviour_management_plan_in_place' => 'nullable|in:yes,no',

    //         ];

    //         $validatedDataForStep1 = $this->validate($validationRulesForStep1);

    //         if ($validatedDataForStep1) {
    //             $this->formData = array_merge($this->formData, $validatedDataForStep1);
    //         }
    //     } elseif ($this->currentStep === 2) {


    //         $validationRulesForStep2 = [
    //             'guardian_1_name' => 'required|string|min:2',
    //             'guardian_1_as_primary_carer' => 'nullable|in:yes,no',
    //             'participant_lives_with_guardian_1' => 'nullable|in:yes,no',
    //             'guardian_1_as_emergency_contact' => 'nullable|in:yes,no',
    //             'guardian_1_relationship_to_participant' => 'nullable|string|min:2|in:parent,guardian,caregiver,other',
    //             'guardian_1_residential_address' => 'required|string|min:2,',
    //             'guardian_1_postal_address' => 'nullable|string|min:2,',
    //             'guardian_1_home_phone' => 'nullable|string',
    //             'guardian_1_mobile_phone' => 'nullable|string',
    //             'guardian_1_email' => 'nullable|email',

    //             'guardian_2_name' => 'nullable|string|min:2',
    //             'guardian_2_as_primary_carer' => 'nullable|in:yes,no',
    //             'participant_lives_with_guardian_2' => 'nullable|in:yes,no',
    //             'guardian_2_as_emergency_contact' => 'nullable|in:yes,no',
    //             'guardian_2_relationship_to_participant' => 'nullable|string|min:2|in:parent,guardian,caregiver,other',
    //             'guardian_2_residential_address' => 'nullable|string|min:2,',
    //             'guardian_2_postal_address' => 'nullable|string|min:2,',
    //             'guardian_2_home_phone' => 'nullable|string',
    //             'guardian_2_mobile_phone' => 'nullable|string',
    //             'guardian_2_email' => 'nullable|email',

    //         ];


    //         $validatedDataForStep2 = $this->validate($validationRulesForStep2);

    //         if ($validatedDataForStep2) {
    //             $this->formData = array_merge($this->formData, $validatedDataForStep2);
    //         }
    //     } elseif ($this->currentStep === 3) {
    //         $validationRulesForStep3 = [
    //             'medical_conditions' => 'nullable|string',
    //             'behaviour_support_plan_collected' => 'nullable|in:yes,no',
    //             'behaviour_support_plan_ndis' => 'nullable|in:yes,no',

    //         ];

    //         $validatedDataForStep3 = $this->validate($validationRulesForStep3);

    //         if ($validatedDataForStep3) {
    //             $this->formData = array_merge($this->formData, $validatedDataForStep3);
    //         }
    //     } elseif ($this->currentStep === 4) {
    //         $validationRulesForStep4 = [
    //             'other_services_provider_1_name' => 'nullable|string',
    //             'other_services_provider_1_address' => 'nullable|string',
    //             'other_services_provider_1_phone' => 'nullable|string',
    //             'other_services_provider_1_email' => 'nullable|email',
    //             'other_services_provider_1_frequency_of_use' => 'nullable|string',
    //             'other_services_provider_2_name' => 'nullable|string',
    //             'other_services_provider_2_address' => 'nullable|string',
    //             'other_services_provider_2_phone' => 'nullable|string',
    //             'other_services_provider_2_email' => 'nullable|email',
    //             'other_services_provider_2_frequency_of_use' => 'nullable|string',

    //         ];
    //         $validatedDataForStep4 = $this->validate($validationRulesForStep4);

    //         if ($validatedDataForStep4) {
    //             $this->formData = array_merge($this->formData, $validatedDataForStep4);
    //         }
    //     } elseif ($this->currentStep === 5) {

    //         $validationRulesForStep5 = [
    //             'medicare_number' => 'nullable|string',
    //             'expiry_date' => 'nullable|date',
    //             'reference_number' => 'nullable|string',
    //             'membership_number' => 'nullable|string',
    //             'private_healthcare_provider' => 'nullable|string',
    //             'doctor_name' => 'nullable|string',
    //             'doctors_phone_number' => 'nullable|string',
    //             'doctors_address' => 'nullable|string',
    //             'ndis_number' => 'nullable|string',
    //             'ndis_date' => 'nullable|date',
    //             'ndis_name' => 'nullable|string',
    //             'ndis_email' => 'nullable|email',
    //             'comment' => 'nullable|string',
    //             'preferred_name' => 'nullable|string',
    //             'religious_requirements' => 'nullable|string',
    //             'cultural_requirements' => 'nullable|string',
    //             'communication_device' => 'nullable|string',
    //             'physical_assistance' => 'nullable|string',
    //             'other_considerations' => 'nullable|string',
    //         ];
    //         $validatedDataForStep5 = $this->validate($validationRulesForStep5);
    //         if ($validatedDataForStep5) {
    //             $this->formData = array_merge($this->formData, $validatedDataForStep5);
    //         }
    //     } elseif ($this->currentStep === 6) {

    //         $validationRulesForStep6 = [
    //             'planned_achievements' => 'nullable|string',
    //             'immediate_planned_achievements' => 'nullable|string',
    //             'six_months_planned_achievements' => 'nullable|string',
    //             'next_year_planned_achievements' => 'nullable|string',
    //             'agree' => 'accepted',
    //             'signature' => 'required|string|min:3',
    //             'name_of_person_signing' => 'required|string|min:3',
    //             'email_of_person_signing' => 'required|email',
    //             'relationship_to_the_participant' => 'nullable|string',
    //             'date_of_signature' => 'nullable|date',
    //             'captcha' => 'required|turnstile '
    //         ];
    //         $validatedDataForStep6 = $this->validate($validationRulesForStep6);
    //         if ($validatedDataForStep6) {
    //             $this->formData = array_merge($this->formData, $validatedDataForStep6);
    //         }
    //     }
    // }


    private function validateStep()
    {
        if ($this->currentStep === 1) {

            $validationRulesForStep1 = [
                'participants_name' => 'required|min:2|string',
                'DOB' => 'nullable|date|before:today',
                'gender' => 'required|string|in:male,female,others',
                'email' => 'required|email',
                'home_phone' => 'nullable|string',
                'mobile_phone' => 'nullable|string',
                'preferred_name' => 'nullable|string',
                'religious_requirements' => 'nullable|string',
                'cultural_requirements' => 'nullable|string',
                'communication_device' => 'nullable|string',
                'physical_assistance' => 'nullable|string',
                'other_considerations' => 'nullable|string',
                'emergency_email' => 'nullable|email',
                'emergency_phone' => 'nullable|string',
                'language_spoken' => 'nullable|string',
                'interpreter_required' => 'nullable|in:yes,no',
                'residential_address' => 'required|string',
                'postal_address' => 'nullable|string',



            ];

            $validatedDataForStep1 = $this->validate($validationRulesForStep1);

            if ($validatedDataForStep1) {
                $this->formData = array_merge($validatedDataForStep1, $this->formData);
            }
        } elseif ($this->currentStep === 2) {


            $validationRulesForStep2 = [
                'guardianship_in_place' => 'required|in:yes,no',

                'guardian_1_name' => 'nullable|string|min:2',
                'guardian_1_relationship_to_participant' => 'nullable|string|min:2|in:parent,guardian,caregiver,other',
                'guardian_1_as_primary_carer' => 'nullable|in:yes,no',
                'participant_lives_with_guardian_1' => 'nullable|in:yes,no',
                'guardian_1_as_emergency_contact' => 'nullable|in:yes,no',
                'guardian_1_residential_address' => 'nullable|string|min:2,',
                'guardian_1_postal_address' => 'nullable|string|min:2,',
                'guardian_1_home_phone' => 'nullable|string',
                'guardian_1_mobile_phone' => 'nullable|string',
                'guardian_1_email' => 'nullable|email',

                'guardian_2_name' => 'nullable|string|min:2',
                'guardian_2_as_primary_carer' => 'nullable|in:yes,no',
                'participant_lives_with_guardian_2' => 'nullable|in:yes,no',
                'guardian_2_as_emergency_contact' => 'nullable|in:yes,no',
                'guardian_2_relationship_to_participant' => 'nullable|string|min:2|in:parent,guardian,caregiver,other',
                'guardian_2_residential_address' => 'nullable|string|min:2,',
                'guardian_2_postal_address' => 'nullable|string|min:2,',
                'guardian_2_home_phone' => 'nullable|string',
                'guardian_2_mobile_phone' => 'nullable|string',
                'guardian_2_email' => 'nullable|email',

            ];


            $validatedDataForStep2 = $this->validate($validationRulesForStep2);

            if ($validatedDataForStep2) {
                $this->formData = array_merge($validatedDataForStep2, $this->formData);
            }
        } elseif ($this->currentStep === 3) {
            $validationRulesForStep3 = [
                'behaviour_management_plan_in_place' => 'required|in:yes,no',
                'medical_conditions' => 'nullable|string',
                'behaviour_support_plan_collected' => 'nullable|in:yes,no',
                'behaviour_support_plan_ndis' => 'nullable|in:yes,no',

            ];

            $validatedDataForStep3 = $this->validate($validationRulesForStep3);

            if ($validatedDataForStep3) {
                $this->formData = array_merge($validatedDataForStep3, $this->formData);
            }
        } elseif ($this->currentStep === 4) {
            $validationRulesForStep4 = [
                'other_support' => 'required|in:yes,no',

                'other_services_provider_1_name' => 'nullable|string',
                'other_services_provider_1_address' => 'nullable|string',
                'other_services_provider_1_phone' => 'nullable|string',
                'other_services_provider_1_email' => 'nullable|email',
                'other_services_provider_1_frequency_of_use' => 'nullable|string',

                'other_services_provider_2_name' => 'nullable|string',
                'other_services_provider_2_address' => 'nullable|string',
                'other_services_provider_2_phone' => 'nullable|string',
                'other_services_provider_2_email' => 'nullable|email',
                'other_services_provider_2_frequency_of_use' => 'nullable|string',

            ];
            $validatedDataForStep4 = $this->validate($validationRulesForStep4);

            if ($validatedDataForStep4) {
                $this->formData = array_merge($validatedDataForStep4, $this->formData);
            }
        } elseif ($this->currentStep === 5) {

            $validationRulesForStep5 = [
                'medicare_number' => 'nullable|string',
                'expiry_date' => 'nullable|date',
                'reference_number' => 'nullable|string',
                'membership_number' => 'nullable|string',
                'private_healthcare_provider' => 'nullable|string',
                'doctor_name' => 'nullable|string',
                'doctors_phone_number' => 'nullable|string',
                'doctors_address' => 'nullable|string',
                'ndis_number' => 'nullable|string',
                'ndis_end_date' => 'nullable|date',
                'ndis_start_date' => 'nullable|date',

                'ndis_funding' => 'required|in:yes,no',
                'type_ndis_funding' => 'required_if:ndis_funding,yes|nullable|in:planned_managed,ndis_managed,self_managed,others',
                'plan_managed_name' => 'nullable|string',
                'plan_managed_email' => 'nullable|email',
                'plan_managed_phone' => 'nullable|string',
                'ndis_funding_others_details' => 'nullable|string',
                'additional_comments' => 'nullable|string'


            ];
            $validatedDataForStep5 = $this->validate($validationRulesForStep5);
            if ($validatedDataForStep5) {
                $this->formData = array_merge($validatedDataForStep5, $this->formData);
            }
        } elseif ($this->currentStep === 6) {

            $validationRulesForStep6 = [
                'planned_achievements' => 'nullable|string',
                'immediate_planned_achievements' => 'nullable|string',
                'six_months_planned_achievements' => 'nullable|string',
                'next_year_planned_achievements' => 'nullable|string',
                'agree' => 'accepted',
                'initials' => 'required|string|min:1',
                'name_of_person_signing' => 'required|string|min:3',
                'email_of_person_signing' => 'required|email',
                'relationship_to_the_participant' => 'nullable|string',
                'date_of_signature' => 'nullable|date',
                'captcha' => 'nullable|turnstile '
            ];
            $validatedDataForStep6 = $this->validate($validationRulesForStep6);
            if ($validatedDataForStep6) {
                $this->formData = array_merge($validatedDataForStep6, $this->formData);
            }
        }
    }


    public function saveProgress()
    {
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
            $this->formData = array_merge($this->formData, $currentStepData);
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
            $this->formData = array_merge($this->formData, $currentStepData);
        } elseif ($this->currentStep === 3) {
            $currentStepData = [
                'behaviour_management_plan_in_place' => $this->behaviour_management_plan_in_place ?? null,
                'medical_conditions' => $this->medical_conditions ?? null,
                'behaviour_support_plan_collected' => $this->behaviour_support_plan_collected ?? null,
                'behaviour_support_plan_ndis' => $this->behaviour_support_plan_ndis ?? null,
            ];

            // Merge with existing form data to keep previous steps' data
            $this->formData = array_merge($this->formData, $currentStepData);
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
            $this->formData = array_merge($this->formData, $currentStepData);
        } elseif ($this->currentStep === 5) {
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
                'additional_comments' => $this->additional_comments ?? null

            ];

            // Merge with existing form data to keep previous steps' data
            $this->formData = array_merge($this->formData, $currentStepData);
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
            $this->formData = array_merge($this->formData, $currentStepData);
        }

        // Session::put('formData', $this->formData);
        // Session::put('maxStep', $this->maxStep);
        // Session::put('currentStep', $this->currentStep);
        // dd(session()->get('formData'));
        $this->draft->form_data = $this->formData;
        $this->draft->max_step = $this->maxStep;
        $this->draft->current_step = $this->currentStep;
        $this->draft->save();
        // Create and return the URL
        $draftUrl = url("/draft/{$this->uuid}");

        // Show the user their URL
        session()->flash('draft_url', $draftUrl);
        session()->flash('message', ['type' => 'success', 'text' => 'Form data has been saved!']);

        return $this->redirect('/draft-saved', ['navigate' => true]);
    }
    //Submit form to database
    public function submit()
    {
        $this->validateStep();

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
        Session::forget(['formData', 'maxStep', 'currentStep']); // Clear session after submission
        session()->flash('message', ['type' => 'success', 'text' => 'Form Completed, Thank you!']);

        return $this->redirect('/thank-you', navigate: true); // Redirect to a success page
    }

    public function render()
    {
        return view('livewire.noauth.saveddetails');
    }
}
