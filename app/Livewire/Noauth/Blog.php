<?php

namespace App\Livewire\Noauth;

use Livewire\Component;
use App\Models\Blogpost;
use Livewire\Attributes\Layout;

#[Layout('master', ['title' => ' Unity Lifecare | Our Blog'])]


class Blog extends Component
{

    public function render()
    {
        $blogs = Blogpost::latest()->paginate(20);
        return view('livewire.noauth.blog', array('blogs' => $blogs));
    }
}
