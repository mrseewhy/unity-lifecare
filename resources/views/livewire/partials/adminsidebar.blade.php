<div>
    {{-- The whole world belongs to you. --}}
    <div>
        {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
        <aside class="fixed inset-y-0 left-0  w-64 bg-white border-r border-gray-200 transform transition-transform duration-300 ease-in-out"
                   :class="{ '-translate-x-full': !sidebarOpen, 'translate-x-0': sidebarOpen }">
                <div class="flex flex-col h-full">
                    <!-- Logo -->
                    <div class="flex items-center justify-center h-16 px-6 bg-gray-50 border-b border-gray-200">
                        <a href="/" class="flex items-center">
                            <img src="{{ asset('/images/logo.png') }}" alt="FSL Connect" class="h-8">
                        </a>
                    </div>

                    <!-- Navigation -->
                    <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                        <a href="/"
                           class="flex items-center px-3 py-2 mb-8 rounded-lg transition-colors duration-200 bg-purple-950 text-white hover:bg-purple-800 hover:text-gray-100"
                           >
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                          </svg>
                            <span class="font-medium">Home</span>
                        </a>
                        <a wire:navigate href="/dashboard"
                           class="flex items-center px-3 py-2 rounded-lg transition-colors duration-200"
                           :class="currentPath === '/dashboard' ? 'bg-purple-50 text-purple-700' : 'text-gray-700 hover:bg-gray-50'">
                            <svg class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="font-medium">Dashboard</span>
                        </a>
                        <div x-data="{ open: false }" class="space-y-1">
                            <button @click="open = !open"
                                    class="flex items-center justify-between w-full px-3 py-2 rounded-lg transition-colors duration-200"
                                    :class="currentPath.startsWith('/dashboard/contactform') ? 'bg-purple-50 text-purple-700' : 'text-gray-700 hover:bg-gray-50'">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-width="2" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859M12 3v8.25m0 0-3-3m3 3 3-3" />
                                    </svg>


                                    <span class="font-medium">Contact Form</span>
                                </div>
                                <svg class="w-5 h-5 transition-transform duration-200"
                                     :class="{ 'rotate-180': open }"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <div x-show="open"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="transform opacity-0"
                                 x-transition:enter-end="transform opacity-100"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="transform opacity-100"
                                 x-transition:leave-end="transform opacity-0"
                                 class="pl-10 space-y-1">
                                <a wire:navigate href="/dashboard/contactform/recent-messages"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/dashboard/contactform/recent-messages' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">

                                    <span class="flex item-center space-x-3">
                                        <span class="">Recents Messages </span>
                                        <span class="">@livewire('partials.unread-messages') </span>
                                    </span>
                                </a>
                                <a wire:navigate href="/dashboard/contactform/contacted-messages"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/dashboard/contactform/contacted-messages' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                    Contacted Messages
                                </a>

                            </div>
                        </div>
                        @if (Auth::user()->role === 'admin')
                        <div x-data="{ open: false }" class="space-y-1">
                            <button @click="open = !open"
                                    class="flex items-center justify-between w-full px-3 py-2 rounded-lg transition-colors duration-200"
                                    :class="currentPath.startsWith('/dashboard/users') ? 'bg-purple-50 text-purple-700' : 'text-gray-700 hover:bg-gray-50'">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                      </svg>

                                    <span class="font-medium">User Management</span>
                                </div>
                                <svg class="w-5 h-5 transition-transform duration-200"
                                     :class="{ 'rotate-180': open }"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <div x-show="open"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="transform opacity-0"
                                 x-transition:enter-end="transform opacity-100"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="transform opacity-100"
                                 x-transition:leave-end="transform opacity-0"
                                 class="pl-10 space-y-1">
                                 <a wire:navigate href="/dashboard/users/create"
                                 class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                 :class="currentPath === '/dashboard/users/create' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                  Create User
                                </a>
                                <a wire:navigate href="/dashboard/users/all"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/dashboard/users/all' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                   All Users
                                </a>
                            </div>
                        </div>
                        @endif
                        <div x-data="{ open: false }" class="space-y-1">
                            <button @click="open = !open"
                                    class="flex items-center justify-between w-full px-3 py-2 rounded-lg transition-colors duration-200"
                                    :class="currentPath.startsWith('/dashboard/blog') ? 'bg-purple-50 text-purple-700' : 'text-gray-700 hover:bg-gray-50'">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                      </svg>

                                    <span class="font-medium">Blogposts</span>
                                </div>
                                <svg class="w-5 h-5 transition-transform duration-200"
                                     :class="{ 'rotate-180': open }"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <div x-show="open"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="transform opacity-0"
                                 x-transition:enter-end="transform opacity-100"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="transform opacity-100"
                                 x-transition:leave-end="transform opacity-0"
                                 class="pl-10 space-y-1">
                                 <a wire:navigate href="/dashboard/blog/create"
                                 class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                 :class="currentPath === '/dashboard/blog/create' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                  Create Blogpost
                                </a>
                                <a wire:navigate href="/dashboard/blog/all"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/dashboard/blog/all' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                   All Blogposts
                                </a>
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="space-y-1">
                            <button @click="open = !open"
                                    class="flex items-center justify-between w-full px-3 py-2 rounded-lg transition-colors duration-200"
                                    :class="currentPath.startsWith('/dashboard/career') ? 'bg-purple-50 text-purple-700' : 'text-gray-700 hover:bg-gray-50'">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                      </svg>

                                    <span class="font-medium">Careers</span>
                                </div>
                                <svg class="w-5 h-5 transition-transform duration-200"
                                     :class="{ 'rotate-180': open }"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <div x-show="open"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="transform opacity-0"
                                 x-transition:enter-end="transform opacity-100"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="transform opacity-100"
                                 x-transition:leave-end="transform opacity-0"
                                 class="pl-10 space-y-1">
                                 <a wire:navigate href="/dashboard/career/create"
                                 class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                 :class="currentPath === '/dashboard/career/create' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                  Create Career
                                </a>
                                <a wire:navigate href="/dashboard/career/all"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/dashboard/career/all' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                   All Careers
                                </a>
                            </div>
                        </div>
                        <div x-data="{ open: false }" class="space-y-1">
                            <button @click="open = !open"
                                    class="flex items-center justify-between w-full px-3 py-2 rounded-lg transition-colors duration-200"
                                    :class="currentPath.startsWith('/dashboard/visitors-registration') ? 'bg-purple-50 text-purple-700' : 'text-gray-700 hover:bg-gray-50'">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                      </svg>

                                    <span class="font-medium">Visitors Reg </span>
                                </div>
                                <svg class="w-5 h-5 transition-transform duration-200"
                                     :class="{ 'rotate-180': open }"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <div x-show="open"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="transform opacity-0"
                                 x-transition:enter-end="transform opacity-100"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="transform opacity-100"
                                 x-transition:leave-end="transform opacity-0"
                                 class="pl-10 space-y-1">

                                <a wire:navigate href="/dashboard/visitors-registration/new"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/dashboard/visitors-registration/new' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                   <span class="flex item-center space-x-3">
                                    <span class="">New Registrations </span>
                                    <span class="">@livewire('partials.new-registration') </span>
                                </span>
                                </a>
                                <a wire:navigate href="/dashboard/visitors-registration/contacted"
                                class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                :class="currentPath === '/dashboard/visitors-registration/contacted' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                 Contacted Registrants
                               </a>
                            </div>
                        </div>

                        {{-- <div x-data="{ open: false }" class="space-y-1">
                            <button @click="open = !open"
                                    class="flex items-center justify-between w-full px-3 py-2 rounded-lg transition-colors duration-200"
                                    :class="currentPath.startsWith('/dashboard/cases') ? 'bg-purple-50 text-purple-700' : 'text-gray-700 hover:bg-gray-50'">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
                                    </svg>
                                    <span class="font-medium">Cases</span>
                                </div>
                                <svg class="w-5 h-5 transition-transform duration-200"
                                     :class="{ 'rotate-180': open }"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <div x-show="open"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="transform opacity-0"
                                 x-transition:enter-end="transform opacity-100"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="transform opacity-100"
                                 x-transition:leave-end="transform opacity-0"
                                 class="pl-10 space-y-1">
                                <a href="/dashboard/cases/create"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/dashboard/cases/create' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                    Create Case file
                                </a>
                                <a href="/dashboard/cases/user/all"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/dashboard/cases/user/all' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                    My Casefiles
                                </a>
                                <a href="/dashboard/cases/admin/all"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/dashboard/cases/admin/all' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                    All Casefiles
                                </a>
                            </div>
                        </div> --}}
                        {{-- <div x-data="{ open: false }" class="space-y-1">
                            <button @click="open = !open"
                                    class="flex items-center justify-between w-full px-3 py-2 rounded-lg transition-colors duration-200"
                                    :class="currentPath.startsWith('/dashboard/messages') ? 'bg-purple-50 text-purple-700' : 'text-gray-700 hover:bg-gray-50'">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5 mr-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                      </svg>
                                    <span class="font-medium">Messages</span>
                                </div>
                                <svg class="w-5 h-5 transition-transform duration-200"
                                     :class="{ 'rotate-180': open }"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <div x-show="open"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="transform opacity-0"
                                 x-transition:enter-end="transform opacity-100"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="transform opacity-100"
                                 x-transition:leave-end="transform opacity-0"
                                 class="pl-10 space-y-1">

                                <a wire:navigate href="/dashboard/messages/compose-message"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/dashboard/messages/compose-message' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                    Compose Message
                                </a>
                                <a wire:navigate href="/dashboard/messages/inbox"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/dashboard/messages/inbox' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                    Inbox
                                </a>
                            </div>
                        </div> --}}
                        {{-- <div x-data="{ open: false }" class="space-y-1">
                            <button @click="open = !open"
                                    class="flex items-center justify-between w-full px-3 py-2 rounded-lg transition-colors duration-200"
                                    :class="currentPath.startsWith('/management') ? 'bg-purple-50 text-purple-700' : 'text-gray-700 hover:bg-gray-50'">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                    <span class="font-medium">Management</span>
                                </div>
                                <svg class="w-5 h-5 transition-transform duration-200"
                                     :class="{ 'rotate-180': open }"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <div x-show="open"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="transform opacity-0"
                                 x-transition:enter-end="transform opacity-100"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="transform opacity-100"
                                 x-transition:leave-end="transform opacity-0"
                                 class="pl-10 space-y-1">
                                <a href="/management/users"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/management/users' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                    Users
                                </a>
                                <a href="/management/roles"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/management/roles' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                    Roles
                                </a>
                                <a href="/management/permissions"
                                   class="flex items-center px-3 py-2 text-sm rounded-lg transition-colors duration-200"
                                   :class="currentPath === '/management/permissions' ? 'bg-purple-50 text-purple-700' : 'text-gray-600 hover:bg-gray-50'">
                                    Permissions
                                </a>
                            </div>
                        </div> --}}
                        {{-- <a href="/settings"
                        class="flex items-center px-3 py-2 rounded-lg transition-colors duration-200"
                        :class="currentPath === '/settings' ? 'bg-purple-50 text-purple-700' : 'text-gray-700 hover:bg-gray-50'">
                         <svg class="w-5 h-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                         </svg>
                         <span class="font-medium">Settings</span>
                     </a> --}}
                 </nav>

                 <!-- Bottom section -->
                 <div class="p-4 border-t border-gray-200 bg-gray-50">
                     <div class="flex items-center space-x-3">
                         <div class="flex-shrink-0">
                             <span class="inline-flex p-2 rounded-lg bg-purple-100 text-purple-500">
                                 <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                 </svg>
                             </span>
                         </div>
                         <div class="flex-1 min-w-0">
                             <p class="text-sm font-medium text-gray-900">Need Help?</p>
                             <p class="text-sm text-gray-500"><a href="/contact">Contact Us</a></p>
                         </div>
                     </div>
                 </div>
             </div>
         </aside>
    </div>

</div>
