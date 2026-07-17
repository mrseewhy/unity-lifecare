<?php

namespace App\Livewire\Auth;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\WithoutUrlPagination;

#[Layout('admin', ['title' => ' Unity Lifecare | Contacted Messages From Contact Form'])]
class Contactedmessages extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $showFullMessage = false;
    public function render()
    {
        $all_new_messages = Contact::latest()->where('contacted', true)->paginate(20);

        return view('livewire.auth.contactedmessages', ['messages' => $all_new_messages]);
    }
}
