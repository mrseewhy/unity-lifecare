<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Hash;
#[Layout('admin', ['title' => ' Unity Lifecare | Create User'])]

class Createuser extends Component
{
    public $name, $email, $role, $password, $password_confirmation;
    public $approved = false;

    public function submit()
    {
        // Validate form data
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:manager,admin'],
        ]);

        // Create new user
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->role,
            'approved' => (bool) $this->approved, // Explicitly cast to boolean
        ]);

        // Flash success message and redirect
        session()->flash('message', ['type' => 'success', 'text' => 'User has been created ']);
        return $this->redirect('/dashboard/users/all', navigate:true); // Ensure 'dashboard' is a named route
    }
    public function render()
    {
        return view('livewire.auth.createuser');
    }
}
