<div class="bg-white shadow-lg py-1 mb-2 rounded-lg">
    @if ($model->id <= 3)
        <h2 class="text-gray-600 font-bold text-2xl mx-3 mt-4">Caracteristicas</h2>
        <form wire:submit.prevent='store({{ $model->id }})' class="px-4">
            <x-jet-label>
                Nombre:
            </x-jet-label>
            <x-jet-input type="text" class="w-1/2 py-1 mb-2" wire:model="name" />
            <x-jet-button type="submit" class="ml-2">
                Agregar
            </x-jet-button>
        </form>
        <div class="p-4">
            <p class="font-semibold">Lista de caracteristicas</p>
            <ul class="list-disc list-inside mt-2 px-4">
                @foreach ($model->features as $item)
                    <li class="text-semibold" x-data="{open:false}">
                        <span x-show="!open">{{ $item->name }}</span>
                        <span class="ml-3 mr-1">
                            <x-jet-input type="text" class="py-1 my-1" wire:model="feature.name" x-show="open"
                                @click.away="open=false" />
                            <i class="fas fa-pen text-xs hover:text-gray-600 cursor-pointer" x-show="!open"
                                wire:click="edit({{ $item }})" x-on:click="open=!open"></i>
                        </span>
                        <span>
                            <i class="fas fa-trash text-xs hover:text-red-600 cursor-pointer" x-show="!open" wire:click="delete({{$item}})"></i>
                            <x-jet-button class="py-1" x-show="open" wire:click="update({{ $item->id }})">
                                Actualizar</x-jet-button>
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <h2 class="text-gray-600 font-bold text-2xl mx-3 mt-4">Caracteristicas</h2>
        <form wire:submit.prevent='store({{ $model->id }})' class="px-4">
            <x-jet-label>
                Nombre:
            </x-jet-label>
            <x-jet-input type="text" class="w-1/2 py-1 mb-2" wire:model="name" />
            <x-jet-button type="submit" class="ml-2">
                Agregar
            </x-jet-button>
        </form>
        <div class="px-4">
            <p class="font-semibold">Lista de caracteristicas (Planta baja)</p>
            <ul class="list-disc list-inside mt-2 px-4">
                @foreach ($model->features as $item)
                    @if ($item->floor == 'down')
                        <li class="text-semibold" x-data="{open:false}">
                            <span x-show="!open">{{ $item->name }}</span>
                            <span class="ml-3 mr-1">
                                <x-jet-input type="text" class="py-1 my-1" wire:model="feature.name" x-show="open"
                                    @click.away="open=false" />
                                <i class="fas fa-pen text-xs hover:text-gray-600 cursor-pointer" x-show="!open"
                                    wire:click="edit({{ $item }})" x-on:click="open=!open"></i>
                            </span>
                            <span>
                                <i class="fas fa-trash text-xs hover:text-red-600 cursor-pointer" x-show="!open" wire:click="delete({{$item}})"></i>
                                <x-jet-button class="py-1" x-show="open"
                                    wire:click="update({{ $item->id }})">
                                    Actualizar</x-jet-button>
                            </span>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <form wire:submit.prevent='store2({{ $model->id }})' class="px-4 mt-4">
            <x-jet-label>
                Nombre:
            </x-jet-label>
            <x-jet-input type="text" class="w-1/2 py-1 mb-2" wire:model="name2" />
            <x-jet-button type="submit" class="ml-2">
                Agregar
            </x-jet-button>
        </form>
        <div class="px-4 mb-4">
            <p class="font-semibold">Lista de caracteristicas (Planta alta)</p>
            <ul class="list-disc list-inside mt-2 px-4">
                @foreach ($model->features as $item)
                    @if ($item->floor == 'top')
                        <li class="text-semibold" x-data="{open:false}">
                            <span x-show="!open">{{ $item->name }}</span>
                            <span class="ml-3 mr-1">
                                <x-jet-input type="text" class="py-1 my-1" wire:model="feature.name" x-show="open"
                                    @click.away="open=false" />
                                <i class="fas fa-pen text-xs hover:text-gray-600 cursor-pointer" x-show="!open"
                                    wire:click="edit({{ $item }})" x-on:click="open=!open"></i>
                            </span>
                            <span>
                                <i class="fas fa-trash text-xs hover:text-red-600 cursor-pointer" x-show="!open" wire:click="delete({{$item}})"></i>
                                <x-jet-button class="py-1" x-show="open"
                                    wire:click="update({{ $item->id }})">
                                    Actualizar</x-jet-button>
                            </span>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endif
</div>
