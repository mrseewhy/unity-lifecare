<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="p-2 ">

        <!-- Month and Year Selection -->
        <div class="grid grid-cols-2 gap-4 mb-6 text-sm">
            <div>
                <label for="month" class="block text-sm font-medium text-gray-700">Month (Optional)</label>
                <select wire:model="month" id="month" class="mt-1 block w-full p-2 border border-gray-300 rounded-md text-sm">
                    <option value="">Select Month</option>
                    @foreach ($months as $key => $name)
                        <option class="text-sm" value="{{ $key }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                <select wire:model="year" id="year" class="mt-1 block w-full p-2 border border-gray-300 rounded-md text-sm">
                    <option value="">Select Year</option>
                    @foreach ($years as $year)
                        <option class="text-sm" value="{{ $year }}">{{ $year }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Fetch Data Button -->
        <button wire:click="fetchData" class="px-4 py-2 bg-purple-800 text-white rounded-md hover:bg-purple-600 text-sm font-bold">
            Fetch Data
        </button>

        <!-- Download Button (Visible only if data is fetched) -->
        @if (!empty($data))
            <button wire:click="downloadCsv" class="mt-4 px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 text-sm font-bold">
                Download CSV
            </button>
        @endif
    </div>
</div>
