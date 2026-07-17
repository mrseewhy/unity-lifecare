<?php

namespace App\Livewire\Partials;

use App\Models\SubmittedFormData;
use Livewire\Component;
use Livewire\Attributes\On;

class NewRegistration extends Component
{
    public $unreadCount;

    protected $listeners = ['messageReceived' => 'updateCount', 'messageRead' => 'updateUnreadCount'];
    public function mount()
    {
        $this->unreadCount = SubmittedFormData::where('is_read', false)->count();
    }
    public function updateCount()
    {
        $this->unreadCount = SubmittedFormData::where('is_read', false)->count();
    }
    #[On('message-read')] // Livewire 3 way of listening to events
    public function updateUnreadCount()
    {
        $this->unreadCount = SubmittedFormData::where('is_read', false)->count();
    }
    public function markAsRead()
    {
        SubmittedFormData::where('is_read', false)->update(['is_read' => true]);
        $this->updateCount();
    }
    public function render()
    {
        return view('livewire.partials.new-registration');
    }
}
