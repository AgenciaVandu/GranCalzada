@extends('layouts.template')
@section('content')
    @isset($header->resources)
        <header id="almada-top">
            <div class="sp-top">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($header->resources as $resource)
                            @php
                                $file = new SplFileInfo($resource->url);
                                $extension = $file->getExtension();
                            @endphp
                            @if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi')
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <video src="{{ Storage::url($resource->url) }}" loop muted preload autoplay></video>
                                </div>
                            @else
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ Storage::url($resource->url) }}" class="d-block w-100" alt="...">
                                </div>
                            @endif
                        @endforeach
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
        </header>
    @endisset

    <section id="desarrollo-almada">
        <div class="det-almada">
            <div class="container">
                <div class="row espacio text-center  p-gc">
                    <div class="col-md-8">
                        <h3 class="conoce-1">{{ $button->description }}</h3>
                    </div>
                    <div class="col-md-4 bt-desarrollos">
                        <a href="{{ $button->url }}" class="btn btn-primary">{{ $button->text }}</a>
                    </div>
                </div>
            </div>
            <div class="almada-color">
                <div class="container">
                    <div class="text-center pt-5">
                        <img src="{{ asset('/img/almada/almada.svg') }}" width="150" alt="">
                        <p style="color: #fff; padding:40px;">{{ $almada->description }}</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 text-center p-caract">
                            <div class="row">
                                <div class="col-6 pt-3">
                                    <img src="{{ asset('/img/almada/icon/icono-clusters-03.svg') }}" width="80"
                                        alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">5 CLUSTERS</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{ asset('/img/almada/icon/casas-icono-03.svg') }}" width="80"
                                        alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">1,895 CASAS</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{ asset('/img/almada/icon/areas-verdes-icono-03.svg') }}" width="80"
                                        alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">ÁREAS VERDES</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{ asset('/img/almada/icon/bardas-icono-03.svg') }}" width="80"
                                        alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">BARDA<br> PERIMETRAL</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{ asset('/img/almada/icon/coche--icono-03.svg') }}" width="80"
                                        alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">ACCESO <br> VEHICULAR</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{ asset('/img/almada/icon/modelos-iconos-03.svg') }}" width="80"
                                        alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">5 MODELOS<br>DE VIVIENDA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center">
                            <img src="/img/almada/icon/master-almada.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="equipamiento-almada text-center pt-5">
                        <h2 style="color: #F9B2A2">Equipamiento del desarrollo</h2>
                        <div class="row p-equipamiento">
                            <div class="col">
                                <img src="{{ asset('/img/almada/icon/plaza-comercial-03.svg') }}" width="90" alt="">
                                <p class="pt-3 par-equipamiento" style="text-transform: uppercase;">Plaza <br>Comercial</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('/img/almada/icon/areas-verdes-03.svg') }}" width="90" alt="">
                                <p class="pt-3 par-equipamiento" style="text-transform: uppercase;">Parques libres <br>y
                                    áreas verdes</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('/img/almada/icon/escuelas-03.svg') }}" width="90" alt="">
                                <p class="pt-3 par-equipamiento" style="text-transform: uppercase;">escuelas</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('/img/almada/icon/zonas-comerciales-03.svg') }}" width="90" alt="">
                                <p class="pt-3 par-equipamiento" style="text-transform: uppercase;">Zonas<br>Comerciales</p>
                            </div>
                            <div class="col">
                                <img src="{{ asset('/img/almada/icon/modelos-diferentes-03.svg') }}" width="90" alt="">
                                <p class="pt-3 par-equipamiento" style="text-transform: uppercase;">9 modelos <br>diferentes
                                </p>
                            </div>
                        </div>
                        <div class="col-12 mt-4 bt-desarrollos">
                            <a href="#" class="btn btn-primary">DESCARGAR BROCHURE</a>
                        </div>
                        @isset($video_body->resources)
                            @if ($video_body->visible)
                                <div class="col-12 mt-5">
                                    <video src="{{ Storage::url($video_body->resources->first()->url) }}"></video>
                                </div>
                            @endif
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="disfruta-la-vida">
        <div class="container-fluid">
            <div class="col-12 disfruta-titular">
                <h4 class="disfruta">Disfruta la vida <br> <span class="disfruta-color">EN TU NUEVO HOGAR</span></h4>
            </div>
        </div>
        @isset($body->resources)
            <div class="carousel">
                <div id="controles" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($body->resources as $resource)
                            @php
                                $file = new SplFileInfo($resource->url);
                                $extension = $file->getExtension();
                            @endphp
                            @if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi')
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <video src="{{ Storage::url($resource->url) }}" loop muted preload autoplay></video>
                                </div>
                            @else
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ Storage::url($resource->url) }}" class="d-block w-100" alt="...">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#controles" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#controles" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        @endisset
    </section>

    <section id="cotiza-tu-casa">
        <div class="container">
            <div class="col-12">
                <h4 class="cotiza-color">¡Cotiza tu Casa!</h4>
            </div>
            <div class="col-12">
                <img src="{{ asset('/img/almada/master-final.png') }}" class="img-fluid" alt="">
            </div>

            <div class="elige-tu-casa">
                <div class="col-12">
                    <h4 class="cotiza-color">Elige tu casa</h4>
                </div>
            </div>
            <div class="venta-cruzada">
                <!--Venta cruzada-->
                
                <div class="row">
                    @foreach ($almada->models as $model)
                        <div class="col-md-4 col-sm-12 mt-3">
                            <div class="card bg-cruzada">
                                @if ($model->image != null)
                                    <img src="{{ Storage::url($model->image) }}" class="img-fluid"
                                        alt="Modelos disponibles | Gran Calzada">
                                @else
                                    <img src="{{ asset('/img/almada/venta-cruzada/aguamarina-03.png') }}"
                                        class="img-fluid" alt="Modelos disponibles | Gran Calzada">
                                @endif
                                <div class="titulo-cruzada text-center pt-3">
                                    @switch($model->id)
                                        @case(1)
                                            <h2 class="t-mod" style="color: #4EB3B7;">{{ $model->name }}</h2>
                                        @break
                                        @case(2)
                                            <h2 class="t-mod" style="color: #C90B89;">{{ $model->name }}</h2>
                                        @break
                                        @case(3)
                                            <h2 class="t-mod" style="color: #F69C00;">{{ $model->name }}</h2>
                                        @break
                                        @case(4)
                                            <h2 class="t-mod" style="color: #682E88;">{{ $model->name }}</h2>
                                        @break
                                        @case(5)
                                            <h2 class="t-mod" style="color: #682E88;">{{ $model->name }}</h2>
                                        @break
                                        @default

                                    @endswitch
                                    <p class="p-desde">Desde:
                                        <span>${{ number_format($model->price) }}</span>
                                    </p>
                                </div>
                                @switch($model->id)
                                    @case(1)
                                        <div class="row">
                                            <!--Amenidades por modelo-->
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/comedor.svg') }}"
                                                    width="36" alt="">
                                            </div>
                                            <div class="col-6 der">
                                                <p>Sala / Comedor <br> / Cocina</p>
                                            </div>
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/recamara.svg') }}"
                                                    width="32" alt="">
                                            </div>
                                            <div class="col-6 der pt-1">
                                                <p>2 recámaras</p>
                                            </div>
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}" width="32"
                                                    alt="">
                                            </div>
                                            <div class="col-6 der pt-3">
                                                <p>1 baño</p>
                                            </div>
                                            <div class="espacio-bco">
                                            </div>
                                        </div>
                                    @break
                                    @case(2)
                                        <div class="row">
                                            <!--Amenidades por modelo-->
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/comedor.svg') }}"
                                                    width="36" alt="">
                                            </div>
                                            <div class="col-6 der pt-2">
                                                <p>Sala / Comedor </p>
                                            </div>
                                            <div class="col-6 izq ">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/cocina.svg') }}"
                                                    width="32" alt="">
                                            </div>
                                            <div class="col-6 der">
                                                <p>Cocina <br> independiente</p>
                                            </div>
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/recamara.svg') }}"
                                                    width="32" alt="">
                                            </div>
                                            <div class="col-6 der pt-1">
                                                <p>2 Recámaras</p>
                                            </div>
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}" width="32"
                                                    alt="">
                                            </div>
                                            <div class="col-6 der pt-3">
                                                <p>1 baños</p>
                                            </div>
                                        </div>
                                    @break
                                    @case(3)
                                        <div class="row">
                                            <!--Amenidades por modelo-->
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/comedor.svg') }}"
                                                    width="36" alt="">
                                            </div>
                                            <div class="col-6 der pt-2">
                                                <p>Sala / Comedor </p>
                                            </div>
                                            <div class="col-6 izq ">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/cocina.svg') }}"
                                                    width="32" alt="">
                                            </div>
                                            <div class="col-6 der">
                                                <p>Cocina <br> independiente</p>
                                            </div>
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/recamara.svg') }}"
                                                    width="32" alt="">
                                            </div>
                                            <div class="col-6 der pt-1">
                                                <p>2 Recámaras</p>
                                            </div>
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}" width="32"
                                                    alt="">
                                            </div>
                                            <div class="col-6 der pt-3">
                                                <p>1 baños</p>
                                            </div>
                                        </div>
                                    @break
                                    @case(4)
                                        <div class="row">
                                            <!--Amenidades por modelo-->
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/comedor.svg') }}"
                                                    width="36" alt="">
                                            </div>
                                            <div class="col-6 der">
                                                <p>Sala / Comedor <br> / Cocina</p>
                                            </div>
                                            <div class="col-6 izq ">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/cocina.svg') }}"
                                                    width="32" alt="">
                                            </div>
                                            <div class="col-6 der">
                                                <p>Cocina <br> independiente</p>
                                            </div>
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/recamara.svg') }}"
                                                    width="32" alt="">
                                            </div>
                                            <div class="col-6 der pt-1">
                                                <p>2 Recámaras</p>
                                            </div>
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}" width="32"
                                                    alt="">
                                            </div>
                                            <div class="col-6 der pt-3">
                                                <p>1 1/2 baños</p>
                                            </div>
                                            <div class="col-6 izq pt-2">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/terraza.svg') }}"
                                                    width="40" alt="">
                                            </div>
                                            <div class="col-6 der pt-2">
                                                <p>Terraza</p>
                                            </div>
                                        </div>
                                    @break
                                    @case(5)
                                        <div class="row">
                                            <!--Amenidades por modelo-->
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/comedor.svg') }}"
                                                    width="36" alt="">
                                            </div>
                                            <div class="col-6 der">
                                                <p>Sala / Comedor <br> / Cocina</p>
                                            </div>
                                            <div class="col-6 izq ">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/cocina.svg') }}"
                                                    width="32" alt="">
                                            </div>
                                            <div class="col-6 der">
                                                <p>Cocina <br> independiente</p>
                                            </div>
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/recamara.svg') }}"
                                                    width="32" alt="">
                                            </div>
                                            <div class="col-6 der pt-1">
                                                <p>2 Recámaras</p>
                                            </div>
                                            <div class="col-6 izq">
                                                <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}" width="32"
                                                    alt="">
                                            </div>
                                            <div class="col-6 der pt-3">
                                                <p>1 1/2 baños</p>
                                            </div>
                                            <div class="espacio-bco-1">
                                            </div>
                                        </div>
                                    @break
                                    @default

                                @endswitch
                                <div class="boton-cotizar mt-2 mb-3 text-center">
                                    <a href="{{ route('almada.model', $model) }}" class="btn btn-success">Cotizar</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>



@endsection
