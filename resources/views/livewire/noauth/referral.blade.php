<div>
    {{-- The best athlete wants his opponent at his best. --}}
    @livewire('partials.pagehead', ['title' => 'Register'])

    <div class="container mx-auto my-16 text-purple-900">

        <div class="mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-1 text-center">
                Participant Intake
                Form</h2>
            <hr class="w-32 bg-red-600 h-0.5 border-0 mb-6 mx-auto" />
            <p class="text-base text-center font-body text-purple-900 max-w-3xl mx-auto">We believe no one should face
                life's
                challenges
                alone.
                By registering your loved one, you're opening doors to compassionate care, personalized support, and an
                improved quality of life. Take the first step today - help them begin their journey to better days
                ahead.</p>
        </div>

        {{-- form --}}

        <div x-data="{
            step: @entangle('currentStep'),
            maxStep: @entangle('maxStep')
        }" class=" p-6 w-full">


            <!-- Progress Indicator -->
            <div class="flex items-center mb-20 justify-center ">
                <template x-for="(num, index) in [1, 2, 3, 4, 5, 6]" :key="index">
                    <div class="flex items-center">
                        <button @click="if (num <= maxStep) step = num"
                            class="w-10 h-10 md:w-16 md:h-16 text-sm md:text-base font-head font-bold flex items-center justify-center rounded-full text-white transition"
                            :class="{
                                'bg-purple-400 border-2 border-purple-200 shadow-xl': num <= maxStep && num !== step,
                                'bg-purple-700 border-2 border-purple-200': num === step,
                                'bg-gray-400 border-2 border-gray-200': num > maxStep
                            }">
                            <span x-text="num"></span>
                        </button>
                        <div x-show="index < 5" class="w-6 md:w-12 h-1 transition"
                            :class="{
                                'bg-green-500': num < maxStep,
                                'bg-purple-300': num >= maxStep
                            }">
                        </div>
                    </div>
                </template>
            </div>


            <div x-show="step === 1">
                <h2 class="text-2xl md:text-3xl font-bold font-head mb-12 mt-8 text-purple-900">Step 1: Participant
                    Information</h2>

                <!-- Row 1: Name, DOB, Gender -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10 text-purple-800">
                    <div>
                        <label class="block text-base font-medium font-head mb-2">Participant's name <span
                                class="text-red-600">*</span></label>
                        <input type="text" wire:model="participants_name"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('participants_name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-base font-medium font-head mb-2">Date of birth</label>
                        <input type="date" wire:model="DOB" class="w-full border border-purple-300 p-2 rounded">
                        @error('DOB')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>


                    <div>
                        <label class="block text-base font-medium font-head mb-2">Gender <span
                                class="text-red-600">*</span></label>
                        <div class="flex gap-4">
                            <label class="flex items-center cursor-pointer font-body text-base">
                                <input type="radio" wire:model="gender" value="male"
                                    class="mr-2 font-body text-base">
                                Male
                            </label>
                            <label class="flex items-center cursor-pointer font-body text-base">
                                <input type="radio" wire:model="gender" value="female"
                                    class="mr-2 font-body text-base">
                                Female
                            </label>
                            <label class="flex items-center cursor-pointer font-body text-base">
                                <input type="radio" wire:model="gender" value="others"
                                    class="mr-2 font-body text-base">
                                Others
                            </label>
                        </div>
                        @error('gender')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Row 2: Email, Home Phone, Mobile Phone -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">

                    <div>
                        <label class="block text-base font-medium font-head mb-2">Email <span
                                class="text-red-600">*</span></label>
                        <input type="email" wire:model="email"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-base font-medium font-head mb-2">Home phone</label>
                        <input type="text" wire:model="home_phone"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm"
                            placeholder="eg: +61 000 000 000">
                        @error('home_phone')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-base font-medium font-head mb-2">Mobile phone</label>
                        <input type="text" wire:model="mobile_phone"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm"
                            placeholder="eg: +61 000 000 000">
                        @error('mobile_phone')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                {{-- From Preferred name to Other considerations --}}
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                        <div>
                            <label class="block font-medium font-head mb-2">Preferred name</label>
                            <input type="text" wire:model="preferred_name"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('preferred_name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Religious requirements</label>
                            <input type="text" wire:model="religious_requirements"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('religious_requirements')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Cultural requirements</label>
                            <input type="text" wire:model="cultural_requirements"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('cultural_requirements')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                        <div>
                            <label class="block font-medium font-head mb-2">Communication device</label>
                            <input type="text" wire:model="communication_device"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('communication_device')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Physical assistance</label>
                            <input type="text" wire:model="physical_assistance"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('physical_assistance')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Other considerations</label>
                            <input type="text" wire:model="other_considerations"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('other_considerations')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
                <!-- Row 3: Email, Language Spoken, Interpreter Required -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                    <div>
                        <label class="block text-base font-medium font-head mb-2">Emergency phone number</label>
                        <input type="text" wire:model="emergency_phone"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('emergency_phone')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-base font-medium font-head mb-2">Emergency email</label>
                        <input type="text" wire:model="emergency_email"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('emergency_email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-base font-medium font-head mb-2">Language spoken at home</label>
                        <input type="text" wire:model="language_spoken"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('language_spoken')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>


                </div>

                <!-- Row 4: Residential Address, Postal Address -->
                <div class="grid grid-cols-1 md:grid-cols-5 gap-12 mb-10">
                    <div class="md:col-span-2">
                        <label class="block text-base font-medium font-head mb-2">Residential address <span
                                class="text-red-600">*</span></label>
                        <input type="text" wire:model="residential_address"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('residential_address')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-base font-medium font-head mb-2">Postal address: <span
                                class="text-sm text-purple-600">If not the same as residential address</span></label>
                        <input type="text" wire:model="postal_address"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('postal_address')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-base font-medium font-head mb-2">Interpreter required</label>
                        <div class="flex gap-4 mt-4">
                            <label class="flex items-center cursor-pointer font-body text-base">
                                <input type="radio" wire:model="interpreter_required" value="yes"
                                    class="mr-2 font-body text-base"> Yes
                            </label>
                            <label class="flex items-center cursor-pointer font-body text-base">
                                <input type="radio" wire:model="interpreter_required" value="no"
                                    class="mr-2 font-body text-base"> No
                            </label>
                        </div>
                        @error('interpreter_required')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>



            </div>



            <!-- Step 2 -->

            <div x-show="step === 2" x-data="{ showGuardianSection: @entangle('guardianship_in_place').defer === 'yes' }">
                <h2 class="text-2xl md:text-3xl font-bold font-head  mt-2">Step 2: Guardian Information</h2>

                <p class="text-purple-600 text-base mb-8">
                    For participants under the age of 18 years, under guardianship, or in the care of family/caregivers,
                    please complete the fields below.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-10">
                    <div>
                        <label class="block text-base font-medium font-head mb-2">
                            Is there a Guardianship and/or Administration order in place?
                        </label>
                        <div class="flex gap-4 ">
                            <label class="flex items-center cursor-pointer font-body text-base">
                                <input type="radio" wire:model.live="guardianship_in_place" value="yes"
                                    x-on:click="showGuardianSection = true" class="mr-2 font-body text-base"> Yes
                            </label>
                            <label class="flex items-center cursor-pointer font-body text-base">
                                <input type="radio" wire:model.live="guardianship_in_place" value="no"
                                    x-on:click="showGuardianSection = false" class="mr-2 font-body text-base"> No
                            </label>
                        </div>
                        @error('guardianship_in_place')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div x-show="showGuardianSection" x-transition>
                    <!-- Guardian 1 -->
                    <h3 class="text-xl font-bold font-head mb-6 mt-12">Guardian 1</h3>

                    <div class="grid grid-cols-1 md:grid-cols-6 gap-12 mb-10">
                        <div class="md:col-span-2">
                            <label class="block font-medium font-head mb-2">Guardian's name</label>
                            <input type="text" wire:model="guardian_1_name"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('guardian_1_name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block font-medium font-head mb-2">Relationship to participant</label>
                            <div class="flex flex-row flex-wrap gap-4 mt-2">
                                <label class="flex items-center cursor-pointer font-body "><input type="radio"
                                        wire:model="guardian_1_relationship_to_participant" value="parent"
                                        class="mr-2 font-body "> Parent</label>
                                <label class="flex items-center cursor-pointer font-body "><input type="radio"
                                        wire:model="guardian_1_relationship_to_participant" value="guardian"
                                        class="mr-2 font-body "> Guardian</label>
                                <label class="flex items-center cursor-pointer font-body "><input type="radio"
                                        wire:model="guardian_1_relationship_to_participant" value="caregiver"
                                        class="mr-2 font-body "> Caregiver</label>
                                <label class="flex items-center cursor-pointer font-body "><input type="radio"
                                        wire:model="guardian_1_relationship_to_participant" value="other"
                                        class="mr-2 font-body "> Other</label>
                            </div>
                            @error('guardian_1_relationship_to_participant')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-span-1">
                            <label class="block font-medium font-head mb-2">Primary carer</label>
                            <div class="flex gap-4 mt-2">
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="guardian_1_as_primary_carer" value="yes"
                                        class="mr-2 font-body text-base"> Yes</label>
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="guardian_1_as_primary_carer" value="no"
                                        class="mr-2 font-body text-base"> No</label>
                            </div>
                            @error('guardian_1_as_primary_carer')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-span-1">
                            <label class="block font-medium font-head mb-2">Lives with participant</label>
                            <div class="flex gap-4 mt-2">
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="participant_lives_with_guardian_1" value="yes"
                                        class="mr-2 font-body text-base"> Yes</label>
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="participant_lives_with_guardian_1" value="no"
                                        class="mr-2 font-body text-base"> No</label>
                            </div>
                            @error('participant_lives_with_guardian_1')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-5 gap-12 mb-10">
                        <div class="col-span-2">
                            <label class="block font-medium font-head mb-2">Residential address</label>
                            <input type="text" wire:model="guardian_1_residential_address"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('guardian_1_residential_address')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label class="block font-medium font-head mb-2">Postal address</label>
                            <input type="text" wire:model="guardian_1_postal_address"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('guardian_1_postal_address')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Emergency contact</label>
                            <div class="flex gap-4">
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="guardian_1_as_emergency_contact" value="yes"
                                        class="mr-2 font-body text-base"> Yes</label>
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="guardian_1_as_emergency_contact" value="no"
                                        class="mr-2 font-body text-base"> No</label>
                            </div>
                            @error('guardian_1_as_emergency_contact')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                        <div>
                            <label class="block font-medium font-head mb-2">Home phone</label>
                            <input type="text" wire:model="guardian_1_home_phone"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm"
                                placeholder="+61 000 000 000">
                            @error('guardian_1_home_phone')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Mobile phone</label>
                            <input type="text" wire:model="guardian_1_mobile_phone"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm"
                                placeholder="+61 000 000 000">
                            @error('guardian_1_mobile_phone')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Email</label>
                            <input type="email" wire:model="guardian_1_email"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('guardian_1_email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>

                    <!-- Guardian 2 -->
                    <h3 class="text-xl font-bold font-head mt-12">Guardian 2</h3>
                    <p class="mb-6 text-purple-500 ">Fill this part only if you have a second guardian</p>

                    <div class="grid grid-cols-1 md:grid-cols-6 gap-12 mb-10">
                        <div class="md:col-span-2">
                            <label class="block font-medium font-head mb-2">Guardian's name</label>
                            <input type="text" wire:model="guardian_2_name"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('guardian_2_name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block font-medium font-head mb-2">Relationship to participant</label>
                            <div class="flex flex-row flex-wrap gap-4">
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="guardian_2_relationship_to_participant"
                                        value="parent" class="mr-2 font-body text-base"> Parent</label>
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="guardian_2_relationship_to_participant"
                                        value="guardian" class="mr-2 font-body text-base"> Guardian</label>
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="guardian_2_relationship_to_participant"
                                        value="caregiver" class="mr-2 font-body text-base"> Caregiver</label>
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="guardian_2_relationship_to_participant"
                                        value="other" class="mr-2 font-body text-base"> Other</label>
                            </div>
                            @error('guardian_2_relationship_to_participant')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Primary carer</label>
                            <div class="flex gap-4">
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="guardian_2_as_primary_carer" value="yes"
                                        class="mr-2 font-body text-base"> Yes</label>
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="guardian_2_as_primary_carer" value="no"
                                        class="mr-2 font-body text-base"> No</label>
                            </div>
                            @error('guardian_2_as_primary_carer')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="block font-medium font-head mb-2">Lives with participant</label>
                            <div class="flex gap-4">
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="participant_lives_with_guardian_2" value="yes"
                                        class="mr-2 font-body text-base"> Yes</label>
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="participant_lives_with_guardian_2" value="no"
                                        class="mr-2 font-body text-base"> No</label>
                            </div>
                            @error('participant_lives_with_guardian_2')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



                    <div class="grid grid-cols-1 md:grid-cols-5 gap-12 mb-10">
                        <div class="md:col-span-2">
                            <label class="block font-medium font-head mb-2">Residential address</label>
                            <input type="text" wire:model="guardian_2_residential_address"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('guardian_2_residential_address')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="md:col-span-2">
                            <label class="block font-medium font-head mb-2">Postal address</label>
                            <input type="text" wire:model="guardian_2_postal_address"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('guardian_2_postal_address')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Emergency contact</label>
                            <div class="flex gap-4">
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="guardian_2_as_emergency_contact" value="yes"
                                        class="mr-2 font-body text-base"> Yes</label>
                                <label class="flex items-center cursor-pointer font-body text-base"><input
                                        type="radio" wire:model="guardian_2_as_emergency_contact" value="no"
                                        class="mr-2 font-body text-base"> No</label>
                            </div>
                            @error('guardian_2_as_emergency_contact')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                        <div>
                            <label class="block font-medium font-head mb-2">Home Phone</label>
                            <input type="text" wire:model="guardian_2_home_phone"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm"
                                placeholder="+61 000 000 000">
                            @error('guardian_2_home_phone')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Mobile Phone</label>
                            <input type="text" wire:model="guardian_2_mobile_phone"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm"
                                placeholder="+61 000 000 000">
                            @error('guardian_2_mobile_phone')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Email</label>
                            <input type="email" wire:model="guardian_2_email"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('guardian_2_email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>

            <!-- Step 3 -->


            <div x-show="step === 3">
                <div x-data="{ showBehaviourSection: @entangle('behaviour_management_plan_in_place').defer === 'yes' }">
                    <h2 class="text-2xl md:text-3xl font-bold font-head mb-12 mt-2">Step 3: Behaviour management plan
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-10">


                        <div>
                            <label class="block text-base font-medium font-head mb-2">Is there a behaviour management
                                plan
                                in place?</label>
                            <div class="flex gap-4">
                                <label class="flex items-center cursor-pointer font-body text-base">
                                    <input type="radio" wire:model.live="behaviour_management_plan_in_place"
                                        x-on:click="showBehaviourSection = true" value="yes"
                                        class="mr-2 font-body text-base"> Yes
                                </label>
                                <label class="flex items-center cursor-pointer font-body text-base">
                                    <input type="radio" wire:model.live="behaviour_management_plan_in_place"
                                        x-on:click="showBehaviourSection = false" value="no"
                                        class="mr-2 font-body text-base"> No
                                </label>
                            </div>
                            @error('behaviour_management_plan_in_place')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div x-show="showBehaviourSection" x-transition>
                        <!-- Disability / Medical Conditions -->
                        <div class="grid grid-cols-1 gap-12 mb-10">
                            <div>
                                <label class="block font-medium font-head mb-2">Disability or medical conditions
                                    including
                                    any diagnosis if relevant</label>
                                <textarea wire:model="medical_conditions" class="w-full border p-2 rounded" rows="4"></textarea>
                                @error('medical_conditions')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Behaviour Support Plan -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-10">
                            <div>
                                <label class="block font-medium font-head mb-2">Behaviour support plan documents
                                    collected
                                    for
                                    authorisation purposes</label>
                                <div class="flex gap-4">
                                    <label class="flex items-center cursor-pointer font-body text-base"><input
                                            type="radio" wire:model="behaviour_support_plan_collected"
                                            value="yes" class="mr-2 font-body text-base"> Yes</label>
                                    <label class="flex items-center cursor-pointer font-body text-base"><input
                                            type="radio" wire:model="behaviour_support_plan_collected"
                                            value="no" class="mr-2 font-body text-base"> No</label>
                                </div>
                                @error('behaviour_support_plan_collected')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="block font-medium font-head mb-2">Behaviour support plan available on
                                    NDIS
                                    portal?</label>
                                <div class="flex gap-4">
                                    <label class="flex items-center cursor-pointer font-body text-base"><input
                                            type="radio" wire:model="behaviour_support_plan_ndis" value="yes"
                                            class="mr-2 font-body text-base"> Yes</label>
                                    <label class="flex items-center cursor-pointer font-body text-base"><input
                                            type="radio" wire:model="behaviour_support_plan_ndis" value="no"
                                            class="mr-2 font-body text-base"> No</label>
                                </div>
                                @error('behaviour_support_plan_ndis')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Step 4 -->
            <div x-show="step === 4">
                <div x-data="{ showOtherSection: @entangle('other_support').defer === 'yes' }">
                    <h2 class="text-2xl md:text-3xl font-bold font-head  mt-2">Step 4: Other service providers</h2>
                    <p class="text-purple-600 text-base md:text-base mb-12">
                        Other service providers currently using (include Specialist behaviour support provider, if
                        relevant)
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-10">
                        <div>
                            <label class="block text-base font-medium font-head mb-2">
                                Is the participant accessing any other support networks/services?
                            </label>
                            <div class="flex gap-4 ">
                                <label class="flex items-center cursor-pointer font-body text-base">
                                    <input type="radio" wire:model.live="other_support"
                                        x-on:click="showOtherSection = true" value="yes"
                                        class="mr-2 font-body text-base"> Yes
                                </label>
                                <label class="flex items-center cursor-pointer font-body text-base">
                                    <input type="radio" wire:model.live="other_support"
                                        x-on:click="showOtherSection = false" value="no"
                                        class="mr-2 font-body text-base"> No
                                </label>
                            </div>
                            @error('other_support')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div x-show="showOtherSection" x-transition>
                        <h2 class="text-xl font-bold mb-4">Support service 1</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-10">
                            <div>
                                <label class="block font-medium font-head mb-2">Name</label>
                                <input type="text" wire:model="other_services_provider_1_name"
                                    class="w-full border border-purple-300 p-2 rounded font-body text-sm"
                                    placeholder="E.g John Doe">
                                @error('other_services_provider_1_name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="block font-medium font-head mb-2">Address</label>
                                <input type="text" wire:model="other_services_provider_1_address"
                                    class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                                @error('other_services_provider_1_address')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                            <div>
                                <label class="block font-medium font-head mb-2">Phone</label>
                                <input type="text" wire:model="other_services_provider_1_phone"
                                    class="w-full border border-purple-300 p-2 rounded font-body text-sm"
                                    placeholder="+61 000 000 000">
                                @error('other_services_provider_1_phone')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="block font-medium font-head mb-2">Email</label>
                                <input type="email" wire:model="other_services_provider_1_email"
                                    class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                                @error('other_services_provider_1_email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="block font-medium font-head mb-2">Frequency of use</label>
                                <input type="text" wire:model="other_services_provider_1_frequency_of_use"
                                    class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                                @error('other_services_provider_1_frequency_of_use')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <h2 class="text-xl font-bold mb-4 mt-12 md:mt-16">Support service 2</h2>
                        <p class="mb-6 text-purple-500 ">Fill this part only if you have a second support service</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-10 ">
                            <div>
                                <label class="block font-medium font-head mb-2">Name</label>
                                <input type="text" wire:model="other_services_provider_2_name"
                                    class="w-full border border-purple-300 p-2 rounded font-body text-sm"
                                    placeholder="E.g John Doe">
                                @error('other_services_provider_2_name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="block font-medium font-head mb-2">Address</label>
                                <input type="text" wire:model="other_services_provider_2_address"
                                    class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                                @error('other_services_provider_2_address')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                            <div>
                                <label class="block font-medium font-head mb-2">Phone</label>
                                <input type="text" wire:model="other_services_provider_2_phone"
                                    class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                                @error('other_services_provider_2_phone')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="block font-medium font-head mb-2">Email</label>
                                <input type="email" wire:model="other_services_provider_2_email"
                                    class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                                @error('other_services_provider_2_email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="block font-medium font-head mb-2">Frequency of use</label>
                                <input type="text" wire:model="other_services_provider_2_frequency_of_use"
                                    class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                                @error('other_services_provider_2_frequency_of_use')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div x-show="step === 5">
                <div x-data="{ showNDISSection: @entangle('ndis_funding').defer === 'yes' }">
                    <h2 class="text-2xl md:text-3xl font-bold font-head mb-12 mt-2">Step 5: NDIS details</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                        <div>
                            <label class="block font-medium font-head mb-2">Medicare number</label>
                            <input type="text" wire:model="medicare_number"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('medicare_number')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Expiry date</label>
                            <input type="date" wire:model="expiry_date"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('expiry_date')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Reference number</label>
                            <input type="text" wire:model="reference_number"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('reference_number')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                        <div>
                            <label class="block font-medium font-head mb-2">Membership number</label>
                            <input type="text" wire:model="membership_number"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('membership_number')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Private healthcare provider</label>
                            <input type="text" wire:model="private_healthcare_provider"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('private_healthcare_provider')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Doctor's name</label>
                            <input type="text" wire:model="doctor_name"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm"
                                placeholder="E.g. John Doe">
                            @error('doctor_name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                        <div>
                            <label class="block font-medium font-head mb-2">Phone number</label>
                            <input type="text" wire:model="doctors_phone_number"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm"
                                placeholder="+61 000 000 000">
                            @error('doctors_phone_number')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">Address</label>
                            <input type="text" wire:model="doctors_address"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm"
                                placeholder="E.g. 123, Wallaby Way">
                            @error('doctors_address')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">NDIS number</label>
                            <input type="text" wire:model="ndis_number"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('ndis_number')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                        <div>
                            <label class="block font-medium font-head mb-2">NDIS start date</label>
                            <input type="date" wire:model="ndis_start_date"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('ndis_start_date')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block font-medium font-head mb-2">NDIS end date</label>
                            <input type="date" wire:model="ndis_end_date"
                                class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                            @error('ndis_end_date')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="block font-medium font-head mb-2">Do you have NDIS funding?</label>
                            <div class="flex flex-row flex-wrap gap-4 mt-2">
                                <label class="flex items-center cursor-pointer font-body "><input type="radio"
                                        wire:model.live="ndis_funding" x-on:click="showNDISSection = true"
                                        value="yes" class="mr-2 font-body ">
                                    Yes</label>
                                <label class="flex items-center cursor-pointer font-body "><input type="radio"
                                        wire:model.live="ndis_funding" x-on:click="showNDISSection = false"
                                        value="no" class="mr-2 font-body ">
                                    No</label>

                            </div>
                            @error('ndis_funding')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div x-show="showNDISSection" x-transition>
                        <div x-data="{ showNDISFundingTypeSection: @entangle('type_ndis_funding').defer }">
                            <div class ="grid grid-cols-1 gap-12 mb-10">

                                <div>
                                    <label class="block font-medium font-head mb-2">Type of NDIS funding?</label>
                                    <div class="flex flex-row flex-wrap gap-4 mt-2">
                                        <label class="flex items-center cursor-pointer font-body "><input
                                                type="radio" wire:model.live="type_ndis_funding"
                                                x-on:click="showNDISFundingTypeSection = 'planned_managed'"
                                                value="planned_managed" class="mr-2 font-body ">
                                            Planned managed</label>
                                        <label class="flex items-center cursor-pointer font-body "><input
                                                type="radio" wire:model.live="type_ndis_funding"
                                                x-on:click="showNDISFundingTypeSection = 'ndis_managed'"
                                                value="ndis_managed" class="mr-2 font-body ">
                                            NDIS
                                            managed</label>
                                        <label class="flex items-center cursor-pointer font-body "><input
                                                type="radio" wire:model.live="type_ndis_funding"
                                                x-on:click="showNDISFundingTypeSection = 'self_managed'"
                                                value="self_managed" class="mr-2 font-body ">
                                            Self managed</label>
                                        <label class="flex items-center cursor-pointer font-body "><input
                                                type="radio" wire:model.live="type_ndis_funding"
                                                x-on:click="showNDISFundingTypeSection = 'others'" value="others"
                                                class="mr-2 font-body ">
                                            Others</label>

                                    </div>
                                    @error('type_ndis_funding')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div x-show="showNDISFundingTypeSection === 'planned_managed'" x-transition>
                                <h3 class="text-xl font-bold font-head mb-4"> Planned management details</h3>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                                    <div>
                                        <label class="block font-medium font-head mb-2">Name</label>
                                        <input type="text" wire:model="plan_managed_name"
                                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                                        @error('plan_managed_name')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="block font-medium font-head mb-2">Email</label>
                                        <input type="email" wire:model="plan_managed_email"
                                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                                        @error('plan_managed_email')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="block font-medium font-head mb-2">Phone number</label>
                                        <input type="text" wire:model="plan_managed_phone"
                                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                                        @error('plan_managed_phone')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div x-show="showNDISFundingTypeSection === 'others'" x-transition>

                                <div class="grid grid-cols-1 gap-12 mb-10">
                                    <div>
                                        <label class="block font-medium font-head mb-2">If you selected <span
                                                class="font-bold">"others"</span> please share
                                            details below</label>
                                        <textarea wire:model="ndis_funding_others_details" class="w-full border p-2 rounded" rows="4"></textarea>
                                        @error('ndis_funding_others_details')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div>

                        <div class="grid grid-cols-1 gap-12 mb-10">
                            <div>
                                <label class="block font-medium font-head mb-2">Additional comments
                                </label>
                                <textarea wire:model="additional_comments" class="w-full border p-2 rounded" rows="4"></textarea>
                                @error('additional_comments')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 6 -->
            <div x-show="step === 6">
                <h2 class="text-2xl md:text-3xl font-bold font-head mb-12 mt-2">Step 6: Goals and Aspirations</h2>

                <div class="grid grid-cols-1 gap-12 md:mb-10">
                    <div>
                        <label class="block font-medium font-head mb-2">What do you want to achieve for yourself – life
                            skills, physically, socially etc?</label>
                        <textarea wire:model="planned_achievements" class="w-full border p-2 rounded" rows="4"></textarea>
                        @error('planned_achievements')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-10">
                    <div>
                        <label class="block font-medium font-head mb-2">Immediately</label>
                        <input type="text" wire:model="immediate_planned_achievements"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('immediate_planned_achievements')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-medium font-head mb-2">In 6 months</label>
                        <input type="text" wire:model="six_months_planned_achievements"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('six_months_planned_achievements')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block font-medium font-head mb-2">Next year</label>
                        <input type="text" wire:model="next_year_planned_achievements"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('next_year_planned_achievements')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 mb-10">
                    <p>I understand that:</p>
                    <p>- These records are owned by this organisation.</p>
                    <p>- Information within these records will be shared with other staff within the organisation on and
                        only when staff require the information to carry out their duties</p>
                    <p>- I can ask to see records and receive a copy</p>
                    <p>- Records are archived for a set period according to policy and procedure</p>
                    <p>- I understand that all information obtained will be kept confidential.</p>
                    <p>- Please note that the email of the person signing which is required below will be contacted,
                        kindly make sure it is active</p>
                    <p>- Participants, parent or caregiver's signature initials serves as a signature</p>
                    <p> To the best of my knowledge, the information provided in this form is true and correct</p>
                </div>
                <div class="mb-10">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" wire:model="agree" class="rounded border-purple-300 ">
                        <span><span class="text-red-500">*</span> Yes, I agree with the <a target="_blank"
                                href="/privacy-policy" class="text-blue-600 underline">privacy policy</a> and <a
                                target="_blank" href="/terms-and-conditions" class="text-blue-600 underline">terms
                                and conditions</a>.</span>
                    </label>

                    @error('agree')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

                </div>
                <div class="grid grid-cols-1 md:grid-cols-6 gap-12 mb-10">
                    <div class="md:col-span-3">
                        <label class="block font-medium font-head mb-2">Participant, parent or caregiver's
                            initials <span class="text-red-500">*</span> </label>
                        <input type="text" wire:model="initials"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('initials')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="md:col-span-3">
                        <label class="block font-medium font-head mb-2">Name of person signing<span
                                class="text-red-500">*</span></label>
                        <input type="text" wire:model="name_of_person_signing"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('name_of_person_signing')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="md:col-span-2">
                        <label class="block font-medium font-head mb-2">Email of person signing<span
                                class="text-red-500">*</span></label>
                        <input type="email" wire:model="email_of_person_signing"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm" required>
                        @error('email_of_person_signing')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="md:col-span-3">
                        <label class="block font-medium font-head mb-2">Relationship to the participant, if not the
                            participant</label>
                        <input type="text" wire:model="relationship_to_the_participant"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('nrelationship_to_the_participant')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="md:col-span-1">
                        <label class="block font-medium font-head mb-2">Date</label>
                        <input type="date" wire:model="date_of_signature"
                            class="w-full border border-purple-300 p-2 rounded font-body text-sm">
                        @error('date_of_signature')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div x-data="{
                    siteKey: '{{ config('services.turnstile.key') }}',
                    turnstileId: null,
                    initTurnstile() {
                        // First, clean up any existing instances
                        if (this.turnstileId !== null) {
                            turnstile.remove(this.turnstileId);
                            this.turnstileId = null;
                        }
                
                        // Clear the container
                        const container = document.getElementById('cf-turnstile');
                        if (container) {
                            container.innerHTML = '';
                        }
                
                        // Only proceed if the element exists and Turnstile is loaded
                        if (container && typeof turnstile !== 'undefined') {
                            // Render new instance and store the ID
                            this.turnstileId = turnstile.render('#cf-turnstile', {
                                sitekey: this.siteKey,
                                callback: (token) => {
                                    @this.set('captcha', token);
                                }
                            });
                        }
                    }
                }" x-init="// Initial load
                initTurnstile();
                
                // Setup listener for Livewire navigation
                document.addEventListener('livewire:navigated', () => {
                    // Give DOM time to update after navigation
                    setTimeout(() => initTurnstile(), 300);
                });">
                    <div id="cf-turnstile"></div>
                    @error('captcha')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>


            </div>

            <!-- Navigation Buttons -->
            <div class="flex flex-row items-center  justify-between gap-8 mt-6">
                <div class="flex items-center space-x-4">
                    <button x-show="step > 1" wire:click="prevStep"
                        class="bg-red-600 text-sm font-bold text-white px-4 py-2 rounded w-28 h-10 flex items-center justify-center font-head">Back</button>
                    <button wire:click="saveProgress"
                        class="bg-purple-800 text-sm font-bold text-white px-4 py-2 rounded w-28 h-10 flex items-center justify-center font-head">Save
                        draft</button>
                </div>
                <div class="flex items-center space-x-4">
                    <button x-show="step < 6" wire:click="nextStep"
                        class="bg-green-600 text-sm font-bold text-white px-4 py-2 rounded w-28 h-10  flex items-center justify-center font-head">Continue</button>
                    <button x-show="step === 6" wire:click="submit"
                        class="bg-purple-700 text-sm font-bold text-white px-4 py-2 rounded w-28 h-10 flex items-center justify-center font-head">Submit</button>
                </div>

            </div>
        </div>

        {{-- end of form --}}
    </div>

</div>
