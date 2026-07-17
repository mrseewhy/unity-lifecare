<?php

namespace App\Livewire\Noauth;


use App\Models\Career;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Careers'])]

class Careers extends Component
{
    public function render()
    {
        $careers = Career::latest()->paginate(20);

        return view('livewire.noauth.careers', array('careers' => $careers));
    }
}
