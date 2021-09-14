<div>
    <div class="px-6 mt-6">
        {{-- Descripcion Almada --}}
        <div class="bg-gray-50 shadow-lg mb-4">
            <div class="py-1 px-2 bg-gray-200 rounded rounded-t-lg mb-2">
                <h2 class="text-xl text-gray-800 font-bold">Descripción</h2>
            </div>
            <div class="p-4">
                <textarea class="w-full rounded-md border-gray-300" rows="5" wire:model="description" wire:loading.attr="disabled"></textarea>
                <div class="flex justify-end items-center pt-2">
                    <x-jet-button class="bg-gray-800 text-white px-2 py-1" wire:click='updateDescription'
                        wire:loading.attr="disabled">
                        Guardar
                    </x-jet-button>
                </div>
            </div>
        </div>
    </div>
</div>
