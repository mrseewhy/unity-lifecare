<div class="min-h-screen">
    {{-- Because she competes with no one, no one can compete with her. --}}
    {{-- @livewire('partials.pagehead', ['title' => 'View Career']) --}}

    <section>
        <div class="container mx-auto py-6 px-6">
            <div class="">
                @auth
                    <button wire:click="editCareer('{{ $career->slug }}')" class="text-lg py-1">Edit</button>
                @endauth

                <!-- Back Button -->
                <a wire:navigate href="/careers"
                    class="flex items-center   font-semibold mb-6 bg-purple-800 text-white px-6 py-3 rounded-lg">
                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Careers
                </a>

                <!-- Blog Featured Image -->
                <div class="w-full h-64 md:h-80 bg-cover bg-top rounded-lg mb-6"
                    style="background-image: url('{{ !empty($career->featured_image) ? asset('storage/' . $career->featured_image) : asset('images/placeholder2.webp') }}')">
                </div>

                <!-- Blog Title -->
                <h1 class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-4">
                    {{ $career->title }}

                </h1>

                <!-- Blog Meta Info -->
                <div class="text-gray-500 text-sm mb-6">
                    Published on {{ $career->created_at->format('F j, Y') }} | By <span
                        class="font-semibold text-purple-700">{{ $career->user->name }}</span>
                </div>

                <!-- Blog Content -->
                <div class="text-lg leading-relaxed text-gray-800 break-all">
                    {!! \App\Support\HtmlSanitizer::sanitize($career->body) !!}
                </div>


            </div>

        </div>
    </section>

</div>
