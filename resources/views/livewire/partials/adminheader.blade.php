
    <nav class="fixed w-full z-10 bg-white border-b border-gray-200">
    <div class="w-full mx-auto px-4">
    <div class="flex justify-between h-16">
        <div class="flex items-center">

                <button @click="sidebarOpen = !sidebarOpen"
                    class="p-2 rounded-lg bg-purple-600 text-white border border-purple-300 hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-colors duration-200"
                    aria-label="Toggle sidebar">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            <div class="flex items-center ml-6">
                <a href="/">
                    <img class=" w-36" src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>

            </div>
        </div>


        <!-- User Menu -->
        <div class="flex items-center relative" @click.away="menuOpen = false">
            <button @click="menuOpen = !menuOpen"
                    class="flex items-center space-x-3 px-3 py-2 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-purple-500 transition-colors duration-200">
                <img class="h-8 w-8 rounded-full object-cover border-2 border-gray-200"
                        src="{{ asset('images/placeholder2.webp')}}"
                        alt="User avatar">
                <div class="flex flex-col items-start">
                    <span class="font-semibold text-gray-900">{{ auth()->user()->name }}</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>

            </button>

            <!-- Dropdown Menu -->
            <div x-show="menuOpen"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 top-14 w-64 bg-white rounded-lg shadow-lg border border-gray-200 py-2 z-50">
                <div class="px-4 py-3 border-b border-gray-100">
                    <p class="text-sm font-medium text-gray-900">{{ auth()->user()->name }}</p>
                    <p class="text-sm text-gray-500">{{ auth()->user()->email }}</p>
                    <p class="text-sm text-gray-500 capitalize">{{ auth()->user()->role }}</p>
                </div>
                <div class="py-1">
                    {{-- <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                        <svg class="mr-3 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Profile
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                        <svg class="mr-3 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Settings
                    </a> --}}
                    {{-- <div class="border-t border-gray-100 my-1"></div> --}}
                    <div class="flex items-center px-4 py-1 text-sm text-red-700 hover:bg-red-50 ">
                        <svg class="mr-3 h-5 w-5 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        @livewire('partials.logout', ['style' => 'flex items-center px-1 py-2 text-sm text-red-700 hover:bg-red-50'])
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </nav>
