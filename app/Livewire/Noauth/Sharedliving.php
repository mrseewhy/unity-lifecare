<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Help with everyday shared living'])]

class Sharedliving extends Component
{
    public function render()
    {
        return view('livewire.noauth.sharedliving');
    }
}
