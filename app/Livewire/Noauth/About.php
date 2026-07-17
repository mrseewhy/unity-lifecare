<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | About Us'])]

class About extends Component
{
    public function render()
    {
        return view('livewire.noauth.about');
    }
}
