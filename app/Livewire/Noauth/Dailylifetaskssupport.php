<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Daily Life Tasks Support'])]

class Dailylifetaskssupport extends Component
{
    public function render()
    {
        return view('livewire.noauth.dailylifetaskssupport');
    }
}
