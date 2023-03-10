<x-pgapp-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

              <button

                    class="bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm"
                 onclick="Livewire.emit('openModal', 'hello-world')">Open Modal</button>

                    <livewire:user-table/>
                </div>
            </div>
        </div>
    </div>
</x-pgapp-layout>
