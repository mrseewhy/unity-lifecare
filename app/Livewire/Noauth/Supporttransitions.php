<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Support through life’s transitions'])]

class Supporttransitions extends Component
{
    public function render()
    {
        return view('livewire.noauth.supporttransitions');
    }
}
