<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-center ">
                    Hello <span class="font-semibold underline mx-1"> {{ auth()->user()->name }} </span> here you can
                    manage your ToDos
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg m-6 p-2">
                <h1 class="flex justify-center text-2xl font-semibold">ToDo's</h1>
                <div >
                    <livewire:to-dos :user="auth()->user()"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
