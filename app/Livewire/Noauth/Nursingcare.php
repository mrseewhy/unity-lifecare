<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Professional nursing care in the community'])]

class Nursingcare extends Component
{
    public function render()
    {
        return view('livewire.noauth.nursingcare');
    }
}
