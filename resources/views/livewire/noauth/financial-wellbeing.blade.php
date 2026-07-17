<div>
    {{-- In work, do what you enjoy. --}}
    @livewire('partials.pagehead', ['title' => 'Financial Wellbeing'])
    <section class="w-full bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Headline and Description -->
            <div class=" grid grid-cols-1 sm:grid-cols-2 mt-6 mb-0 sm:mb-20 gap-12 place-items-center">
                <div data-aos="flip-left" data-aos-duration="800" class="">
                    <img class="w-full sm:rounded-xl" alt="Financial Wellbeing" src="/images/financial-literacy.jpg">
                </div>
                <div class="order-first sm:order-last p-4">

                    <p class="mb-4 text-purple-800">
                        At Unity Life Care, our Financial Wellbeing approach is rooted in the understanding that
                        financial health is deeply personal and essential to overall wellness. We partner with
                        individuals to develop tailored strategies that align with their unique circumstances, values,
                        and aspirations. Whether it’s overcoming debt, planning for the future, or navigating everyday
                        financial challenges, our dedicated team provides the tools and support needed to foster
                        confidence and stability. </p>
                    <p class="mb-4 text-purple-800">
                        Our services include one-on-one financial counselling, personalized coaching for money
                        management, and educational workshops to build lifelong skills. We recognize that financial
                        journeys are as diverse as the people we serve, and we prioritize empathy, clarity, and
                        actionable solutions in every interaction. With Unity Life Care, you can be assured that your
                        financial peace of mind is our unwavering focus.</p>

                </div>
            </div>

            <!-- Cards -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1: Support through life’s transitions -->
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-60 object-cover rounded-t-lg" src="/images/counselling.jpg"
                        alt="Financial Counselling">
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-purple-900">Financial Counselling</h4>
                        <p class="mt-4 text-purple-800">
                            We provide expert guidance to help manage debt and navigate financial challenges
                            effectively.
                        </p>
                        <a wire:navigate href="/support-transitions"
                            class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                            Read More →
                        </a>
                    </div>
                </div>

                <!-- Card 2: Professional nursing care in the community -->
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-60 object-cover rounded-t-lg" src="/images/coaching.jpg"
                        alt="Financial Coaching">
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-purple-900">Financial Coaching</h4>
                        <p class="mt-4 text-purple-800">
                            We offer personalized strategies to help you build confidence and control over your
                            finances.
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
                    <img class="w-full h-60 object-cover rounded-t-lg" src="/images/literacy.jpg"
                        alt="Financial Literacy Workshops">
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-purple-900">Financial Literacy Workshops</h4>
                        <p class="mt-4 text-purple-800">
                            We teach essential skills to make informed and sustainable financial decisions and help you
                            in your finances.
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
