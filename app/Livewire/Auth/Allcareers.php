<?php

namespace App\Livewire\Auth;

use App\Models\Career;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Storage;

#[Layout('admin', ['title' => ' Unity Lifecare | All Careers'])]

class Allcareers extends Component
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
        $career = Career::findOrFail($id);

        // Check if the blog post has an image and delete it from storage
        if ($career->featured_image) {
            Storage::disk('public')->delete($career->featured_image);
        }

        // Delete the blog post from the database
        $career->delete();

        session()->flash('message', ['type' => 'success', 'text' => "Career Post deleted successfully."]);

        return $this->redirect(route('allcareers'), navigate: true);
    }
    public function editCareer($slug){
        return $this->redirect(route('editcareer', ['slug' => $slug]), navigate: true);
    }
    public function render()
    {
        $careers = Career::latest()->paginate(20 );
        return view('livewire.auth.allcareers', ['careers' => $careers]);
    }
}
