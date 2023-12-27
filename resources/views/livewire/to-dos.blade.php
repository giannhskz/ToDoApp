<div class="flex flex-col justify-center mt-6 ">
    @if(!is_null($toDos))
        @foreach($toDos as $toDo)
            @if($toDo->completed)
                <div class="bg-gray-500 border border-indigo-400 rounded-lg m-2 p-2 ">
                    <span>Title: </span>{{ $toDo->title }}
                    <span>Description: </span>{{$toDo->description}}
                    <span>Due Date: </span>{{$toDo->due_date}}
                    COMPLETED
                </div>

            @else
                <div class="border border-indigo-400 rounded-lg m-2 p-2">
                    <span>Title: </span>{{ $toDo->title }}
                    <span>Description: </span>{{$toDo->description}}
                    <span>Due Date: </span>{{$toDo->due_date}}
                    <button type="button" wire:click="completeTask({{$toDo}})"
                    class="border border-2 bg-red-50 rounded-lg"> Complete Task
                    </button>
                </div>
            @endif
        @endforeach
    @endif
    <button type="button"
            wire:click="addToDo()"
            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">
        Add ToDo
    </button>


    @if($todoForm)
        <div>
            <livewire:to-do-form/>
        </div>
    @endif
</div>
