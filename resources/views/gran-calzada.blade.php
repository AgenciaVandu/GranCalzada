@extends('layouts.template')
@section('content')

    <header id="sgran-calzada">
        <div class="container-fluid text-center p-0">
            <img src="{{ asset('/img/gran-calzada/superior.jpg') }}" class="img-fluid p-0" alt="">
        </div>
    </header>

    <section id="conoce-los-desarrollos">
        <div class="bg-plantas">
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
            <div class="bg-azul">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 pt-5 pb-3">
                            <img src="{{ asset('/img/gran-calzada/mapaGC_.svg') }}" class="img-fluid"
                                alt="Mapa de ubicación | Gran Calzada">
                        </div>
                        <div class="col-md-6">
                            <h4 class="comunidad" style="color: #fff">Una <span class="gran">Gran</span>
                                ubicación <br>Privilegiada...</h4>
                            <div class="row text-center pt-3">
                                <div class="col-6">
                                    <div class="imagen-titulo pb-3">
                                        <img src="{{ asset('/img/icon/1-i.svg') }}" alt="">
                                    </div>
                                    <img src="{{ asset('/img/icon/5-min.svg') }}" width="40" alt="">
                                    <p class="pt-1 distancia" style="color: #fff">MIN. DE <br> PERIFÉRICO</p>
                                    <img src="{{ asset('/img/icon/8-min.svg') }}" width="40" alt="">
                                    <p class="pt-1 distancia" style="color: #fff">MIN. DE CIUDAD <br> INDUSTRIAL</p>
                                    <img src="{{ asset('/img/icon/12-min.svg') }}" width="40" alt="">
                                    <p class="pt-1 distancia" style="color: #fff">MIN. DE <br>SERVICIOS</p>
                                </div>
                                <div class="col-6">
                                    <div class="imagen-titulo pb-3">
                                        <img src="{{ asset('/img/icon/1-d.svg') }}" alt="">
                                    </div>
                                    <img src="{{ asset('/img/icon/15-min.svg') }}" width="40" alt="">
                                    <p class="pt-1 distancia" style="color: #fff">MIN. DE <br> PERIFÉRICO</p>
                                    <img src="{{ asset('/img/icon/17-min.svg') }}" width="40" alt="">
                                    <p class="pt-1 distancia" style="color: #fff">MIN. DE CIUDAD<br> INDUSTRIAL</p>
                                    <img src="{{ asset('/img/icon/18-min.svg') }}" width="40" alt="">
                                    <p class="pt-1 distancia" style="color: #fff">MIN. DE <br> SERVICIOS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <h2>Agenda una cita ¡Te estamos esperando!</h2>
                    <a href="" class="btn btn-primary mt-3 mb-5">Agenda una cita</a>
                </div>
            </div>
        </div>
    </section>

    <section id="equipamiento" >
        
            <!--Onda-s-->
            <div class="equipamiento espacio-equipamiento">
                <div class="container text-center">
                    <img src="{{ asset('img/icon/medalla.svg') }}" class="medalla" width="40"
                        alt="medalla de equipamiento | Gran Calzada">
                    <h2 style="color: #fff" class="pt-3 pb-5">Equipamiento de primer nivel</h2>
                    <div class="row">
                        <!--slider movil-->
                        <div class="col">
                            <img src="{{ asset('img/icon/Electricidad2.svg') }}" width="150"
                                alt="Equipamiento del desarrollo | Gran Calzada">
                            <h3 class="equipamiento-h pt-2">Electricidad <br>subterránea</h3>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/icon/planta2.svg') }}" width="150"
                                alt="Equipamiento del desarrollo | Gran Calzada">
                            <h3 class="equipamiento-h pt-2">Planta de <br>tratamiento</h3>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/icon/pozo2.svg') }}" width="150"
                                alt="Equipamiento del desarrollo | Gran Calzada">
                            <h3 class="equipamiento-h pt-2">Pozo de <br>captación</h3>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/icon/drenaje2.svg') }}" width="150"
                                alt="Equipamiento del desarrollo | Gran Calzada">
                            <h3 class="equipamiento-h pt-2">Drenaje <br>pluvial</h3>
                        </div>
                    </div>
                    <!--slider movil-->
                </div>
            </div>
            
        
        <!--Onda-i-->
        <div class="que-encontraras text-center espacio-que-encontraras">
            <div class="container">
                <h1 class="t-cercania">¿Qué encontrarás?</h1>
                <div class="row pt-4">
                    <!--slider movil-->
                    <div class="col">
                        <img src="{{ asset('img/gran-calzada/carateristicas/1.svg') }}" width="155"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-g sp ">Escuelas</h3>
                    </div>
                    <div class="col">
                        <img src="{{ asset('img/gran-calzada/carateristicas/2.svg') }}" width="155"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-g sp-1">Comercios</h3>
                    </div>
                    <div class="col">
                        <img src="{{ asset('img/gran-calzada/carateristicas/3.svg') }}" width="155"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-g pt-2">Áreas verdes</h3>
                    </div>
                    <div class="col">
                        <img src="{{ asset('img/gran-calzada/carateristicas/4.svg') }}" width="155"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-g pt-2">Parques <br>interactivos</h3>
                    </div>
                    <div class="col">
                        <img src="{{ asset('img/gran-calzada/carateristicas/5.svg') }}" width="155"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-g sp-2">Ciclopistas</h3>
                    </div>
                </div>
                <!--slider movil-->
            </div>
        </div>
    </section>

    <section id="master-plan">
        <div class="container pt-5">
            <div class="row text-center">
                <div class="col-2 u-almada">
                    <img src="{{ asset('img/gran-calzada/masterplan/logo-ALM.svg') }}" width="140" alt="">
                </div>
                <div class="col-8">
                    <img src="{{ asset('img/gran-calzada/masterplan/Master.svg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-2 u-miraverde">
                    <img src="{{ asset('img/gran-calzada/masterplan/logo-MVE.svg') }}" width="140" alt="">
                </div>

            </div>
        </div>
    </section>

    <section id="desarrollos-gc">
        <div class="container">
            <h2 class="text-center pt-2 titular-modelos" style="color: #1A2C4C"><span
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
                            <div class="row d-none d-sm-block">
                                <div class="col-5 icon-position pt-2">
                                    <img src="{{ asset('/img/icon/icon.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-7 justify-center ">
                                    <p class="elemento">1490 Casas</p>
                                </div>
                                <div class="col-5 icon-position pt-2">
                                    <img src="{{ asset('/img/icon/icon.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-7 justify-center ">
                                    <p class="elemento">Semi-cerrada</p>
                                </div>
                                <div class="col-5 icon-position pt-2">
                                    <img src="{{ asset('/img/icon/icon.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-7 justify-center ">
                                    <p class="elemento">5 modelos diferentes</p>
                                </div>
                                <div class="col-5 icon-position pt-2">
                                    <img src="{{ asset('/img/icon/icon.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-7 justify-center ">
                                    <p class="elemento">Rodeado de servicios</p>
                                </div>
                            </div>
                            <a href="/almada" class="btn btn-secondary btn-almada">Vive en Almada</a>
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
                            <div class="row d-none d-sm-block">
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
                                <div class="col-7 justify-center mb-4">
                                    <p class="elemento">1490 Casas</p>
                                </div>
                            </div>
                           <div class="boton-lead ">
                            <a href="/miraverde" class="btn btn-secondary mt-4 mb-4">Vive en Miraverde</a>
                           </div>
                        </div>
                    </div>
                </div>

        </div>

    </section>

    <section id="respaldo-casitas">
        <div class="container marco">
            <div class="aire">
                <div class="row">
                    <div class="col-md-2 col-sm-12 casitas">
                        <img src="{{ asset('/img/gran-calzada/Logo-Casitas.svg') }}" width="160" alt="">
                    </div>
                    <div class="col-md-10 col-sm-12 titulo-c" >
                        <h2 class="respaldo-h" style="color: #16366e">Respaldo de un <br> gran desarrollador</h2> <br>
                    </div>
                    <p style="text-align: justify" class="pb-3">Grupo Casitas Desarrollos, empresa con más de 15 años de experiencia diseñando, planeando.
                        construyendo y comercializando comunidades, en busca siempre de la innovación y sustentabilidad para
                        otorgar a los habitantes de sus desarrollos beneficios excluisvos de calidad, ubicación y diseño.
                    </p>
                </div>
                <div class="row text-center">
                    <div class="col-4">
                        <h1 class="casitas-h">20
                        </h1>
                        <p class="casitas-p">DESARROLLOS <br> CONSTRUIDOS<br> </p>

                    </div>
                    <div class="col-4">
                        <h1 class="casitas-h">20 <br></h1>
                        <p class="casitas-p">HABITANTES <br> EN NUESTROS<br>
                            DESARROLLOS</p>
                    </div>
                    <div class="col-4">
                        <h1 class="casitas-h">20</h1>
                        <p class="casitas-p">CASAS <br> VENDIDAS<br>
                            DESARROLLOS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
