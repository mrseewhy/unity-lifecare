<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Pagehead extends Component
{
    public $title;

    public function mount($title)
    {
        $this->title = $title;
    }
    public function render()
    {
        return view('livewire.partials.pagehead');
    }
}
