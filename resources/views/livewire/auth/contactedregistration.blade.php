<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="w-full sm:max-w-6xl sm:p-8 font-body">
        <h2
            class="text-2xl sm:text-3xl font-head font-bold bg-gradient-to-r from-purple-600 to-purple-800 bg-clip-text text-transparent mb-6">
            All Registration
        </h2>

        <div>
            @if (!empty($allregistrations) && $allregistrations->count())
                @livewire('auth.download-registrations')

                @foreach ($allregistrations as $reg)
                    <div class="relative bg-purple-950 px-8 text-white py-6 rounded-xl text-sm font-body mb-8 mt-4">
                        <!-- Overlay -->
                        @if (!$reg->is_read)
                            <div wire:click='makeRead({{ $reg->id }})'
                                class="absolute inset-0 bg-black/50 backdrop-blur-md flex items-center justify-center text-2xl font-bold text-white">
                                UNREAD
                            </div>
                        @endif
                        <div class="flex items-center space-x-2 py-4">
                            <span>Have you contacted this person?</span>
                            @if ($reg->contacted)
                                <span class="text-green-500 font-semibold text-xl">Yes</span>
                            @else
                                <button class="px-3 py-1 bg-purple-200 text-purple-900 rounded hover:bg-purple-100"
                                    wire:click="contact({{ $reg->id }})">
                                    Contact Now
                                </button>
                            @endif
                        </div>

                        <div x-data="{ openStep: 1 }" class="space-y-4">
                            <!-- Step 1 -->
                            <div class="border border-white rounded-lg">
                                <button @click="openStep = openStep === 1 ? null : 1"
                                    class="w-full text-left px-4 py-2 bg-purple-800 hover:bg-purple-700 rounded-lg">
                                    Step 1
                                </button>
                                <div x-show="openStep === 1" class="p-4">
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-4 font-medium capitalize">
                                        <p>Participant's name: <br>{{ $reg->form_data['participants_name'] ?? 'N/A' }}
                                        </p>
                                        <p>Date of Birth:<br> {{ $reg->form_data['DOB'] ?? 'N/A' }}</p>
                                        <p>Gender: <br>{{ $reg->form_data['gender'] ?? 'N/A' }}</p>
                                        <p>Home Phone: <br>{{ $reg->form_data['home_phone'] ?? 'N/A' }}</p>
                                        <p>Mobile Phone: <br>{{ $reg->form_data['mobile_phone'] ?? 'N/A' }}</p>
                                        <p>Email: <br>{{ $reg->form_data['email'] ?? 'N/A' }}</p>
                                        <p>Language Spoken: <br>{{ $reg->form_data['language_spoken'] ?? 'N/A' }}</p>
                                        <p>Interpreter Required:
                                            <br>{{ $reg->form_data['interpreter_required'] ?? 'N/A' }}
                                        </p>
                                        <p>Residential Address:
                                            <br>{{ $reg->form_data['residential_address'] ?? 'N/A' }}
                                        </p>
                                        <p>Postal Address:
                                            <br>{{ $reg->form_data['postal_address'] ?? 'Same as Residential' }}
                                        </p>

                                        <p>Emergency Phone:
                                            <br>{{ $reg->form_data['emergency_phone'] ?? 'N/A' }}
                                        </p>
                                        <p>Emergency Email:
                                            <br>{{ $reg->form_data['emergency_email'] ?? 'N/A' }}
                                        </p>
                                        <p>Preferred name:<br>{{ $reg->form_data['preferred_name'] ?? 'N/A' }}</p>
                                        <p>Religious
                                            Requirements:<br>{{ $reg->form_data['religious_requirements'] ?? 'N/A' }}
                                        </p>
                                        <p>Cultural
                                            Requirements:<br>{{ $reg->form_data['cultural_requirements'] ?? 'N/A' }}
                                        </p>
                                        <p>Communication
                                            device:<br>{{ $reg->form_data['communication_device'] ?? 'N/A' }}</p>
                                        <p>Physical
                                            Assistance:<br>{{ $reg->form_data['physical_assistance'] ?? 'N/A' }}</p>
                                        <p>Other
                                            Considerations:<br>{{ $reg->form_data['other_considerations'] ?? 'N/A' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="border border-white rounded-lg">
                                <button @click="openStep = openStep === 2 ? null : 2"
                                    class="w-full text-left px-4 py-2 bg-purple-800 hover:bg-purple-700 rounded-lg">
                                    Step 2
                                </button>
                                <div x-show="openStep === 2" class="p-4">
                                    <p class="mb-6">Is there a Guardianship:
                                        {{ $reg->form_data['guardianship_in_place'] ?? 'N/A' }}
                                    </p>
                                    <p class="font-bold mb-2">Guardian 1</p>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-4 font-medium capitalize">
                                        <p>Name: <br>{{ $reg->form_data['guardian_1_name'] ?? 'N/A' }}</p>
                                        <p>Primary Health
                                            Giver:<br>{{ $reg->form_data['guardian_1_as_primary_carer'] ?? 'N/A' }}</p>
                                        <p>Lives with
                                            Participant:<br>{{ $reg->form_data['participant_lives_with_guardian_1'] ?? 'N/A' }}
                                        </p>
                                        <p>Emergency
                                            Contact:<br>{{ $reg->form_data['guardian_1_as_emergency_contact'] ?? 'N/A' }}
                                        </p>
                                        <p>Relationship to Participant:
                                            <br>{{ $reg->form_data['guardian_1_relationship_to_participant'] ?? 'N/A' }}
                                        </p>
                                        <p>Residential
                                            Address:<br>{{ $reg->form_data['guardian_1_residential_address'] ?? 'N/A' }}
                                        </p>
                                        <p>Postal
                                            Address:<br>{{ $reg->form_data['guardian_1_postal_address'] ?? 'N/A' }}</p>
                                        <p>Home Phone:<br>{{ $reg->form_data['guardian_1_home_phone'] ?? 'N/A' }}</p>
                                        <p>Mobile Phone:<br>{{ $reg->form_data['guardian_1_mobile_phone'] ?? 'N/A' }}
                                        </p>
                                        <p>Email:<br>{{ $reg->form_data['guardian_1_email'] ?? 'N/A' }}</p>
                                    </div>
                                    <p class="font-bold mb-2 mt-6">Guardian 2</p>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-4 font-medium capitalize">
                                        <p>Name: <br>{{ $reg->form_data['guardian_2_name'] ?? 'N/A' }}</p>
                                        <p>Primary Health
                                            Giver:<br>{{ $reg->form_data['guardian_2_as_primary_carer'] ?? 'N/A' }}</p>
                                        <p>Lives with
                                            Participant:<br>{{ $reg->form_data['participant_lives_with_guardian_2'] ?? 'N/A' }}
                                        </p>
                                        <p>Emergency
                                            Contact:<br>{{ $reg->form_data['guardian_2_as_emergency_contact'] ?? 'N/A' }}
                                        </p>
                                        <p>Relationship to Participant:
                                            <br>{{ $reg->form_data['guardian_2_relationship_to_participant'] ?? 'N/A' }}
                                        </p>
                                        <p>Residential
                                            Address:<br>{{ $reg->form_data['guardian_2_residential_address'] ?? 'N/A' }}
                                        </p>
                                        <p>Postal
                                            Address:<br>{{ $reg->form_data['guardian_2_postal_address'] ?? 'N/A' }}</p>
                                        <p>Home Phone:<br>{{ $reg->form_data['guardian_2_home_phone'] ?? 'N/A' }}</p>
                                        <p>Mobile Phone:<br>{{ $reg->form_data['guardian_2_mobile_phone'] ?? 'N/A' }}
                                        </p>
                                        <p>Email:<br>{{ $reg->form_data['guardian_2_email'] ?? 'N/A' }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="border border-white rounded-lg">
                                <button @click="openStep = openStep === 3 ? null : 3"
                                    class="w-full text-left px-4 py-2 bg-purple-800 hover:bg-purple-700 rounded-lg">
                                    Step 3
                                </button>
                                <div x-show="openStep === 3" class="p-4">
                                    <p class="mb-6">Behaviour Management Plan in place:
                                        {{ $reg->form_data['behaviour_management_plan_in_place'] ?? 'N/A' }}
                                    </p>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-4 font-medium capitalize">
                                        <p class="col-span-4">Disability / Medical Conditions including any diagnosis:
                                            <br>{{ $reg->form_data['medical_conditions'] ?? 'N/A' }}
                                        </p>
                                        <p class="col-span-2">Behaviour Support Plan documents collected for
                                            authorisation:
                                            <br>{{ $reg->form_data['behaviour_support_plan_collected'] ?? 'N/A' }}
                                        </p>
                                        <p class="col-span-2">Behaviour Support Plan available on NDIS portal:
                                            <br>{{ $reg->form_data['behaviour_support_plan_ndis'] ?? 'N/A' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="border border-white rounded-lg">
                                <button @click="openStep = openStep === 4 ? null : 4"
                                    class="w-full text-left px-4 py-2 bg-purple-800 hover:bg-purple-700 rounded-lg">
                                    Step 4
                                </button>
                                <div x-show="openStep === 4" class="p-4">
                                    <p class="mb-6">Are there other support networks/services :
                                        {{ $reg->form_data['other_support'] ?? 'N/A' }}
                                    </p>
                                    <p class="font-bold mb-2">Service provider 1</p>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-4 font-medium capitalize">
                                        <p>Name:
                                            <br>{{ $reg->form_data['other_services_provider_1_address'] ?? 'N/A' }}
                                        </p>
                                        <p>Address:<br>{{ $reg->form_data['other_services_provider_1_name'] ?? 'N/A' }}
                                        </p>
                                        <p>Phone:<br>{{ $reg->form_data['other_services_provider_1_phone'] ?? 'N/A' }}
                                        </p>
                                        <p>Email:<br>{{ $reg->form_data['other_services_provider_1_email'] ?? 'N/A' }}
                                        </p>
                                        <p>Frequency of Use:
                                            <br>{{ $reg->form_data['other_services_provider_1_frequency_of_use'] ?? 'N/A' }}
                                        </p>
                                    </div>
                                    <p class="font-bold mb-2 mt-6">Service Provider 2</p>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-4 font-medium capitalize">
                                        <p>Name:
                                            <br>{{ $reg->form_data['other_services_provider_2_address'] ?? 'N/A' }}
                                        </p>
                                        <p>Address:<br>{{ $reg->form_data['other_services_provider_2_name'] ?? 'N/A' }}
                                        </p>
                                        <p>Phone:<br>{{ $reg->form_data['other_services_provider_2_phone'] ?? 'N/A' }}
                                        </p>
                                        <p>Email:<br>{{ $reg->form_data['other_services_provider_2_email'] ?? 'N/A' }}
                                        </p>
                                        <p>Frequency of Use:
                                            <br>{{ $reg->form_data['other_services_provider_2_frequency_of_use'] ?? 'N/A' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 5 -->
                            <div class="border border-white rounded-lg">
                                <button @click="openStep = openStep === 5 ? null : 5"
                                    class="w-full text-left px-4 py-2 bg-purple-800 hover:bg-purple-700 rounded-lg">
                                    Step 5
                                </button>
                                <div x-show="openStep === 5" class="p-4">
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-4 font-medium capitalize">
                                        <p>Medicare Number: <br>{{ $reg->form_data['medicare_number'] ?? 'N/A' }}</p>
                                        <p>Expiry Date:<br>{{ $reg->form_data['expiry_date'] ?? 'N/A' }}</p>
                                        <p>Reference Number:<br>{{ $reg->form_data['reference_number'] ?? 'N/A' }}</p>
                                        <p>Membership Number:<br>{{ $reg->form_data['membership_number'] ?? 'N/A' }}
                                        </p>
                                        <p>Private Healthcare Provider:
                                            <br>{{ $reg->form_data['private_healthcare_provider'] ?? 'N/A' }}
                                        </p>
                                        <p>Doctor's Name:<br>{{ $reg->form_data['doctor_name'] ?? 'N/A' }}</p>
                                        <p>Doctor's Phone
                                            Number:<br>{{ $reg->form_data['doctors_phone_number'] ?? 'N/A' }}</p>
                                        <p>Doctor's Address:<br>{{ $reg->form_data['doctors_address'] ?? 'N/A' }}</p>
                                        <p>NDIS Number:<br>{{ $reg->form_data['ndis_number'] ?? 'N/A' }}</p>
                                        <p>NDIS Start Date:<br>{{ $reg->form_data['ndis_start_date'] ?? 'N/A' }}</p>
                                        <p>NDIS End Date:<br>{{ $reg->form_data['ndis_end_date'] ?? 'N/A' }}</p>
                                        <p>Is there NDIS funding<br>{{ $reg->form_data['$ndis_funding'] ?? 'N/A' }}</p>
                                        <p>What type of NDIS
                                            funding<br>{{ $reg->form_data['type_ndis_funding'] ?? 'N/A' }}
                                        </p>
                                        <p>Plan Managers Name<br>{{ $reg->form_data['$plan_managed_name'] ?? 'N/A' }}
                                        </p>
                                        <p>Plan Managers Email<br>{{ $reg->form_data['$plan_managed_email'] ?? 'N/A' }}
                                        </p>
                                        <p>Plan Managers Phone<br>{{ $reg->form_data['$plan_managed_phone'] ?? 'N/A' }}
                                        </p>
                                        <p class="col-span-4">Supporting Document:<br>
                                            @if (!empty($reg->form_data['supporting_document_path']))
                                                <a href="{{ route('registration-document.download', $reg) }}" class="inline-block mt-1 rounded bg-purple-200 px-3 py-1 text-purple-950 hover:bg-purple-100">
                                                    Download {{ $reg->form_data['supporting_document_original_name'] ?? 'document' }}
                                                </a>
                                            @else
                                                N/A
                                            @endif
                                        </p>
                                        <p class="col-span-4">If you select Other, Details
                                            Here:<br>{{ $reg->form_data['$plan_managed_phone'] ?? 'N/A' }}
                                        </p>
                                        <p class="col-span-4">Additional Information:
                                            <br>{{ $reg->form_data['$plan_managed_phone'] ?? 'N/A' }}
                                        </p>

                                        {{-- <p>What type of NDIS
                                            funding<br>{{ $reg->form_data['type_ndis_funding'] ?? 'N/A' }}</p> --}}


                                        {{-- <p>NDIS Date:<br>{{ $reg->form_data['ndis_date'] ?? 'N/A' }}</p>
                                        <p>Name:<br>{{ $reg->form_data['ndis_name'] ?? 'N/A' }}</p>
                                        <p>Email:<br>{{ $reg->form_data['ndis_email'] ?? 'N/A' }}</p>
                                        <p class="col-span-4">Comment:<br>{{ $reg->form_data['comment'] ?? 'N/A' }}</p> --}}

                                    </div>
                                </div>
                            </div>

                            <!-- Step 6 -->
                            <div class="border border-white rounded-lg">
                                <button @click="openStep = openStep === 6 ? null : 6"
                                    class="w-full text-left px-4 py-2 bg-purple-800 hover:bg-purple-700 rounded-lg">
                                    Step 6
                                </button>
                                <div x-show="openStep === 6" class="p-4">
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-4 font-medium capitalize">
                                        <p class="col-span-4">What do you want to achieve for yourself :
                                            <br>{{ $reg->form_data['planned_achievements'] ?? 'N/A' }}
                                        </p>
                                        <p>Immediately
                                            Plan:<br>{{ $reg->form_data['immediate_planned_achievements'] ?? 'N/A' }}
                                        </p>
                                        <p>Plan In 6
                                            Months:<br>{{ $reg->form_data['six_months_planned_achievements'] ?? 'N/A' }}
                                        </p>
                                        <p>Plan Next
                                            Year:<br>{{ $reg->form_data['next_year_planned_achievements'] ?? 'N/A' }}
                                        </p>
                                        <p>Have you Agreed to our terms:
                                            <br>{{ isset($reg->form_data['agree']) ? ($reg->form_data['agree'] == 1 ? 'yes' : 'no') : 'N/A' }}
                                        </p>
                                        <p>Initials:<br>{{ $reg->form_data['initials'] ?? 'N/A' }}</p>
                                        <p>Name of Person
                                            Signing:<br>{{ $reg->form_data['name_of_person_signing'] ?? 'N/A' }}</p>
                                        <p>Email of Person
                                            Signing:<br>{{ $reg->form_data['email_of_person_signing'] ?? 'N/A' }}</p>
                                        <p>Relationship to the
                                            participant:<br>{{ $reg->form_data['relationship_to_the_participant'] ?? 'N/A' }}
                                        </p>
                                        <p>Date:<br>{{ $reg->form_data['date_of_signature'] ?? 'N/A' }}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="my-4">
                    {{ $allregistrations->links() }}
                </div>
            @else
                <p class=" font-head text-2xl md:text-3xl text-purple-900 font-bold">No registrations yet or has been
                    attended to.</p>
            @endif
        </div>
    </div>
</div>
