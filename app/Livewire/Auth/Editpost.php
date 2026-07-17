<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Blogpost;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Layout('admin', ['title' => ' Unity Lifecare | Edit Blogpost'])]

class Editpost extends Component
{
    use WithFileUploads;
    public $blogpost,   $title, $body, $current_featured_image;
    public $new_featured_image;
    public $previousUrl;
    public function mount($slug){
        $this->blogpost = Blogpost::where('slug', $slug)->firstOrFail();
        $this->title = $this->blogpost->title;
        $this->body = $this->blogpost->body;
        $this->current_featured_image = $this->blogpost->featured_image;
        $this->previousUrl = url()->previous();

    }
    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'new_featured_image' => 'nullable|image|max:2048', // 2MB max
        ]);

        // Update BlogPost
        $this->blogpost->title = $this->title;
        $this->blogpost->body = $this->body;
        $this->blogpost->slug = Str::slug($this->title);

        // Handle Image Upload
        if ($this->new_featured_image) {
            // Delete old image
            if ($this->current_featured_image) {
                Storage::disk('public')->delete($this->current_featured_image);
            }

            // Store new image
            $path = $this->new_featured_image->store('blog_images', 'public');
            $this->blogpost->featured_image = $path;
        }

        $this->blogpost->save();

        $newUrl = (str_contains($this->previousUrl, 'dashboard'))
        ? '/dashboard/blog/all'
        : "/blog/" . $this->blogpost->slug;

        session()->flash('message', ['type' => 'success', 'text' => "Blogpost updated successfully."]);
        return $this->redirect($newUrl);

    }
    public function render()
    {
        return view('livewire.auth.editpost');
    }
}
