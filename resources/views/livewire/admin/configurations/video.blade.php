<div>
    <div class="px-6 mt-4">
        <h1 class="text-2xl font-bold">Videos</h1>
        <div class="flex">
            <form wire:submit.prevent="save">
                <input type="file" wire:model="video_index">

                @error('video_index') <span class="error">{{ $message }}</span> @enderror

                <button type="submit">Save Video</button>
            </form>
        </div>
    </div>
</div>
