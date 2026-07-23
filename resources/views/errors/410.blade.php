<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Expired | Unity Lifecare</title>
    <link rel="shortcut icon" href="{{ asset('images/unityfav2.png') }}" type="image/x-icon">
    <meta name="description" content="We are your trusted NDIS-registered partner, providing exceptional support individuals of all abilities, because everyone deserves to live their best life.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-body antialiased overflow-x-hidden bg-purple-50 text-purple-950 min-h-screen flex flex-col">
    <header>
        @livewire('partials.navbar')
    </header>
    <main class="flex-1 flex flex-col">
        <div>
            @livewire('partials.alert')
        </div>
        <section class="flex-1 flex items-center justify-center px-6 py-16">
            <div class="w-full max-w-3xl text-center">
                <p class="font-head text-sm font-bold uppercase tracking-[0.35em] text-red-600">410</p>
                <h1 class="mt-4 font-head text-4xl md:text-6xl font-black text-purple-950">This link has expired</h1>
                <p class="mt-6 text-lg text-purple-800 leading-relaxed">
                    For your privacy, saved draft links are only available for a limited time. Please start a new intake form if you still need to register a participant.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('visitors-registration') }}" class="w-full sm:w-auto rounded-lg bg-purple-900 px-8 py-4 font-head font-bold text-white transition hover:bg-purple-700">
                        Start New Form
                    </a>
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto rounded-lg border-2 border-purple-900 px-8 py-4 font-head font-bold text-purple-900 transition hover:bg-white">
                        Contact Us
                    </a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        @livewire('partials.footer')
    </footer>
    @livewireScripts
</body>
</html>
