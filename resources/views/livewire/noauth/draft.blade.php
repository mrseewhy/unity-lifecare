<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    @livewire('partials.pagehead', ['title' => 'Registration Draft'])
    <div class="max-w-7xl mx-auto mt-16 mb-12">
        <h2 class="text-center text-2xl md:text-3xl text-purple-700 font-bold font-head">
            Thank you for Registration
        </h2>
        <div class="max-w-5xl mx-auto p-8 bg-purple-100 border-l-4 border-purple-800 text-purple-800 mt-12">
            <p>
                Your form has been saved as a draft and a resume link has been generated so you can return to the form anytime within 30 days from today. Copy and save the link or enter your email address below to have the link sent to your mail.
            </p>
        </div>
        <div class="flex justify-center mt-8">

        </div>

        <div class="flex flex-col justify-center gap-3 px-4 md:px-0 py-8 max-w-5xl mx-auto">

        <h3 class="text-2xl md:text-3xl text-purple-800 font-head  md:text-center mt-4 mb-6">Copy this link to continue</h3>
    <div x-data="{ copied: false }" class="flex flex-col md:flex-row items-start md:items-center justify-center gap-3 ">
        <!-- Input Field -->
        <input
            id="copy"
            type="text"
            value="{{ $url}}"
            class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-200 w-full  bg-gray-100 h-12"
            readonly
        >


        <!-- Copy Button -->
        <button
            @click="document.getElementById('copy').select(); document.execCommand('copy'); copied = true; setTimeout(() => copied = false, 3000)"
            value="copy"
            class="flex items-center gap-2 px-4 py-2 bg-purple-700 text-white font-medium rounded-lg shadow-md hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-purple-700 focus:ring-offset-2 transition-all duration-200 w-40"
        >
            <!-- Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75"/>
            </svg>

            <span>Copy Link</span>
        </button>

        <!-- Copied Notification -->
        <span
            x-show="copied"
            class="text-sm bg-purple-100 text-purple-900 px-3 py-1 rounded-md shadow"
        >
            ✅ Link copied successfully!
        </span>
    </div>
</div>



    <div class="flex items-center justify-center mt-12 bg-gray-50 rounded-lg max-w-5xl mx-auto py-8 px-6 border-l-4 border-purple-500 shadow-md">
        <div class="w-full max-w-md text-center">
            <h3 class="text-xl font-semibold text-purple-800 mb-4 font-head">Send this link to your email</h3>

            <div class="flex flex-col sm:flex-row items-center gap-3">

                <!-- Email Input -->
                <input
                wire:model="email"
                    type="email"
                    placeholder="john@example.com"
                    class="w-full sm:w-auto flex-1 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-200"
                >



                <!-- Send Button -->
                <button wire:click='sendemail' class="px-5 py-2 bg-purple-700 text-white font-medium rounded-lg shadow-md hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-purple-700 focus:ring-offset-2 transition-all duration-200">
                    Send
                </button>
            </div>
            <div class="mt-2 md:-translate-x-24 md:mt-0">
                <!-- Error Message -->
                @if($errors->has('email'))
                    <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
    </div>


    </div>

</div>



