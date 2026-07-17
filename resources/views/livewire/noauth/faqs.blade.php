<div>
    {{-- The Master doesn't talk, he acts. --}}
    @livewire('partials.pagehead', ['title' => 'Frequently Asked Questions'])


    <!-- Welcome Section -->
    <div class="max-w-5xl mx-auto p-6 mt-20 ">
        <p class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-6 text-center">
            Welcome to the Unity Lifecare FAQ section,<br>
            <span class="text-purple-600">where we address common questions about how our platform works.</span>
        </p>
    </div>

    <!-- FAQ Section -->
    <section>
        <div class="container mx-auto space-y-4 p-6 mt-4 mb-12 font-body">
            <!-- FAQ Item 1 -->
            <div x-data="{ open: false }" class="border border-purple-300">
                <button @click="open = !open"
                    class="flex justify-between items-center w-full px-6 py-8 text-left bg-purple-100 hover:bg-purple-50 focus:outline-none">
                    <span class="font-bold font-lg text-purple-900 font-head">What services do you offer?</span>
                    <svg class="w-5 h-5 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95" class="p-4 pt-0">
                    <p class="text-purple-800 p-8">
                        We offer a range of services including NDIS services, therapeutic support, community nursing and
                        financial wellbeing. Each service is tailored to meet individual needs.
                    <p class="px-8">
                        <a class="font-bold text-purple-800 font-head" wire:navigate target="_blank"
                            href="/services">Services</a>
                    </p>
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div x-data="{ open: false }" class="border border-purple-300">
                <button @click="open = !open"
                    class="flex justify-between items-center w-full px-6 py-8 text-left bg-purple-100 hover:bg-purple-50 focus:outline-none">
                    <span class="font-bold font-lg text-purple-900 font-head">How can I make a referral?</span>
                    <svg class="w-5 h-5 transition-transform duration-200" :class="{ 'rotate-180': open }"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95" class="p-4 pt-0">
                    <p class="text-purple-800 p-8">
                        You can make a referral by clicking the "Participant Intake Form" or 'Get Started Here' button
                        on our website or contacting us directly via phone or email.
                    <p class="px-8">
                        <a class="font-bold text-purple-800 font-head" wire:navigate target="_blank"
                            href="/referral">Make A
                            Referral</a>
                    </p>

                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div x-data="{ open: false }" class="border border-purple-300" data-aos="fade-up" data-aos-duration="1200">
                <button @click="open = !open"
                    class="flex justify-between items-center w-full px-6 py-8 text-left bg-purple-100 hover:bg-purple-50 focus:outline-none">
                    <span class="font-bold font-lg text-purple-900 font-head">Are your services NDIS-registered?</span>
                    <svg class="w-5 h-5 transition-transform duration-200" :class="{ 'rotate-180': open }"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95" class="p-4 pt-0">
                    <p class="text-purple-800 p-8">
                        Yes, we are a registered NDIS provider. We are committed to delivering high-quality, compliant
                        services to our clients.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div x-data="{ open: false }" class="border border-purple-300" data-aos="fade-up" data-aos-duration="1300">
                <button @click="open = !open"
                    class="flex justify-between items-center w-full px-6 py-8 text-left bg-purple-100 hover:bg-purple-50 focus:outline-none">
                    <span class="font-bold font-lg text-purple-900 font-head">How do you ensure quality care?</span>
                    <svg class="w-5 h-5 transition-transform duration-200" :class="{ 'rotate-180': open }"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95" class="p-4 pt-0">
                    <p class="text-purple-800 p-8">
                        We ensure quality care through regular training, client feedback, and adherence to industry
                        standards. Our team is dedicated to continuous improvement.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section>
        <div class="mt-16 bg-purple-900 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl  md:text-5xl font-bold text-purple-50 leading-tight font-head">
                    Extend a Hand, Change a Life
                </h2>
                <p class="mt-4 text-lg text-purple-100 max-w-2xl mx-auto">
                    A simple referral can provide life-changing support to someone in need. Help us reach more
                    individuals who deserve care, dignity, and a better future.
                </p>
                <div class="mt-8">
                    <a href="/visitors-registration"
                        class="inline-block bg-white text-purple-900 px-8 py-4 rounded-lg font-head font-semibold hover:bg-purple-50 hover:text-purple-950 transition duration-300 shadow-lg hover:shadow-xl">
                        Make a Referral
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
