<div>
    {{-- Stop trying to control. --}}
    <div  class="w-full sm:max-w-6xl sm:p-8 font-body">
        <h2 class="text-2xl sm:text-3xl font-head font-bold bg-gradient-to-r from-purple-600 to-purple-800 bg-clip-text text-transparent mb-6">
            Edit Blog Post - {{ $career->title }}
        </h2>

        <div>
            <form wire:submit.prevent="update" class="space-y-4">
                <div>
                    <label class="block font-medium font-head text-purple-800 text-lg">Title</label>
                    <input type="text" wire:model="title" class="w-full p-2 border rounded">
                    @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


                <!-- Description Input -->
        <div>
            <label class="block font-medium font-head text-purple-800 text-lg">Body</label>
            <div wire:ignore>
                <textarea wire:model="body"
                          id="body"
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500"
                          x-data
                          x-init="$('#body').summernote({
                                placeholder: 'Please enter blogpost body',
                                tabsize: 2,
                                height: 200,
                                toolbar: [
                                    ['style', ['style']],
                                    ['font', ['bold', 'underline', 'clear']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['table', ['table']],
                                    ['insert', ['link', 'picture', 'video']],
                                    ['view', ['fullscreen', 'codeview', 'help']]
                                ],
                                callbacks: {
                                    onChange: function(contents, $editable) {
                                        @this.set('body', contents)
                                    }
                                }
                            });"></textarea>
            </div>
            @error('body')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

<div>
    @if($current_featured_image)
    Previous Image: <img src="{{ Storage::url($current_featured_image) }}" class="mt-2 h-32 object-cover rounded">
    @endif
</div>
                <div>
                    <label class="block font-medium font-head text-purple-800 text-lg">Featured Image</label>
                    <input type="file" wire:model="new_featured_image" class="w-full p-2 border rounded">
                    @if ($new_featured_image)
                        <img src="{{ $new_featured_image->temporaryUrl() }}" class="mt-2 h-32 object-cover rounded">
                    @endif
                    @error('featured_image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="bg-purple-700 text-white px-4 py-2 rounded w-full block mt-12 mb-8">Update Post</button>
            </form>
        </div>
    </div>
</div>
