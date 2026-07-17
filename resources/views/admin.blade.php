<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'FSL Connect Admin Area' }}</title>
    <link rel="shortcut icon" href="{{ asset('images/unityfav2.png') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-lato antialiased bg-gray-50">
    <div class="min-h-screen"
         x-data="{
            sidebarOpen: false,
            menuOpen: false,
            subMenuOpen: false,
            currentPath: window.location.pathname,
            initSidebar() {
                this.sidebarOpen = window.innerWidth >= 768;
                window.addEventListener('resize', () => {
                    this.sidebarOpen = window.innerWidth >= 768;
                });
            }
         }"
         x-init="initSidebar()">

        <!-- Overlay -->
        <div x-show="sidebarOpen"
             x-transition:enter="transition-opacity ease-in-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-in-out duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm md:hidden z-30"
             @click="sidebarOpen = false">
        </div>

        <!-- Top Navigation -->
       @livewire('partials.adminheader')

        <!-- Sidebar -->
        @livewire('partials.adminsidebar')


     <!-- Main Content -->
     <main class="md:ml-64 bg-gray-50 font-body">
        <div>
            @livewire('partials.alert')
        </div>
         <div class="px-8 py-20">
             {{ $slot }}
         </div>
     </main>
 </div>
    @livewireScripts
    <!-- External Libraries with Defer -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js" defer></script>
</body>
</html>
