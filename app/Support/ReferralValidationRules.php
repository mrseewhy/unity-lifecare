<?php

namespace App\Support;

class ReferralValidationRules
{
    public static function step(int $step): array
    {
        return match ($step) {
            1 => [
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
            ],
            2 => [
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
            ],
            3 => [
                'behaviour_management_plan_in_place' => 'required|in:yes,no',
                'medical_conditions' => 'nullable|string',
                'behaviour_support_plan_collected' => 'nullable|in:yes,no',
                'behaviour_support_plan_ndis' => 'nullable|in:yes,no',
            ],
            4 => [
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
            ],
            5 => [
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
                'supporting_document' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
                'additional_comments' => 'nullable|string',
            ],
            6 => [
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
            ],
            default => [],
        };
    }

    public static function all(): array
    {
        return array_merge(
            self::step(1),
            self::step(2),
            self::step(3),
            self::step(4),
            self::step(5),
            self::step(6),
        );
    }
}
