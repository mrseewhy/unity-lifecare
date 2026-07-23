<?php

namespace App\Livewire\Noauth;

use App\Models\Career;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | View Career'])]

class Viewcareer extends Component
{
    public $career;
    public function mount($slug){
        $this->career = Career::where('slug', $slug)->firstOrFail();
    }
    public function editCareer($slug){
        return $this->redirect(route('editcareer', ['slug' => $slug]));
    }
    public function render()
    {
        return view('livewire.noauth.viewcareer');
    }
}
