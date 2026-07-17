<?php

namespace App\Livewire\Auth;

use App\Models\Career;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

#[Layout('admin', ['title' => ' Unity Lifecare | Create A Career post'])]

class Createcareer extends Component
{
    use WithFileUploads;
    public $title;
    public $body;
    public $featured_image;
    protected $rules = [
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'featured_image' => 'nullable|image|max:2048', // 2MB max
    ];
    public function save()
    {
        $this->validate();

        $imagePath = $this->featured_image ? $this->featured_image->store('career_images', 'public') : null;

        Career::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'body' => $this->body,
            'user_id' => auth()->id(), // Assuming Authenticated user is the owner of the blog post. Replace with your actual logic.  // This method creates a new Blogpost model instance, populates it with the validated data, and saves it to the database.  // The Blogpost model is assumed to have the necessary fields (title, slug, body, featured_image, and user_id).  // The "auth()->id()" method returns the authenticated user
            'featured_image' => $imagePath,
        ]);

        // Reset form fields
        $this->reset(['title', 'body', 'featured_image']);

        session()->flash('message', ['type' => 'success', 'text' => "Career Post created successfully."]);

        return $this->redirect(route('allcareers'), navigate: true);
    }
    public function render()
    {
        return view('livewire.auth.createcareer');
    }
}
