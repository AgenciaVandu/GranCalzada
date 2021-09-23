<div>
    <!-- Navigation Links -->
    <div class="hidden space-x-8 sm:-my-px sm:flex bg-white mb-6 py-3 px-4">
        <x-jet-nav-link :active="$videos" wire:click="setNavigation('videos')" class="cursor-pointer">
            {{ __('Video') }}
        </x-jet-nav-link>
        <x-jet-nav-link :active="$images" wire:click="setNavigation('images')" class="cursor-pointer">
            {{ __('Slider') }}
        </x-jet-nav-link>
        <x-jet-nav-link :active="$sliders" wire:click="setNavigation('sliders')" class="cursor-pointer">
            {{ __('Modal') }}
        </x-jet-nav-link>
    </div>

    <div class="w-full sm:px-6 lg:px-8 mt-6">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @if ($videos)
                @livewire('admin.header')
            @endif

            @if ($images)
                @livewire('admin.sliders')
            @endif

            @if ($sliders)
                @livewire('admin.modal')
            @endif
        </div>
    </div>
</div>
