<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Hash;

#[Layout('admin', ['title' => ' Unity Lifecare | Edit User'])]

class Edituser extends Component
{
    public $user, $userId, $name, $email, $role, $approved, $password, $password_confirmation;
    public function mount($id){
        $this->user = User::findOrFail($id);
        $this->userId = $id;
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->role = $this->user->role;
        $this->approved = $this->user->approved;

    }
    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($this->userId)],
            'role' => 'required|in:manager,admin',
            'approved' => 'boolean',
            'password' => 'nullable|min:8|confirmed',
        ]);

        $user = User::findOrFail($this->userId);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->role = $this->role;
        $user->approved = $this->approved;

        if ($this->password) {
            $user->password = Hash::make($this->password);
        }

        $user->save();

        session()->flash('message', ['type' => 'success', 'text' => 'User updated successfully.']);

        return $this->redirect(route('allusers'), navigate: true);
    }
    public function render()
    {
        return view('livewire.auth.edituser');
    }
}
