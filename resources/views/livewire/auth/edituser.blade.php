<div>
    {{-- Do your work, then step back. --}}
    <div  class="w-full sm:max-w-6xl sm:p-8 font-body">
        <h2 class="text-2xl sm:text-3xl font-head font-bold bg-gradient-to-r from-purple-600 to-purple-800 bg-clip-text text-transparent mb-6">
            Edit User - {{ $user->name }}
        </h2>

        <div x-data="{ showPassword: false, showConfirmPassword: false }">
            <form wire:submit.defer="submit" class="space-y-4 py-6 font-body">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex flex-col">
                        <label for="name" class="text-lg font-medium text-purple-800 font-head">Name:</label>
                        <input type="text" id="name" wire:model="name"
                            class="border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300
                            @error('name') border-red-500 @enderror">
                        @error('name')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="text-lg font-medium text-purple-800 font-head">Email:</label>
                        <input type="email" id="email" wire:model="email"
                            class="border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300
                            @error('email') border-red-500 @enderror">
                        @error('email')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col">
                        <label for="role" class="text-lg font-medium text-purple-800 font-head">Select Role:</label>
                        <select id="role" wire:model="role"
                            class="border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300
                            @error('role') border-red-500 @enderror">
                            <option value="">Select an option</option>
                            <option value="manager">Manager</option>
                            <option value="admin">Admin</option>
                        </select>
                        @error('role')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="approved" wire:model="approved"
                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="approved" class="text-lg font-medium text-purple-800 font-head">Approved</label>
                    </div>

                    <div class="flex flex-col relative">
                        <label for="password" class="text-lg font-medium text-purple-800 font-head">Password:</label>
                        <input :type="showPassword ? 'text' : 'password'" id="password" wire:model="password"
                            class="border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300
                            @error('password') border-red-500 @enderror">
                        <button type="button" @click="showPassword = !showPassword" class="absolute inset-y-0 right-3 top-6 flex items-center text-gray-600">
                            <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="red" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                              </svg>
                              <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="green" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                              </svg>
                        </button>
                        @error('password')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col relative">
                        <label for="password_confirmation" class="text-lg font-medium text-purple-800 font-head">Confirm Password:</label>
                        <input :type="showConfirmPassword ? 'text' : 'password'" id="password_confirmation" wire:model="password_confirmation"
                            class="border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300
                            @error('password_confirmation') border-red-500 @enderror">
                        <button type="button" @click="showConfirmPassword = !showConfirmPassword" class="absolute inset-y-0 right-3 top-6 flex items-center text-gray-600">

                            <svg x-show="!showConfirmPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="red" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                              </svg>
                              <svg x-show="showConfirmPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="green" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                              </svg>
                        @error('password_confirmation')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="block">
                    <button type="submit"
                        class=" mt-6 bg-purple-700 w-full text-white px-4 py-2 rounded-lg hover:bg-purple-800 focus:ring focus:ring-purple-300">
                        Update
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
