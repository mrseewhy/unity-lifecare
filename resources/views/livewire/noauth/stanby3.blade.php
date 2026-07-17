{{-- former header former --}}
<section class="relative h-screen w-full flex items-center justify-center">
    <!-- Background image with overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/unity-bg.jpg') }}" alt="Background" class="w-full h-full object-cover "
            style="object-position: top right;" />
        <!-- Dark overlay for better text readability -->
        <div class="absolute inset-0 bg-black/60 sm:bg-black/40 "></div>
    </div>

    <!-- Content container -->
    <div class="relative z-10 w-full">
        <!-- Max width container -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Two column grid -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8 w-full">
                <!-- Left column with content -->
                <div class="space-y-6 col-span-3 mt-8">
                    <h1 class="text-4xl md:text-6xl font-bold text-white leading-none sm:leading-tight font-head">
                        {{-- We Are Beside You, No Matter Where Life Leads --}}
                        We Are Here for You
                    </h1>
                    <p class="max-w-xl text-lg md:text-xl text-purple-50 leading-xl sm:leading-loose  font-body">
                        {{-- We are your trusted NDIS-registered partner in Australia providing exceptional support
                            individuals of all abilities, because everyone deserves to live their best life. --}}
                        We are a trusted NDIS provider in Australia. We support people of all abilities to live
                        a happy and full life.
                    </p>
                    <div class="flex flex-col md:flex-row gap-4 pt-4">
                        <a wire:navigate href="/visitors-registration"
                            class="inline-block px-8 py-4 bg-gradient-to-r from-purple-700  to-purple-900 text-purple-50 rounded-lg font-head font-bold hover:from-purple-600 hover:to-purple-800 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            Participant Intake Form
                            <svg class="w-5 h-5 ml-2 inline-block" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a wire:navigate href="/about"
                            class="inline-block px-8 py-4 bg-gradient-to-r from-purple-200 to-purple-50 text-purple-900 rounded-lg font-head font-bold hover:from-purple-100 hover:to-gray-100 transition duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            About us
                            <svg class="inline-block ml-2 text-purple-900" width="20px" height="20px"
                                viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">

                                    <g class="bg-purple-900" id="Page-1" stroke="none" stroke-width="1"
                                        fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                        <g id="Icon-Set-Filled" sketch:type="MSLayerGroup"
                                            transform="translate(-414.000000, -1089.000000)" fill="#ff3040">
                                            <path
                                                d="M436.535,1105.88 L430.879,1111.54 C430.639,1111.78 430.311,1111.85 430,1111.79 C429.689,1111.85 429.361,1111.78 429.121,1111.54 L423.465,1105.88 C423.074,1105.49 423.074,1104.86 423.465,1104.46 C423.855,1104.07 424.488,1104.07 424.879,1104.46 L429,1108.59 L429,1098 C429,1097.45 429.448,1097 430,1097 C430.553,1097 431,1097.45 431,1098 L431,1108.59 L435.121,1104.46 C435.512,1104.07 436.146,1104.07 436.535,1104.46 C436.926,1104.86 436.926,1105.49 436.535,1105.88 L436.535,1105.88 Z M430,1089 C421.163,1089 414,1096.16 414,1105 C414,1113.84 421.163,1121 430,1121 C438.837,1121 446,1113.84 446,1105 C446,1096.16 438.837,1089 430,1089 L430,1089 Z"
                                                id="arrow-down-circle" sketch:type="MSShapeGroup"> </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        {{-- <a wire:navigate href="/visitors-registration"
                                class="text-center inline-block bg-purple-900 text-white px-9 py-4 rounded-lg font-head font-semibold hover:bg-purple-800 hover:text-purple-50 transition duration-300 shadow-lg hover:shadow-xl border-2 border-purple-200">
                                Participant Intake Form
                            </a>
                            <a wire:navigate href="/about"
                                class="text-center inline-block bg-purple-900 text-white px-9 py-4 rounded-lg font-head font-semibold hover:bg-purple-800 hover:text-purple-50 transition duration-300 shadow-lg hover:shadow-xl border-2 border-purple-200">
                                About Us
                            </a> --}}

                    </div>
                </div>
                <!-- Right column intentionally left empty -->
                <div class="col-span-2"></div>
            </div>
        </div>
    </div>
</section>
