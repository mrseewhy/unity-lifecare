<?php

namespace App\Livewire\Partials;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{


    public $style;

    public function mount($style = '')
    {
        $this->style = $style;
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        session()->flash('message', [
            'type' => 'success',
            'text' => 'You have been logged out',
        ]);
        $this->redirect('/', ['navigate' => true]);
    }

    public function render()
    {
        return view('livewire.partials.logout');
    }
}
