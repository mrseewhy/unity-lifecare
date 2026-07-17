<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Models\SubmittedFormData;
use Livewire\WithoutUrlPagination;

#[Layout('admin', ['title' => ' Unity Lifecare | Contacted Registration'])]

class Contactedregistration extends Component
{
    use WithPagination;
    use WithoutUrlPagination;
    public function makeRead($id){
        $registration = SubmittedFormData::findOrFail($id);
        $registration->is_read = true;
        $registration->save();
    }
    public function contact($id){
        $registration = SubmittedFormData::findOrFail($id);
        $registration->contacted = true;
        $registration->save();
    }
    public function render()
    {
        $allregistrations = SubmittedFormData::latest()->where('is_read', true)->where('contacted', true)->paginate(20);
        return view('livewire.auth.contactedregistration', ['allregistrations' => $allregistrations]);
    }
}
