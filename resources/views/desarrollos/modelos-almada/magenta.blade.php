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
                                <img src="{{ asset('/img/almada/modelos/magenta/magenta.jpg') }}" class="d-block w-100"
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
     <!-- Modal 3-->
     <div class="modal fade" id="modal-ficha-magenta" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="exampleModalLabel">Descargar Ficha t??cnica</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body" style="background-color: #c9dbfa">
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script> <script>
                    hbspt.forms.create({ region: "na1",
                    portalId: "5510950",
                    formId: "4559cd1c-a37b-4847-af67-52b5f170e753"
                    }); </script>
 
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
 
             </div>
         </div>
     </div>
 </div>
    <section id="detalles-de-modelo" class="almada-color">
        <div class="plantas-modelos">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <ul>
                            <li class="modelo-li pt-2">Modelo {{ $model->name }}</li>
                            <br>
                            <li>Construcci??n: <span>45.82 m<sup>2</sup></span></li>
                            <li>Terreno desde: <span>6 x 17 m</li>
                            <br>
                            <li><b>Planta Arquitect??nica</b></li>
                            <br>
                            @foreach ($features as $feature)
                                <li>{{ $feature->name }}</li>
                            @endforeach
                        </ul>
                        <div class="row m-botones botones-modelos">
                            <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                                <a href="{{ route('almada.lead', $model) }}" class="btn btn-secondary btn-block">Cotizar modelo</a>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                                <a href="" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#modal-ficha-magenta">Ficha t??cnica</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <img src="{{ asset('/img/almada/modelos/magenta/planta.png') }}" class="img-fluid" alt="">
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
                    <!--Venta cruzada-->

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
                                                                    <p>2 rec??maras</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-3">
                                                                    <p>1 ba??o</p>
                                                                    <div class="espacio-bco-magenta">
                                                                    </div>
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
                                                                    <p>2 Rec??maras</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-3">
                                                                    <p>1 ba??os</p>
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
                                                                    <p>2 Rec??maras</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-3">
                                                                    <p>1 ba??os</p>
                                                                    <div class="espacio-bco-magenta-1"></div>
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
                                                                    <p>2 Rec??maras</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-3">
                                                                    <p>1 1/2 ba??os</p>
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
                                                                    <p>2 Rec??maras</p>
                                                                </div>
                                                                <div class="col-6 izq-mod">
                                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                                        width="32" alt="">
                                                                </div>
                                                                <div class="col-6 der-mod pt-3">
                                                                    <p>1 1/2 ba??os</p>
                                                                </div>
                                                                <div class="espacio-bco-magenta-2"></div>
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


                    {{--<div class="row">
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
                                                    <p>2 rec??maras</p>
                                                </div>
                                                <div class="col-6 izq">
                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                        width="32" alt="">
                                                </div>
                                                <div class="col-6 der pt-3">
                                                    <p>1 ba??o</p>
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
                                                    <p>2 Rec??maras</p>
                                                </div>
                                                <div class="col-6 izq">
                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                        width="32" alt="">
                                                </div>
                                                <div class="col-6 der pt-3">
                                                    <p>1 ba??os</p>
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
                                                    <p>2 Rec??maras</p>
                                                </div>
                                                <div class="col-6 izq">
                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                        width="32" alt="">
                                                </div>
                                                <div class="col-6 der pt-3">
                                                    <p>1 ba??os</p>
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
                                                    <p>2 Rec??maras</p>
                                                </div>
                                                <div class="col-6 izq">
                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                        width="32" alt="">
                                                </div>
                                                <div class="col-6 der pt-3">
                                                    <p>1 1/2 ba??os</p>
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
                                                    <p>2 Rec??maras</p>
                                                </div>
                                                <div class="col-6 izq">
                                                    <img src="{{ asset('/img/almada/venta-cruzada/icon/bano.svg') }}"
                                                        width="32" alt="">
                                                </div>
                                                <div class="col-6 der pt-3">
                                                    <p>1 1/2 ba??os</p>
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
