<?php

namespace App\Livewire;

use Livewire\Component;

class ToDos extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.to-dos');
    }
}
