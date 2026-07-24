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

<div class="min-h-screen bg-purple-50 px-4 py-10 sm:px-6 lg:px-8">
    <div class="mx-auto flex min-h-[calc(100vh-5rem)] w-full max-w-6xl items-center">
        <div class="grid w-full overflow-hidden rounded-3xl bg-white shadow-2xl shadow-purple-950/10 md:grid-cols-2">
            <div class="relative hidden min-h-[34rem] bg-purple-900 md:block">
                <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('{{ asset('images/1.jpg') }}')"></div>
                <div class="absolute inset-0 bg-gradient-to-br from-purple-950/75 via-purple-900/40 to-transparent"></div>
                <div class="relative flex h-full flex-col justify-end p-10 text-white">
                    <p class="font-head text-4xl font-bold leading-tight">Welcome back to Unity Lifecare</p>
                    <p class="mt-4 max-w-sm text-sm leading-6 text-purple-100">Sign in to manage referrals, registrations, messages, careers, and blog updates.</p>
                </div>
            </div>

            <div class="flex min-h-[34rem] flex-col justify-center px-5 py-10 sm:px-8 md:px-12 lg:px-16">
                <div class="mb-10">
                    <p class="font-head text-sm font-bold uppercase tracking-[0.25em] text-purple-500">Dashboard Access</p>
                    <h3 class="mt-3 font-head text-3xl font-bold text-purple-950 sm:text-4xl">Welcome Back</h3>
                    <p class="mt-3 text-sm text-purple-700">Use your approved staff account to continue.</p>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form wire:submit="login" class="space-y-5">
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input wire:model="form.email" id="email" class="mt-2 block w-full rounded-xl border-purple-200 py-3" type="email" name="email" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input wire:model="form.password" id="password" class="mt-2 block w-full rounded-xl border-purple-200 py-3" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                    </div>

                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <label for="remember" class="inline-flex items-center">
                            <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-purple-600 shadow-sm focus:ring-purple-500" name="remember">
                            <span class="ms-2 font-head text-sm font-bold text-purple-700">{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="font-head text-sm font-bold text-purple-600 underline hover:text-purple-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500" href="{{ route('password.request') }}" wire:navigate>
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <x-primary-button class="mt-2 w-full justify-center rounded-xl py-3 text-center">
                        {{ __('Log in') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</div>
