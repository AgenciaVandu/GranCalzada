<div class="bg-white shadow-lg py-1 mb-2 rounded-lg">
    <h2 class="text-gray-600 font-bold text-2xl mx-3 mt-4">Slider cabecera</h2>
    <form wire:submit.prevent="uploadHeaderSlider({{ $model }})">
        <div class="flex flex-wrap p-4">
            @isset($slider->resources)
                @foreach ($slider->resources as $resource)
                    <div class="shadow-md bg-white rounded-lg mx-2 mt-4">
                        @if ($resource->type == 'video')
                            <video src="{{ Storage::url($resource->url) }}" loop muted preload autoplay
                                class="h-40 w-60"></video>
                        @else
                            <img class="h-40 w-60 object-cover" src="{{ Storage::url($resource->url) }}"
                                title="{{ Storage::url($resource->url) }}">
                        @endif
                        <div class="flex justify-between items-center py-2 mx-2">
                            @if ($resource->type == 'video')
                                <i class="fas fa-film ml-2"></i>
                            @else
                                <i class="far fa-image ml-2"></i>
                            @endif
                            <i wire:click="delete({{ $resource }})"
                                class="fas fa-trash cursor-pointer text-gray-800 hover:text-red-600 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                                alt="Eliminar"></i>
                        </div>
                    </div>
                @endforeach
            @endisset
            @if ($files)
                @foreach ($files as $file)
                    <div class="shadow-md bg-white rounded-lg mx-2 mt-4">
                        @php
                            $name = pathinfo($file->temporaryUrl(), PATHINFO_EXTENSION);
                            $extension = $name;
                            $final = substr($extension, 0, strpos($extension, '?'));
                        @endphp
                        @if ($final == 'jpg' || $final == 'png' || $final == 'svg' || $final == 'jpeg')
                            <img class="h-40 w-60 object-cover opacity-30" src="{{ $file->temporaryUrl() }}"
                                wire:loading.remove wire:target='updatedFiles'>
                        @else
                            <video src="{{ $file->temporaryUrl() }}" loop muted preload autoplay
                                class="h-40 w-60 opacity-30"></video>
                        @endif

                    </div>

                @endforeach
            @endif

            <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <label
                    class="w-60 flex flex-col items-center ml-2 mt-4 px-4 py-10 bg-white text-gray-700 rounded-l-lg shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-gray-100 hover:text-pink-500">
                    <i class="far fa-plus-square text-5xl"></i>
                    <span class="mt-4">Seleccionar archivo(s)</span>
                    <input type='file' wire:model="files" class="hidden" multiple {{-- accept="image/*,video/*" --}}>
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
            @error('files*') <span class="text-sm text-red-600 mr-2">{{ $message }}</span>
            @enderror
            <x-jet-button class="bg-gray-800 text-white px-2 py-1" type="submit" wire:loading.attr="disabled">
                Guardar
            </x-jet-button>
        </div>
    </form>
</div>
