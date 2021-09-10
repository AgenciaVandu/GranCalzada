@extends('layouts.template')
@section('content')
   <header id="cabecera-modelos" class="almada-color">
        <div class="container">
            <div class="col-12 text-center">
                <img src="{{asset ('img/almada/almada.svg')}}" width="160" alt="">
            </div>
            <div class="col-12 mt-4">
                <div id="controles-2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('/img/almada/modelos/violeta/violeta.jpg')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('/img/almada/modelos/violeta/violeta.jpg')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('/img/almada/modelos/violeta/violeta.jpg')}}" class="d-block w-100" alt="...">
                      </div>
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
                            <li class="modelo-li ">Modelo Magenta</li>
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
                            <li>Sala / Comedor</li>
                            <li>Cocina</li> 
                            <li>½ baño</li>
                            <br>
                            <li><b>PLANTA ALTA</b></li>
                            <li>Recámara principal con área <br> para closet y terraza</li>
                            <li>Recámara principal con área <br> para closet </li>
                            <li>1 Baño completo</li>
                        </ul>
                        <div class="row m-botones botones-modelos">
                            <div class="col-md-6 col-sm-12 mt-3">
                                <a href="" class="btn btn-secondary ">Cotizar modelo</a>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <a href="" class="btn btn-secondary ">Ficha técnica</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img src="{{asset('/img/almada/modelos/violeta/planta_baja.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <img src="{{asset('/img/almada/modelos/violeta/planta_alta.png')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recorrido-modelo m-recorrido">
                    <img src="{{asset ('/img/almada/recorrido-modelos.png')}}" class="img-fluid" alt="">
                </div>

                <div class="elige-tu-casa">
                    <div class="col-12">
                        <h4 class="cotiza-color-1">Tal vez te interese</h4>
                    </div>
                </div>
                <div class="venta-cruzada"> <!--Venta cruzada-->
                    <div class="row"> <!--modelos 1 al 3-->
                        <div class="col-4 mt-3"> <!--Mod 2-->
                            <div class="card bg-cruzada">
                                <img src="{{asset('/img/almada/venta-cruzada/aguamarina-03.png')}}" class="img-fluid" alt="Modelos disponibles | Gran Calzada">
                                <div class="titulo-cruzada text-center pt-3">
                                    <h2 class="t-mod" style="color: #C90B89;">Magenta</h2>
                                <p class="p-desde">Desde: 
                                    <span>$000.00</span>
                                </p>
                                </div>
                                <div class="row" > <!--Amenidades por modelo-->
                                    <div class="col-6 izq-mod">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/comedor.svg')}}" width="36" alt="">
                                    </div>
                                    <div class="col-6 der-mod pt-2">
                                        <p>Sala / Comedor </p>
                                    </div>
                                    <div class="col-6 izq-mod ">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/cocina.svg')}}" width="32" alt="">
                                    </div>
                                    <div class="col-6 der-mod">
                                        <p>Cocina <br> independiente</p>
                                    </div>
                                    <div class="col-6 izq">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/recamara.svg')}}" width="32" alt="">
                                    </div>
                                    <div class="col-6 der-mod pt-1">
                                        <p>2 Recámaras</p>
                                    </div>
                                    <div class="col-6 izq-mod">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/bano.svg')}}" width="32" alt="">
                                    </div>
                                    <div class="col-6 der-mod pt-3">
                                        <p>1 baños</p>
                                    </div>
                                    <div class="espacio-bco-2">
    
                                    </div>
                                </div>
                                <div class="boton-cotizar mt-2 mb-3 text-center">
                                    <a href="" class="btn btn-success">Cotizar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mt-3"> <!--Mod 2-->
                            <div class="card bg-cruzada">
                                <img src="{{asset('/img/almada/venta-cruzada/aguamarina-03.png')}}" class="img-fluid" alt="Modelos disponibles | Gran Calzada">
                                <div class="titulo-cruzada text-center pt-3">
                                    <h2 class="t-mod" style="color: #C90B89;">Magenta</h2>
                                <p class="p-desde">Desde: 
                                    <span>$000.00</span>
                                </p>
                                </div>
                                <div class="row" > <!--Amenidades por modelo-->
                                    <div class="col-6 izq-mod">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/comedor.svg')}}" width="36" alt="">
                                    </div>
                                    <div class="col-6 der-mod pt-2">
                                        <p>Sala / Comedor </p>
                                    </div>
                                    <div class="col-6 izq-mod ">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/cocina.svg')}}" width="32" alt="">
                                    </div>
                                    <div class="col-6 der-mod">
                                        <p>Cocina <br> independiente</p>
                                    </div>
                                    <div class="col-6 izq-mod">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/recamara.svg')}}" width="32" alt="">
                                    </div>
                                    <div class="col-6 der-mod pt-1">
                                        <p>2 Recámaras</p>
                                    </div>
                                    <div class="col-6 izq-mod">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/bano.svg')}}" width="32" alt="">
                                    </div>
                                    <div class="col-6 der-mod pt-3">
                                        <p>1 baños</p>
                                    </div>
                                    <div class="espacio-bco-2">
    
                                    </div>
                                </div>
                                <div class="boton-cotizar mt-2 mb-3 text-center">
                                    <a href="" class="btn btn-success">Cotizar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mt-3"><!--Mod 4-->
                            <div class="card bg-cruzada "> 
                                <img src="{{asset('/img/almada/venta-cruzada/aguamarina-03.png')}}" class="img-fluid" alt="Modelos disponibles | Gran Calzada">
                                <div class="titulo-cruzada text-center pt-3">
                                    <h2 class="t-mod" style="color: #4EB3B7;">Aguamarina</h2>
                                <p class="p-desde">Desde: 
                                    <span>$000.00</span>
                                </p>
                                </div>
                                <div class="row" > <!--Amenidades por modelo-->
                                    <div class="col-6 izq-mod">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/comedor.svg')}}" width="36" alt="">
                                    </div>
                                    <div class="col-6 der-mod">
                                        <p>Sala / Comedor <br> / Cocina</p>
                                    </div>
                                    <div class="col-6 izq-mod ">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/cocina.svg')}}" width="32" alt="">
                                    </div>
                                    <div class="col-6 der-mod">
                                        <p>Cocina <br> independiente</p>
                                    </div>
                                    <div class="col-6 izq-mod">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/recamara.svg')}}" width="32" alt="">
                                    </div>
                                    <div class="col-6 der-mod pt-1">
                                        <p>2 Recámaras</p>
                                    </div>
                                    <div class="col-6 izq-mod">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/bano.svg')}}" width="32" alt="">
                                    </div>
                                    <div class="col-6 der-mod pt-3">
                                        <p>1 1/2 baños</p>
                                    </div>
                                    
                                    <div class="col-6 izq-mod pt-2">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/terraza.svg')}}" width="40" alt="">
                                    </div>
                                    <div class="col-6 der-mod pt-2">
                                        <p>Terraza</p>
                                    </div>
                                </div>
                                <div class="boton-cotizar mt-2 mb-3 text-center">
                                    <a href="" class="btn btn-success">Cotizar</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-4 mt-3"> <!--Mod 2-->
                            <div class="card bg-cruzada">
                                <img src="{{asset('/img/almada/venta-cruzada/aguamarina-03.png')}}" class="img-fluid" alt="Modelos disponibles | Gran Calzada">
                                <div class="titulo-cruzada text-center pt-3">
                                    <h2 class="t-mod" style="color: #C90B89;">Magenta</h2>
                                <p class="p-desde">Desde: 
                                    <span>$000.00</span>
                                </p>
                                </div>
                                <div class="row" > <!--Amenidades por modelo-->
                                    <div class="col-6 izq-mod">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/comedor.svg')}}" width="36" alt="">
                                    </div>
                                    <div class="col-6 der-mod">
                                        <p>Sala / Comedor <br> / Cocina</p>
                                    </div>
                                    <div class="col-6 izq-mod ">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/cocina.svg')}}" width="32" alt="">
                                    </div>
                                    <div class="col-6 der-mod">
                                        <p>Cocina <br> independiente</p>
                                    </div>
                                    <div class="col-6 izq-mod">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/recamara.svg')}}" width="32" alt="">
                                    </div>
                                    <div class="col-6 der-mod pt-1">
                                        <p>2 Recámaras</p>
                                    </div>
                                    <div class="col-6 izq-mod">
                                        <img src="{{asset('/img/almada/venta-cruzada/icon/bano.svg')}}" width="32" alt="">
                                    </div>
                                    <div class="col-6 der-mod pt-3">
                                        <p>1 1/2 baños</p>
                                    </div>
                                    
                                    <div class="espacio-bco-1">
    
                                    </div>
                                </div>
                                <div class="boton-cotizar mt-2 mb-3 text-center">
                                    <a href="" class="btn btn-success">Cotizar</a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="row posicion-cruzada"> <!--modelos 4 y 5-->
                        
                        
                       
                    </div>
                </div>

            </div>
        </div>
   </section>
@endsection