<div>
    {{-- Models --}}
    @foreach ($development->models as $item)
        <div class="px-6 mt-6" x-data="{open:false}">
            <div class="bg-gray-100 shadow-lg mb-4">
                <div class="py-1 px-2 bg-gray-200 rounded rounded-t-lg mb-2 cursor-pointer hover:bg-gray-100"
                    x-on:click="open=!open">
                    <h2 class="text-xl text-gray-800 font-bold">{{ $item->name }}</h2>

                </div>
                <div x-show="open">
                    {{-- Info Model --}}
                    @livewire('admin.developments.almada.information-model', ['model' => $item],
                    key('information-model'.$item->id))
                    {{-- Slider Model --}}
                    @livewire('admin.developments.almada.slider-model', ['model' =>
                    $item],key('slider-model'.$item->id))
                    {{-- Features Model --}}
                    @livewire('admin.developments.almada.features', ['model' => $item],key('features'.$item->id))
                </div>
            </div>
        </div>
    @endforeach
</div>
