<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('master')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $user = Auth::user();
        // dd($user->approved);

        if (!$user->approved) {
            Auth::logout(); // Log out the user to prevent unauthorized access
            session()->flash('message', ['type' => 'error', 'text' => 'You have not been approved.']);
            $this->redirect(route('home'), navigate: true); // Smooth navigation
            return; // Stop execution
        }

        session()->flash('message', ['type' => 'success', 'text' => 'Welcome to the dashboard.']);
        $this->redirect(route('dashboard')); // Full page reload

    }
}; ?>

<div class="w-full max-h-screen flex flex-col md:flex-row items-center justify-center">

    <div class="hidden md:block  w-1/2 h-[80vh] bg-center bg-cover" style="background-image: url('images/1.jpg')">
    </div>
    <div class="w-full md:w-1/2 bg-purple-50 h-[80vh] flex flex-col justify-center px-6 md:px-12">

        <h3 class="text-2xl md:text-3xl font-bold font-head text-purple-900 mb-12"> Welcome Back</h3>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-purple-600 shadow-sm focus:ring-purple-500" name="remember">
                <span class="ms-2 font-bold font-head text-purple-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline font-head text-sm text-purple-600 hover:text-purple-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</div>
</div>
