<?php

namespace App\Livewire\Auth;

use App\Models\SubmittedFormData;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
#[Layout('admin', ['title' => ' Unity Lifecare | Visitors Registration'])]

class VisitorsRegistration extends Component
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
        $allregistrations = SubmittedFormData::latest()->where('contacted', 'false')->paginate(20);
        return view('livewire.auth.visitors-registration', ['allregistrations' => $allregistrations]);
    }
}
