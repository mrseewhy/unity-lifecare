<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="container mx-auto py-8 px-4 font-body text-purple-800">
        <h1 class="font-bold text-2xl font-head text-purple-900">Welcome {{ Auth::user()->name }}</h1>

<p class="text-lg my-2 font-semibold hover:translate-x-3 transition-all duration-300"><a wire:navigate href="/dashboard/visitors-registration/new"> &rsaquo; New Visitors Registrations </a></p>

<p class="text-lg my-2 font-semibold hover:translate-x-3 transition-all duration-300"><a wire:navigate href="/dashboard/contactform/recent-messages">&rsaquo; New Contact Form</a></p>

@if (Auth::user()->role === 'admin')
<p class="text-lg my-2 font-semibold hover:translate-x-3 transition-all duration-300"><a wire:navigate href="/dashboard/users/create">&rsaquo; Create User</a></p>

<p class="text-lg my-2 font-semibold hover:translate-x-3 transition-all duration-300"><a wire:navigate href="/dashboard/users/all">&rsaquo; All Users</a></p>
@endif


            <p class="text-lg my-2 font-semibold hover:translate-x-3 transition-all duration-300"><a wire:navigate href="/dashboard/blog/create">&rsaquo; Create Blogpost</a></p>

                <p class="text-lg my-2 font-semibold hover:translate-x-3 transition-all duration-300"><a wire:navigate href="/dashboard/career/create">&rsaquo; Create Career Post</a></p>


    </div>
</div>
