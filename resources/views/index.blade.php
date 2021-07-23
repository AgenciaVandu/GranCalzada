@extends('layouts.landing')


@section('content')

    {{-- Slider inicial --}}
    <section class="bg-blue-main">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{ asset('img/banners/banner-1.png') }}" alt=""
                            class="w-full max-h-screen object-cover">
                        <div class="grid grid-cols-2 lg:grid-cols-2 lg:gap-8 lg:justify-center items-center py-4 bg-white">
                            <div class="mx-auto">
                                <p class="text-gray-800 text-center text-xs md:text-xl">Conoce más detalles</p>
                            </div>
                            <div class="mx-auto">
                                <a href=""
                                    class="px-3 py-2 text-center text-xs md:text-xl lg:px-10 lg:py-2 text-white bg-pink-main mx-auto">Conoce
                                    los desarrollos</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="http://ximg.es/1447x568/02f/fff" alt="" class="w-full max-h-screen object-cover">
                        <div class="grid grid-cols-2 lg:grid-cols-2 lg:gap-8 lg:justify-center items-center py-4 bg-white">
                            <div class="mx-auto">
                                <p class="text-gray-800 text-center text-xs md:text-xl">Conoce más detalles</p>
                            </div>
                            <div class="mx-auto">
                                <a href=""
                                    class="px-3 py-2 text-center text-xs md:text-xl lg:px-10 lg:py-2 text-white bg-pink-main mx-auto">Conoce
                                    los desarrollos</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="https://ximg.es/1447x568/f07/fff" alt="" class="w-full max-h-screen object-cover">
                        <div class="grid grid-cols-2 lg:grid-cols-2 lg:gap-8 lg:justify-center items-center py-4 bg-white">
                            <div class="mx-auto">
                                <p class="text-gray-800 text-center text-xs md:text-xl">Conoce más detalles</p>
                            </div>
                            <div class="mx-auto">
                                <a href=""
                                    class="px-3 py-2 text-center text-xs md:text-xl lg:px-10 lg:py-2 text-white bg-pink-main mx-auto">Conoce
                                    los desarrollos</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Seccion --}}
    <section class="bg-blue-main font-montserrat pb-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10">
            <div class="mt-20">
                <img src="{{ asset('img/banners/banner-2.png') }}" class="w-full max-h-screen object-cover" alt="">
            </div>
            <div class="mt-10 lg:mt-24 text-white">
                <div class="px-10 lg:px-20 text-center">
                    <h2 class="text-2xl lg:text-3xl font-serif text-pink-main font-bold">
                        Descubre cómo es vivir en una ciudad totalmente planead
                    </h2>
                </div>
                <p class="mt-10 px-4 lg:px-28 tracking-widest text-justify font-light leading-tight">
                    Bienvenido a Gran Calzada, es un complejo habitacional con más de 4,000 mil viviendas distribuidas en 2
                    desarrollos: Almada y Miraverde conectados por la bella Gran Calzada que se convierte en tu eje central
                    de servicios y áreas verdes
                </p>

                <div class="flex justify-center px-1 lg:px-10 mt-20">
                    <button class="bg-pink-main text-white text-sm lg:text-md px-1 lg:px-4 py-0.5">Descarga el
                        Brochure</button>
                    <button class="bg-pink-main text-white text-sm lg:text-md px-1 ml-6 lg:px-4 py-0.5">Conoce Gran
                        Calzada</button>
                </div>
            </div>
        </div>

        <div class="mt-32 lg:mt-40 text-center px-4 lg:px-72">
            <h2 class="text-3xl font-serif text-pink-main font-bold mb-16">
                ¿Qué encontrarás en Gran Calzada?
            </h2>

            <div class="grid grid-col-1 lg:grid-cols-2 justify-center gap-6 lg:gap-4 lg:px-8">
                <div class="lg:hidden block text-center w-full">
                    <h2 class="text-2xl font-serif text-white font-bold mb-4 mt-2">
                        Excelente Ubicación
                    </h2>
                </div>
                <div class="flex lg:relative h-60 w-full justify-center items-center bg-cover bg-no-repeat bg-center justify-self-end rounded-2xl"
                    style="background-image: url('{{ asset('img/banners/recuadro-1.jpg') }}');">
                    <div
                        class="lg:absolute w-full h-60 bg-pink-main bg-opacity-70 hover:bg-opacity-60 block hover:hidden rounded-2xl">
                        <div class="text-center w-full text-white py-20 px-10">
                            <h1 class="text-xl">Uman Poniente de la ciudad de Mérida</h1>
                        </div>
                    </div>
                </div>
                <div class="lg:hidden block text-center w-full">
                    <h2 class="text-2xl font-serif text-white font-bold mb-4 mt-2">
                        Multi-servicios
                    </h2>
                </div>
                <div class="flex lg:relative h-60 w-full justify-center items-center bg-cover bg-no-repeat bg-center  rounded-2xl"
                    style="background-image: url('{{ asset('img/banners/recuadro-2.jpg') }}');">
                    <div
                        class="lg:absolute w-full h-60 bg-pink-main bg-opacity-70 hover:bg-opacity-60 block hover:hidden rounded-2xl">
                        <div class="text-center w-full text-white py-20 px-10">
                            <h1 class="text-xl">Escuelas, zonas comerciales y recreativas</h1>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block text-center w-full">
                    <h2 class="text-3xl font-serif text-white font-bold mb-10 mt-2">
                        Excelente Ubicación
                    </h2>
                </div>
                <div class="hidden lg:block text-center w-full">
                    <h2 class="text-3xl font-serif text-white font-bold mb-10 mt-2">
                        Multi-servicios
                    </h2>
                </div>

                <div class="lg:hidden block text-center w-full">
                    <h2 class="text-2xl font-serif text-white font-bold mb-4 mt-2">
                        8 Parques interactivos
                    </h2>
                </div>
                <div class="flex lg:relative h-60 w-full justify-center items-center bg-cover bg-no-repeat bg-center justify-self-end rounded-2xl"
                    style="background-image: url('{{ asset('img/banners/recuadro-3.jpg') }}');">
                    <div
                        class="lg:absolute w-full h-60 bg-pink-main bg-opacity-70 hover:bg-opacity-60 block hover:hidden rounded-2xl">
                        <div class="text-center w-full text-white py-20 px-10">
                            <h1 class="text-xl">Más de 3 hectáreas de áreas verdes</h1>

                        </div>
                    </div>
                </div>

                <div class="lg:hidden block text-center w-full">
                    <h2 class="text-2xl font-serif text-white font-bold mb-4 mt-2">
                        Ciclopista
                    </h2>
                </div>
                <div class="flex lg:relative h-60 w-full justify-center items-center bg-cover bg-no-repeat bg-center rounded-2xl"
                    style="background-image: url('{{ asset('img/banners/recuadro-4.jpg') }}');">
                    <div
                        class="lg:absolute w-full h-60 bg-pink-main bg-opacity-70 hover:bg-opacity-60 block hover:hidden rounded-2xl">
                        <div class="text-center w-full text-white py-20 px-8">
                            <h1 class="text-xl">Amplas avenidas de concreto hidráulico es 3 veces más resitente</h1>

                        </div>
                    </div>
                </div>
                <div class="hidden lg:block text-center w-full">
                    <h2 class="text-3xl font-serif text-white font-bold mb-10 mt-2">
                        8 Parques interactivos
                    </h2>
                </div>
                <div class="hidden lg:block text-center w-full">
                    <h2 class="text-3xl font-serif text-white font-bold mb-10 mt-2">
                        Ciclopista
                    </h2>
                </div>
            </div>
        </div>


        <div class="text-center mt-36 lg:px-32">
            <h2 class="text-2xl lg:text-3xl lg:px-80 text-white font-serif font-bold mb-16">Conoce nuestros dos
                desarrollos:<br>¿Dónde te
                gustaría
                vivir?</h2>
            <div class="grid grid-col-1 lg:grid-cols-2 justify-center gap-8 lg:gap-6 px-4 lg:px-10">
                <figure class="bg-purple-main">
                    <img src="{{ asset('img/banners/modelo-1.jpg') }}" class="object-cover h-96 w-full" alt="">
                    <div class="w-full text-center px-8">
                        <img src="{{ asset('img/logos/almada.png') }}" class="mx-auto w-64 px-2 h-40 object-contain pt-16"
                            alt="">
                        <p class="text-2xl text-white font-montserrat font-medium mt-2">Desde: $385,000</p>
                        <p class="lg:text-lg text-white font-montserrat font-light mt-10">Almada® es un desarrollo tipo
                            cerrada
                            que conecta con nuestra Gran Calzada®, la cual concentra todos los servicios y amenidades para
                            que tú y tu familia se den un respiro mientras la recorren para realizar las actividades de su
                            vida diaria.</p>
                        <div class="grid grid-cols-3 justify-items-stretch gap-y-7 items-center mt-10 lg:px-14">
                            <div class="lg:justify-self-end">
                                <img src="{{ asset('img/logos/icon-1.png') }}" alt="">
                            </div>
                            <div class="justify-self-start col-span-2">
                                <p class="text-white lg:ml-10 lg:text-xl">1490 Casas</p>
                            </div>
                            <div class="lg:justify-self-end">
                                <img src="{{ asset('img/logos/icon-2.png') }}" alt="">
                            </div>
                            <div class="justify-self-start col-span-2">
                                <p class="text-white lg:ml-10 lg:text-xl">Semi-cerrada</p>
                            </div>
                            <div class="lg:justify-self-end">
                                <img src="{{ asset('img/logos/icon-3.png') }}" alt="">
                            </div>
                            <div class="justify-self-start col-span-2">
                                <p class="text-white lg:ml-10 lg:text-xl">5 modelos diferentes</p>
                            </div>
                            <div class="lg:justify-self-end">
                                <img src="{{ asset('img/logos/icon-4.png') }}" alt="">
                            </div>
                            <div class="justify-self-start col-span-2">
                                <p class="text-white lg:ml-10 lg:text-xl">Rodeado de servicios</p>
                            </div>
                            <div class="lg:pt-20 pt-10 pb-10 col-span-3">
                                <a href="" class="px-4 py-3 bg-logos">Vive en Almada</a>
                            </div>
                        </div>
                    </div>
                </figure>

                <figure class="bg-green-main">
                    <img src="{{ asset('img/banners/modelo-2.png') }}" class="object-cover h-96 w-full" alt="">
                    <div class=" w-full text-center px-8">
                        <img src="{{ asset('img/logos/miraverde.png') }}"
                            class="mx-auto w-80 px-4 h-40 object-contain pt-16" alt="">
                        <p class="text-2xl text-white font-montserrat font-medium mt-2">Desde: $600,000</p>
                        <p class="lg:text-lg text-white font-montserrat font-light mt-10">En Miraverde® disfruta de una
                            privada
                            habitacional que consta de un
                            espacio en el que podrás disfrutar y ver crecer a tu familia, además te ofrece la tranquilidad
                            de que vivirán en un lugar fresco, verde y seguro.</p>
                        <div class="grid grid-cols-3 justify-items-stretch gap-y-7 items-center mt-10 lg:px-14">
                            <div class="lg:justify-self-end">
                                <img src="{{ asset('img/logos/icon-5.png') }}" alt="">
                            </div>
                            <div class="justify-self-start col-span-2">
                                <p class="text-white lg:ml-10 lg:text-xl">338 Casas</p>
                            </div>
                            <div class="lg:justify-self-end">
                                <img src="{{ asset('img/logos/icon-6.png') }}" alt="">
                            </div>
                            <div class="justify-self-start col-span-2">
                                <p class="text-white lg:ml-10 lg:text-xl">Caseta de acceso</p>
                            </div>
                            <div class="lg:justify-self-end">
                                <img src="{{ asset('img/logos/icon-7.png') }}" alt="">
                            </div>
                            <div class="justify-self-start col-span-2">
                                <p class="text-white lg:ml-10 lg:text-xl">Barda perimetral</p>
                            </div>
                            <div class="lg:justify-self-end">
                                <img src="{{ asset('img/logos/icon-8.png') }}" alt="">
                            </div>
                            <div class="justify-self-start col-span-2">
                                <p class="text-white lg:ml-10 lg:text-xl">Parque central </p>
                            </div>
                            <div class="py-14 col-span-3">
                                <a href="" class="px-4 py-3 bg-logos">Vive en Miraverde</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </div>


        <div class="grid grid-cols-2 lg:gap-8 justify-center items-center my-28">
            <div class="justify-self-center pl-1 lg:justify-self-end text-center">
                <h2 class="lg:text-xl lg:text-3xl font-serif text-white font-bold">
                    Gran Calzada una<br>
                    Gran Comunidad
                </h2>
            </div>
            <div class="justify-self-center lg:justify-self-start">
                <a href=""
                    class="px-4 py-2 text-center text-xs md:text-xl lg:px-10 lg:py-2 text-white bg-pink-main mx-auto">Avances
                    de Obra</a>
            </div>
        </div>

        <div class="mx-auto px-3 lg:px-52">
            <img src="{{ asset('img/banners/banner-4.png') }}" class="w-full object-cover" alt="">
        </div>
    </section>


@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                interval: 2500,
            }).mount();
        });
    </script>
@endsection
