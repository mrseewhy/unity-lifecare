<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Thank You'])]

class Thankyou extends Component
{
    public function render()
    {
        return view('livewire.noauth.thankyou');
    }
}
