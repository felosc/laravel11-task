<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-2xl text-purple-900 leading-tight">Bienvenido al gestor de tareas </h1>
                    @foreach ($tasks as $task )
                    <h1 class="font-2xl text-purple-900 leading-tight">
                        {{  $task->title   }} <br>
                    </h1>
                    <h2 class="font-2xl leading-tight">
                        {{  $task->description    }}
                    </h2>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
