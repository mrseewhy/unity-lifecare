<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @livewire('partials.pagehead', ['title' => 'Our Services'])
    <section class="w-full bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Headline and Description -->
            <div class=" grid grid-cols-1 sm:grid-cols-2 mt-6 mb-0 sm:mb-20 gap-12 place-items-center">
                <div data-aos="flip-left" data-aos-duration="800">
                    <img class="w-full sm:rounded-xl" alt="Unity Life Care team supporting individuals with disabilities"
                        src="/images/services.jpg">
                </div>
                <div class="order-first sm:order-last p-4">
                    <h2 class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-4">
                        Here’s What We Offer
                    </h2>
                    <p class="mb-4 text-purple-800">
                        At Unity Life Care, everyone is welcome.
                        We support people from all backgrounds, cultures, and identities.
                        We make sure our services:
                        respect your culture, language, and beliefs

                        meet your personal needs
                        make you feel safe, respected, and included
                        We believe that diversity makes us stronger and helps us give better support.
                    </p>
                    <p class="mb-4 text-purple-800 text-xl font-semibold">
                        Help Us Make a Difference
                    </p>
                    <p class="mb-4 text-purple-800"> Do you know someone who needs support?
                        Send them our way. Your referral can help change a life.
                        Together, we can build a brighter and more inclusive future for everyone
                    </p>
                    <p>
                        <a wire:navigate href="/visitors-registration"
                            class="inline-block w-56 bg-purple-900 text-purple-50 border-2 border-purple-100 text-center px-4 py-4 rounded-lg font-head font-semibold hover:bg-purple-50 hover:text-purple-950 transition duration-300 shadow-lg hover:shadow-xl">
                            Register a Participant
                        </a>
                    </p>
                </div>
            </div>

            <!-- NDIS Services Section -->
            <div class="mt-16">
                <h3 class="text-3xl font-bold text-purple-900 font-head">
                    NDIS Services
                </h3>
                <p class="mt-4  text-lg text-purple-800">
                    At Unity Life Care, we specialize in turning your NDIS plan into real-world results. Whether you're
                    looking for daily support, therapy services, or help navigating the system, our team works with you
                    to implement your plan effectively and efficiently.
                    {{-- <a wire:navigate href="/people-centered-care"
                        class=" inline-block text-purple-600 hover:text-purple-700 font-semibold">
                        → Read More
                    </a> --}}
                </p>

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
                            {{-- <a wire:navigate href="/nursing-care"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a> --}}
                        </div>
                    </div>

                    <!-- Card 3: Assistance with home responsibilities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/home.jpg"
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
                            {{-- <a wire:navigate href="/home-responsibilities"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a> --}}
                        </div>
                    </div>
                    <!-- Card 3: Assistance with home responsibilities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/home.jpg"
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
                            {{-- <a wire:navigate href="/home-responsibilities"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a> --}}
                        </div>
                    </div>
                    <!-- Card 3: Assistance with home responsibilities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/home.jpg"
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
                            {{-- <a wire:navigate href="/home-responsibilities"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a> --}}
                        </div>
                    </div>
                    <!-- Card 3: Assistance with home responsibilities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/home.jpg"
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
                            {{-- <a wire:navigate href="/home-responsibilities"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>


            <!-- Therapeutic Supports Care Section -->
            <div class="mt-16">
                <h3 class="text-3xl font-bold text-purple-900 font-head">
                    Therapeutic Supports
                </h3>
                <p class="mt-4  text-lg text-purple-800">
                    We offer gentle, everyday therapeutic supports that help build confidence, reduce stress, and
                    support
                    emotional wellbeing. From art and music therapy to mindfulness, social skill-building, and sensory
                    activities, our sessions are designed to feel safe, supportive, and fun. It’s care that meets you
                    where
                    you are, in ways that feel natural and comforting.
                    {{-- <a wire:navigate href="/people-centered-care"
                        class=" inline-block text-purple-600 hover:text-purple-700 font-semibold">
                        → Read More
                    </a> --}}
                </p>

                {{-- <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1: Support through life’s transitions -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/support.jpg"
                            alt="Support through life’s transitions">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Support through life’s transitions</h4>
                            <p class="mt-4 text-purple-800">
                                We provide guidance and support to help individuals navigate life’s changes with
                                confidence.
                            </p>
                            <a wire:navigate href="/support-transitions"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More 
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: Professional nursing care in the community -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/nurse.jpg"
                            alt="Professional nursing care in the community">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Professional nursing care in the community
                            </h4>
                            <p class="mt-4 text-purple-800">
                                Our skilled nurses provide high-quality care in the comfort of your home or community.
                            </p>
                            <a wire:navigate href="/nursing-care"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More 
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: Assistance with home responsibilities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
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
                </div> --}}
            </div>


            <!-- Person-Centered Care Section -->
            <div class="mt-16">
                <h3 class="text-3xl font-bold text-purple-900 font-head">
                    Community Nursing Services
                </h3>
                <p class="mt-4  text-lg text-purple-800">
                    Our Community Nursing Support offers compassionate, professional care in the comfort of your home
                    or local community. Whether you need support with everyday health needs or more complex clinical
                    care, our qualified nurses are here for you, with gentle, respectful care that puts your wellbeing
                    first.
                    We follow your individual care plan and work closely with your family and support team to ensure
                    your
                    needs are met with dignity and understanding. From wound care and medication to continence and
                    chronic condition management, our focus is on your safety, comfort, and independence.
                    {{-- <a
                        wire:navigate href="/people-centered-care"
                        class=" inline-block text-purple-600 hover:text-purple-700 font-semibold">
                        → Read More
                    </a> --}}
                </p>
                <p class="mt-4  text-lg text-purple-800">
                    Our nurses are also available on-call for urgent needs,
                    providing peace of mind that help is never far
                    away. Whether it’s short-term support or ongoing care, we’re here when you need us most.</p>

                <p class="mt-4  text-lg text-purple-800">
                    Our services include:</p>
                <div class="mt-2 grid grid-cols-1 md:grid-cols-3 gap-4 text-purple-800 font-bold ">
                    <p>Medication administration and management</p>
                    <p>Wound care and skin integrity support</p>
                    <p>Diabetes and chronic disease management</p>
                    <p>Continence assessment and support</p>
                    <p>Catheter and stoma care</p>
                    <p>Health assessments and monitoring</p>
                    <p>Palliative care and end-of-life support</p>
                    <p>Carer and family education</p>
                    <p>On-call nursing support for urgent care needs</p>
                </div>
                <p class="mt-4  text-lg text-purple-800">
                    Reliable, caring nursing tailored to you, right where you are.</p>


            </div>


            {{-- <!-- Person-Centered Care Section -->
            <div class="mt-16">
                <h3 class="text-3xl font-bold text-purple-900 font-head">
                    Person-Centered Care
                </h3>
                <p class="mt-4  text-lg text-purple-800">
                    At Unity Life Care, our Person-Centered Care approach is built on the belief that every individual
                    deserves personalized support tailored to their unique needs, preferences, and goals. We work
                    closely with each person to create a customized care plan that empowers them to live a fulfilling
                    and independent life. <a wire:navigate href="/people-centered-care"
                        class=" inline-block text-purple-600 hover:text-purple-700 font-semibold">
                        → Read More
                    </a>
                </p>

                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1: Support through life’s transitions -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/support.jpg"
                            alt="Support through life’s transitions">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Support through life’s transitions</h4>
                            <p class="mt-4 text-purple-800">
                                We provide guidance and support to help individuals navigate life’s changes with
                                confidence.
                            </p>
                            <a wire:navigate href="/support-transitions"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More 
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: Professional nursing care in the community -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/nurse.jpg"
                            alt="Professional nursing care in the community">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Professional nursing care in the community
                            </h4>
                            <p class="mt-4 text-purple-800">
                                Our skilled nurses provide high-quality care in the comfort of your home or community.
                            </p>
                            <a wire:navigate href="/nursing-care"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More 
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: Assistance with home responsibilities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
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

            <!-- Daily Life Tasks Support Section -->
            <div class="mt-16">
                <h3 class="text-3xl font-bold text-purple-900 font-head">
                    Daily Life Tasks Support
                </h3>
                <p class="mt-4 text-lg text-purple-800">
                    Daily Life Tasks Support at Unity Life Care is designed to help individuals manage their everyday
                    responsibilities with ease and confidence. From meal preparation and household chores to personal
                    care and shared living arrangements, our team provides practical assistance that enhances
                    independence and improves quality of life. <a wire:navigate href="/daily-life-tasks-support"
                        class=" inline-block text-purple-600 hover:text-purple-700 font-semibold">
                        → Read More
                    </a>
                </p>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1: Help with everyday shared living -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/shared.jpg"
                            alt="Help with everyday shared living">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Help with everyday shared living</h4>
                            <p class="mt-4 text-purple-800">
                                We provide support for individuals living in shared environments to foster harmony and
                                independence.
                            </p>
                            <a wire:navigate href="/shared-living"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: Assistance with home responsibilities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/daily2.jpg"
                            alt="Assistance with home responsibilities">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Assistance with home responsibilities</h4>
                            <p class="mt-4 text-purple-800">
                                From cleaning to meal preparation, we help with all aspects of home management.
                            </p>
                            <a wire:navigate href="/home-tasks"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: Engaging in community activities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/community.jpg"
                            alt="Engaging in community activities">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Engaging in community activities</h4>
                            <p class="mt-4 text-purple-800">
                                We encourage and support participation in community events and social activities.
                            </p>
                            <a wire:navigate href="/community-activities"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Community Integration Section -->
            <div class="mt-16">
                <h3 class="text-3xl font-bold text-purple-900 font-head">
                    Community Integration
                </h3>
                <p class="mt-4 text-lg text-purple-800">
                    Community Integration is a cornerstone of our services at Unity Life Care. We believe that
                    meaningful connections and active participation in the community are essential for a fulfilling
                    life. Our programs are designed to help individuals build relationships, explore new opportunities,
                    and engage in social activities that bring joy and purpose. <a wire:navigate
                        href="/community-integration"
                        class=" inline-block text-purple-600 hover:text-purple-700 font-semibold">
                        → Read More
                    </a> </p>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1: Support with travel needs -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/travel.jpg"
                            alt="Support with travel needs">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Support with travel needs</h4>
                            <p class="mt-4 text-purple-800">
                                We assist with transportation to ensure individuals can access community resources and
                                events.
                            </p>
                            <a wire:navigate href="/travel-support"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: Engaging in community activities -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/community3.jpg"
                            alt="Engaging in community activities">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Engaging in community activities</h4>
                            <p class="mt-4 text-purple-800">
                                We encourage participation in local events, workshops, and social gatherings.
                            </p>
                            <a wire:navigate href="/community-engagement"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: Household Tasks -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/house.jpg"
                            alt="Household Tasks">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Household Tasks</h4>
                            <p class="mt-4 text-purple-800">
                                We provide assistance with household chores to maintain a clean and organized living
                                space.
                            </p>
                            <a wire:navigate href="/household-tasks"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More 
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}


            <!-- Financial Wellbeing Section -->
            <div class="mt-16">
                <h3 class="text-3xl font-bold text-purple-900 font-head">
                    Financial Wellbeing
                </h3>
                <p class="mt-4 text-lg text-purple-800">
                    Struggling with financial stress? We’re here to help.

                    Whether it’s managing debt, tackling the rising cost of living, or navigating the mortgage cliff,
                    our expert guidance can ease the pressure and put you on the path to financial stability. Now let us
                    help you ease the financial stress by creating a plan that works for you.
                    {{-- <a wire:navigate
                        href="/financial-wellbeing"
                        class=" inline-block text-purple-600 hover:text-purple-700 font-semibold">
                        → Read More
                    </a> --}}
                </p>
                {{-- <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1: Financial Counselling -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/counselling.jpg"
                            alt="Financial Counselling">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Financial Counselling</h4>
                            <p class="mt-4 text-purple-800">
                                We provide expert guidance to help manage debt and navigate financial challenges
                                effectively.
                            </p>
                            <a wire:navigate href="/financial-counselling"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More 
                            </a>
                        </div>
                    </div>

                    <!-- Card 2: Financial Coaching -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/coaching.jpg"
                            alt="Financial Coaching">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Financial Coaching</h4>
                            <p class="mt-4 text-purple-800">
                                We offer personalized strategies to help you build confidence and control over your
                                finances.
                            </p>
                            <a wire:navigate href="/financial-coaching"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a>
                        </div>
                    </div>

                    <!-- Card 3: Financial Literacy Workshops -->
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <img class="w-full h-60 object-cover rounded-t-lg" src="/images/literacy.jpg"
                            alt="Financial Literacy Workshops">
                        <div class="p-6">
                            <h4 class="text-xl font-bold text-purple-900">Financial Literacy Workshops</h4>
                            <p class="mt-4 text-purple-800">
                                We teach essential skills to make informed and sustainable financial decisions and help
                                you in your finances.
                            </p>
                            <a wire:navigate href="/financial-literacy-workshops"
                                class="mt-4 inline-block text-purple-600 hover:text-purple-700 font-semibold">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>

            <!-- CTA Section -->

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
