<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Support with travel needs'])]

class Travelsupport extends Component
{
    public function render()
    {
        return view('livewire.noauth.travelsupport');
    }
}
