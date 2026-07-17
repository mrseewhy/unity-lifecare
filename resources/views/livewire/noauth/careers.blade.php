<div>
    {{-- Do your work, then step back. --}}
    @livewire('partials.pagehead', ['title' => 'Careers'])
    <section>
        <div class="container mx-auto px-2 py-12">
            <h2 class="text-3xl md:text-4xl font-bold text-purple-900 leading-tight font-head  mb-2 mt-12">Latest
                Openings </h2>
            <hr class="w-32 bg-red-600 h-0.5 border-0 mb-16" />
            @if (!empty($careers) && $careers->count())
                @foreach ($careers as $career)
                    <div class="flex items-center h-96 md:h-56 border border-purple-100 rounded-lg w-full gap-8 mb-12">
                        <div class="w-2/5  h-full bg-cover bg-center rounded-l-lg overflow-hidden"
                            style="background-image: url('{{ !empty($career->featured_image) ? asset('storage/' . $career->featured_image) : asset('images/placeholder2.webp') }}')">
                        </div>



                        <div class="w-3/5  flex flex-col gap-3 pr-6">
                            <h2 class="text-2xl md:text-3xl font-bold leading-tight text-purple-900 font-head">
                                {{ $career->title }}
                            </h2>

                            <p class="text-base md:text-lg leading-relaxed text-purple-700 font-body break-all">
                                {!! Str::limit(strip_tags($career->body), 200, '...') !!}

                            </p>

                            <a class="w-32 py-2 bg-purple-600 text-white hover:bg-purple-700 rounded-md font-head font-semibold text-center transition duration-300"
                                wire:navigate href="/career/{{ $career->slug }}">
                                Read More
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-2xl md:text-3xl font-bold leading-tight text-purple-900 font-head"> No Job Openings</h2>
            @endif


        </div>
    </section>
</div>
