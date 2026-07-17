<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | People Centered Care'])]

class Peoplecenteredcare extends Component
{
    public function render()
    {
        return view('livewire.noauth.peoplecenteredcare');
    }
}
