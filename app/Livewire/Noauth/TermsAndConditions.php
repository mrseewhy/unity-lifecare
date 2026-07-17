<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Terms and Conditions'])]


class TermsAndConditions extends Component
{
    public function render()
    {
        return view('livewire.noauth.terms-and-conditions');
    }
}
