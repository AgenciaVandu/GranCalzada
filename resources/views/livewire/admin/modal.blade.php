<div>
    <div class="px-6 mt-6" x-data="{open:true}">
        <div class="bg-gray-50 shadow-lg mb-4">
            <div class="py-1 px-2 bg-gray-200 rounded rounded-t-lg mb-2 cursor-pointer hover:bg-gray-100"
                x-on:click="open=!open">
                <h2 class="text-xl text-gray-800 font-bold">Modal promociones</h2>
            </div>
            <div x-show="open">
                <form wire:submit.prevent='update()' class="px-4 text-right">
                    <div class="flex flex-wrap p-4">
                        @isset($modal->resources)
                            <div class="shadow-md bg-white rounded-lg mx-2 mt-4">
                                <img class="h-40 w-60 object-cover"
                                    src="{{ Storage::url($modal->resources->first()->url) }}">
                                <div class="flex justify-between items-center py-2 mx-2">
                                    <i class="far fa-image ml-2"></i>
                                </div>
                            </div>
                        @endisset
                        @if ($file)
                            <div class="shadow-md bg-white rounded-lg mx-2 mt-4">
                                <img class="h-40 w-60 object-cover opacity-30" src="{{ $file->temporaryUrl() }}"
                                    wire:loading.remove wire:target='updatedFile'>
                            </div>
                        @endif

                        <div x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
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
                                <div max="100" x-bind:value="progress"
                                    class="h-6 text-white font-bold rounded-lg bg-pink-600" x-bind:text="progress"
                                    x-text="progress"></div>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-end items-center py-2 px-3">
                        @error('file*') <span class="text-sm text-red-600 mr-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <x-jet-button type="submit" class="my-2">
                        Actualizar
                    </x-jet-button>
                </form>
            </div>
        </div>
    </div>
</div>
