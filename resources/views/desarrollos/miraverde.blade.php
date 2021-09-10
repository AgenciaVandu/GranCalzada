@extends('layouts.template')
@section ('content')
<header id="almada-top">
    <div class="sp-top">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('/img/miraverde/slider/mv-top-03.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/img/miraverde/slider/mv-top-03.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('/img/miraverde/slider/mv-top-03.jpg')}}" class="d-block w-100" alt="...">
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
</header>

<section id="desarrollo-almada">
    <div class="det-mv">
        <div class="container">
            <div class="row espacio text-center  p-gc">
                <div class="col-md-8">
                    <h3 class="conoce-1">Conoce a detalle <span class="gran-1">LOS DESARROLOS</span></h3>
                </div>
                <div class="col-md-4 bt-desarrollos">
                    <a href="#" class="btn btn-primary">DESARROLLOS</a>
                </div>
            </div>
        </div>
        <div class="mv-color">
            <div class="container">
                <div class="text-center pt-5">
                    <img src="{{asset('/img/miraverde/mv-logo.svg')}}" width="240" alt="">
                    <p style="color: #fff; padding:40px;">Miraverde es una privada habitacional de 2,314 casas (4 diferentes modelos) que se encuentran en la parte norte de la Gran Calzada. Ofrece a sus habitantes un gran parque central que consta de
                        8 amenidades, espacios seguros a través de su caseta de seguridad, barda perimetral. Un entorno lleno de vegetación que crea un ambiente más fresco. Podrás encontrar un árbol cada 2 casas convirtendolo
                        en un lugar para disfrutar.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-center p-caract">
                        <div class="row">
                            <div class="col-6 pt-3">
                                <img src="{{asset('/img/almada/icon/icono-clusters-03.svg')}}" width="80" alt="Perimetro del desarrollo | Gran Calzada">
                                <p class="perimetro">8 CLUSTERS</p>
                            </div>
                            <div class="col-6 pt-3">
                                <img src="{{asset('/img/almada/icon/casas-icono-03.svg')}}" width="80" alt="Perimetro del desarrollo | Gran Calzada">
                                <p class="perimetro">2,371 CASAS</p>
                            </div>
                            <div class="col-6 pt-3">
                                <img src="{{asset('/img/almada/icon/areas-verdes-icono-03.svg')}}" width="80" alt="Perimetro del desarrollo | Gran Calzada">
                                <p class="perimetro">1 GRAN PARQUE <br>CENTRAL POR <br> CLUSTER</p>
                            </div>
                            <div class="col-6 pt-3">
                                <img src="{{asset('/img/almada/icon/bardas-icono-03.svg')}}" width="80" alt="Perimetro del desarrollo | Gran Calzada">
                                <p class="perimetro">BARDA<br> PERIMETRAL</p>
                            </div>
                            <div class="col-6 pt-3">
                                <img src="{{asset('/img/almada/icon/control-03.svg')}}" width="80" alt="Perimetro del desarrollo | Gran Calzada">
                                <p class="perimetro">ACCESO <br> VEHICULAR CONTROLADO</p>
                            </div>
                            <div class="col-6 pt-3">
                                <img src="{{asset('/img/almada/icon/modelos-iconos-03.svg')}}" width="80" alt="Perimetro del desarrollo | Gran Calzada">
                                <p class="perimetro">4 MODELOS<br>DE VIVIENDA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <img src="/img/almada/icon/master-almada.svg" class="img-fluid" alt="">
                    </div>
                </div>
                 
                <div class="col-12 disfruta-titular">
                    <h4 class="disfruta pb-3">Disfruta la vida <br> <span class="disfruta-color">EN TU NUEVO HOGAR</span></h4>
                    <a href="" class="btn btn-primary">DESCARGAR BROCHURE</a>
                </div>                 
            </div>
            <div class="bg-mv ">
                <div class="container">
                    <div class="detalle-mv-1">
                        <h4 class="titular-mv-2">Estas amenidades las encontrarás<br>
                            <span class="inner-titular-2">en cada uno de los clusters:</span>
                       </h4>
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-6 icon-amenidades-mv">
                                    <img src="{{asset('/img/miraverde/amenidades/terraza-03.svg')}}" width="43" alt="">
                                </div>
                                <div class="col-6">
                                    <p class="amenidades-en-mv">Terraza semitechada</p>
                                </div>
                                <div class="col-6 icon-amenidades-mv">
                                    <img src="{{asset('/img/miraverde/amenidades/chapoteadero-03.svg')}}" width="43" alt="">
                                </div>
                                <div class="col-6">
                                    <p class="amenidades-en-mv">Chapoteadero</p>
                                </div>
                                <div class="col-6 icon-amenidades-mv">
                                    <img src="{{asset('/img/miraverde/amenidades/gimnasio-03.svg')}}" width="43" alt="">
                                </div>
                                <div class="col-6">
                                    <p class="amenidades-en-mv">Gym al aire libre</p>
                                </div>
                                <div class="col-6 icon-amenidades-mv">
                                    <img src="{{asset('/img/miraverde/amenidades/tradicionales.svg')}}" width="43" alt="">
                                </div>
                                <div class="col-6">
                                    <p class="amenidades-en-mv">Área de juegos tradicionales</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-6 icon-amenidades-mv-1">
                                    <img src="{{asset('/img/miraverde/amenidades/balon-03.svg')}}" width="43" alt="">
                                </div>
                                <div class="col-6 p-amenidad-mv">
                                    <p class="amenidades-en-mv">Cancha de usos múltiples</p>
                                </div>
                                <div class="col-6 icon-amenidades-mv-1">
                                    <img src="{{asset('/img/miraverde/amenidades/gradas-03.svg')}}" width="43" alt="">
                                </div>
                                <div class="col-6 p-amenidad-mv">
                                    <p class="amenidades-en-mv">Gradas</p>
                                </div>
                                <div class="col-6 icon-amenidades-mv-1">
                                    <img src="{{asset('/img/miraverde/amenidades/area-de-juegos-03.svg')}}" width="43" alt="">
                                </div>
                                <div class="col-6 p-amenidad-mv">
                                    <p class="amenidades-en-mv">Área de juegos infantiles</p>
                                </div>
                                <div class="col-6 icon-amenidades-mv-1">
                                    <img src="{{asset('/img/miraverde/amenidades/pista-de-trote-03.svg')}}" width="43" alt="">
                                </div>
                                <div class="col-6 p-amenidad-mv">
                                    <p class="amenidades-en-mv">Pista de Jogging</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="disfruta-la-vida-en-miraverde">
    <div class="container-fluid pt-5">            
        <div class="detalle-mv">
            <h4 class="titular-mv">Todas las amenidades en<br>
                <span class="inner-titular">Un <span class="gran-mv">Gran</span> parque central</span>
           </h4>
        </div>
       
    </div> 
    <div class="entorno-img">
            
    </div>
        
        <div class="container pt-5"> 
            <div class="row text-center">
                <div class="col">
                    <img src="{{asset('/img/miraverde/icon/viviendas.svg')}}" width="50" alt="datos relevantes | Gran Calzada">
                    <p class="entorno-p">338 <br><span class="entorno-sp" style="color: #fff;">Viviendas</span></p>
                </div>
                <div class="col">
                    <img src="{{asset('/img/miraverde/icon/viviendas.svg')}}" width="50" alt="datos relevantes | Gran Calzada">
                    <p class="entorno-p">1 Gran <br><span class="entorno-sp" style="color: #fff;">Parque Central</span></p>
                </div>
                <div class="col">
                    <img src="{{asset('/img/miraverde/icon/viviendas.svg')}}" width="50" alt="datos relevantes | Gran Calzada">
                    <p class="entorno-p">8 <br><span class="entorno-sp" style="color: #fff;">Amenidades</span></p>
                </div>
                <div class="col">
                    <img src="{{asset('/img/miraverde/icon/viviendas.svg')}}" width="50" alt="datos relevantes | Gran Calzada">
                    <p class="entorno-p">Barda <br><span class="entorno-sp" style="color: #fff;">Perimetral</span></p>
                </div>
                <div class="col">
                    <img src="{{asset('/img/miraverde/icon/viviendas.svg')}}" width="50" alt="datos relevantes | Gran Calzada">
                    <p class="entorno-p">1 Caseta <br><span class="entorno-sp" style="color: #fff;">con acceso <br>controlado</span></p>
                </div>
                <div class="col">
                    <img src="{{asset('/img/miraverde/icon/viviendas.svg')}}" width="50" alt="datos relevantes | Gran Calzada">
                    <p class="entorno-p">2 accesos<br><span class="entorno-sp" style="color: #fff;">peatonales</span></p>
                </div>
            </div>           
            <div class="detalle-mv-1">
                <h4 class="titular-mv-1">Mira tu entorno,<br>
                    <span class="inner-titular-1">tienes un Gran Parque Central</span>
               </h4>
            </div>
        </div> 
        <div class="carousel pt-5">
            
            <div id="controles" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('/img/almada/cluster.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/img/almada/cluster.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/img/almada/cluster.jpg')}}" class="d-block w-100" alt="...">
                  </div>
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
        
