<div class="bg-white shadow-lg py-1 mb-2 rounded-lg">
    <h2 class="text-gray-600 font-bold text-2xl mx-3 mt-4">Información del modelo</h2>
    <form wire:submit.prevent='update' class="px-4 text-right">
        <x-jet-label class="text-left">
            Nombre:
        </x-jet-label>
        <x-jet-input type="text" class="w-full mb-2" wire:model="name" />
        <x-jet-label class="text-left">
            Precio:
        </x-jet-label>
        <div class="mt-1 flex rounded-md shadow-sm">
            <span
                class="inline-flex items-center px-3 py-1 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                $
            </span>
            <x-jet-input type="number" hidden class="flex-1 block w-full rounded-none rounded-r-md sm:text-sm"
                wire:model="price" />
        </div>

        <x-jet-button type="submit" class="my-2" wire:click="update({{ $model }})">
            Actualizar
        </x-jet-button>
    </form>
</div>
