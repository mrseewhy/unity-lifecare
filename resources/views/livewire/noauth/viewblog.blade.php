<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    {{-- @livewire('partials.pagehead', ['title' => $blog->title, ]) --}}
    <section>
        <div class="max-w-7xl mx-auto py-6 px-6">
            <div class="">
                @auth
                    <button wire:click="editBlogpost('{{ $blog->slug }}')" class="text-lg py-1">Edit</button>
                @endauth

                <!-- Back Button -->
                <a wire:navigate href="/blog"
                    class="flex items-center   font-semibold mb-6 bg-purple-800 text-white px-6 py-3 rounded-lg">
                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Blog
                </a>

                <!-- Blog Featured Image -->
                <div class="w-full h-64 md:h-80 bg-cover bg-top rounded-lg mb-6"
                    style="background-image: url('{{ !empty($blog->featured_image) ? asset('storage/' . $blog->featured_image) : asset('images/placeholder2.webp') }}')">
                </div>

                <!-- Blog Title -->
                <h1 class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head mb-4">
                    {{ $blog->title }}

                </h1>

                <!-- Blog Meta Info -->
                <div class="text-gray-500 text-sm mb-6">
                    Published on {{ $blog->created_at->format('F j, Y') }} | By <span
                        class="font-semibold text-purple-700">{{ $blog->user->name }}</span>
                </div>

                <!-- Blog Content -->
                <div class="text-lg leading-relaxed text-gray-800 break-all">
                    {!! $blog->body !!}
                </div>


            </div>

        </div>
    </section>

</div>
