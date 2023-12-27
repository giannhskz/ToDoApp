<?php

namespace App\Livewire;

use App\Models\ToDo;
use Livewire\Component;

class ToDos extends Component
{
    public $user;
    public $toDos;
    public $todoForm = false;

    public function addToDo(){
        $this->todoForm = true;
    }
    public function render()
    {
        return view('livewire.to-dos');
    }

    public function mount(){
        $this->toDos = $this->user->todos()->get();
    }

    public function completeTask($toDo){
        $retrievedToDo = ToDo::find($toDo['id']);
        $retrievedToDo->completed = true;
        $retrievedToDo->save();
        return redirect('/dashboard');
    }
}
