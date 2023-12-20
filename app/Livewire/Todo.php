<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Todo List')]

class Todo extends Component
{
    public $todo = '';
    public $todos = [];

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo') ;
    }

    // public function updated($property,$value)
    // {
    //     dd($property,$value);
    // }

    // public function mount()
    // {
    //     dd('Todo mounted');
    // }

    public function render()
    {
        return view('livewire.todo');
    }
}
