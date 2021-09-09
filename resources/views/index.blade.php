@extends('layouts.template')
@section('content')
    <header id="index">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <div class="video mt-2">
                        <video src="{{ asset('/video/1000x500.mp4') }}" loop muted preload width="1000" height="auto"
                            autoplay></video>
                    </div>
                    <div class="col-12">
                        <h5 class="mt-4"><span class="light">Disfruta la vida</span> EN TU NUEVO HOGAR</h5>
                        <hr class="mb-5">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="introduccion">
        <div class="container-fluid">
            <div class="row over">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-5 p-0">
                    <img src="{{ asset('/img/GCAL-1.jpg') }}" class="img-fluid p-0" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 txt-calzada">
                    <h2 style="text-align: left" class="mb-4">Descubre cómo es vivir en una ciudad totalmente
                        planeada</h2>
                    <p style="color: #fff">Bienvenido a Gran Calzada, es un complejo habitacional con más de 4,000 mil
                        viviendas distribuidas en 2 desarrollos: Almada y Miraverde conectados por la bella Gran Calzada que
                        se convierte en tu eje central de servicios y áreas verdes</p>
                    <div class="row mt-3 mb-3" style="text-align: left">
                        <div class="col-md-6 col-sm-12 mt-2">
                            <a href="" class="btn btn-primary btn-block">Descargar brochure</a>
                        </div>
                        <div class="col-md-6 col-sm-12 mt-2">
                            <a href="" class="btn btn-primary btn-block">Descargar brochure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="desarrollos">
        <div class="container">
            <div class="beneficios">
                <h2 style="text-align: center">¿Qué encontrarás en Gran Calzada?</h2>
                <div class="row space-1">
                    <div class="col-6 pt-3 text-center">
                        <img src="{{ asset('/img/amenidades-index/1.png') }}" class="img-fluid" alt="">
                        <h3 class="pt-3">Excelente Ubicación</h3>
                    </div>
                    <div class="col-6 pt-3 text-center">
                        <img src="{{ asset('/img/amenidades-index/2.png') }}" class="img-fluid" alt="">
                        <h3 class="pt-3">Multi-servicios</h3>
                    </div>
                    <div class="col-6 pt-3 text-center">
                        <img src="{{ asset('/img/amenidades-index/3.png') }}" class="img-fluid" alt="">
                        <h3 class="pt-3">8 parques interactivos</h3>
                    </div>
                    <div class="col-6 pt-3 text-center">
                        <img src="{{ asset('/img/amenidades-index/4.png') }}" class="img-fluid" alt="">
                        <h3 class="pt-3">Ciclopista</h3>
                    </div>
                </div>
            </div>
            <h2 class="text-center pt-5 titular-modelos" style="color: #1A2C4C"><span
                    class="conoce  pb-2">CONOCE</span><br>nuestros <span class="dos">2</span> desarrollos: <br>
                ¿En cuál te gustaría vivir?</h2>

            <div class="row mt-5 desarrollos">
                <div class="col-md-6 col-sm-12 text-center">
                    <img src="{{ asset('/img/modelo.png') }}" class="img-fluid" alt="">
                    <div class="bg-almada">
                        <img src="{{ asset('/img/almada.png') }}" alt="Gran Calzada | Ciudad Viva"
                            class="img-fluid pt-3 pb-3">
                        <h4 style="color: #fff">
                            Desde:<span>$385,000</span>
                        </h4>
                        <p style="color: #fff">Almada® es un desarrollo tipo cerrada que conecta con nuestra Gran Calzada®,
                            la cual concentra todos los servicios y amenidades para que tú y tu familia se den un respiro
                            mientras la recorren para realizar las actividades de su vida diaria.</p>
                        <div class="row">
                            <div class="col-5 text-right pt-2">
                                <img src="{{ asset('/img/icon/icon.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-7 justify-center m-auto">
                                <p class="elemento">1490 Casas</p>
                            </div>
                            <div class="col-5 text-right pt-2">
                                <img src="{{ asset('/img/icon/icon.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-7 justify-center m-auto">
                                <p class="elemento">1490 Casas</p>
                            </div>
                            <div class="col-5 text-right pt-2">
                                <img src="{{ asset('/img/icon/icon.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-7 justify-center m-auto">
                                <p class="elemento">1490 Casas</p>
                            </div>
                            <div class="col-5 text-right pt-2">
                                <img src="{{ asset('/img/icon/icon.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-7 justify-center m-auto">
                                <p class="elemento">1490 Casas</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-secondary btn-almada">Vive en Almada</a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 text-center">
                    <img src="{{ asset('/img/modelo.png') }}" class="img-fluid" alt="">
                    <div class="bg-miraverde">
                        <img src="{{ asset('/img/miraverde.png') }}" alt="Gran Calzada | Ciudad Viva"
                            class="img-fluid pt-3 pb-3">
                        <h4 style="color: #fff">
                            Desde:<span>$385,000</span>
                        </h4>
                        <p style="color: #fff">Almada® es un desarrollo tipo cerrada que conecta con nuestra Gran Calzada®,
                            la cual concentra todos los servicios y amenidades para que tú y tu familia se den un respiro
                            mientras la recorren para realizar las actividades de su vida diaria.</p>
                        <div class="row">
                            <div class="col-5 text-right pt-2">
                                <img src="{{ asset('/img/icon/icon-mira.svg') }}" alt="" class="img-fluid"
                                    width="35">
                            </div>
                            <div class="col-7 justify-center m-auto">
                                <p class="elemento">1490 Casas</p>
                            </div>
                            <div class="col-5 text-right pt-2">
                                <img src="{{ asset('/img/icon/icon-mira.svg') }}" alt="" class="img-fluid"
                                    width="35">
                            </div>
                            <div class="col-7 justify-center m-auto">
                                <p class="elemento">1490 Casas</p>
                            </div>
                            <div class="col-5 text-right pt-2">
                                <img src="{{ asset('/img/icon/icon-mira.svg') }}" alt="" class="img-fluid"
                                    width="35" style="width: 40">
                            </div>
                            <div class="col-7 justify-center m-auto">
                                <p class="elemento">1490 Casas</p>
                            </div>
                            <div class="col-5 text-right pt-2">
                                <img src="{{ asset('/img/icon/icon-mira.svg') }}" alt="" class="img-fluid"
                                    width="35" style="width: 40">
                            </div>
                            <div class="col-7 justify-center m-auto">
                                <p class="elemento">1490 Casas</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-secondary mt-4 mb-4">Vive en Almada</a>
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
                        <a href="#" class="btn btn-dark">Avances de obra</a>
                    </div>
                </div>
                <div class="col-12 pb-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('/img/avances-de-obra/GCAL-Avances-deObra2.jpg') }}"
                                    class="d-block w-100" alt="avances de obra - Gran Calzada">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/avances-de-obra/GCAL-Avances-deObra3.jpg') }}"
                                    class="d-block w-100" alt="avances de obra - Gran Calzada">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/avances-de-obra/GCAL-Avances-deObra4.jpg') }}"
                                    class="d-block w-100" alt="avances de obra - Gran Calzada">
                            </div>
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
