<div>
    {{-- Success is as dangerous as failure. --}}
    @livewire('partials.pagehead', ['title' => 'Thank You'])

    <div class="max-w-7xl mx-auto mt-16 mb-12">
        <h2 class="text-center text-2xl md:text-3xl text-purple-700 font-bold font-head">
            Thank you for Registration
        </h2>
        <div class="max-w-5xl mx-auto p-8 bg-purple-100 border-l-4 border-purple-800 text-purple-800 mt-12">
            <p class="text-center">
                Your application has been submitted successfully. You will receive a confirmation email shortly.
            </p>
        </div>
        <div class="flex justify-center mt-8">
            <a wire:navigate href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 border border-purple-800 text-purple-800 font-bold rounded-md text-sm hover:text-purple-900 hover:border-purple-900">
                Return to Home
            </a>
        </div>
    </div>
</div>
