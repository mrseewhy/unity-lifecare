<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Assistance with home responsibilities'])]
class Homeresponsibilities extends Component
{
    public function render()
    {
        return view('livewire.noauth.homeresponsibilities');
    }
}
