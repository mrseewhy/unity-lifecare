<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Unity Lifecare' }}</title>
    <link rel="shortcut icon" href="{{ asset('images/unityfav2.png') }}" type="image/x-icon">
    <meta name="description" content="We are your trusted NDIS-registered partner, providing exceptional support individuals of all abilities, because everyone deserves to live their best life.">
    <meta name="keywords" content="Unity Lifecare, Lifecare">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @turnstileScripts()
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    

</head>
<body class="font-body antialiased overflow-x-hidden">
    <header>
        @livewire('partials.navbar')
    </header>
    <main >
        <div>
            @livewire('partials.alert')
        </div>
        {{ $slot }}
    </main>

    <footer>
        @livewire('partials.footer')
    </footer>

    @vite('resources/js/app.js')
    @livewireScripts
        <!-- Turnstile Script -->
</body>
</html>
