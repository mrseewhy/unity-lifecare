<div>
    {{-- Do your work, then step back. --}}
    @livewire('partials.pagehead', ['title' => 'People Centered Care'])
    <section class="w-full bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Headline and Description -->
            <div class=" grid grid-cols-1 sm:grid-cols-2 mt-6 mb-0 sm:mb-20 gap-12 place-items-center">
                <div data-aos="flip-left" data-aos-duration="800" class="">
                    <img class="w-full sm:rounded-xl" alt="Unity Life Care team supporting individuals with disabilities"
                        src="/images/people-centered.jpg">
                </div>
                <div class="order-first sm:order-last p-4">

                    <p class="mb-4 text-purple-800">
                        At Unity Life Care, our Person-Centered Care approach is built on the belief that every
                        individual deserves personalized support tailored to their unique needs, preferences, and goals.
                        We work closely with each person to create a customized care plan that empowers them to live a
                        fulfilling and independent life. Whether it’s navigating life’s transitions, managing health
                        needs, or building daily routines, our compassionate team is here to provide guidance and
                        encouragement every step of the way. </p>
                    <p class="mb-4 text-purple-800">
                        Our services include support through life’s transitions, professional nursing care in the
                        community, and assistance with home responsibilities. We understand that each individual’s
                        journey is different, and we are committed to fostering a sense of dignity, respect, and
                        empowerment. With Unity Life Care, you can trust that your well-being is at the heart of
                        everything we do. </p>
                    {{-- <p data-aos="fade-up" class="mb-4 text-purple-800"> Our compassionate team is committed to delivering high-quality care that respects dignity, encourages growth, and builds confidence.
              </p> --}}
                </div>
            </div>

            <!-- Cards -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1: Support through life’s transitions -->
                <div data-aos="fade-up" data-aos-duration="1000"
                    class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-60 object-cover rounded-t-lg" src="/images/support.jpg"
                        alt="Support through life’s transitions">
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-purple-900">Support through life’s transitions</h4>
                        <p class="mt-4 text-purple-800">
                            We provide guidance and support to help individuals navigate life’s changes with confidence.
                        </p>
                        <a wire:navigate href="/support-transitions"
                            class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                            Read More →
                        </a>
                    </div>
                </div>

                <!-- Card 2: Professional nursing care in the community -->
                <div data-aos="fade-up" data-aos-duration="1100"
                    class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-60 object-cover rounded-t-lg" src="/images/nurse.jpg"
                        alt="Professional nursing care in the community">
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-purple-900">Professional nursing care in the community</h4>
                        <p class="mt-4 text-purple-800">
                            Our skilled nurses provide high-quality care in the comfort of your home or community.
                        </p>
                        <a wire:navigate href="/nursing-care"
                            class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                            Read More →
                        </a>
                    </div>
                </div>

                <!-- Card 3: Assistance with home responsibilities -->
                <div data-aos="fade-up" data-aos-duration="1200"
                    class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-60 object-cover rounded-t-lg" src="/images/home.jpg"
                        alt="Assistance with home responsibilities">
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-purple-900">Assistance with home responsibilities</h4>
                        <p class="mt-4 text-purple-800">
                            We help with daily tasks to ensure a comfortable and independent living environment.
                        </p>
                        <a wire:navigate href="/home-responsibilities"
                            class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                            Read More →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <!-- CTA Section -->
        <div class="mt-16 bg-purple-900 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-white font-head">
                    Ready to Get Started?
                </h2>
                <p class="mt-4 text-lg text-purple-100 max-w-2xl mx-auto">
                    Contact us today to learn more about our services and how we can support you or your loved ones.
                </p>
                <div class="mt-8 flex gap-8 justify-center">
                    <a wire:navigate href="/contact"
                        class="inline-block w-56 bg-white text-purple-900 px-4 py-4 border-2 border-purple-100 rounded-lg font-head font-semibold hover:bg-purple-50 hover:text-purple-950 transition duration-300 shadow-lg hover:shadow-xl">
                        Contact Us
                    </a>
                    <a wire:navigate href="/visitors-registration"
                        class="inline-block w-56 bg-purple-900 text-purple-50 border-2 border-purple-100 px-4 py-4 rounded-lg font-head font-semibold hover:bg-purple-50 hover:text-purple-950 transition duration-300 shadow-lg hover:shadow-xl">
                        Register a Participant
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
