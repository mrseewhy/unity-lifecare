<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <nav class="bg-white shadow-md" x-data="{ isOpen: false }">
        <!-- Mobile top section -->
        <div class="flex justify-end bg-purple-900 p-2 lg:hidden">
            <a wire:navigate href="/visitors-registration"
                class="inline-block text-sm bg-purple-50 text-purple-900 px-5 py-2 rounded-lg font-head font-semibold hover:bg-purple-100 hover:text-purple-950 transition duration-300 shadow-lg hover:shadow-xl border-2 border-purple-200">
                Get Started Here
            </a>
        </div>

        <div class="mx-auto w-full px-2 sm:px-2 md:w-11/12 lg:px-8">
            <div class="flex h-20 justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a wire:navigate href="/" class="flex flex-shrink-0 items-center">
                        <img class="h-16 " src="{{ asset('images/logo.png') }}" alt="Logo" />
                        {{-- <span class="font-head ml-2 text-xl font-bold text-purple-950 md:text-2xl">Logo</span> --}}
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex lg:items-center lg:space-x-6">
                    <!-- Home Link -->
                    <a wire:navigate href="/"
                        class="{{ request()->is('/') ? ' border-b-2 border-purple-500' : '' }} font-head font-medium text-purple-950 hover:text-purple-800">
                        Home
                    </a>

                    <!-- About Link -->
                    <a wire:navigate href="/about"
                        class="{{ request()->is('about') ? ' border-b-2 border-purple-500' : '' }} font-medium font-head text-purple-950 hover:text-purple-800">
                        About
                    </a>

                    <!-- Services Dropdown -->
                    <div class="relative z-50" x-data="{ open: false, subOpen: false }">
                        <!-- Main Link -->
                        <a wire:navigate href="/services"
                            class="{{ request()->is('services') ? ' border-b-2 border-purple-500' : '' }} font-medium font-head text-purple-950 hover:text-purple-800">
                            Services
                        </a>

                        <!-- Toggle Button -->
                        {{-- <button @click="open = !open" aria-label="Toggle services dropdown" aria-haspopup="true"
                            :aria-expanded="open" class="text-purple-950 hover:text-purple-700 focus:outline-none">
                            <svg class="inline-block h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button> --}}

                        <!-- Dropdown Menu -->
                        {{-- <div x-show="open" @click.away="open = false" x-transition
                            class="absolute left-0 mt-2 w-96 rounded-md bg-gray-100 py-1 shadow-lg" role="menu">
                            <!-- Person-Centered Care -->
                            <div class="relative" x-data="{ subOpen: false }">

                                <button @click="subOpen = !subOpen"
                                    class="w-full text-left flex justify-between items-center px-4 py-2 text-purple-950 font-medium font-head hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                    role="menuitem" tabindex="0">
                                    <a wire:navigate href="/people-centered-care"> Person-Centered Care</a>
                                    <svg class="h-5 w-5 transition-transform duration-200"
                                        :class="{ 'rotate-90': subOpen }" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <!-- Submenu -->
                                <div x-show="subOpen" @click.away="subOpen = false" x-transition
                                    class="absolute left-full top-0 w-96 rounded-md bg-gray-100 py-1 shadow-lg"
                                    role="menu">
                                    <a wire:navigate href="/support-transitions"
                                        class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                        role="menuitem" tabindex="0">
                                        Support through life’s transitions
                                    </a>
                                    <a wire:navigate href="/nursing-care"
                                        class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                        role="menuitem" tabindex="0">
                                        Professional nursing care in the community
                                    </a>
                                    <a wire:navigate href="/home-responsibilities"
                                        class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                        role="menuitem" tabindex="0">
                                        Assistance with home responsibilities
                                    </a>
                                </div>
                            </div>

                            <!-- Daily Life Tasks Support -->
                            <div class="relative" x-data="{ subOpen: false }">
                                <button @click="subOpen = !subOpen"
                                    class="w-full text-left flex justify-between items-center px-4 py-2 text-purple-950 font-medium font-head hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                    role="menuitem" tabindex="0">
                                    <a wire:navigate href="/daily-life-tasks-support"> Daily Life Tasks Support </a>
                                    <svg class="h-5 w-5 transition-transform duration-200"
                                        :class="{ 'rotate-90': subOpen }" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <!-- Submenu -->
                                <div x-show="subOpen" @click.away="subOpen = false" x-transition
                                    class="absolute left-full top-0 w-96 rounded-md bg-gray-100 py-1 shadow-lg"
                                    role="menu">
                                    <a wire:navigate href="/shared-living"
                                        class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                        role="menuitem" tabindex="0">
                                        Help with everyday shared living
                                    </a>
                                    <a wire:navigate href="/home-tasks"
                                        class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                        role="menuitem" tabindex="0">
                                        Assistance with home responsibilities
                                    </a>
                                    <a wire:navigate href="/community-activities"
                                        class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                        role="menuitem" tabindex="0">
                                        Engaging in community activities
                                    </a>
                                </div>
                            </div>

                            <!-- Community Integration -->
                            <div class="relative" x-data="{ subOpen: false }">
                                <button @click="subOpen = !subOpen"
                                    class="w-full text-left flex justify-between items-center px-4 py-2 text-purple-950 font-medium font-head hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                    role="menuitem" tabindex="0">
                                    <a wire:navigate href="/community-integration">Community Integration</a>
                                    <svg class="h-5 w-5 transition-transform duration-200"
                                        :class="{ 'rotate-90': subOpen }" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <!-- Submenu -->
                                <div x-show="subOpen" @click.away="subOpen = false" x-transition
                                    class="absolute left-full top-0 w-96 rounded-md bg-gray-100 py-1 shadow-lg"
                                    role="menu">
                                    <a wire:navigate href="/travel-support"
                                        class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                        role="menuitem" tabindex="0">
                                        Support with travel needs
                                    </a>
                                    <a wire:navigate href="/community-engagement"
                                        class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                        role="menuitem" tabindex="0">
                                        Engaging in community activities
                                    </a>
                                    <a wire:navigate href="/household-tasks"
                                        class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                        role="menuitem" tabindex="0">
                                        Household Tasks
                                    </a>
                                </div>
                            </div>
                            <!-- Financial Wellbeing -->
                            <div class="relative" x-data="{ subOpen: false }">
                                <button @click="subOpen = !subOpen"
                                    class="w-full text-left flex justify-between items-center px-4 py-2 text-purple-950 font-medium font-head hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                    role="menuitem" tabindex="0">
                                    <a wire:navigate href="/financial-wellbeing">Financial Wellbeing</a>
                                    <svg class="h-5 w-5 transition-transform duration-200"
                                        :class="{ 'rotate-90': subOpen }" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <!-- Submenu -->
                                <div x-show="subOpen" @click.away="subOpen = false" x-transition
                                    class="absolute left-full top-0 w-96 rounded-md bg-gray-100 py-1 shadow-lg"
                                    role="menu">
                                    <a wire:navigate href="/financial-counselling"
                                        class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                        role="menuitem" tabindex="0">
                                        Financial Counselling
                                    </a>
                                    <a wire:navigate href="/financial-coaching"
                                        class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                        role="menuitem" tabindex="0">
                                        Financial Coaching
                                    </a>
                                    <a wire:navigate href="/financial-literacy-workshops"
                                        class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                        role="menuitem" tabindex="0">
                                        Financial Literacy Workshops
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <!-- FAQs Link -->
                    <a wire:navigate href="/faqs"
                        class="{{ request()->is('faqs') ? 'border-b-2 border-purple-500' : '' }} font-medium font-head text-purple-950 hover:text-purple-800">
                        FAQs
                    </a>

                    <!-- Careers Link -->
                    <a wire:navigate href="/careers"
                        class="{{ request()->is('careers') ? 'border-b-2 border-purple-500' : '' }} font-medium font-head text-purple-950 hover:text-purple-800">
                        Careers
                    </a>

                    <!-- Contact Link -->
                    <a wire:navigate href="/contact"
                        class="{{ request()->is('contact') ? 'border-b-2 border-purple-500' : '' }} font-medium font-head text-purple-950 hover:text-purple-800">
                        Contact
                    </a>

                    <!-- Resources Dropdown -->
                    <div class="relative z-50" x-data="{ open: false }">
                        <button @click="open = !open" aria-label="Toggle resources dropdown" aria-haspopup="true"
                            :aria-expanded="open" class="font-medium font-head text-purple-950 hover:text-purple-800">
                            Resources
                            <svg class="inline-block h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="open" @click.away="open = false"
                            class="absolute left-0 mt-2 w-96 rounded-md bg-gray-100 py-1 shadow-lg" role="menu">
                            <a wire:navigate href="/blog"
                                class="block font-medium font-head px-4 py-2 text-purple-950 hover:bg-purple-900 hover:text-white hover:pl-6 transition-all duration-200"
                                role="menuitem" tabindex="0">
                                Blog
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Desktop CTA Button -->
                <div class="hidden lg:flex lg:items-center">

                    <a wire:navigate href="/visitors-registration"
                        class="inline-block bg-purple-900 text-white px-9 py-4 rounded-lg font-head font-semibold hover:bg-purple-800 hover:text-purple-50 transition duration-300 shadow-lg hover:shadow-xl border-2 border-purple-200">
                        Get Started Here
                    </a>

                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center lg:hidden">
                    <button @click="isOpen = !isOpen" aria-label="Toggle mobile menu"
                        class="inline-flex items-center justify-center rounded-md bg-purple-900 border-2 border-purple-200 p-3 text-white hover:text-purple-50 hover:bg-purple-700 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="isOpen" class="fixed inset-0 z-50 overflow-y-auto bg-white lg:hidden" style="display: none;">
            <!-- Mobile Menu Header -->
            <div class="flex items-center justify-between border-b p-4">
                <a wire:navigate href="/" class="flex flex-shrink-0 items-center">
                    <img class="h-16" src="{{ asset('images/logo.png') }}" alt="Logo" />
                    {{-- <span class="ml-2 text-xl font-bold text-purple-950 font-head">logo</span> --}}
                </a>
                <button @click="isOpen = false" aria-label="Close mobile menu"
                    class="bg-purple-900 p-3 text-white rounded-full">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu Items -->
            <div class="space-y-1 px-2 pb-3 pt-2 bg-gray-100 font-head text-sm">
                <!-- Home Link -->
                <a wire:navigate href="/"
                    class="{{ request()->is('/') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                    Home
                </a>

                <!-- About Link -->
                <a wire:navigate href="/about"
                    class="{{ request()->is('about') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                    About
                </a>

                <!-- Services Dropdown -->
                <div x-data="{ open: false, subOpen: false }">
                    <button @click="open = !open"
                        class="flex w-full justify-between px-3 py-2 font-medium text-purple-950 hover:bg-gray-100"
                        aria-label="Toggle services dropdown" aria-haspopup="true" :aria-expanded="open">
                        <a wire:navigate href="/services">Services </a>
                        {{-- <svg class="h-5 w-5 transition-transform duration-200" :class="{ 'rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg> --}}
                    </button>

                    <!-- Services Submenu -->
                    {{-- <div x-show="open" class="pl-4">
                        <!-- Person-Centered Care -->
                        <div x-data="{ subOpen: false }">
                            <button @click="subOpen = !subOpen"
                                class="flex w-full justify-between px-3 py-2 font-medium text-purple-950 hover:bg-gray-100"
                                aria-label="Toggle person-centered care dropdown" aria-haspopup="true"
                                :aria-expanded="subOpen">
                                <a wire:navigate href="/people-centered-care">Person-Centered Care</a>
                                <svg class="h-5 w-5 transition-transform duration-200"
                                    :class="{ 'rotate-180': subOpen }" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Person-Centered Care Submenu -->
                            <div x-show="subOpen" class="pl-4">
                                <a wire:navigate href="/support-transitions"
                                    class="{{ request()->is('support-transitions') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                                    Support through life’s transitions
                                </a>
                                <a wire:navigate href="/nursing-care"
                                    class="{{ request()->is('nursing-care') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                                    Professional nursing care in the community
                                </a>
                                <a wire:navigate href="/home-responsibilities"
                                    class="{{ request()->is('home-responsibilities') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                                    Assistance with home responsibilities
                                </a>
                            </div>
                        </div>

                        <!-- Daily Life Tasks Support -->
                        <div x-data="{ subOpen: false }">
                            <button @click="subOpen = !subOpen"
                                class="flex w-full justify-between px-3 py-2 font-medium text-purple-950 hover:bg-gray-100"
                                aria-label="Toggle daily life tasks support dropdown" aria-haspopup="true"
                                :aria-expanded="subOpen">
                                <a wire:navigate href="/daily-life-tasks-support"> Daily Life Tasks Support </a>
                                <svg class="h-5 w-5 transition-transform duration-200"
                                    :class="{ 'rotate-180': subOpen }" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Daily Life Tasks Support Submenu -->
                            <div x-show="subOpen" class="pl-4">
                                <a wire:navigate href="/shared-living"
                                    class="{{ request()->is('shared-living') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                                    Help with everyday shared living
                                </a>
                                <a wire:navigate href="/home-tasks"
                                    class="{{ request()->is('home-tasks') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                                    Assistance with home responsibilities
                                </a>
                                <a wire:navigate href="/community-activities"
                                    class="{{ request()->is('community-activities') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                                    Engaging in community activities
                                </a>
                            </div>
                        </div>

                        <!-- Community Integration -->
                        <div x-data="{ subOpen: false }">
                            <button @click="subOpen = !subOpen"
                                class="flex w-full justify-between px-3 py-2 font-medium text-purple-950 hover:bg-gray-100"
                                aria-label="Toggle community integration dropdown" aria-haspopup="true"
                                :aria-expanded="subOpen">
                                <a wire:navigate href="/community-integration">Community Integration</a>
                                <svg class="h-5 w-5 transition-transform duration-200"
                                    :class="{ 'rotate-180': subOpen }" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Community Integration Submenu -->
                            <div x-show="subOpen" class="pl-4">
                                <a wire:navigate href="/travel-support"
                                    class="{{ request()->is('travel-support') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                                    Support with travel needs
                                </a>
                                <a wire:navigate href="/community-engagement"
                                    class="{{ request()->is('community-engagement') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                                    Engaging in community activities
                                </a>
                                <a wire:navigate href="/household-tasks"
                                    class="{{ request()->is('household-tasks') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                                    Household Tasks
                                </a>
                            </div>
                        </div>

                        <!-- Financial Wellbeing -->
                        <div x-data="{ subOpen: false }">
                            <button @click="subOpen = !subOpen"
                                class="flex w-full justify-between px-3 py-2 font-medium text-purple-950 hover:bg-gray-100"
                                aria-label="Toggle community integration dropdown" aria-haspopup="true"
                                :aria-expanded="subOpen">
                                <a wire:navigate href="/financial-wellbeing">Financial Wellbeing</a>
                                <svg class="h-5 w-5 transition-transform duration-200"
                                    :class="{ 'rotate-180': subOpen }" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Financial Wellbeing Submenu -->
                            <div x-show="subOpen" class="pl-4">
                                <a wire:navigate href="/financial-counselling"
                                    class="{{ request()->is('financial-counselling') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                                    Financial Counselling
                                </a>
                                <a wire:navigate href="/financial-coaching"
                                    class="{{ request()->is('financial-coaching') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                                    Financial Coaching
                                </a>
                                <a wire:navigate href="/financial-literacy-workshops"
                                    class="{{ request()->is('financial-literacy-workshops') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                                    Financial Literacy Workshops
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <!-- FAQs Link -->
                <a wire:navigate href="/faqs"
                    class="{{ request()->is('faqs') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                    FAQs
                </a>

                <!-- Careers Link -->
                <a wire:navigate href="/careers"
                    class="{{ request()->is('careers') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                    Careers
                </a>

                <!-- Contact Link -->
                <a wire:navigate href="/contact"
                    class="{{ request()->is('contact') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                    Contact
                </a>

                <!-- Resources Dropdown -->
                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex w-full justify-between px-3 py-2 font-medium text-purple-950 hover:bg-gray-100"
                        aria-label="Toggle resources dropdown" aria-haspopup="true" :aria-expanded="open">
                        Resources
                        <svg class="h-5 w-5 transition-transform duration-200" :class="{ 'rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Resources Submenu -->
                    <div x-show="open" class="pl-4">
                        <a wire:navigate href="/blog"
                            class="{{ request()->is('blog') ? 'rounded-lg bg-gray-200' : '' }} block px-3 py-2 font-medium text-purple-950 hover:bg-gray-100">
                            Blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>


</div>
