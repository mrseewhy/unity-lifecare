<?php

namespace App\Livewire\Auth;

use App\Models\Contact;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('admin', ['title' => ' Unity Lifecare | Recent Messages From Contact Form'])]
class Recentmessages extends Component
{
    public $showFullMessage = false;

    public function confirmContact($contactId){
        $contact = Contact::find($contactId);
        $contact->contacted = true;
        $contact->save();
        session()->flash('message', ['type' => 'success', 'text' => 'You have read and acted on the message']);
        return $this->redirect('/dashboard/contactform/recent-messages', navigate: true) ;

    }
    public function updateCount($contactId){
        $contact = Contact::find($contactId);
        if($contact){
            $contact->is_read = true;
            $contact->save();
        $this->dispatch('message-read');
        }

    }
    public function render()
    {
        $all_new_messages = Contact::latest()->where('contacted', false)->paginate(20);
        return view('livewire.auth.recentmessages', ['messages' => $all_new_messages]);
    }
}
