<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\SubmittedFormData;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DownloadRegistrations extends Component
{
    public $month;
    public $year;
    public $data = [];

    // List of months for the dropdown
    public $months = [
        1 => 'January',
        2 => 'February',
        3 => 'March',
        4 => 'April',
        5 => 'May',
        6 => 'June',
        7 => 'July',
        8 => 'August',
        9 => 'September',
        10 => 'October',
        11 => 'November',
        12 => 'December'
    ];

    // List of years for the dropdown
    public $years;

    public function mount()
    {
        // Get the current year
        $currentYear = date('Y');

        // Generate a range of years: 3 years before and 3 years after the current year
        $this->years = range($currentYear - 3, $currentYear + 3);
    }

    public function fetchData()
    {
        // Validate inputs
        $this->validate([
            'month' => 'nullable|numeric|between:1,12', // Make month optional
            'year' => 'required|numeric|min:' . min($this->years) . '|max:' . max($this->years),
        ]);

        // Use the model so encrypted form_data is decrypted by its cast.
        $query = SubmittedFormData::query()
            ->whereYear('created_at', $this->year);

        // Add month filter if a month is selected
        if ($this->month) {
            $query->whereMonth('created_at', $this->month);
        }

        // Fetch the data and keep form_data as the decrypted array from the model cast.
        $this->data = $query->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'contacted' => $item->contacted,
                'is_read' => $item->is_read,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
                'form_data' => $item->form_data,
            ];
        })->toArray();


        if (empty($this->data)) {
            session()->flash('message', ['type' => 'error', 'text' => "No Data Available"]);
            return $this->redirect('/dashboard/visitors-registration/new', navigate: true);
        }
    }

    public function downloadCsv()
    {
        if (empty($this->data)) {
            session()->flash('message', ['type' => 'error', 'text' => "No Data Available"]);
            return $this->redirect('/dashboard/visitors-registration/new', navigate: true);
        }

        // Generate CSV file name based on selection
        $fileName = $this->month
            ? "data-{$this->month}-{$this->year}.csv" // If month is selected
            : "data-{$this->year}.csv"; // If only year is selected

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename={$fileName}",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        ];
        $formDataHeadersMap = [
            // Step 1
            'participants_name' => 'Participant’s Name',
            'DOB' => 'Date of Birth',
            'gender' => 'Gender',
            'email' => 'Email',
            'home_phone' => 'Home Phone Number',
            'mobile_phone' => 'Mobile Phone Number',
            'preferred_name' => 'Preferred Name',
            'religious_requirements' => 'Religious Requirements',
            'cultural_requirements' => 'Cultural Requirements',
            'communication_device' => 'Do you use any communication device?',
            'physical_assistance' => 'Do you require physical assistance?',
            'other_considerations' => 'Other considerations we should be aware of?',
            'emergency_phone' => 'Emergency Contact Phone Number',
            'emergency_email' => 'Emergency Contact Email Address',
            'language_spoken' => 'Language(s) Spoken at Home',
            'residential_address' => 'Residential Address',
            'postal_address' => 'Postal Address (if different from above)',
            'interpreter_required' => 'Is an interpreter required?',

            // Step 2
            'guardianship_in_place' => 'Is there a Guardianship in place?',
            'guardian_1_name' => 'Guardian 1 - Full Name',
            'guardian_1_relationship_to_participant' => 'Guardian 1 - Relationship to the Participant',
            'guardian_1_as_primary_carer' => 'Is Guardian 1 the Primary Carer?',
            'participant_lives_with_guardian_1' => 'Does the Participant live with Guardian 1?',
            'guardian_1_residential_address' => 'Guardian 1 - Residential Address',
            'guardian_1_postal_address' => 'Guardian 1 - Postal Address',
            'guardian_1_as_emergency_contact' => 'Is Guardian 1 an Emergency Contact?',
            'guardian_1_home_phone' => 'Guardian 1 - Home Phone Number',
            'guardian_1_mobile_phone' => 'Guardian 1 - Mobile Phone Number',
            'guardian_1_email' => 'Guardian 1 - Email',
            'guardian_2_name' => 'Guardian 2 - Full Name',
            'guardian_2_relationship_to_participant' => 'Guardian 2 - Relationship to the Participant',
            'guardian_2_as_primary_carer' => 'Is Guardian 2 the Primary Carer?',
            'participant_lives_with_guardian_2' => 'Does the Participant live with Guardian 2?',
            'guardian_2_residential_address' => 'Guardian 2 - Residential Address',
            'guardian_2_postal_address' => 'Guardian 2 - Postal Address',
            'guardian_2_as_emergency_contact' => 'Is Guardian 2 an Emergency Contact?',
            'guardian_2_home_phone' => 'Guardian 2 - Home Phone Number',
            'guardian_2_mobile_phone' => 'Guardian 2 - Mobile Phone Number',
            'guardian_2_email' => 'Guardian 2 - Email',

            // Step 3
            'behaviour_management_plan_in_place' => 'Is there a Behaviour Management Plan in place?',
            'medical_conditions' => 'Please list any medical conditions or allergies',
            'behaviour_support_plan_collected' => 'Has a copy of the Behaviour Support Plan been collected?',
            'behaviour_support_plan_ndis' => 'Has the Behaviour Support Plan been lodged with the NDIS?',

            // Step 4
            'other_support' => 'Do you have any other support provider',

            'other_services_provider_1_name' => 'Other Services Provider 1 - Name',
            'other_services_provider_1_address' => 'Other Services Provider 1 - Address',
            'other_services_provider_1_phone' => 'Other Services Provider 1 - Phone Number',
            'other_services_provider_1_email' => 'Other Services Provider 1 - Email',
            'other_services_provider_1_frequency_of_use' => 'Other Services Provider 1 - Frequency of Use',

            'other_services_provider_2_name' => 'Other Services Provider 2 - Name',
            'other_services_provider_2_address' => 'Other Services Provider 2 - Address',
            'other_services_provider_2_phone' => 'Other Services Provider 2 - Phone Number',
            'other_services_provider_2_email' => 'Other Services Provider 2 - Email',
            'other_services_provider_2_frequency_of_use' => 'Other Services Provider 2 - Frequency of Use',

            // Step 5
            'medicare_number' => 'Medicare Number',
            'expiry_date' => 'Medicare Expiry Date',
            'reference_number' => 'Reference Number',
            'membership_number' => 'Private Health Membership Number',
            'private_healthcare_provider' => 'Private Healthcare Provider',
            'doctor_name' => 'Doctor’s Name',
            'doctors_phone_number' => 'Doctor’s Phone Number',
            'doctors_address' => 'Doctor’s Address',
            'ndis_number' => 'NDIS Number',
            'ndis_start_date' => 'NDIS Plan Start Date',
            'ndis_end_date' => 'NDIS Plan End Date',
            'ndis_funding' => 'NDIS Funding Type',
            'type_ndis_funding' => 'Type of NDIS Funding',
            'plan_managed_name' => 'Plan Manager Name',
            'plan_managed_email' => 'Plan Manager Email',
            'plan_managed_phone' => 'Plan Manager Phone Number',
            'ndis_funding_others_details' => 'Other NDIS Funding Details',
            'additional_comments' => 'Additional Comments',

            // Step 6
            'planned_achievements' => 'Planned Achievements',
            'immediate_planned_achievements' => 'Immediate Planned Achievements',
            'six_months_planned_achievements' => 'Six Months Planned Achievements',
            'next_year_planned_achievements' => 'Next Year Planned Achievements',
            'agree' => 'I Agree to the Terms',
            'initials' => 'Initials',
            'name_of_person_signing' => 'Name of Person Signing',
            'email_of_person_signing' => 'Email of Person Signing',
            'relationship_to_the_participant' => 'Relationship to the Participant',
            'date_of_signature' => 'Date of Signature',
        ];


        $callback = function () use ($formDataHeadersMap) {
            $file = fopen('php://output', 'w');

            // Base CSV headers
            $csvHeaders = ['ID', 'Contacted', 'Read Status', 'Created At', 'Updated At'];

            // Add ordered headers from formDataHeadersMap
            foreach ($formDataHeadersMap as $key => $label) {
                $csvHeaders[] = $label;
            }

            // Write the headers row
            fputcsv($file, $csvHeaders);

            // Add data rows
            foreach ($this->data as $row) {
                $rowData = [
                    $row['id'],
                    $row['contacted'],
                    $row['is_read'],
                    $row['created_at'],
                    $row['updated_at'],
                ];

                // Loop through formDataHeadersMap to get values in the correct order
                foreach ($formDataHeadersMap as $key => $label) {
                    $rowData[] = $row['form_data'][$key] ?? ''; // default to empty string if not present
                }

                fputcsv($file, array_map(fn ($value) => $this->escapeCsvValue($value), $rowData));
            }

            fclose($file);
        };

        return new StreamedResponse($callback, 200, $headers);
    }

    public function render()
    {
        return view('livewire.auth.download-registrations');
    }

    private function escapeCsvValue(mixed $value): mixed
    {
        if (! is_string($value)) {
            return $value;
        }

        $trimmed = ltrim($value);

        if ($trimmed !== '' && in_array($trimmed[0], ['=', '+', '-', '@'], true)) {
            return "'".$value;
        }

        return $value;
    }
}
