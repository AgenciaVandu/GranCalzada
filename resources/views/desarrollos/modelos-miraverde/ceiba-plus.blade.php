@extends('layouts.template')
@section('content')
   <header id="cabecera-modelos" class="bg-miraverde-1">
        <div class="container">
            <div class="col-12 text-center">
                <img src="{{asset ('img/miraverde/mv-logo.svg')}}" width="190" alt="">
            </div>
            <div class="col-12 mt-4 pb-4">
                <div id="controles-2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('/img/miraverde/modelos/ceiba-plus/ceiba-plus.jpg')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('/img/miraverde/modelos/ceiba-plus/ceiba-plus.jpg')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('/img/miraverde/modelos/ceiba-plus/ceiba-plus.jpg')}}" class="d-block w-100" alt="...">
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



   <section id="detalles-de-modelo" class="bg-miraverde-1">
    <div class="plantas-modelos">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <ul>
                        <li class="modelo-li ">Modelo Ceiba Plus</li>
                            <br>
                            <li>Construcción: <span>82.25 m2 m<sup>2</sup></span></li>
                            <li>Terreno desde: <span>7 x 17 m</li> 
                            <br>
                            <li><b>Planta Arquitectónica</b></li>

                            <br>
                            <li><b>PLANTA BAJA</b></li>
                            <li>Sala / Comedor</li>
                            <li>Cocina independiente</li> 
                            <li>½ baño</li>
                            <li>Cochera semitechada</li>
                            <br>
                            <li><b>PLANTA ALTA</b></li>
                            <li>Recámara principal con área <br> para closet y acceso a baño completo</li>
                            <li>Recámara 1 con área para closet</li>
                            <li>Recámara 2</li>
                            <li>Baño completo</li>
                            
                        
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
                            <img src="{{asset('/img/miraverde/modelos/ceiba-plus/planta_baja.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img src="{{asset('/img/miraverde/modelos/ceiba-plus/planta_alta.png')}}" class="img-fluid" alt="">
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
                    
                    <div class="col-md-4 col-sm-12 mt-3"> <!--Mod 2-->
                        <div class="card bg-cruzada">
                            <img src="{{asset('/img/almada/venta-cruzada/aguamarina-03.png')}}" class="img-fluid" alt="Modelos disponibles | Gran Calzada">
                            <div class="titulo-cruzada text-center pt-3">
                                <h2 class="t-mod" style="color: #265B33;">Flamboyán Plus</h2>
                            <p class="p-desde" style="color: #265B33;">Desde: 
                                <span>$000.00</span>
                            </p>
                            </div>
                            <div class="row" > <!--Amenidades por modelo-->
                                <div class="col-6 izq-mod">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/comedor.svg')}}" width="36" alt="">
                                </div>
                                <div class="col-6 der-mod pt-2">
                                    <p>Sala / Comedor </p>
                                </div>
                                <div class="col-6 izq-mod ">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/cocina.svg')}}" width="32" alt="">
                                </div>
                                <div class="col-6 der-mod">
                                    <p>Cocina <br> independiente</p>
                                </div>
                                <div class="col-6 izq-mod">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/recamara.svg')}}" width="32" alt="">
                                </div>
                                <div class="col-6 der-mod pt-1">
                                    <p>2 Recámaras</p>
                                </div>
                                <div class="col-6 izq-mod">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/bano.svg')}}" width="32" alt="">
                                </div>
                                <div class="col-6 der-mod pt-3">
                                    <p>1 baños</p>
                                </div>
                                <div class="espacio-bco-mv">
                                </div> 
                            </div>
                            <div class="boton-cotizar mt-3 mb-3 text-center">
                                <a href="" class="btn btn-info">Cotizar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-3"> <!--Mod 2-->
                        <div class="card bg-cruzada">
                            <img src="{{asset('/img/almada/venta-cruzada/aguamarina-03.png')}}" class="img-fluid" alt="Modelos disponibles | Gran Calzada">
                            <div class="titulo-cruzada text-center pt-3">
                                <h2 class="t-mod" style="color: #265B33;">Bugambilia Plus</h2>
                            <p class="p-desde" style="color: #265B33;">Desde: 
                                <span>$000.00</span>
                            </p>
                            </div>
                            <div class="row" > <!--Amenidades por modelo-->
                                <div class="col-6 izq-mod">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/comedor.svg')}}" width="36" alt="">
                                </div>
                                <div class="col-6 der-mod pt-2">
                                    <p>Sala / Comedor </p>
                                </div>
                                <div class="col-6 izq-mod ">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/cocina.svg')}}" width="32" alt="">
                                </div>
                                <div class="col-6 der-mod">
                                    <p>Cocina <br> independiente</p>
                                </div>
                                <div class="col-6 izq-mod">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/recamara.svg')}}" width="32" alt="">
                                </div>
                                <div class="col-6 der-mod pt-1">
                                    <p>2 Recámaras</p>
                                </div>
                                <div class="col-6 izq-mod">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/bano.svg')}}" width="32" alt="">
                                </div>
                                <div class="col-6 der-mod pt-3">
                                    <p>1 baños</p>
                                </div>
                                <div class="col-6 izq-mod pt-2">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/terraza.svg')}}" width="40" alt="">
                                </div>
                                <div class="col-6 der-mod pt-3">
                                    <p>Terraza</p>
                                </div>
                            </div>
                            <div class="boton-cotizar mt-2 mb-3 text-center">
                                <a href="" class="btn btn-info">Cotizar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-3"><!--Mod 4-->
                        <div class="card bg-cruzada "> 
                            <img src="{{asset('/img/almada/venta-cruzada/aguamarina-03.png')}}" class="img-fluid" alt="Modelos disponibles | Gran Calzada">
                            <div class="titulo-cruzada text-center pt-3">
                                <h2 class="t-mod" style="color: #265B33;">Ceiba Plus</h2>
                            <p class="p-desde" style="color: #265B33;">Desde: 
                                <span>$000.00</span>
                            </p>
                            </div>
                            <div class="row" > <!--Amenidades por modelo-->
                                <div class="col-6 izq-mod">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/comedor.svg')}}" width="36" alt="">
                                </div>
                                <div class="col-6 der-mod">
                                    <p>Sala / Comedor <br> / Cocina</p>
                                </div>
                                <div class="col-6 izq-mod ">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/cocina.svg')}}" width="32" alt="">
                                </div>
                                <div class="col-6 der-mod">
                                    <p>Cocina <br> independiente</p>
                                </div>
                                <div class="col-6 izq-mod">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/recamara.svg')}}" width="32" alt="">
                                </div>
                                <div class="col-6 der-mod pt-1">
                                    <p>2 Recámaras</p>
                                </div>
                                <div class="col-6 izq-mod">
                                    <img src="{{asset('/img/miraverde/venta-cruzada/icon/bano.svg')}}" width="32" alt="">
                                </div>
                                <div class="col-6 der-mod pt-3">
                                    <p>1 1/2 baños</p>
                                </div>
                                <div class="espacio-bco-mv-1">
                                </div> 
                               
                            </div>
                            <div class="boton-cotizar mt-2 mb-3 text-center">
                                <a href="" class="btn btn-info">Cotizar</a>
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
                
            </div>

        </div>
    </div>
</section>
   
@endsection