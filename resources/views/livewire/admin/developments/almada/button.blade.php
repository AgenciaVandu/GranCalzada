<div>
    {{-- Boton Almada --}}
    <div class="px-6 mt-6" x-data="{open:false}">
        <div class="bg-gray-50 shadow-lg mb-4">
            <div class="py-1 px-2 bg-gray-200 rounded rounded-t-lg mb-2 cursor-pointer hover:bg-gray-100" x-on:click="open=!open">
                <h2 class="text-xl text-gray-800 font-bold">Seccion Botón</h2>
            </div>
            <div class="p-4" x-show="open">
                <x-jet-label>
                    Texto del boton
                </x-jet-label>
                <x-jet-input type="text" class="w-full mb-2" placeholder="Ej: Desarrollos" wire:model="text" />
                <x-jet-label>
                    Url
                </x-jet-label>
                <x-jet-input type="text" class="w-full mb-4" placeholder="Ej: https://www.example.com"
                    wire:model="url" />
                <x-jet-label>
                    Descripción:
                </x-jet-label>
                <textarea class="w-full rounded-md border-gray-300" rows="5" wire:model="description"></textarea>
                <div class="flex justify-end items-center pt-2">
                    <x-jet-button class="bg-gray-800 text-white px-2 py-1" wire:click='updateButton'
                        wire:loading.attr="disabled">
                        Guardar
                    </x-jet-button>
                </div>
            </div>
        </div>
    </div>
</div>
