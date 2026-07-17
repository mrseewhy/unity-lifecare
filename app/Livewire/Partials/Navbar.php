<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Navbar extends Component
{

    public $currentRoute;


    public function mount()
    {
        $this->currentRoute = request()->route()->getName();
    }

    public function setActiveRoute($route)
    {
        $this->currentRoute = $route;
    }
    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
