<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Household Tasks'])]

class Householdtasks extends Component
{
    public function render()
    {
        return view('livewire.noauth.householdtasks');
    }
}
