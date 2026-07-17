<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Privacy Policy'])]


class PrivacyPolicy extends Component
{
    public function render()
    {
        return view('livewire.noauth.privacy-policy');
    }
}
