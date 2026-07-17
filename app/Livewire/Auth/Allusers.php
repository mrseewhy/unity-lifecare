<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;


#[Layout('admin', ['title' => ' Unity Lifecare | All Users'])]
class Allusers extends Component
{
    // public $users;
    use WithPagination;
    use WithoutUrlPagination;
    public function updateRole($userId, $role)
    {
        $user = User::findOrFail($userId);
        $user->update(['role' => $role]);
        session()->flash('message', ['type' => 'success', 'text' => "User's role has been updated"]);
        return $this->redirect(route('allusers'), navigate:true);
    }
    public function toggleApproval($userId)
    {
        $user = User::findOrFail($userId);
        $user->update(['approved' => !$user->approved]);
        session()->flash('message', ['type' => 'success', 'text' => "User's approval status has been updated"]);
        return $this->redirect(route('allusers'), navigate:true);

    }
    public function deleteUser($userId)
    {
        $user = User::findOrFail($userId);

        // Prevent self-deletion
        if ($user->id === auth()->id()) {
            session()->flash('message', ['type' => 'error', 'text' => "You cannot delete yourself."]);
            return $this->redirect(route('allusers'), navigate: true);
        }

        // Delete user
        $user->delete();

        session()->flash('message', ['type' => 'success', 'text' => "User has been deleted successfully."]);

        return $this->redirect(route('allusers'), navigate: true);
    }

    public function editUser($id){

        return $this->redirect(route('edituser', ['id' => $id]), navigate: true);
    }

    public function render()
    {
        $users = User::latest()->paginate(20);
        return view('livewire.auth.allusers', ['users' => $users]);
    }
}
