<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    
    public $title;
    public $body;
    public function save(){
        
        //dd('saving');
        $this->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:3',
        ]);
        Post::create([
            'title' => $this->title,
            'body' => $this->body,
            'user_id' => 1,
        ]);
        $this->title = "";
        $this->body = "";
        $this->redirect('/posts');
    }
         
    
    public function render()
    {
        return view('livewire.create-post');
    }
}
