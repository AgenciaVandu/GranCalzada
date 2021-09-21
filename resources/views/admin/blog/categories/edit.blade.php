<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar categoria') }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('categories.update', $category) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="pb-4 px-4">
                        <x-jet-label class="text-lg font-bold">
                            Nombre:
                        </x-jet-label>
                        <x-jet-input type="text" name="name" id="name" class="w-full py-1"
                            value="{{ $category->name }}"></x-jet-input>
                        @error('name')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex justify-end mb-2 px-2 items-center">
                        <x-jet-button type="submit">
                            Actualizar categoria
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
