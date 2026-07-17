<div>
    {{-- Success is as dangerous as failure. --}}
    @livewire('partials.pagehead', ['title' => 'About Us'])
    <section>
        <div
            class="container mx-auto grid grid-cols-1 md:grid-cols-2 mt-12 md:mt-20  mb-0 md:mb-20 gap-12 sm:p-2 place-items-center">
            <div class="w-full h-full">
                <img class="w-full h-full object-cover md:rounded-xl"
                    alt="Unity Life Care team supporting individuals with disabilities" src="/images/about.webp">
            </div>
            <div class="order-first md:order-last p-4 text-purple-800">
                <h2 class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-6">
                    Get To Know Us
                </h2>
                <p class="mb-2">
                    {{-- Unity Life Care is a trusted NDIS-registered provider in Perth, WA, committed to delivering
                    exceptional support for individuals of all abilities. At Unity Life Care, we believe everyone
                    deserves the opportunity to live a fulfilling and empowered life, and we’re here to make that
                    possible. --}}
                    At Unity Lifecare, we are a trusted NDIS provider in Australia. We support people of all abilities
                    to
                    live
                    a happy and full life. Our goal is to help you feel strong, confident, and supported.
                    We offer services that suit your needs, such as:
                </p>
                <p class="mb-2">
                    {{-- Our tailored services are designed to meet the unique needs of each individual, offering support in
                    every aspect of life. From community activities and travel assistance to shared living support, home
                    responsibilities, professional nursing care, and guidance through life’s transitions, we’re
                    dedicated to providing compassionate, reliable, and person-centered care. --}}

                </p>
                <ul class="mb-6 text-purple-800  space-y-2">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Fun activities in the community
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Help with travel
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Support to live in shared homes
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Help with home tasks
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Nursing and health care
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Support during big life changes
                    </li>

                </ul>
                <p class="">
                    Our team is friendly, caring, and always ready to help.<br>
                    At Unity Lifecare, we don’t just give services — we build friendships, support your
                    independence, and create a safe space where you can grow and shine.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-purple-50 pt-6 pb-0 md:pt-6 md:pb-6 text-purple-800">
        <div
            class=" container mx-auto grid grid-cols-1 md:grid-cols-2 mt-12 md:mt-12 mb-0 md:mb-12 gap-12 md:p-2 place-items-center">
            <div class="order-2 w-full h-full">
                <img class="w-full h-full object-cover  md:rounded-xl"
                    alt="Unity Life Care team supporting individuals with disabilities" src="/images/approach.jpg">
            </div>
            <div class=" order-1 p-4">
                <h2 class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-6">
                    Our Approach <br> <span class="text-purple-600">How We Support You</span>
                </h2>
                <p class="mb-2">
                    At Unity Lifecare, you are our priority.
                    We take time to understand what matters to you.
                    Our support is tailored to fit your life.
                </p>
                <p class="mb-2">
                    We can help you with:
                </p>
                <ul class="mb-6 text-purple-800  space-y-2">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Joining activities and events
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Getting to places with travel support
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Living in shared homes
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Cleaning, cooking, and other home tasks
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Nursing and health needs
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Coping with life changes
                    </li>

                </ul>
                <p class="">
                    We use safe and proven ways to support you.
                    We care about your health, feelings, and goals.
                    And we’re always improving to give you the best care.
                </p>


            </div>
        </div>
    </section>
    <section class="w-full bg-purple-900 py-20">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Vision Card -->
            <div
                class="relative bg-purple-800 bg-opacity-50 backdrop-blur-lg p-8 rounded-xl shadow-xl border border-purple-700">
                <div class="flex flex-col ">
                    <div class="flex items-center  gap-4">
                        <!-- Eye Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="w-12 h-12 text-purple-300">
                            <path d="M2.5 12S5.5 6 12 6s9.5 6 9.5 6-3 6-9.5 6S2.5 12 2.5 12Z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                        <h3 class="text-3xl font-bold text-white font-head">Vision</h3>
                    </div>
                    <p class="mt-4 text-lg text-purple-100  leading-relaxed">
                        We want to build a world where everyone—no matter their ability—can: </p>
                    <ul class="mb-6 text-purple-100  space-y-1 text-lg mt-2">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-purple-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Live a happy and independent life
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-purple-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Join in their community
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-purple-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Do well, learn, and grow
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-1 text-purple-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Get the support they need to reach their goals.
                        </li>


                    </ul>


                </div>
            </div>

            <!-- Mission Card -->
            <div data-aos-duration="900"
                class="relative bg-purple-800 bg-opacity-50 backdrop-blur-lg p-8 rounded-xl shadow-xl border border-purple-700">
                <div class="flex flex-col ">
                    <div class="flex items-center  gap-4">
                        <!-- Target Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="w-12 h-12 text-purple-300">
                            <circle cx="12" cy="12" r="10" />
                            <circle cx="12" cy="12" r="6" />
                            <circle cx="12" cy="12" r="2" />
                        </svg>
                        <h3 class="text-3xl font-bold text-white font-head">Mission</h3>
                    </div>
                    <p class="mt-2 text-lg text-purple-100 leading-relaxed">
                        We are here to give strong, caring support to people of all abilities.
                        We help you:
                    </p>
                    <ul class="mb-2 text-purple-100  space-y-1  text-lg mt-2">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-purple-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Live your best life
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-purple-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Reach your goals
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-purple-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Be part of your community
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-1 text-purple-200" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Get the support they need to reach their goals.
                        </li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p class="mt-2 text-lg text-purple-100 leading-relaxed">
                        We treat everyone with respect and fairness, and we always work to do better.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="w-full bg-purple-50 py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-1">Our Core Values
            </h2>
            <hr class="w-32 bg-red-600 h-0.5 border-0 mb-6 mx-auto" />

            <p class="text-lg text-purple-600 max-w-2xl mx-auto">
                These principles guide our mission and define our commitment to excellence.
            </p>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">

            <!-- Integrity Card -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <div class="flex items-center gap-4">
                    <!-- Shield Check Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="w-12 h-12 text-blue-600">
                        <path d="M12 2l8 4v6c0 5-3.5 9-8 10-4.5-1-8-5-8-10V6l8-4z" />
                        <path d="M9 12l2 2 4-4" />
                    </svg>
                    <h3 class="text-2xl font-bold text-purple-900 font-head">Integrity</h3>
                </div>
                <p class="mt-4 text-gray-600">
                    "We are honest and fair. You can trust us."
                </p>
            </div>

            <!-- Excellence Card -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <div class="flex items-center gap-4">
                    <!-- Star Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="w-12 h-12 text-yellow-500">
                        <path d="M12 17.3l-6.2 3.3 1.2-6.8-5-4.9 6.9-1 3-6.3 3 6.3 6.9 1-5 4.9 1.2 6.8z" />
                    </svg>
                    <h3 class="text-2xl font-bold text-purple-900 font-head">Excellence</h3>
                </div>
                <p class="mt-4 text-gray-600">
                    "We do our best and always look for ways to improve."
                </p>
            </div>

            <!-- Innovation Card -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <div class="flex items-center gap-4">
                    <!-- Lightbulb Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="w-12 h-12 text-purple-600">
                        <path d="M9 18h6" />
                        <path d="M10 22h4" />
                        <path
                            d="M12 2a7 7 0 00-7 7c0 2.3 1.2 4.4 3 5.7v.8a2 2 0 002 2h4a2 2 0 002-2v-.8a7 7 0 00-7-12z" />
                    </svg>
                    <h3 class="text-2xl font-bold text-purple-900 font-head">Innovation</h3>
                </div>
                <p class="mt-4 text-gray-600">
                    "We try new ideas to solve problems and make things better."
                </p>
            </div>

            <!-- Teamwork Card -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <div class="flex items-center gap-4">
                    <!-- Users Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="w-12 h-12 text-green-600">
                        <path d="M17 21v-2a4 4 0 00-8 0v2" />
                        <path d="M12 15a4 4 0 110-8 4 4 0 010 8z" />
                        <path d="M21 21v-2a4 4 0 00-3-3.9" />
                        <path d="M3 21v-2a4 4 0 013-3.9" />
                    </svg>
                    <h3 class="text-2xl font-bold text-purple-900 font-head">Teamwork</h3>
                </div>
                <p class="mt-4 text-gray-600">
                    "We work together and help each other succeed."
                </p>
            </div>

            <!-- Customer Focus Card -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <div class="flex items-center gap-4">
                    <!-- Heart Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="w-12 h-12 text-red-500">
                        <path d="M12 21s-7-4.4-7-10a5 5 0 0110 0c0 5.6-7 10-7 10z" />
                    </svg>
                    <h3 class="text-2xl font-bold text-purple-900 font-head">Customer Focus</h3>
                </div>
                <p class="mt-4 text-gray-600">
                    "Your needs come first in everything we do."
                </p>
            </div>

            <!-- Accountability Card -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-200">
                <div class="flex items-center gap-4">
                    <!-- Check Circle Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="w-12 h-12 text-indigo-600">
                        <path d="M9 12l2 2 4-4" />
                        <path d="M12 22a10 10 0 100-20 10 10 0 000 20z" />
                    </svg>
                    <h3 class="text-2xl font-bold text-purple-900 font-head">Accountability</h3>
                </div>
                <p class="mt-4 text-gray-600">
                    "We keep our promises and take responsibility for our actions."
                </p>
            </div>

        </div>
    </section>

    <section>
        <div
            class="container mx-auto grid grid-cols-1 md:grid-cols-2 mt-12 md:mt-20 mb-0 md:mb-20 gap-12 sm:p-2 place-items-center">
            <div>
                <img class="w-full md:rounded-xl" alt="Unity Life Care team supporting individuals with disabilities"
                    src="/images/div.webp">
            </div>
            <div class="order-first sm:order-last p-4 text-purple-800">
                <h2 class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-1">
                    Diversity and Inclusion
                </h2>
                <hr class="w-32 bg-red-600 h-0.5 border-0 mb-6" />

                <p class="mb-2">
                    At Unity Lifecare, we are committed to cultivating a culture of diversity, equity, and inclusion,
                    ensuring that every individual—regardless of background or identity—receives high-quality care and
                    the opportunity to thrive. We embrace the diverse experiences of our clients, team members, and
                    communities, fostering an environment where everyone feels welcome, respected, and valued.
                </p>
                <p class="">
                    Our dedication is reflected in our culturally responsive services, designed to honor and meet the
                    unique needs of each client. We believe that diversity strengthens our work, enabling us to provide
                    more impactful care. Together, we are shaping a more inclusive future where everyone has the
                    opportunity to flourish.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-purple-900 py-20">
        <div class="container  mx-auto px-4 md:px-6 lg:px-8 text-center">
            <!-- Heading -->
            <h2 class="text-4xl  md:text-5xl font-bold text-purple-50 leading-tight font-head">
                Help Us Make a Lasting Impact
            </h2>

            <!-- Description -->
            <p class="mt-6 text-lg text-purple-100 max-w-2xl mx-auto">
                Your referral can change lives. Connect us with individuals in need of care and support, and together,
                we can create a brighter, more inclusive future.
            </p>

            <!-- Button -->
            <div data-aos="fade-up" data-aos-duration="1000" class="mt-10">
                <a wire:navigate href="/visitors-registration"
                    class="inline-block bg-purple-50 text-purple-900 px-9 py-4 rounded-lg font-head font-semibold hover:bg-purple-100 hover:text-purple-950 transition duration-300 shadow-lg hover:shadow-xl border-2 border-purple-200">
                    Refer a Person
                </a>
            </div>
        </div>
    </section>

</div>
