<?php

namespace App\Livewire\Noauth;

use App\Mail\DraftMail;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;


#[Layout('master', ['title' => ' Unity Lifecare | Registration Draft'])]


class Draft extends Component
{
    public $url; // The value to be copied
    public $email; // Email input field
    public $website;

    public function mount()
    {
        $this->url = session('draft_url');

        // If URL is empty, redirect back or to home
        if (empty($this->url)) {
            return redirect()->route('home');
        }
    }

    public function sendemail(){
        $this->ensureCanSendDraftEmail();

        $this->validate([
            'email' => ['required', 'email']
        ]);

        //check if url is present
        if (empty($this->url)) {
            return redirect()->route('home');
        }
        $data = [
            'url' => $this->url,
        ];
        Mail::to($this->email)->queue(new DraftMail($data));

        // Redirect back to the draft page with a success message
        session()->flash('message', ['type' => 'success', 'text' => 'Email sent successfully!']);
        return $this->redirect('/', navigate:true); // Redirect to a success page


    }

    private function ensureCanSendDraftEmail(): void
    {
        if (filled($this->website)) {
            throw ValidationException::withMessages([
                'form' => 'Unable to send this email. Please try again.',
            ]);
        }

        $key = 'draft_email:'.request()->ip().':'.sha1((string) $this->url);

        if (RateLimiter::tooManyAttempts($key, 3)) {
            throw ValidationException::withMessages([
                'form' => 'Too many email attempts. Please wait a few minutes and try again.',
            ]);
        }

        RateLimiter::hit($key, 600);
    }

    public function render()
    {
        return view('livewire.noauth.draft');
    }
}
