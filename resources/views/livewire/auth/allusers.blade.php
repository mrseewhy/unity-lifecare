<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div  class="w-full sm:max-w-6xl sm:p-8 font-body">
        <h2 class="text-2xl sm:text-3xl font-head font-bold bg-gradient-to-r from-purple-600 to-purple-800 bg-clip-text text-transparent mb-6">
            All Users
        </h2>
        @if (!empty($users) && $users->count())

        <div>
            <table class="w-full border-collapse border border-gray-300 text-sm">
                <thead>
                    <tr class="bg-gray-100 font-head">
                        <th class="border p-2">Name</th>
                        <th class="border p-2">Email</th>
                        <th class="border p-2">Role</th>
                        <th class="border p-2">Change Role</th>
                        <th class="border p-2">Approved</th>
                        <th class="border p-2">Change Approve</th>
                        <th class="border p-2">Action</th>
                    </tr>
                </thead>
                <tbody class="font-body">
                    @foreach ($users as $user)
                        <tr class="text-center">
                            <td class="border p-2 ">{{ $user->name }}</td>
                            <td class="border p-2">{{ $user->email }}</td>
                            <td class="border p-2">{{ ucfirst($user->role) }}</td>

                            <!-- Change Role Dropdown -->
                            <td class="border p-2">
                                <select wire:change="updateRole({{ $user->id }}, $event.target.value)"
                                    class="border rounded px-2 py-1 text-sm">
                                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }} class="text-sm">Admin</option>
                                    <option value="manager" {{ $user->role == 'manager' ? 'selected' : '' }} class="text-sm">Manager</option>
                                </select>
                            </td>

                            <!-- Approved Status -->
                            <td class="border p-2">
                                @if($user->approved)
                                    <span class="text-green-500 font-bold">✔ Yes</span>
                                @else
                                    <span class="text-red-500 font-bold">✖ No</span>
                                @endif
                            </td>

                            <!-- Toggle Approval -->
                            <td class="border p-2">
                                <button wire:click="toggleApproval({{ $user->id }})"
                                    class="px-3 py-1 rounded {{ $user->approved ? 'bg-red-500 text-white' : 'bg-green-500 text-white' }}">
                                    {{ $user->approved ? 'Disapprove' : 'Approve' }}
                                </button>
                            </td>

                            <!-- Actions -->
                            <td class="border p-2 space-x-2">
                                <button wire:click='editUser({{ $user->id }})'  class="px-3 py-1 bg-blue-500 text-white rounded">Edit</button>

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
                                                    <p>You are about to delete this user. All user data will be deleted</p>
                                                </div>
                                                <!-- Dialog Footer -->
                                                <div class="flex flex-col-reverse justify-between gap-2 border-t border-outline bg-surface-alt/60 p-4 dark:border-outline-dark dark:bg-surface-dark/20 sm:flex-row sm:items-center md:justify-end">
                                                    <button  x-on:click="modalIsOpen = false" type="button" class="whitespace-nowrap rounded-radius px-4 py-2 text-center text-sm font-medium tracking-wide text-on-surface transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 ">Cancel</button>
                                                    <button wire:click="deleteUser({{ $user->id }})" type="button" class="px-3 py-1 bg-red-500 text-white rounded">Confirm Delete</button>
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
        <div class="mt-6 mb-8">{{ $users->links() }}</div>
        @else
    <p class="text-3xl font-head font-bold  py-6 ">No users found.</p>
@endif
    </div>

</div>
