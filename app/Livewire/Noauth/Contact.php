<?php

namespace App\Livewire\Noauth;

use App\Models\Contact as ContactModel;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Validation\Rule;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;

#[Layout('master', ['title' => ' Unity Lifecare | Contact us'])]

class Contact extends Component
{
    public $name, $email, $message, $captcha;
    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:10',
        'captcha' => ['nullable', 'turnstile'],
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        ContactModel::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],

        ]);


        $this->dispatch('messageReceived'); // Notify the unread count component
        $this->reset(['name', 'email', 'message']);
        session()->flash('message', ['type' => 'success', 'text' => 'Message sent! We would get back to you soon']);
        return $this->redirect('/', ['navigate' => true]);
    }



    public function render()
    {
        return view('livewire.noauth.contact');
    }
}
