<div class="bg-white shadow-lg py-1 mb-2 rounded-lg">
    <h2 class="text-gray-600 font-bold text-2xl mx-3 mt-4">Información del modelo</h2>
    <form wire:submit.prevent='update({{ $model->id }})' class="px-4 text-right">
        <div class="flex flex-wrap p-4">
            @isset($model->image)
                <div class="shadow-md bg-white rounded-lg mx-2 mt-4">
                    <img class="h-40 w-60 object-cover" src="{{ Storage::url($model->image) }}">
                    <div class="flex justify-between items-center py-2 mx-2">
                        <i class="far fa-image ml-2"></i>
                        <i wire:click="delete({{ $model->image }})"
                            class="fas fa-trash cursor-pointer text-gray-800 hover:text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                            alt="Eliminar"></i>
                    </div>
                </div>
            @endisset
            @if ($file)
                <div class="shadow-md bg-white rounded-lg mx-2 mt-4">
                    <img class="h-40 w-60 object-cover opacity-30" src="{{ $file->temporaryUrl() }}"
                        wire:loading.remove wire:target='updatedFile'>
                </div>
            @endif

            <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <label
                    class="w-60 flex flex-col items-center ml-2 mt-4 px-4 py-10 bg-white text-gray-700 rounded-l-lg shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-gray-100 hover:text-pink-500">
                    <i class="far fa-plus-square text-5xl"></i>
                    <span class="mt-4">Seleccionar archivo(s)</span>
                    <input type='file' wire:model="file" class="hidden">
                </label>
                <!-- Progress Bar -->
                <div class="text-center py-6 text-white font-bold" x-show="isUploading">
                    <p>Cargando recursos:</p>
                    <div max="100" x-bind:value="progress" class="h-6 text-white font-bold rounded-lg bg-pink-600"
                        x-bind:text="progress" x-text="progress"></div>
                </div>
            </div>

        </div>
        <div class="flex justify-end items-center py-2 px-3">
            @error('file*') <span class="text-sm text-red-600 mr-2">{{ $message }}</span>
            @enderror
        </div>
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
        <x-jet-label class="text-left mt-2 mb-2">
            Recorrido Virtual:
        </x-jet-label>
        <textarea rows="7" class="w-full rounded-lg border border-gray-400" wire:model="virtual"></textarea>
        <x-jet-button type="submit" class="my-2">
            Actualizar
        </x-jet-button>
    </form>
</div>
