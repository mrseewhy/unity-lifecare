<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use App\Models\Blogpost;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | View Post'])]

class Viewblog extends Component
{
    public $blog;
    public function mount($slug){
        $this->blog = Blogpost::where('slug', $slug)->first();
    }
    public function editBlogpost($slug){
        return $this->redirect(route('editpost', ['slug' => $slug]));
    }
    public function render()
    {
        return view('livewire.noauth.viewblog');
    }
}
