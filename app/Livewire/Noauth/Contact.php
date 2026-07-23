<?php

namespace App\Livewire\Noauth;

use App\Models\Contact as ContactModel;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

#[Layout('master', ['title' => ' Unity Lifecare | Contact us'])]

class Contact extends Component
{
    public $name, $email, $message, $website;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function mount()
    {
        session()->put('contact_form_started_at', now()->timestamp);
    }

    public function submit()
    {
        $this->ensureIsHuman('contact_form', 'contact_form_started_at');
        $validatedData = $this->validate();

        ContactModel::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],

        ]);


        $this->dispatch('messageReceived'); // Notify the unread count component
        $this->reset(['name', 'email', 'message', 'website']);
        session()->flash('message', ['type' => 'success', 'text' => 'Message sent! We would get back to you soon']);
        return $this->redirect('/', ['navigate' => true]);
    }

    private function ensureIsHuman(string $action, string $startedAtKey): void
    {
        if (filled($this->website)) {
            throw ValidationException::withMessages([
                'form' => 'Unable to submit this form. Please try again.',
            ]);
        }

        $key = $action.':'.request()->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            throw ValidationException::withMessages([
                'form' => 'Too many attempts. Please wait a few minutes and try again.',
            ]);
        }

        RateLimiter::hit($key, 600);

        if (now()->timestamp - (int) session($startedAtKey, 0) < 2) {
            throw ValidationException::withMessages([
                'form' => 'Please wait a moment and try again.',
            ]);
        }
    }



    public function render()
    {
        return view('livewire.noauth.contact');
    }
}
