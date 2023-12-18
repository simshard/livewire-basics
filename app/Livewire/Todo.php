<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todo = '';
    public $todos = [
        'Go to the shop',
        'Go to the market',
        'Go to work',
    ];

    public function add()
    {
         $this->todos[] = $this->todo;
         $this->reset('todo') ;
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
