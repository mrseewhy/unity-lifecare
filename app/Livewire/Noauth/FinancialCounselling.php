<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Financial Counselling'])]

class FinancialCounselling extends Component
{
    public function render()
    {
        return view('livewire.noauth.financial-counselling');
    }
}
