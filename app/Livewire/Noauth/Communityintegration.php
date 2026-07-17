<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Community Integration'])]

class Communityintegration extends Component
{
    public function render()
    {
        return view('livewire.noauth.communityintegration');
    }
}
