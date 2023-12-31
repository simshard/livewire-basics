<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostRow extends Component
{
    public Post $post;

   

    //Livewire automatically passes the model to the mount method
 
    // public function mount($post)
    // {
    //     $this->post = $post;
    // }

// render method not explicitly needed

    // public function render()
    // {
    //     return view('livewire.post-row');
    // }
}
