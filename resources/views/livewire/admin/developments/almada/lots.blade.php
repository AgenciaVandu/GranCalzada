<div>
    @if ($table)
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <div class="flex items-center justify-end mb-4 px-4 py-2">
                            <x-jet-label>
                                Numero:
                            </x-jet-label>
                            <x-jet-input type="text" wire:model="search"
                                class="flex-1 py-1 ml-4 placeholder-purple-400 text-sm"
                                placeholder="Coloca el numero de lote deseado"></x-jet-input>
                        </div>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Numero Lote
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Modelo
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Edit
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($lots as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $item->number }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $item->model->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @switch($item->status)
                                                @case('sold')
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Vendido
                                                    </span>
                                                @break
                                                @case('available')
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                                        Disponible
                                                    </span>
                                                @break
                                                @case('hold')
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                                        Bloqueado
                                                    </span>
                                                @break
                                                @case('reservation')
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                        Reservado
                                                    </span>
                                                @break
                                                @default

                                            @endswitch
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a class="text-indigo-600 hover:text-indigo-900 cursor-pointer"
                                                wire:click="edit({{ $item }})">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="py-2 px-2">
                        {{ $lots->links() }}
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 rounded-lg shadow">
            <h2 class="text-2xl text-gray-700 font-bold">Informacion del lote</h2>
            <form wire:submit.prevent='update({{ $lot }})' class="bg-gray-50 shadow-lg p-4">
                <x-jet-label>
                    Numero:
                </x-jet-label>
                <x-jet-input type="text" wire:model="number" class="py-1 w-full my-3 bg-gray-200" disabled>
                </x-jet-input>
                <x-jet-label>
                    Medidas:
                </x-jet-label>
                <x-jet-input type="text" wire:model="measures" class="py-1 w-full my-3 " disabled></x-jet-input>
                <x-jet-label>
                    Area:
                </x-jet-label>
                <x-jet-input type="text" wire:model="area" class="py-1 w-full my-3 " disabled></x-jet-input>
                <x-jet-label>
                    Area de construcción:
                </x-jet-label>
                <x-jet-input type="text" wire:model="construction_area" class="py-1 w-full my-3 " disabled>
                </x-jet-input>
                <x-jet-label>
                    Modelo:
                </x-jet-label>
                <select wire:model="model_id"
                    class="w-full border-gray-300 mb-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 py-1 focus:ring-opacity-50 rounded-md shadow-sm">
                    @foreach ($models as $model)
                        <option value="{{ $model->id }}">{{ $model->name }}</option>
                    @endforeach
                </select>
                <x-jet-label>
                    Status:
                </x-jet-label>
                <select wire:model="status"
                    class="w-full border-gray-300 mb-3 focus:border-indigo-300 focus:ring focus:ring-indigo-200 py-1 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="sold">Vendido</option>
                    <option value="available">Disponible</option>
                    <option value="reservation">Reservado</option>
                    <option value="hold">Bloqueado</option>
                </select>

                <div class="flex justify-end mt-4">
                    <x-jet-secondary-button wire:click="$set('table','true')" class="mx-2">Cancelar
                    </x-jet-secondary-button>
                    <x-jet-button wire:click="update({{ $lot }})">Actualizar</x-jet-button>
                </div>
            </form>
        </div>
    @endif
</div>
