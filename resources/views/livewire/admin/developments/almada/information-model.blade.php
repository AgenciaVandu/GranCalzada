<div class="bg-white shadow-lg py-1 mb-2 rounded-lg">
    <h2 class="text-gray-600 font-bold text-2xl mx-3 mt-4">Información del modelo</h2>
    <form wire:submit.prevent='update' class="px-4 text-right">
        <x-jet-label>
            Nombre:
        </x-jet-label>
        <x-jet-input type="text" class="w-full mb-2" wire:model="name" />
        <x-jet-input type="number" class="w-full mb-2" wire:model="price" />
        <x-jet-button type="submit" class="my-2" wire:click="update({{ $model }})">
            Actualizar
        </x-jet-button>
    </form>
</div>
