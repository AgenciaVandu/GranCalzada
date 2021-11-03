@extends('layouts.template')
@section('content')
    <header id="index">
        <div class="sp-top text-center">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @isset($video->resources)
                        @foreach ($video->resources as $resource)
                            @php
                                $file = new SplFileInfo($resource->url);
                                $extension = $file->getExtension();
                            @endphp
                            @if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi')
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <video src="{{ Storage::url($resource->url) }}" class="d-block w-100" loop muted preload autoplay></video>
                                </div>
                            @else
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ Storage::url($resource->url) }}" class="d-block w-100" alt="...">
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="carousel-item active">
                            <div class="carousel-item active">
                                <video src="{{ asset('video/video-GC.mp4') }}" loop muted preload autoplay></video>
                            </div>
                        </div>
                    @endisset
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h5 class="mt-4"><span class="light">Disfruta la vida</span> EN TU NUEVO HOGAR
                    </h5>
                    <hr class="mb-5">
                </div>
            </div>
        </div>
    </header>
    <!-- Modal Promociones-->
    <div class="modal fade" id="modal-promo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body" style="background-color: #fff">
                    @isset($modal->resources)
                        <div class="text-center">
                            <img src="{{ Storage::url($modal->resources->first()->url) }}" class="img-fluid" alt="">
                        </div>
                    @else
                        <div class="text-center">
                            <img src="{{ asset('/img/almada/venta-cruzada/magenta-03.png') }}" class="img-fluid" alt="">
                        </div>
                    @endisset
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="bg-azul-index">
            <div class="container-fluid">
                <div class="row over">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-5 p-0 ">
                        <img src="{{ asset('/img/GCAL-2.png') }}" class="img-fluid p-0" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 txt-calzada">
                        <h2 style="text-align: left" class="mb-4">Descubre cómo es vivir en una ciudad totalmente
                            planeada</h2>
                        <p style="color: #fff">Bienvenido a Gran Calzada, es un complejo habitacional con más de 4,000 mil
                            viviendas distribuidas en 2 desarrollos: Almada y Miraverde conectados por la bella Gran Calzada
                            que
                            se convierte en tu eje central de servicios y áreas verdes</p>
                        <div class="row mt-3 mb-3" style="text-align: left">
                            <div class="col-md-6 col-sm-12 mt-2">
                                <a href="" class="btn btn-primary btn-block">Descargar brochure</a>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-2">
                                <a href="/conoce-gran-calzada" class="btn btn-primary btn-block">Conoce Gran Calzada</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="desarrollos">
        <div class="container">
            <div class="beneficios">
                <h1 class="gran-calzada-2" style="text-align: center">
                    <span class="signo-1">¿</span>
                    Qué encontrarás en <br>
                    <span class="gran-calzada-3">Gran Calzada<span class="registrada">®</span></span><span
                        class="signo-1">?
                    </span>
                </h1>
                <div class="text-center linea-amarilla" style="position: relative; top: -20px">
                    <img src="{{ asset('/img/amarillo.svg') }}" class="img-fluid" width="480" alt="">
                </div>
                <div class="d-md-none datos">
                    <div class="carousel_1">
                        <!--Carousel 1-->
                        <div class="carousel__contenedor">
                            <!--Carousel contenedor-->
                            <button aria-label="anterior" class="carousel__anterior">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <div class="carousel__lista">
                                <div class="carousel__elemento">
                                    <div class="col-12 pt-3 text-center">
                                        <img src="{{ asset('img/icon/conoce-gc/ubicacion1.png') }}" class="img-fluid"
                                            alt="">
                                        <h3 class="pt-3">Excelente Ubicación</h3>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <div class="col-12 pt-3 text-center">
                                        <img src="{{ asset('img/icon/conoce-gc/multiservicios1.png') }}" class="img-fluid"
                                            alt="">
                                        <h3 class="pt-3">Multi-servicios</h3>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <div class="col-12 pt-3 text-center">
                                        <img src="{{ asset('img/icon/conoce-gc/ocho1.png') }}" class="img-fluid"
                                            alt="">
                                        <h3 class="pt-3">8 parques interactivos</h3>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <div class="col-12 pt-3 text-center">
                                        <img src="{{ asset('img/icon/conoce-gc/ciclopista1.png') }}" class="img-fluid"
                                            alt="">
                                        <h3 class="pt-3">Ciclopista</h3>
                                    </div>
                                </div>
                            </div>
                            <button aria-label="siguiente" class="carousel__siguiente">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        <div role="tabList" class="carousel__indicadores"></div>
                    </div> <!-- Fint Carousel 1-->
                </div>
                <div class="d-none d-md-block d-lg-block datos">
                    <div class="row space-1">
                        <div class="col-6 pt-3 text-center">
                            <div class="ubicacion"></div>
                            {{--<img src="{{ asset('/img/amenidades-index/1.png') }}" class="img-fluid" alt="">--}}
                            <h3 class="pt-3">Excelente Ubicación</h3>
                        </div>
                        <div class="col-6 pt-3 text-center">
                            <div class="multiservicios"></div>
                            {{--<img src="{{ asset('/img/amenidades-index/2.png') }}" class="img-fluid" alt="">--}}
                            <h3 class="pt-3">Multi-servicios</h3>
                        </div>
                        <div class="col-6 pt-3 text-center">
                            <div class="ocho"></div>
                            {{--<img src="{{ asset('/img/amenidades-index/3.png') }}" class="img-fluid" alt="">--}}
                            <h3 class="pt-3">8 parques interactivos</h3>
                        </div>
                        <div class="col-6 pt-3 text-center">
                            <div class="ciclopista"></div>
                            {{--<img src="{{ asset('/img/amenidades-index/4.png') }}" class="img-fluid" alt="">--}}
                            <h3 class="pt-3">Ciclopista</h3>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-center pt-5 titular-modelos" style="color: #1A2C4C"><span
                    class="conoce  pb-2">CONOCE</span><br>nuestros <span class="dos">2</span> desarrollos: <br>
                ¿En cuál te gustaría vivir?</h2>
            <div class="d-md-none datos">
                <div class="carousel_1">
                    <!--Carousel 2-->
                    <div class="carousel__contenedor">
                        <!--Carousel contenedor-->
                        <button aria-label="anterior" class="carousel__anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div class="carousel__lista1">
                            <div class="carousel__elemento">
                                <div class="pt-3 text-center">
                                    <div class="col-md-6 col-sm-12 text-center">
                                        <img src="{{ asset('/img/cabecera-1.jpg') }}" class="img-fluid" alt="">
                                        <div class="bg-almada">
                                            <img src="{{ asset('/img/almada.png') }}" alt="Gran Calzada | Ciudad Viva"
                                                class="img-fluid pt-3 pb-3">
                                            <h4 style="color: #fff; font-family:'Avenir-regular'" class="pb-2">
                                                Desde:<span> $385,000</span>
                                            </h4>
                                            <p style="color: #fff" class="texto-carousel-1">{{ $almada->description2 }}
                                            </p>
                                            <div class="row">
                                                <div class="col-5 text-right pt-2">
                                                    <img src="{{ asset('/img/icon/1-01.svg') }}" width="45" alt="">
                                                </div>
                                                <div class="col-7 justify-center m-auto">
                                                    <p class="elemento">1490 Casas</p>
                                                </div>
                                                <div class="col-5 text-right pt-2">
                                                    <img src="{{ asset('/img/icon/2-01.svg') }}" width="45" alt="">
                                                </div>
                                                <div class="col-7 justify-center m-auto">
                                                    <p class="elemento">Semi-cerrada</p>
                                                </div>
                                                <div class="col-5 text-right pt-2">
                                                    <img src="{{ asset('/img/icon/3-01.svg') }}" width="45" alt="">
                                                </div>
                                                <div class="col-7 justify-center m-auto">
                                                    <p class="elemento">5 modelos diferentes</p>
                                                </div>
                                                <div class="col-5 text-right pt-2">
                                                    <img src="{{ asset('/img/icon/4-01.svg') }}" width="45" alt="">
                                                </div>
                                                <div class="col-7 justify-center m-auto">
                                                    <p class="elemento">Rodeado de servicios</p>
                                                </div>
                                            </div>
                                            <a href="{{ route('almada.index') }}"
                                                class="btn btn-secondary btn-almada">Vive en Almada</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel__elemento">
                                <div class="col-md-6 col-sm-12 pt-3 text-center">
                                    <img src="{{ asset('/img/cabecera-2.jpg') }}" class="img-fluid" alt="">
                                    <div class="bg-miraverde">
                                        <img src="{{ asset('/img/miraverde.png') }}" alt="Gran Calzada | Ciudad Viva"
                                            class="img-fluid pt-3 pb-3">
                                        <h4 style="color: #fff; font-family:'Avenir-regular'" class="pb-2">
                                            Desde:<span> $385,000</span>
                                        </h4>
                                        <p style="color: #fff" class="texto-carousel-1">{{ $miraverde->description2 }}
                                        </p>
                                        <div class="row">
                                            <div class="col-5 text-right pt-2">
                                                <img src="{{ asset('/img/modelos/1.svg') }}" alt=""
                                                    class="img-fluid" width="35">
                                            </div>
                                            <div class="col-7 justify-center m-auto">
                                                <p class="elemento">338 Casas</p>
                                            </div>
                                            <div class="col-5 text-right pt-2">
                                                <img src="{{ asset('/img/modelos/5.svg') }}" alt=""
                                                    class="img-fluid" width="35">
                                            </div>
                                            <div class="col-7 justify-center m-auto">
                                                <p class="elemento">Caseta de acceso</p>
                                            </div>
                                            <div class="col-5 text-right pt-2">
                                                <img src="{{ asset('/img/modelos/4.svg') }}" alt=""
                                                    class="img-fluid" width="35" style="width: 40">
                                            </div>
                                            <div class="col-7 justify-center m-auto">
                                                <p class="elemento">Barda perimetral</p>
                                            </div>
                                            <div class="col-5 text-right pt-2">
                                                <img src="{{ asset('/img/modelos/2.svg') }}" alt=""
                                                    class="img-fluid" width="35" style="width: 40">
                                            </div>
                                            <div class="col-7 justify-center m-auto">
                                                <p class="elemento">Parque central</p>
                                            </div>
                                            <div class="col-7 pb-1">

                                            </div>
                                        </div>
                                        <a href="{{ route('miraverde.index') }}"
                                            class="btn btn-secondary mt-4 mb-4">Vive en Miraverde</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button aria-label="siguiente" class="carousel__siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <div role="tabList" class="carousel__indicadores1"></div>
                </div> <!-- Fint Carousel 2-->
            </div>
            <div class="d-none d-md-block d-lg-block datos">
                <div class="row mt-5 desarrollos">
                    <div class="col-md-6 col-sm-12 text-center">
                        <img src="{{ asset('/img/cabecera-1.jpg') }}" class="img-fluid" alt="">
                        <div class="bg-almada">
                            <img src="{{ asset('/img/almada.png') }}" alt="Gran Calzada | Ciudad Viva"
                                class="img-fluid pt-3 pb-3">
                            @isset($desde_almada)
                            <h4 style="color: #fff; font-family:'Avenir-regular'" class="pb-2">
                                Desde:<span> ${{ number_format($desde_almada->price, 2) }}</span>
                            </h4>
                            @endisset
                            <p style="color: #fff" class="espacio-almada-1">{{ $almada->description2 }}</p>
                            <div class="row">
                                <div class="col-5 text-right pt-2">
                                    <img src="{{ asset('/img/icon/1-01.svg') }}" alt="" width="45">
                                </div>
                                <div class="col-7 justify-center m-auto">
                                    <p class="elemento">1490 Casas</p>
                                </div>
                                <div class="col-5 text-right pt-2">
                                    <img src="{{ asset('/img/icon/2-01.svg') }}" alt="" width="45">
                                </div>
                                <div class="col-7 justify-center m-auto">
                                    <p class="elemento">Semi-cerrada</p>
                                </div>
                                <div class="col-5 text-right pt-2">
                                    <img src="{{ asset('/img/icon/3-01.svg') }}" alt="" width="45">
                                </div>
                                <div class="col-7 justify-center m-auto">
                                    <p class="elemento">5 modelos diferentes</p>
                                </div>
                                <div class="col-5 text-right pt-2">
                                    <img src="{{ asset('/img/icon/4-01.svg') }}" alt="" width="45">
                                </div>
                                <div class="col-7 justify-center m-auto">
                                    <p class="elemento">Rodeado de servicios</p>
                                </div>
                            </div>
                            <a href="{{ route('almada.index') }}" class="btn btn-secondary btn-almada">Vive en
                                Almada</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 text-center">
                        <img src="{{ asset('/img/cabecera-2.jpg') }}" class="img-fluid" alt="">
                        <div class="bg-miraverde">
                            <img src="{{ asset('/img/miraverde.png') }}" alt="Gran Calzada | Ciudad Viva"
                                class="img-fluid pt-3 pb-3">
                            @isset($desde_miraverde)
                                <h4 style="color: #fff; font-family:'Avenir-regular'" class="pb-2">
                                    Desde:<span> ${{ number_format($desde_miraverde->price, 2) }}</span>
                                </h4>
                            @endisset
                            <p style="color: #fff">{{ $miraverde->description2 }}</p>
                            <div class="row">
                                <div class="col-5 text-right pt-2">
                                    <img src="{{ asset('/img/modelos/1.svg') }}" alt="" class="img-fluid"
                                        width="35">
                                </div>
                                <div class="col-7 justify-center m-auto">
                                    <p class="elemento">338 Casas</p>
                                </div>
                                <div class="col-5 text-right pt-2">
                                    <img src="{{ asset('/img/modelos/5.svg') }}" alt="" class="img-fluid"
                                        width="35">
                                </div>
                                <div class="col-7 justify-center m-auto">
                                    <p class="elemento">Caseta de acceso</p>
                                </div>
                                <div class="col-5 text-right pt-2">
                                    <img src="{{ asset('/img/modelos/4.svg') }}" alt="" class="img-fluid"
                                        width="35" style="width: 40">
                                </div>
                                <div class="col-7 justify-center m-auto">
                                    <p class="elemento">Barda perimetral</p>
                                </div>
                                <div class="col-5 text-right pt-2">
                                    <img src="{{ asset('/img/modelos/2.svg') }}" alt="" class="img-fluid"
                                        width="35" style="width: 40">
                                </div>
                                <div class="col-7 justify-center m-auto">
                                    <p class="elemento">Parque central</p>
                                </div>
                                <div class="col-7 pb-1">

                                </div>
                            </div>
                            <a href="{{ route('miraverde.index') }}" class="btn btn-secondary mt-4 mb-4">Vive en
                                Miraverde</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="avances-de-obra">
        <div class="detalle pt-5">
            <div class="container">
                <div class="row text-center altura ">
                    <div class="col-md-8 ">
                        <h4 class="comunidad">Una <span class="gran">Gran</span> Comunidad</h4>
                    </div>
                    <div class="col-md-4 avances">
                        <a href="{{ route('galeries.index') }}" class="btn btn-dark">Avances de obra</a>
                    </div>
                </div>
                <div class="col-12 pb-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @isset($slider->resources)
                                @foreach ($slider->resources as $resource)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img src=" {{ Storage::url($resource->url) }}" class="d-block w-100" alt="...">
                                    </div>
                                @endforeach
                            @else
                                <div class="carousel-item active">
                                    <img src="{{ asset('/img/avances-de-obra/GCAL-Avances-deObra2.jpg') }}"
                                        class="d-block w-100" alt="avances de obra - Gran Calzada">
                                </div>
                            @endisset
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
