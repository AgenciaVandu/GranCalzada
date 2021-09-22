@extends('layouts.template')
@section('content')
    <header id="cabecera-modelos" class="almada-color">
        <div class="container">
            <div class="col-12 text-center">
                <img src="{{ asset('img/almada/almada.svg') }}" width="160" alt="">
            </div>
            <div class="col-12 mt-4">
                <div id="controles-2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @isset($slider->resources)
                            @foreach ($slider->resources as $resource)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src=" {{ Storage::url($resource->url) }}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        @else
                            <div class="carousel-item active">
                                <img src="{{ asset('/img/almada/modelos/violeta/violeta.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        @endisset
                    </div>
                    <a class="carousel-control-prev" href="#controles-2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#controles-2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section id="detalles-de-modelo" class="almada-color">
        <div class="plantas-modelos">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <ul>
                            <li class="modelo-li ">Modelo {{ $model->name }}</li>
                            <br>
                            <li>Construcción: <span>62.86 m<sup>2</sup></span></li>
                            <li>Terreno desde: <span>6 x 17 m</li>
                            <br>
                            <li>Casa 2 plantas</li>
                            <li>Amplio Patio</li>
                            <li>Lista para ampliación</li>
                            <br>

                            <li><b>Planta Arquitectónica</b></li>

                            <br>
                            <li><b>PLANTA BAJA</b></li>
                            @foreach ($features as $feature)
                                @if ($feature->floor == 'down')
                                    <li>{{ $feature->name }}</li>
                                @endif
                            @endforeach
                            <br>
                            <li><b>PLANTA ALTA</b></li>
                            @foreach ($features as $feature)
                                @if ($feature->floor == 'top')
                                    <li>{{ $feature->name }}</li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="row m-botones botones-modelos">
                            <div class="col-md-6 col-sm-12 mt-3">
                                <a href="{{ route('almada.lead', $model) }}" class="btn btn-secondary btn-block">Cotizar modelo</a>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <a href="" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#modal-ficha-a">Ficha técnica</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img src="{{ asset('/img/almada/modelos/violeta/planta_baja.png') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <img src="{{ asset('/img/almada/modelos/violeta/planta_alta.png') }}"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @if ($model->virtual != '' && $model->virtual_visible == true)
                    <div class="recorrido-modelo m-recorrido">
                        {!! $model->virtual !!}
                    </div>
                @endif
                <div class="elige-tu-casa">
                    <div class="col-12">
                        <h4 class="cotiza-color-1">Tal vez te interese</h4>
                    </div>
                </div>
                <div class="venta-cruzada">

                    <div>
                        <div class="carousel_1">
                            <!--Carousel 2-->
                            <div class="carousel__contenedor">
                                <!--Carousel contenedor-->
                                <button aria-label="anterior" class="carousel__anterior">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <div class="carousel__lista2">
                                    @foreach ($almada->models->except($model->id) as $model)
                                        <div class="carousel__elemento">
                                            <div class="col mt-3">
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
                                                                <h2 class="t-mod" style="color: #C90B89;">{{ $model->name }}</h2>
                                                            @break
                                                            @case(4)
                                                                <h2 class="t-mod" style="color: #4EB3B7;">{{ $model->name }}</h2>
                                                            @break
                                                            @case(5)
                                                                <h2 class="t-mod" style="color: #C90B89;">{{ $model->name }}</h2>
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
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/comedor.svg') }}"
                                                                        width="36" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod">
                                                                    <p>Sala / Comedor <br> / Cocina</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/recamara.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-1">
                                                                    <p>2 recámaras</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-3">
                                                                    <p>1 baño</p>
                                                                </div>
                                                                <div class="espacio-bco">
                                                                </div>
                                                            </div>
                                                        @break
                                                        @case(2)
                                                            <div class="row">
                                                                <!--Amenidades por modelo-->
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/comedor.svg') }}"
                                                                        width="36" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-2">
                                                                    <p>Sala / Comedor </p>
                                                                </div>
                                                                <div class="col-6 izq-mod ">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/cocina.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod">
                                                                    <p>Cocina <br> independiente</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/recamara.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-1">
                                                                    <p>2 Recámaras</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-3">
                                                                    <p>1 baños</p>
                                                                </div>
                                                            </div>
                                                        @break
                                                        @case(3)
                                                            <div class="row">
                                                                <!--Amenidades por modelo-->
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/comedor.svg') }}"
                                                                        width="36" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-2">
                                                                    <p>Sala / Comedor </p>
                                                                </div>
                                                                <div class="col-6 izq-mod ">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/cocina.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod">
                                                                    <p>Cocina <br> independiente</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/recamara.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-1">
                                                                    <p>2 Recámaras</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-3">
                                                                    <p>1 baños</p>
                                                                </div>
                                                            </div>
                                                        @break
                                                        @case(4)
                                                            <div class="row">
                                                                <!--Amenidades por modelo-->
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/comedor.svg') }}"
                                                                        width="36" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod">
                                                                    <p>Sala / Comedor <br> / Cocina</p>
                                                                </div>
                                                                <div class="col-6 izq-mod ">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/cocina.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod">
                                                                    <p>Cocina <br> independiente</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/recamara.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-1">
                                                                    <p>2 Recámaras</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-3">
                                                                    <p>1 1/2 baños</p>
                                                                </div>
                                                                <div class="col-6 izq-mod pt-2">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/terraza.svg') }}"
                                                                        width="40" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-2">
                                                                    <p>Terraza</p>
                                                                </div>
                                                            </div>
                                                        @break
                                                        @case(5)
                                                            <div class="row">
                                                                <!--Amenidades por modelo-->
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/comedor.svg') }}"
                                                                        width="36" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod">
                                                                    <p>Sala / Comedor <br> / Cocina</p>
                                                                </div>
                                                                <div class="col-6 izq-mod ">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/cocina.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod">
                                                                    <p>Cocina <br> independiente</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/recamara.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-1">
                                                                    <p>2 Recámaras</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-3">
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
                                        </div>
                                    @endforeach
                                </div>
                                <button aria-label="siguiente" class="carousel__siguiente">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            <div role="tabList" class="carousel__indicadores2"></div>
                        </div> <!-- Fint Carousel 2-->
                    </div>


                    {{-- <!--Venta cruzada-->
                    <div class="row">
                        @foreach ($almada->models->except($model->id) as $model)
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
                                                <h2 class="t-mod" style="color: #C90B89;">{{ $model->name }}</h2>
                                            @break
                                            @case(4)
                                                <h2 class="t-mod" style="color: #4EB3B7;">{{ $model->name }}</h2>
                                            @break
                                            @case(5)
                                                <h2 class="t-mod" style="color: #C90B89;">{{ $model->name }}</h2>
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
                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                        width="32" alt="">
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
                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                        width="32" alt="">
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
                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                        width="32" alt="">
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
                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                        width="32" alt="">
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
                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                        width="32" alt="">
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
                    </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