</section>

<section id="cotiza-tu-casa">
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-6">
                <p class="amenidades-r">8 Amenidades <br> para los residentes</p>
            </div>
            <div class="col-md-6">
                <div class="row text-center">
                    <div class="col-md-6 col-sm-12 mt-4">
                        <a href="" class="btn btn-warning">DESCARGAR BROCHURE</a>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-4">
                        <a href="" class="btn btn-warning">DESCARGAR BROCHURE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h4 class="cotiza-color">¡Cotiza tu Casa!</h4>
        </div>
        <div class="col-12">
            <img src="{{asset('/img/almada/master-final.png')}}" class="img-fluid" alt="">
        </div>
    
        <div class="elige-tu-casa">
            <div class="col-12">
                <h4 class="cotiza-color">Elige tu casa</h4>
            </div>
        </div>
        <div class="venta-cruzada"> <!--Venta cruzada-->
            <div class="row"> <!--modelos 1 al 3-->
                <div class="col-md-3 col-sm-12 mt-3"><!--Mod 1-->
                    <div class="card bg-cruzada "> 
                        <img src="{{asset('/img/almada/venta-cruzada/aguamarina-03.png')}}" class="img-fluid" alt="Modelos disponibles | Gran Calzada">
                        <div class="titulo-cruzada text-center pt-3">
                            <h2 class="t-mod" style="color: #265B33;">Almendro</h2>
                        <p class="p-desde" style="color: #265B33;">Desde: 
                            <span>$000.00</span>
                        </p>
                        </div>
                        <div class="row" > <!--Amenidades por modelo-->
                            <div class="col-6 izq-mv">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/comedor.svg')}}" width="36" alt="">
                            </div>
                            <div class="col-6 der-mv pt-2">
                                <p>Sala / Comedor </p>
                            </div>
                            <div class="col-6 izq-mv ">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/cocina.svg')}}" width="32" alt="">
                            </div>
                            <div class="col-6 der-mv">
                                <p>Cocina <br> independiente</p>
                            </div>
                            <div class="col-6 izq-mv">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/recamara.svg')}}" width="32" alt="">
                            </div>
                            <div class="col-6 der-mv pt-1">
                                <p>2 Recámaras</p>
                            </div>
                            <div class="col-6 izq-mv">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/bano.svg')}}" width="32" alt="">
                            </div>
                            <div class="col-6 der-mv pt-3">
                                <p>1 baños</p>
                            </div>
                            <div class="espacio-bco-mv">
                            </div> 
                        </div>
                        <div class="boton-cotizar mt-2 mb-3 text-center">
                            <a href="" class="btn btn-info">Cotizar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 mt-3"> <!--Mod 2-->
                    <div class="card bg-cruzada">
                        <img src="{{asset('/img/almada/venta-cruzada/aguamarina-03.png')}}" class="img-fluid" alt="Modelos disponibles | Gran Calzada">
                        <div class="titulo-cruzada text-center pt-3">
                            <h2 class="t-mod" style="color: #265B33;">Flamboyán Plus</h2>
                        <p class="p-desde" style="color: #265B33;">Desde: 
                            <span>$000.00</span>
                        </p>
                        </div>
                        <div class="row" > <!--Amenidades por modelo-->
                            <div class="col-6 izq-mv">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/comedor.svg')}}" width="36" alt="">
                            </div>
                            <div class="col-6 der-mv pt-2">
                                <p>Sala / Comedor </p>
                            </div>
                            <div class="col-6 izq-mv ">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/cocina.svg')}}" width="32" alt="">
                            </div>
                            <div class="col-6 der-mv">
                                <p>Cocina <br> independiente</p>
                            </div>
                            <div class="col-6 izq-mv">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/recamara.svg')}}" width="32" alt="">
                            </div>
                            <div class="col-6 der-mv pt-1">
                                <p>2 Recámaras</p>
                            </div>
                            <div class="col-6 izq-mv">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/bano.svg')}}" width="32" alt="">
                            </div>
                            <div class="col-6 der-mv pt-3">
                                <p>1 baños</p>
                            </div>
                            <div class="espacio-bco-mv">
                            </div> 
                        </div>
                        <div class="boton-cotizar mt-2 mb-3 text-center">
                            <a href="" class="btn btn-info">Cotizar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 mt-3"> <!--Mod 2-->
                    <div class="card bg-cruzada">
                        <img src="{{asset('/img/almada/venta-cruzada/aguamarina-03.png')}}" class="img-fluid" alt="Modelos disponibles | Gran Calzada">
                        <div class="titulo-cruzada text-center pt-3">
                            <h2 class="t-mod" style="color: #265B33;">Bugambilia Plus</h2>
                        <p class="p-desde" style="color: #265B33;">Desde: 
                            <span>$000.00</span>
                        </p>
                        </div>
                        <div class="row" > <!--Amenidades por modelo-->
                            <div class="col-6 izq-mv">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/comedor.svg')}}" width="36" alt="">
                            </div>
                            <div class="col-6 der-mv pt-2">
                                <p>Sala / Comedor </p>
                            </div>
                            <div class="col-6 izq-mv ">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/cocina.svg')}}" width="32" alt="">
                            </div>
                            <div class="col-6 der-mv">
                                <p>Cocina <br> independiente</p>
                            </div>
                            <div class="col-6 izq-mv">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/recamara.svg')}}" width="32" alt="">
                            </div>
                            <div class="col-6 der-mv pt-1">
                                <p>2 Recámaras</p>
                            </div>
                            <div class="col-6 izq-mv">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/bano.svg')}}" width="32" alt="">
                            </div>
                            <div class="col-6 der-mv pt-3">
                                <p>1 baños</p>
                            </div>
                            <div class="col-6 izq-mv pt-2">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/terraza.svg')}}" width="40" alt="">
                            </div>
                            <div class="col-6 der-mv pt-3">
                                <p>Terraza</p>
                            </div>
                        </div>
                        <div class="boton-cotizar mt-2 mb-3 text-center">
                            <a href="" class="btn btn-info">Cotizar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 mt-3"><!--Mod 4-->
                    <div class="card bg-cruzada "> 
                        <img src="{{asset('/img/almada/venta-cruzada/aguamarina-03.png')}}" class="img-fluid" alt="Modelos disponibles | Gran Calzada">
                        <div class="titulo-cruzada text-center pt-3">
                            <h2 class="t-mod" style="color: #265B33;">Ceiba Plus</h2>
                        <p class="p-desde" style="color: #265B33;">Desde: 
                            <span>$000.00</span>
                        </p>
                        </div>
                        <div class="row" > <!--Amenidades por modelo-->
                            <div class="col-6 izq-mv">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/comedor.svg')}}" width="36" alt="">
                            </div>
                            <div class="col-6 der-mv">
                                <p>Sala / Comedor <br> / Cocina</p>
                            </div>
                            <div class="col-6 izq-mv ">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/cocina.svg')}}" width="32" alt="">
                            </div>
                            <div class="col-6 der-mv">
                                <p>Cocina <br> independiente</p>
                            </div>
                            <div class="col-6 izq-mv">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/recamara.svg')}}" width="32" alt="">
                            </div>
                            <div class="col-6 der-mv pt-1">
                                <p>2 Recámaras</p>
                            </div>
                            <div class="col-6 izq-mv">
                                <img src="{{asset('/img/miraverde/venta-cruzada/icon/bano.svg')}}" width="32" alt="">
                            </div>
                            <div class="col-6 der-mv pt-3">
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
</section>


@endsection