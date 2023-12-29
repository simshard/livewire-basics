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

    //  LIFECYCLE hooks

    // public function updated($property,$value)
    // {
    //     dd('UPDATED '.$property.' > '.$value);
    //   //could do some validation  in this hook for example
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
