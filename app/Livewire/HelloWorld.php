<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Livewire Basics')]

class HelloWorld extends Component
{
    public function render()
    {
        return view('livewire.hello-world');
    }
}
