<?php

namespace App\Livewire\Auth;

use App\Models\Career;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Layout('admin', ['title' => ' Unity Lifecare | Edit Career'])]
class Editcareer extends Component
{
    use WithFileUploads;
    public $career,   $title, $body, $current_featured_image;
    public $new_featured_image;
    public $previousUrl;
    public function mount($slug){
        $this->career = Career::where('slug', $slug)->firstOrFail();
        $this->title = $this->career->title;
        $this->body = $this->career->body;
        $this->current_featured_image = $this->career->featured_image;
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
        $this->career->title = $this->title;
        $this->career->body = $this->body;
        $this->career->slug = Str::slug($this->title);

        // Handle Image Upload
        if ($this->new_featured_image) {
            // Delete old image
            if ($this->current_featured_image) {
                Storage::disk('public')->delete($this->current_featured_image);
            }

            // Store new image
            $path = $this->new_featured_image->store('career_images', 'public');
            $this->career->featured_image = $path;
        }

        $this->career->save();

        $newUrl = (str_contains($this->previousUrl, 'dashboard'))
        ? '/dashboard/career/all'
        : "/career/" . $this->career->slug;

        session()->flash('message', ['type' => 'success', 'text' => "Career Post updated successfully."]);
        return $this->redirect($newUrl);

    }
    public function render()
    {

        return view('livewire.auth.editcareer');
    }
}
