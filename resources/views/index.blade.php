@extends('layouts.landing')


@section('content')

    {{-- Banner inicial --}}
    <section class="bg-blue-main">
        <div class="py-6">
            <img src="{{ asset('img/banners/banne-1.png') }}" alt="" class="w-full object-cover">
        </div>
    </section>

    {{-- Seccion --}}

    <section class="bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2 justify-center items-center py-4 lg:py-6">
            <p class="text-gray-800 mx-auto text-center py-4">Conoce más detalles</p>
            <a href="" class="px-3 py-2 text-center sm:text-xs md:text-xl lg:px-10 lg:py-2 text-white bg-pink-main mx-auto">Conoce los desarrollos</a>
        </div>
    </section>

    <section class="bg-blue-main">
        <div class="grid grid-cols-1 lg:grid-cols-2 py-12 gap-4">
            <div>
                <img src="{{ asset('img/banners/banner-2.png') }}" class="w-full object-cover" alt="">
            </div>
            <div></div>
        </div>
    </section>

@endsection
