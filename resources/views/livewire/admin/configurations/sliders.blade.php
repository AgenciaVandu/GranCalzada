<div>
    <div class="px-6 mt-6">
        <h1 class="text-3xl font-bold ml-4 mb-4 text-center">Administración de Sliders</h1>

        <div>
            <div class="py-1 px-2 bg-gray-900 rounded rounded-t-lg mb-2">
                <h2 class="text-xl text-gray-100 font-bold">Slider Amavita</h2>
            </div>
            <div class="flex p-4">
                @foreach ($amavita->resources as $resource)
                    <img class="h-24 w-36 rounded-lg object-cover object-center mx-4 shadow-lg"
                        src="{{ $resource->url }}" alt="">
                @endforeach

                <label
                    class="w-64 flex flex-col items-center px-4 py-4 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-gray-500">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-2 text-base leading-normal">Seleccionar archivo(s)</span>
                    <input type='file' class="hidden" />
                </label>

            </div>
        </div>
    </div>
</div>
