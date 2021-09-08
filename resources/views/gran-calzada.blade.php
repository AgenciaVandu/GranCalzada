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
                <div class="row espacio text-center">
                    <div class="col-md-8 ">
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

    <section id="equipamiento">
        <div class="onda-s">
            <!--Onda-s-->
            <div class="container text-center">
                <img src="{{ asset('img/icon/medalla.svg') }}" class="pt-4" width="70"
                    alt="medalla de equipamiento | Gran Calzada">
                <h1 style="color: #fff" class="pt-3 pb-4">Equipamiento de primer nivel</h1>
                <div class="row">
                    <!--slider movil-->
                    <div class="col-md-3">
                        <img src="{{ asset('img/icon/planta2.svg') }}" width="180"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-h pt-2">Electricidad <br>subterránea</h3>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('img/icon/planta2.svg') }}" width="180"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-h pt-2">Planta de <br>tratamiento</h3>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('img/icon/planta2.svg') }}" width="180"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-h pt-2">Pozo de <br>captación</h3>
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('img/icon/planta2.svg') }}" width="180"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-h pt-2">Drenaje <br>pluvial</h3>
                    </div>
                </div>
                <!--slider movil-->
            </div>
        </div>
        <!--Onda-i-->
        <div class="que-encontraras text-center pt-5">
            <div class="container">
                <h1 class="t-cercania">¿Qué encontrarás?</h1>
                <div class="row pt-4">
                    <!--slider movil-->
                    <div class="col">
                        <img src="{{ asset('img/gran-calzada/carateristicas/1.svg') }}" width="180"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-g sp ">Escuelas</h3>
                    </div>
                    <div class="col">
                        <img src="{{ asset('img/gran-calzada/carateristicas/2.svg') }}" width="180"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-g sp-1">Comercios</h3>
                    </div>
                    <div class="col">
                        <img src="{{ asset('img/gran-calzada/carateristicas/3.svg') }}" width="180"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-g pt-2">Áreas verdes</h3>
                    </div>
                    <div class="col">
                        <img src="{{ asset('img/gran-calzada/carateristicas/4.svg') }}" width="180"
                            alt="Equipamiento del desarrollo | Gran Calzada">
                        <h3 class="equipamiento-g pt-2">Parques <br>interactivos</h3>
                    </div>
                    <div class="col">
                        <img src="{{ asset('img/gran-calzada/carateristicas/5.svg') }}" width="180"
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
                    <img src="{{ asset('img/gran-calzada/masterplan/logo-ALM.svg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-8">
                    <map id="mapMaster" name="mapMaster">
                        <area shape="poly" alt="" title=""
                            coords="15,401,588,319,608,272,488,230,467,202,282,156,138,285" href="/miraverde" target="" />
                        <area
                            shape="poly" alt="" title=""
                            coords="611,271,646,203,617,196,640,155,619,148,628,119,583,105,613,68,672,80,674,76,605,60,592,75,440,48,398,53,289,149,469,198,495,226"
                            href="/almada" target="" />
                    </map>
                    <img src="{{ asset('img/gran-calzada/masterplan/Master.svg') }}" class="img-fluid" alt="" usemap="#mapMaster">
                </div>
                <div class="col-2 u-miraverde">
                    <img src="{{ asset('img/gran-calzada/masterplan/logo-MVE.svg') }}" class="img-fluid" alt="">
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
                <div class="col-6 text-center">
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

                <div class="col-6 text-center">
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

    <section id="respaldo-casitas">
        <div class="container marco">
            <div class="aire">
                <div class="row">
                    <div class="col-2 casitas">
                        <img src="{{ asset('/img/gran-calzada/Logo-Casitas.svg') }}" width="180" alt="">
                    </div>
                    <div class="col-10 titulo-c" style="text-align: left">
                        <h2 style="color: #16366e">Respaldo de un <br> gran desarrollador</h2>
                    </div>
                    <p>Grupo Casitas Desarrollos, empresa con más de 15 años de experiencia diseñando, planeando.
                        construyendo y comercializando comunidades, en busca siempre de la innovación y sustentabilidad para
                        otorgar a los habitantes de sus desarrollos beneficios excluisvos de calidad, ubicación y diseño.
                    </p>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <h1 class="casitas-h">20 <br> <span class="casitas-p">DESARROLLOS<br> CONSTRUIDOS</span>
                        </h1>
                    </div>
                    <div class="col-md-4">
                        <h1 class="casitas-h">20 <br> <span class="casitas-p">HABITANTES <br> EN NUESTROS<br>
                                DESARROLLOS</span></h1>
                    </div>
                    <div class="col-md-4">
                        <h1 class="casitas-h">20 <br> <span class="casitas-p">CASAS <br> VENDIDAS</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
