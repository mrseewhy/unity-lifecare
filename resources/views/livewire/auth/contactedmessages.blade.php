@php
    use Carbon\Carbon;

@endphp
<div  class="w-full sm:max-w-6xl sm:p-8 font-body">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <h2 class="text-2xl sm:text-3xl font-head font-bold bg-gradient-to-r from-purple-600 to-purple-800 bg-clip-text text-transparent mb-6">
        All Responded Messages
    </h2>
    @if($messages && count($messages) > 0)
    @foreach ($messages as $contact)
    <div wire:key='{{ $contact->id }}' class="">

        <div class="bg-purple-100 shadow-lg rounded-lg p-6 mb-4 ">
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center items-start mb-6">
                <div class="flex flex-row space-x-2 items-center">
                    <span class="text-sm text-gray-500 font-semibold">Read and responded</span>

                </div>

                <span class="text-sm text-gray-500">{{ Carbon::parse($contact->created_at)->diffForHumans() }}</span>
            </div>

            <div class="mb-2 flex items-center space-x-4">
                <p class="text-gray-500 font-semibold">Name:</p>
                <p class="text-lg font-bold">{{ $contact->name }}</p>
            </div>

            <div class="mb-2 flex  items-center space-x-4">
                <p class="text-gray-500 font-semibold">Email:</p>
                <p class="text-sm text-gray-600 break-all">{{ $contact->email }}</p>
            </div>

            <div class="mb-2 flex  mr-2 sm:mr-0">
                <p class="text-gray-500 font-semibold mb-2  sm:mb-0">Message:</p>
                <div class="sm:ml-4 w-full">
                    <p class="text-gray-700 whitespace-normal break-words w-10/12 overflow-wrap-anywhere">
                        {{ $showFullMessage ? $contact->message : Str::limit($contact->message, 100) }}
                    </p>
                    @if (strlen($contact->message) > 100)
                        <button wire:click="$toggle('showFullMessage')" class="text-purple-500 mt-2">
                            {{ $showFullMessage ? 'Show Less' : 'Show More' }}
                        </button>
                    @endif
                </div>
            </div>
        </div>

    </div>
    @endforeach
    <div class="px-6 py-3 bg-gray-50 border-t border-gray-200">
        {{ $messages->links() }}
    </div>
    @else
    <h2 class="text-2xl sm:text-3xl font-head mt-4">No Message </h2>
    @endif
    <div class="flex items-center justify-center mt-8">

</div>
