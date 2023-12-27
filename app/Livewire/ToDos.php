<?php

namespace App\Livewire;

use Livewire\Component;

class ToDos extends Component
{
    public $user;
    public $toDos;

    public function addToDo(){

    }
    public function render()
    {
        return view('livewire.to-dos');
    }

    public function mount(){
        $toDos = $this->user->todos();
    }
}
