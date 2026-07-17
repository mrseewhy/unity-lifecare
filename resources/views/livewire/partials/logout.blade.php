<div x-data="{ modalIsOpen: false }">
    <!-- Delete Button -->
    <button x-on:click="modalIsOpen = true" type="button" class="{{ $style }}">
        Logout
    </button>

    <!-- Modal Overlay -->
    <div x-cloak x-show="modalIsOpen"
        x-transition.opacity.duration.200ms
        x-trap.inert.noscroll="modalIsOpen"
        x-on:keydown.esc.window="modalIsOpen = false"
        x-on:click.self="modalIsOpen = false"
        class="fixed inset-0 z-30 flex items-center justify-center bg-black/20 p-4 backdrop-blur-md"
        role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">

        <!-- Modal Content -->
        <div x-show="modalIsOpen"
            x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
            x-transition:enter-start="opacity-0 scale-50"
            x-transition:enter-end="opacity-100 scale-100"
            class="flex max-w-xl flex-col gap-4 overflow-hidden rounded-lg border border-gray-300 bg-white shadow-lg">

            <!-- Modal Header -->
            <div class="flex items-center justify-between border-b p-4 bg-gray-100">
                <h3 id="defaultModalTitle" class="font-semibold font-mont tracking-wide text-red-600">Confirm Logout</h3>
                <button x-on:click="modalIsOpen = false" aria-label="Close modal" class="bg-red-600 rounded-full p-2 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="#fff" fill="none" stroke-width="2" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="px-6 py-6 font-lato text-black w-full whitespace-normal">
                <p class="break-words">
                    Warning: Logging out will close your current session and discard any unsaved work.
                    Please ensure you have saved any important changes before confirming logout.
                </p>
            </div>

            <!-- Modal Footer -->
            <div class="flex flex-col-reverse sm:flex-row justify-end gap-2 border-t p-4 bg-gray-100">
                <button x-on:click="modalIsOpen = false" type="button" class="px-4 py-2 text-sm font-medium tracking-wide text-gray-700 hover:bg-gray-200 rounded-md">
                    Cancel
                </button>
                <button wire:click='logout' type="button" class="px-4 py-2 text-sm font-medium tracking-wide text-white bg-red-600 hover:bg-red-800 rounded-md">
                    Logout
                </button>
            </div>
        </div>
    </div>
</div>
