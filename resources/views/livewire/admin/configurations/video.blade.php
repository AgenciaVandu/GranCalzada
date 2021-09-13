<div>
    <div class="px-6 mt-4">
        <h1 class="text-3xl font-bold ml-4 mb-6 text-center">Administracion de Videos</h1>
        <div class="grid grid-cols-3 gap-4 items-center mb-4">
            <div class="">
                <h2 class=" text-xl text-gray-700 font-bold mb-2">Sección Index</h2>
                @if ($video_index->first())
                    Vista previa:
                    {{-- <img src="{{ $video_index->temporaryUrl() }}"> --}}
                    <video src="{{ Storage::url($video_index->first()->url) }}" loop muted preload autoplay></video>
                @else
                    @if ($index)
                        <video src="{{ $index->temporaryUrl() }}" loop muted preload autoplay></video>
                    @endif
                @endif
            </div>
            <div class="col-span-2">
                <form wire:submit.prevent="saveVideoIndex">
                    <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <input type="file" wire:model="index">

                        @error('index') <span class="error">{{ $message }}</span> @enderror

                        <div x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>
                    <x-jet-button class="block ml-auto mt-4" type="submit">Guardar Video</x-jet-button>
                </form>
            </div>
        </div>
    </div>
</div>
