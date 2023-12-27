<?php

namespace App\Livewire;

use App\Models\ToDo;
use Livewire\Component;

class ToDoForm extends Component
{
    public $due_date;
    public $description;
    public $title;
    public function addTodo(){
        $data = [
            'user_id' => auth()->id(),
            'due_date' => $this->due_date,
            'description' => $this->description,
            'title' => $this->title
        ];
        ToDo::create($data);
        return redirect('/dashboard');
    }
    public function render()
    {
        return view('livewire.to-do-form');
    }
}
