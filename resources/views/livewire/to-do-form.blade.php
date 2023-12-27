<div>
    <div class="flex flex-col place-items-center">
        <h2 class="pt-4 text-xl text-center font-semibold">Add Bill</h2>

        <form wire:submit="addTodo()" class="">
            <div class="flex justify-center flex-col">
                <label>Title:</label>
                <input type="text" wire:model="title">
            </div>
            <div class="flex justify-center flex-col">
                <label>Description:</label>
                <input type="text" wire:model="description">
            </div>
            <div class="flex flex-col justify-center">
                <label>Due Date </label>
                <input type="date" wire:model="due_date">
            </div>
            <div class="flex justify-center gap-2 pt-4">
                <button type="submit"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        type="submit">Add ToDo
                </button>
            </div>
        </form>

    </div>

</div>
