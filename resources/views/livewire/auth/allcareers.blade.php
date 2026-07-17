<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div  class="w-full sm:max-w-6xl sm:p-8 font-body">
        <h2 class="text-2xl sm:text-3xl font-head font-bold bg-gradient-to-r from-purple-600 to-purple-800 bg-clip-text text-transparent mb-6">
            All Career Posts
        </h2>

        <div>
            @if (!empty($careers) && $careers->count())
            <div class="p-6 ">


                <!-- Blog Table -->
                <div class="overflow-x-auto">
                    <table class="w-full border border-gray-300 shadow-sm text-sm">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="p-3 text-left">Title</th>
                                <th class="p-3 text-left">Content</th>
                                <th class="p-3 text-center">Image</th>
                                <th class="p-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($careers as $career)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="p-3">{{ $career->title }}</td>
                                    <td class="p-3">
                                        {!! Str::limit(strip_tags($career->body), 50, '...') !!}
                                        <br>
                                        <a target="_blank" class="inline-block mt-2 text-sm bg-purple-700 text-white px-4 py-1 rounded-lg hover:bg-purple-600 transition"
                                           href="/career/{{ $career->slug }}">Read More</a>
                                    </td>
                                    <td class="p-3 text-center">
                                        @if ($career->featured_image)
                                        <img src="{{ asset('storage/' . $career->featured_image) }}"
                                             alt="Career Image"
                                             class="h-12 w-12 object-cover rounded cursor-pointer border border-gray-300 hover:shadow-md transition"
                                             wire:click="showImage('{{ asset('storage/' . $career->featured_image) }}')">
                                        @endif
                                            </td>
                                    <td class="p-3 text-center space-x-2">
                                        <button wire:click="editCareer('{{ $career->slug }}')" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">Edit</button>

                                                <span x-data="{modalIsOpen: false}">
                                                    <button x-on:click="modalIsOpen = true" type="button" class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                                                    <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen" x-on:keydown.esc.window="modalIsOpen = false" x-on:click.self="modalIsOpen = false" class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8" role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
                                                        <!-- Modal Dialog -->
                                                        <div x-show="modalIsOpen" x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" class="flex max-w-xl flex-col gap-4 overflow-hidden rounded-radius border border-outline bg-white text-on-surface ">
                                                            <!-- Dialog Header -->
                                                            <div class="flex items-center justify-between border-b border-outline bg-surface-alt/60 p-4 dark:border-outline-dark dark:bg-surface-dark/20">
                                                                <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-on-surface-strong dark:text-on-surface-dark-strong">Confirm Delete</h3>
                                                                <button x-on:click="modalIsOpen = false" aria-label="close modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <!-- Dialog Body -->
                                                            <div class="px-4 py-8">
                                                                <p>You are about to delete this Career Post. All Career post data will be deleted</p>
                                                            </div>
                                                            <!-- Dialog Footer -->
                                                            <div class="flex flex-col-reverse justify-between gap-2 border-t border-outline bg-surface-alt/60 p-4 dark:border-outline-dark dark:bg-surface-dark/20 sm:flex-row sm:items-center md:justify-end">
                                                                <button  x-on:click="modalIsOpen = false" type="button" class="whitespace-nowrap rounded-radius px-4 py-2 text-center text-sm font-medium tracking-wide text-on-surface transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 ">Cancel</button>
                                                                <button wire:click="delete({{ $career->id }})" type="button" class="px-3 py-1 bg-red-500 text-white rounded">Confirm Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $careers->links() }}
                </div>

                <!-- Image Modal -->
                @if($showModal)
                    <div class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50">
                        <div class="bg-white p-6 rounded-lg shadow-lg relative w-4/5 max-w-lg">
                            <button class="absolute top-2 right-2 text-gray-600 text-3xl hover:text-red-500"
                                    wire:click="closeModal">✖</button>
                            <img src="{{ $selectedImage }}" class="w-full max-h-[80vh] object-contain rounded">
                        </div>
                    </div>
                @endif
            </div>


            @else
            <p class="text-3xl font-head font-bold  py-6 ">No Career Post found.</p>
            @endif
        </div>

    </div>
</div>
