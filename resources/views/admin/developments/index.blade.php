<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Developments') }}
        </h2>

    </x-slot>

    <div class="mt-2">
        @livewire('admin.developments.navigation')
    </div>
</x-app-layout>
