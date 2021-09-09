<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configuraciones') }}
        </h2>

    </x-slot>

    <div class="bg-white">
        @livewire('admin.configurations.navigation')
    </div>
</x-app-layout>
