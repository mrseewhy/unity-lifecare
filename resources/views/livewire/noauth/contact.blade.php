<div>
    {{-- Do your work, then step back. --}}
    @livewire('partials.pagehead', ['title' => 'Contact Us'])
    <div wire.ignore class="min-h-screen bg-gray-50 py-12 font-body">
        <div class="w-full max-w-7xl mx-auto p-6">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <h1 class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-1">
                    Let's Start a Conversation
                </h1>
                <hr class="w-32 bg-red-600 h-0.5 border-0 mb-6 mx-auto" />
                <p class="text-lg text-purple-800 max-w-2xl mx-auto font-body">
                    Have questions or need assistance? We're here to help. Reach out to us through any of these channels
                    or fill out the form below.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Left Column -->
                <div class="space-y-8">
                    <!-- Contact Cards -->
                    <div class="grid gap-6">
                        <!-- Location Card -->
                        <div
                            class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="flex-1 font-body">
                                    <h3 class="font-bold text-xl text-purple-900 mb-1 font-head">Visit Our Office</h3>
                                    <p class="text-purple-800 mb-2"><span
                                            class="font-head text-lg font-bold">Perth:</span> 50/11 Tanunda drive
                                        Rivervale WA
                                        6103</p>
                                    <p class="text-purple-800"><span
                                            class="font-head text-lg font-bold">Canberra:</span> 54A Ragless Circuit
                                        Kambah ACT2902</p>
                                </div>
                            </div>
                        </div>

                        <!-- Email Card -->
                        <div
                            class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="flex-1 font-body">
                                    <h3 class="font-bold text-xl text-purple-900 mb-1 font-head">Email Us</h3>
                                    <p class="text-purple-800 font-semibold mb-2"><a
                                            href="mailto:admin@unitylifecare.com.au">admin@unitylifecare.com.au</a></p>
                                    <p class="text-sm text-purple-800">We typically respond within 24 hours</p>
                                </div>
                            </div>
                        </div>

                        <!-- Phone Card -->
                        <div
                            class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div class="flex-1 font-body ">
                                    <h3 class="font-bold text-xl text-purple-900 mb-1 font-head">Call or WhatsApp</h3>
                                    <p class="text-purple-800 font-semibold mb-2"><a href="tel:+6147616440">+61 476 164
                                            40</a>, &nbsp;
                                        <a href="tel:+61470181583">+61 470 181 583</a>
                                    </p>
                                    <p class="text-sm text-purple-800">Available Mon-Fri, 9am-5pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Form -->
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 font-body">
                    <h2 class="font-bold text-2xl text-purple-900 mb-6 font-head">Send us a message</h2>
                    <form wire:submit.prevent="submit" class="space-y-6">
                        <div>
                            <label for="name" class="block  font-medium text-purple-800 mb-2">Full
                                Name</label>
                            <input id="name" wire:model="name" type="text"
                                class="w-full px-4 py-3 rounded-lg border border-purple-200 focus:ring-2 focus:ring-purple-500 focus:border-transparent font-body transition duration-200 "
                                placeholder="John Doe" x-data
                                x-on:focus="$el.classList.add('ring-2', 'ring-purple-500')"
                                x-on:blur="$el.classList.remove('ring-2', 'ring-purple-500')">
                            @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block font-medium text-purple-800 mb-2">Email
                                Address</label>
                            <input id="email" wire:model="email" type="email"
                                class="w-full px-4 py-3 rounded-lg border border-purple-200 focus:ring-2 focus:ring-purple-500 focus:border-transparent font-body transition duration-200"
                                placeholder="john@example.com" x-data
                                x-on:focus="$el.classList.add('ring-2', 'ring-purple-500')"
                                x-on:blur="$el.classList.remove('ring-2', 'ring-purple-500')">
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-purple-800 font-medium  mb-2">Your
                                Message</label>
                            <textarea id="message" wire:model="message" rows="5"
                                class="w-full px-4 py-3 rounded-lg border border-purple-200 focus:ring-2 focus:ring-purple-500 focus:border-transparent font-body transition duration-200"
                                placeholder="How can we help you?" x-data x-on:focus="$el.classList.add('ring-2', 'ring-purple-500')"
                                x-on:blur="$el.classList.remove('ring-2', 'ring-purple-500')"></textarea>
                            @error('message')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="hidden" aria-hidden="true">
                            <label for="contact-website">Website</label>
                            <input id="contact-website" type="text" wire:model="website" tabindex="-1"
                                autocomplete="off">
                        </div>

                        @error('form')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror

                        <button type="submit"
                            class="w-full bg-purple-900 hover:bg-purple-700 text-white font-head py-4 px-6 rounded-lg transition duration-200 flex items-center justify-center space-x-2"
                            x-data="{ loading: false }" x-on:click="loading = true"
                            wire:loading.class="opacity-75 cursor-not-allowed">
                            <span wire:loading.remove>Send Message</span>
                            <span wire:loading>
                                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                                <span class="ml-2">Sending...</span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
