<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Blogpost;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Storage;

#[Layout('admin', ['title' => ' Unity Lifecare | All Blogposts'])]


class Allblogposts extends Component
{
    use WithPagination;
    use WithoutUrlPagination;
    public $selectedImage;
    public $showModal = false;

    public function showImage($image)
    {
        $this->selectedImage = $image;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->selectedImage = null;
    }
    public function delete($id)
    {
        $blogPost = BlogPost::findOrFail($id);

        // Check if the blog post has an image and delete it from storage
        if ($blogPost->featured_image) {
            Storage::disk('public')->delete($blogPost->featured_image);
        }

        // Delete the blog post from the database
        $blogPost->delete();

        session()->flash('message', ['type' => 'success', 'text' => "Blogpost deleted successfully."]);

        return $this->redirect(route('allblogposts'), navigate: true);
    }
    public function editBlogpost($slug){
        return $this->redirect(route('editpost', ['slug' => $slug]), navigate: true);
    }
    public function render()
    {
        // Fetch all blog posts from your database
        $blogposts = Blogpost::latest()->paginate(20 );
        return view('livewire.auth.allblogposts', ['blogposts' => $blogposts]);
    }
}
