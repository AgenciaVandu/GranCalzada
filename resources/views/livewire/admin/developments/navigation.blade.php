<div>
    <!-- Navigation Links -->
    <div class="hidden space-x-8 sm:-my-px sm:flex bg-white mb-6 py-3 px-4">
        <x-jet-nav-link :active="$almada" wire:click="setNavigation('almada')" class="cursor-pointer">
            {{ __('Almada') }}
        </x-jet-nav-link>
        <x-jet-nav-link :active="$miraverde" wire:click="setNavigation('miraverde')" class="cursor-pointer">
            {{ __('Miraverde') }}
        </x-jet-nav-link>
    </div>
    {{-- Vertical Navigation --}}
    <div class="w-full sm:px-6 lg:px-8 mt-6">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @if ($almada)
                <div class="p-4">
                    <h1 class="text-3xl text-purple-500 font-bold ml-6">Desarrollo Almada</h1>
                    <div class="grid grid-cols-5 gap-2 mt-8">
                        <div class="bg-gray-100 shadow-lg">
                            <div class="py-2 pace-y-1">
                                <x-vertical-nav-link class="cursor-pointer" color="purple"
                                    wire:click="setNavigation('index')" :active="$index">
                                    {{ __('Pagina de inicio') }}
                                </x-vertical-nav-link>
                                <x-vertical-nav-link class="cursor-pointer" color="purple"
                                    wire:click="setNavigation('models')" :active="$models">
                                    {{ __('Modelos') }}
                                </x-vertical-nav-link>
                                <x-vertical-nav-link class="cursor-pointer" color="purple"
                                    wire:click="setNavigation('lots')" :active="$lots">
                                    {{ __('Lotes') }}
                                </x-vertical-nav-link>
                            </div>
                        </div>
                        <div class="col-span-4">
                            @if ($index)
                                @livewire('admin.developments.almada.description',['development' => $dev_almada])
                                @livewire('admin.developments.almada.button',['development' => $dev_almada])
                                @livewire('admin.developments.almada.sliders',['development' => $dev_almada])
                                @livewire('admin.developments.almada.videos')
                            @endif
                            @if ($models)
                                @livewire('admin.developments.almada.models', ['development' => $dev_almada])
                            @endif
                            @if ($lots)
                                @livewire('admin.developments.almada.lots', ['development' => $dev_almada])
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            @if ($miraverde)
                <div class="p-4">
                    <h1 class="text-3xl text-green-500 font-bold ml-6">Desarrollo Miraverde</h1>
                    <div class="grid grid-cols-5 gap-2 mt-8">
                        <div class="bg-gray-100 shadow-lg">
                            <div class="py-2 pace-y-1">
                                <x-vertical-nav-link class="cursor-pointer" color="green"
                                    wire:click="setNavigation('index')" :active="$index">
                                    {{ __('Pagina de inicio') }}
                                </x-vertical-nav-link>
                                <x-vertical-nav-link class="cursor-pointer" color="green"
                                    wire:click="setNavigation('models')" :active="$models">
                                    {{ __('Modelos') }}
                                </x-vertical-nav-link>
                                <x-vertical-nav-link class="cursor-pointer" color="green"
                                    wire:click="setNavigation('lots')" :active="$lots">
                                    {{ __('Lotes') }}
                                </x-vertical-nav-link>
                            </div>
                        </div>
                        <div class="col-span-4">
                            @if ($index)
                                @livewire('admin.developments.miraverde.description',['development' => $dev_miraverde])
                                @livewire('admin.developments.miraverde.button',['development' => $dev_miraverde])
                                @livewire('admin.developments.miraverde.sliders',['development' => $dev_miraverde])
                                @livewire('admin.developments.miraverde.videos')
                            @endif
                            @if ($models)
                                @livewire('admin.developments.miraverde.models', ['development' => $dev_miraverde])
                            @endif
                            @if ($lots)
                                @livewire('admin.developments.miraverde.lots', ['development' => $dev_miraverde])
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
