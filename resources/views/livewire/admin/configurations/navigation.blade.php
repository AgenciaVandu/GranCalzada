<div>
    <!-- Navigation Links -->
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex pb-12">
        <x-jet-nav-link :active="$videos" wire:click="setNavigation('videos')" class="cursor-pointer">
            {{ __('Videos') }}
        </x-jet-nav-link>
        <x-jet-nav-link :active="$images" wire:click="setNavigation('images')" class="cursor-pointer">
            {{ __('Imagenes') }}
        </x-jet-nav-link>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @if ($videos)
                mostramos videos
            @endif

            @if ($images)
                mostramos imagenes
            @endif
        </div>
    </div>
</div>
