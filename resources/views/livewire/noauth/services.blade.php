<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @livewire('partials.pagehead', ['title' => 'Our Services'])
    <section class="w-full bg-white">
        <div class="container mx-auto flex flex-col md:flex-row gap-12 pt-0 pb-12 md:pt-24 md:pb-12">
            <div class="w-full md:w-1/2">
                <img class="w-full sm:rounded-xl h-full object-cover"
                    alt="Unity Life Care team supporting individuals with disabilities" src="/images/services.jpg">
            </div>
            <div class="w-full md:w-1/2 px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-6">

                    Empowering Lives Through <br><span class="text-purple-600">Compassionate Care</span>
                </h2>
                <p class="mb-6 text-purple-800">
                    At Unity Life Care, everyone is welcome.
                    We support people from all backgrounds, cultures, and identities.
                    Our services always:
                </p>
                <ul class="mb-6 text-purple-800  space-y-2">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Respect your culture, language, and beliefs
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Meet your personal needs
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Make you feel safe, respected, and included
                    </li>
                </ul>
                <p class="mb-4 text-purple-800 text-xl font-semibold">
                    Help Us Make a Difference
                </p>
                <p class="mb-8 text-purple-800">
                    Do you know someone who needs support?
                    Send them our way. Your referral can help change a life.
                    Together, we can build a brighter and more inclusive future for everyone.
                </p>
                <a wire:navigate href="/visitors-registration"
                    class="inline-block px-8 py-4 bg-gradient-to-r from-purple-700 to-purple-900 text-purple-50 rounded-lg font-head font-semibold hover:from-purple-600 hover:to-purple-800 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Register a Participant
                    <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="w-full mt-12 md:mt-16 bg-purple-50">
            <div class="container mx-auto px-4 py-20">
                <div>
                    <h3 class="text-3xl font-bold text-purple-900 font-head ">
                        NDIS Services
                    </h3>
                    <hr class="w-32 bg-red-600 h-0.5 border-0 mb-6" />
                    <p class="mt-2  text-lg text-purple-800">
                        At Unity Life Care, we specialize in turning your NDIS plan into real-world results. Whether
                        you're looking for daily support, therapy services, or help navigating the system, our team
                        works with
                        you to implement your plan effectively and efficiently.

                    </p>
                </div>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1: Support through life’s transitions -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/support.jpg"
                            alt="Support through life’s transitions">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Supported Independent Living (SIL) Services
                            </h4>
                            <p class="mt-2 mb-2 text-purple-800">
                                Our Supported Independent Living (SIL) services are designed to help participants live
                                as
                                independently as possible while receiving the daily support they need.<br />
                                What We Offer:</p>
                            <ul class="list-disc list-inside mb-2 text-purple-800 ">
                                <li>Support tailored to individual needs</li>
                                <li>Assistance with daily tasks like cooking, cleaning, and personal care</li>
                                <li>Medication Administration</li>
                                <li>A safe, supportive living environment</li>
                                <li>Compassionate and Qualified Support</li>
                            </ul>

                            {{-- 
                            <a wire:navigate href="/support-transitions"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a> --}}
                        </div>
                    </div>

                    <!-- Card 2: Assistance with Daily Living -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/nurse.jpg"
                            alt="Assistance with Daily Living">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Assistance with Daily Living
                            </h4>
                            <p class="mt-4 text-purple-800">
                                Helping you live well, with care that fits your life.<br />
                                We’re here to help with everyday tasks like personal care, meal preparation, and keeping
                                your home
                                clean and comfortable. Our support is gentle, respectful, and always guided by your
                                routine and
                                preferences.
                            </p>

                        </div>
                    </div>

                    <!-- Card 3: Assistance with home responsibilities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/ts.webp"
                            alt="Assistance with home responsibilities">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Transportation Support</h4>
                            <p class="mt-4 text-purple-800">
                                Wherever life takes you, we are here to make the journey easier, safer, and more
                                comfortable.
                                We provide safe, reliable, and accessible transport to help you get to appointments,
                                social activities,
                                or work. Our vehicles support wheelchair access, and our team offers travel training to
                                help you build
                                confidence using public transport.
                            </p>

                        </div>
                    </div>
                    <!-- Card 3: Assistance with home responsibilities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/st.webp"
                            alt="Assistance with home responsibilities">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Respite Care (Short Term Accommodation)</h4>
                            <p class="mt-4 text-purple-800">
                                Caring for your loved one while you take care of yourself.
                                Our respite care gives carers time to rest, knowing their loved one is in safe,
                                supportive hands.
                                Whether it’s a weekend stay, a planned short break, or an emergency placement, we
                                provide 24/7
                                care in a welcoming, homely environment.
                                We follow the participant’s existing care plan to ensure consistency, comfort, and
                                familiarity, making it
                                feel like a home away from home.
                            </p>

                        </div>
                    </div>
                    <!-- Card 3: Assistance with home responsibilities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/cp.webp"
                            alt="Assistance with home responsibilities">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Community Participation &amp; Integration</h4>
                            <p class="mt-4 text-purple-800">
                                Live your life, your way with support to be part of your community
                                We support NDIS participants to connect with their community, build friendships, and
                                enjoy
                                meaningful activities. Whether it’s joining a local group, learning a new skill, or
                                simply getting out and
                                about, we’re here to help you feel confident and included.
                            </p>

                        </div>
                    </div>
                    <!-- Card 3: Assistance with home responsibilities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/we.webp"
                            alt="Assistance with home responsibilities">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Support Coordination</h4>
                            <p class="mt-4 text-purple-800">
                                Personalised guidance, every step of the way, so you feel confident and in control.
                                Our Support Coordination service helps you make the most of your NDIS plan. We work with
                                you to
                                understand your goals, connect you with the right providers, and ensure your supports
                                are working for
                                you.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Therapeutic Supports Care Section -->
    <div>
        <div class="container mx-auto px-4 py-20">
            <div class="">
                <h3 class="text-3xl font-bold text-purple-900 font-head">
                    Therapeutic Supports
                </h3>
                <hr class="w-32 bg-red-600 h-0.5 border-0 mb-10" />
                <div class=" flex flex-col md:flex-row mt-4 gap-8 items-center">
                    <div class="w-full md:w-1/2">
                        <img class="w-full sm:rounded-xl h-72 object-cover"
                            alt="Unity Life Care team supporting individuals with disabilities" src="/images/man.webp">
                    </div>
                    <div class="w-full md:w-1/2">
                        <p class="  text-lg text-purple-800">
                            We offer gentle, everyday therapeutic supports that help build confidence, reduce stress,
                            and support emotional wellbeing. From art and music therapy to mindfulness, social
                            skill-building, and
                            sensory activities, our sessions are designed to feel safe, supportive, and fun. It’s care
                            that
                            meets you where you are, in ways that feel natural and comforting.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-purple-50 py-20 px-4">
        <div class="container mx-auto">
            <!-- Person-Centered Care Section -->
            <div>
                <h3 class="text-3xl font-bold text-purple-900 font-head">
                    Community Nursing Services
                </h3>
                <hr class="w-32 bg-red-600 h-0.5 border-0 mb-10" />
                <div class=" flex flex-col md:flex-row mt-4 gap-8 items-center">
                    <div class="w-full md:w-1/2">
                        <img class="w-full sm:rounded-xl h-full object-cover"
                            alt="Unity Life Care team supporting individuals with disabilities"
                            src="/images/nurse.webp">
                    </div>
                    <div class="w-full md:w-1/2">
                        <p class="  text-lg text-purple-800">
                            Our Community Nursing Support offers compassionate, professional care in the comfort of your
                            home
                            or local community. Whether you need support with everyday health needs or more complex
                            clinical
                            care, our qualified nurses are here for you, with gentle, respectful care that puts your
                            wellbeing
                            first. <br> <br>
                            We follow your individual care plan and work closely with your family and support team to
                            ensure
                            your
                            needs are met with dignity and understanding. From wound care and medication to continence
                            and
                            chronic condition management, our focus is on your safety, comfort, and independence.

                        </p>
                    </div>
                </div>

                <p class="mt-8  text-lg text-purple-800">
                    Our nurses are also available on-call for urgent needs,
                    providing peace of mind that help is never far
                    away. Whether it’s short-term support or ongoing care, we’re here when you need us most.</p>

                <p class="mt-8  text-xl font-bold text-purple-800">
                    Our services include:</p>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-8 text-purple-800 font-bold ">
                    <div class="bg-purple-900 text-purple-50 text-center py-4 px-2 rounded-xl">
                        <p>Medication administration and management</p>
                    </div>
                    <div class="bg-purple-900 text-purple-50 text-center py-4 px-2 rounded-xl">
                        <p>Wound care and skin integrity support</p>
                    </div>
                    <div class="bg-purple-900 text-purple-50 text-center py-4 px-2 rounded-xl">
                        <p>Diabetes and chronic disease management</p>
                    </div>
                    <div class="bg-purple-900 text-purple-50 text-center py-4 px-2 rounded-xl">
                        <p>Continence assessment and support</p>
                    </div>
                    <div class="bg-purple-900 text-purple-50 text-center py-4 px-2 rounded-xl">
                        <p>Catheter and stoma care</p>

                    </div>
                    <div class="bg-purple-900 text-purple-50 text-center py-4 px-2 rounded-xl">
                        <p>Health assessments and monitoring</p>

                    </div>
                    <div class="bg-purple-900 text-purple-50 text-center py-4 px-2 rounded-xl">
                        <p>Palliative care and end-of-life support</p>

                    </div>
                    <div class="bg-purple-900 text-purple-50 text-center py-4 px-2 rounded-xl">
                        <p>Carer and family education</p>

                    </div>
                    <div class="bg-purple-900 text-purple-50 text-center py-4 px-2 rounded-xl">
                        <p>On-call nursing support for urgent care needs</p>

                    </div>






                </div>
                <p class="mt-8  text-lg text-purple-800">
                    Reliable, caring nursing tailored to you, right where you are.</p>

            </div>

        </div>
    </div>
    <div>
        <div class="container mx-auto py-20 px-4">
            <!-- Financial Wellbeing Section -->
            <div class="">
                <h3 class="text-3xl font-bold text-purple-900 font-head">
                    Financial Wellbeing
                </h3>
                <hr class="w-32 bg-red-600 h-0.5 border-0 mb-10" />
                <div class=" flex flex-col md:flex-row mt-4 gap-8 items-center">
                    <div class="w-full md:w-1/2">
                        <img class="w-full sm:rounded-xl h-full object-cover"
                            alt="Unity Life Care team supporting individuals with disabilities"
                            src="/images/fin.webp">
                    </div>
                    <div class="w-full md:w-1/2">
                        <p class="  text-lg text-purple-800">
                            Struggling with financial stress? We’re here to help.<br> <br>

                            Whether it’s managing debt, tackling the rising cost of living, or navigating the mortgage
                            cliff,
                            our expert guidance can ease the pressure and put you on the path to financial stability.
                            Now let us
                            help you ease the financial stress by creating a plan that works for you.

                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <section>
        <!-- CTA Section -->
        <div class="bg-purple-900 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-white font-head">
                    Ready to Get Started?
                </h2>

                <p class="mt-4 text-lg text-purple-100 max-w-2xl mx-auto">
                    Contact us today to learn more about our services and how we can support you or your loved ones.
                </p>
                <div class="mt-8 flex flex-col md:flex-row items-center gap-8 justify-center">
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
