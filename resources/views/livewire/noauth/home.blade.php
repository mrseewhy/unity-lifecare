<style>
    .bg-cover {
        background-size: cover;
        background-position: top center;
    }

    .animate-zoom-in {
        animation: zoom-in 5s ease-in-out forwards;
    }

    .animate-zoom-out {
        animation: zoom-out 5s ease-in-out forwards;
    }

    @keyframes zoom-in {
        0% {
            transform: scale(1);
        }

        100% {
            transform: scale(1.1);
        }
    }

    @keyframes zoom-out {
        0% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }
</style>
<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <section>
        <div x-data="heroBackground()" class="relative w-full h-[70vh] md:h-[90vh] overflow-hidden bg-black/75">

            <!-- Background Images -->
            <template x-for="(image, index) in images" :key="index">
                <div x-show="currentIndex === index" x-transition:enter="transition-opacity duration-1000"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-1000" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" :class="`absolute inset-0 bg-cover bg-right ${image.animation}`"
                    :style="`background-image: url('${image.url}')`">
                    <!-- Dark overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                </div>
            </template>

            <!-- Content -->
            <div class="relative z-10 flex flex-col items-center justify-center h-full px-4 text-center text-white">
                <h1 class="mb-4 text-4xl font-head  font-bold leading-tight md:text-6xl">
                    We Are Here for You
                </h1>
                <p class="max-w-lg mb-8 text-lg md:text-xl font-body ">
                    We are a trusted disability services health provider in Australia. We support people of all
                    abilities to live
                    a happy and full life.
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                    <a wire:navigate href="/visitors-registration"
                        class="px-8 py-3 text-base md:text-lg font-semibold text-white font-head  bg-gradient-to-r from-purple-600  to-purple-950 rounded-lg hover:from-purple-950 hover:to-purple-600 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Participant Intake Form
                        <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a wire:navigate href="/about"
                        class="px-8 py-3 text-base md:text-lg font-semibold font-head bg-purple-950/10 border-2 border-purple-100 rounded-lg hover:bg-white hover:text-purple-900 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        About Unity Lifecare
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2  gap-12  place-items-center pt-20 pb-0 md:pb-20">
            <div class="order-2 md:order-1">
                <img class="w-full sm:rounded-xl" alt="Unity Life Care team supporting individuals with disabilities"
                    src="./images/about.jpg">
            </div>
            <div class=" p-4 text-purple-800">
                <h2 class="text-4xl  md:text-5xl font-bold text-purple-900 leading-tight font-head ">
                    About us
                </h2>
                <hr class="w-32 bg-red-600 h-0.5 border-0 mt-2 mb-6" />

                <p class="mb-4">
                    Unity Lifecare is a trusted disability services health provider in Australia, committed to
                    delivering
                    exceptional support for individuals of all abilities. At Unity Lifecare, we believe everyone
                    deserves the opportunity to live a fulfilling and empowered life, and we’re here to make that
                    possible.
                </p>
                <p class="mb-6">
                    Our tailored services are designed to meet the unique needs of each individual, offering support in
                    every aspect of life. From community activities and travel assistance to shared living support, home
                    responsibilities, professional nursing care, and guidance through life’s transitions, were dedicated
                    to providing compassionate, reliable, and person-centered care.
                </p>

                <a wire:navigate href="/about"
                    class="inline-block px-8 py-4 bg-gradient-to-r from-purple-700  to-purple-900 text-purple-50 rounded-lg font-head font-bold hover:from-purple-600 hover:to-purple-800 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Read More About Us
                </a>
            </div>
        </div>
    </section>
    <section class="bg-gradient-to-r from-white to-purple-100 py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Heading and Description -->
            <div class="text-center">
                <h2 class="text-4xl  md:text-5xl font-bold text-purple-900 leading-tight font-head">
                    Why Choose Us?
                </h2>
                <hr class="w-32 bg-red-600 h-0.5 border-0 mt-2 mb-6 mx-auto" />

                <p class="mt-4 text-lg text-purple-800 max-w-2xl mx-auto">
                    We are committed to providing exceptional care and support tailored to your unique needs and
                    abilities. Here’s why
                    we stand out.
                </p>
            </div>

            <!-- Reasons Grid -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Reason 1 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div
                        class="text-purple-50 mb-4 bg-red-600 w-16 h-16 flex items-center justify-center rounded-full hover:-translate-y-1 transition-all duration:300 shadow-md shadow-black/70">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-purple-950 mb-4 font-head">Experienced Professionals</h3>
                    <p class="text-purple-800">
                        Our team consists of highly trained and compassionate professionals dedicated to delivering the
                        best care.
                    </p>
                </div>

                <!-- Reason 2 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div
                        class="text-purple-50 mb-4 bg-red-600 w-16 h-16 flex items-center justify-center rounded-full hover:-translate-y-1 transition-all duration:300 shadow-md shadow-black/70">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-purple-950 mb-4 font-head">Tailored Services</h3>
                    <p class="text-purple-800">
                        We offer personalized services designed to meet your specific needs and goals.
                    </p>
                </div>

                <!-- Reason 3 -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div
                        class="text-purple-50 mb-4 bg-red-600 w-16 h-16 flex items-center justify-center rounded-full hover:-translate-y-1 transition-all duration:300 shadow-md shadow-black/70">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-purple-950 mb-4 font-head">Community Focused</h3>
                    <p class="text-purple-800">
                        We believe in building strong, supportive communities where everyone can thrive.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-purple-900 py-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 ">
            <!-- Heading and Description -->
            <div class="text-center">
                <h2 class="text-4xl  md:text-5xl font-bold text-purple-50 leading-tight font-head">
                    Our Services
                </h2>
                <p class="mt-4  text-lg text-purple-200 max-w-2xl mx-auto">
                    We provide a range of services designed to empower individuals and enhance their quality of life
                    despite their disabilities.
                    Here’s what we offer.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="mt-12 sm:mt-20 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Service 1: NDIS Services -->
                <div
                    class="bg-white rounded-xl shadow-lg shadow-purple-300/10 hover:shadow-xl hover:shadow-purple-300/40 transition-all duration-300 hover:-translate-y-1">
                    <img class="w-full h-68 object-cover rounded-t-xl" src="/images/1.jpg" alt="NDIS Services">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-purple-950 mt-2 mb-4 font-head">
                            NDIS Services
                        </h3>
                        <p class="text-purple-800 mb-4">
                            At Unity Lifecare, we specialize in turning your NDIS plan into real-world results. Whether
                            you're looking for daily support, therapy services, or help navigating the system, our team
                            works with you to implement your plan effectively and efficiently.
                        </p>

                    </div>
                </div>

                <!-- Service 2: Therapeutic Supports -->
                <div
                    class="bg-white rounded-xl shadow-lg shadow-purple-300/10 hover:shadow-xl hover:shadow-purple-300/40 transition-all duration-300 hover:-translate-y-1">
                    <img class="w-full h-68 object-cover rounded-t-xl" src="/images/2.jpg" alt="Therapeutic Supports">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-purple-950 mt-2 mb-4 font-head">

                            Therapeutic Supports
                        </h3>
                        <p class="text-purple-800 mb-4">
                            We offer gentle, everyday therapeutic supports that help build confidence, reduce stress,
                            and support emotional wellbeing. From art and music therapy to mindfulness, social
                            skill-building, physical and sensory activities, our sessions are designed to feel safe,
                            supportive,
                            and fun. It’s care that meets you where you are, in ways that feel natural and comforting.
                        </p>

                    </div>
                </div>

                <!-- Service 3: Community Integration -->
                <div
                    class="bg-white rounded-xl shadow-lg shadow-purple-300/10 hover:shadow-xl hover:shadow-purple-300/40 transition-all duration-300 hover:-translate-y-1">
                    <img class="w-full h-68 object-cover rounded-t-xl" src="./images/nurse.webp"
                        alt="Community Integration">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-purple-950 mt-2 mb-4 font-head">

                            Community Nursing Services
                        </h3>
                        <p class="text-purple-800 mb-4">
                            Our Community Nursing Support offers compassionate, professional care in the comfort of your
                            home or local community. Whether you need support with everyday health needs or more complex
                            clinical care, our qualified nurses are here for you, with gentle, respectful care that puts
                            your wellbeing first.
                        </p>

                    </div>
                </div>

                <!-- Service 4: Financial Wellbeing -->
                <div
                    class="bg-white rounded-xl shadow-lg shadow-purple-300/10 hover:shadow-xl hover:shadow-purple-300/40 transition-all duration-300 hover:-translate-y-1">
                    <img class="w-full h-68 object-cover rounded-t-xl" src="./images/4.jpg"
                        alt="Community Integration">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-purple-950 mt-2 mb-4 font-head">

                            Financial Wellbeing
                        </h3>
                        <p class="text-purple-800 mb-4">
                            Struggling with financial stress? We’re here to help. Whether it’s managing debt, tackling
                            the rising cost of living, or navigating the mortgage cliff, our expert guidance can ease
                            the pressure and put you on the path to financial stability.</p>

                    </div>
                </div>
            </div>

            <!-- Read More Button -->
            <div class="text-center mt-16">

                <a wire:navigate href="/services"
                    class="px-8 py-3 text-base md:text-lg text-purple-900 font-semibold font-head bg-purple-50 border-2 border-purple-100 rounded-lg hover:bg-purple-200  transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Read More About Our Services
                </a>
            </div>
        </div>
    </section>

    <section class="w-full bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <!-- Left Side: Image -->
            <div class="w-full h-64 lg:h-auto">
                <img class="w-full h-full object-cover" src="/images/cta.jpg" alt="Join Us in Making a Difference" />
            </div>

            <!-- Right Side: Content -->
            <div class="w-full flex items-center justify-center p-8 lg:p-12">
                <div class=" md:mt-16">
                    <!-- Heading -->
                    <h2 class="text-4xl  md:text-5xl font-bold text-purple-900 leading-tight font-head">
                        Help Us Make a Difference
                    </h2>
                    <hr class="w-32 bg-red-600 h-0.5 border-0 mt-2 mb-6" />

                    <!-- Description -->
                    <p class="mt-4 text-base md:text-lg text-purple-800">
                        At Unity Lifecare, every connection you share helps us reach those who need support the most.
                        When you refer someone to us, you’re not just sharing information—you’re opening doors to care,
                        opportunity, and hope.


                    </p>
                    <p class="text-base md:text-lg text-purple-800 mt-4">

                        Together, we can create a brighter future.<br />
                        Join us—and help build a network of compassion, one referral at a time.
                    </p>

                    <!-- Button -->
                    <div class="mt-10 mb-12">

                        <a wire:navigate href="/visitors-registration"
                            class="px-8 py-3 text-base md:text-lg font-semibold text-white font-head  bg-gradient-to-r from-purple-600  to-purple-950 rounded-lg hover:from-purple-950 hover:to-purple-600 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            Refer Someone Now
                            <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full bg-purple-50 py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Title -->
            <h2 class="text-4xl  md:text-5xl font-bold text-purple-900 leading-tight font-head text-center">
                Frequently Asked Questions
            </h2>
            <hr class="w-32 bg-red-600 h-0.5 border-0 mt-2 mb-6 mx-auto" />

            <!-- FAQs Grid -->
            <div class="mt-20 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- FAQ 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-xl font-bold text-purple-950 mb-4">What services do you offer?</h3>
                    <p class="text-purple-800">
                        We offer a range of services including NDIS services, therapeutic support, community nursing and
                        financial wellbeing. Each service is tailored to meet individual needs.
                    </p>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-xl font-bold text-purple-950 mb-4">How can I make a referral?</h3>
                    <p class="text-purple-800">
                        You can make a referral by clicking the "Participant Intake Form" or 'Get Started Here' button
                        on our website or contacting us
                        directly via phone or email.
                    </p>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-xl font-bold text-purple-950 mb-4">Are your services NDIS-registered?</h3>
                    <p class="text-purple-800">
                        Yes, we are a registered NDIS provider. We are committed to delivering high-quality, compliant
                        services to our clients.
                    </p>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-xl font-bold text-purple-950 mb-4">How do you ensure quality care?</h3>
                    <p class="text-purple-800">
                        We ensure quality care through regular training, client feedback, and adherence to industry
                        standards. Our team is dedicated to continuous improvement.
                    </p>
                </div>
            </div>

            <!-- Read More Button -->
            <div class="mt-16 text-center">

                <a wire:navigate href="/faqs"
                    class="px-8 py-3 text-base md:text-lg font-semibold text-white font-head  bg-gradient-to-r from-purple-600  to-purple-950 rounded-lg hover:from-purple-950 hover:to-purple-600 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Read More FAQs
                </a>
            </div>
        </div>
    </section>


    <section class="w-full bg-purple-900 py-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Heading -->
            <h2 class="text-4xl  md:text-5xl font-bold text-purple-50 leading-tight font-head">
                Get in Touch
            </h2>
            <p class="mt-4 text-lg text-purple-100 max-w-2xl mx-auto">
                We are here to assist you. Reach out to us through any of the following channels.
            </p>

            <!-- Contact Cards -->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Phone Card -->
                <div
                    class="bg-purple-100 p-6 rounded-lg shadow-lg flex flex-col  space-x-4 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center gap-4">
                        <div
                            class="text-purple-50 mb-4 bg-red-600 w-8 h-8 flex items-center justify-center rounded-full hover:-translate-y-1 transition-all duration:300 shadow-md shadow-black/70">
                            <!-- Heroicons: Phone -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>

                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-purple-900 font-head -mt-2">Phone</h3>
                        </div>
                    </div>
                    <div class="text-left mt-2">

                        <p class="text-purple-800 font-semibold">
                            <a href="tel:+6147616440" class="hover:text-purple-600">+61 476 164 40</a>
                        </p>
                        <p class="text-purple-800 font-semibold ">
                            <a href="tel:+61470181583" class="hover:text-purple-600">+61 470 181 583</a>
                        </p>
                    </div>
                </div>

                <!-- Email Card -->
                <div
                    class="bg-purple-100 p-6 rounded-lg shadow-lg flex flex-col space-x-4 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center gap-4">
                        <div
                            class="text-purple-50 mb-4 bg-red-600 w-8 h-8 flex items-center justify-center rounded-full hover:-translate-y-1 transition-all duration:300 shadow-md shadow-black/70">
                            <!-- Heroicons: Envelope -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-purple-900 font-head -mt-2">Email</h3>
                        </div>
                    </div>
                    <div class="text-left mt-2">
                        <p class="text-purple-800 font-semibold">
                            <a href="mailto:admin@unitylifecare.com.au"
                                class="hover:text-purple-600">admin@unitylifecare.com.au</a>
                        </p>
                        <p class="text-purple-800 font-semibold invisible">
                            <a href="mailto:admin@unitylifecare.com.au"
                                class="hover:text-purple-600">admin@unitylifecare.com.au</a>
                        </p>
                    </div>
                </div>

                <!-- Location Card -->
                <div
                    class="bg-purple-100 p-6 rounded-lg shadow-lg flex flex-col space-x-4 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center gap-4">
                        <div
                            class="text-purple-50 mb-4 bg-red-600 w-8 h-8 flex items-center justify-center rounded-full hover:-translate-y-1 transition-all duration:300 shadow-md shadow-black/70">
                            <!-- Heroicons: Map Pin -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-purple-900 font-head -mt-2">Location</h3>
                        </div>
                    </div>
                    <div class="text-left mt-2">
                        <p class="text-purple-800 text-sm">
                            <span class="font-bold text-base">Perth:</span> 50/11 Tanunda drive Rivervale WA 6103
                        </p>
                        <p class="text-purple-800 text-sm ">
                            <span class="font-bold text-base">Canberra:</span> 54A Ragless Circuit Kambah ACT2902
                        </p>
                    </div>
                </div>

                <!-- Chat Card -->
                <div
                    class="bg-purple-100 p-6 rounded-lg shadow-lg flex flex-col space-x-4 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center gap-4">
                        <div
                            class="text-purple-50 mb-4 bg-red-600 w-8 h-8 flex  items-center justify-center rounded-full hover:-translate-y-1 transition-all duration:300 shadow-md shadow-black/70">
                            <!-- Heroicons: ChatAlt2 -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-purple-900 font-head text-left -mt-2">Have a Message?
                            </h3>
                        </div>
                    </div>
                    <div class="text-left mt-2">
                        <p class="text-purple-800 font-semibold">
                            <a wire:navigate href="/contact" class="underline hover:text-purple-600">Send us a
                                message</a>
                        </p>
                        <p class="text-purple-800 font-semibold invisible">
                            <a wire:navigate href="/contact" class="underline hover:text-purple-600">Send us a
                                message</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script>
    function heroBackground() {
        return {
            currentIndex: 0,
            images: [{
                    url: '/images/hero1.webp',
                    animation: 'animate-zoom-out'
                },
                {
                    url: '/images/hero2.webp',
                    animation: 'animate-zoom-in'
                },
                {
                    url: '/images/hero3.webp',
                    animation: 'animate-zoom-out'
                }
            ],
            init() {
                this.startSlideshow();
            },
            startSlideshow() {
                setInterval(() => {
                    this.currentIndex = (this.currentIndex + 1) % this.images.length;
                }, 5000);
            }
        }
    }
</script>
