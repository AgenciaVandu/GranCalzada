@extends('layouts.template')
@section('content')
    <header id="almada-top">
        <div class="sp-top">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/img/miraverde/slider/mv-top-03.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/miraverde/slider/mv-top-03.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/miraverde/slider/mv-top-03.jpg') }}" class="d-block w-100" alt="...">
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
                        <img src="{{ asset('/img/miraverde/mv-logo.svg') }}" width="240" alt="">
                        <p style="color: #fff; padding:40px;">Miraverde es una privada habitacional de 2,314 casas (4
                            diferentes modelos) que se encuentran en la parte norte de la Gran Calzada. Ofrece a sus
                            habitantes un gran parque central que consta de
                            8 amenidades, espacios seguros a través de su caseta de seguridad, barda perimetral. Un entorno
                            lleno de vegetación que crea un ambiente más fresco. Podrás encontrar un árbol cada 2 casas
                            convirtendolo
                            en un lugar para disfrutar.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 text-center p-caract">
                            <div class="row">
                                <div class="col-6 pt-3">
                                    <img src="{{ asset('/img/almada/icon/icono-clusters-03.svg') }}" width="80"
                                        alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">8 CLUSTERS</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{ asset('/img/almada/icon/casas-icono-03.svg') }}" width="80"
                                        alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">2,371 CASAS</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{ asset('/img/almada/icon/areas-verdes-icono-03.svg') }}" width="80"
                                        alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">1 GRAN PARQUE <br>CENTRAL POR <br> CLUSTER</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{ asset('/img/almada/icon/bardas-icono-03.svg') }}" width="80"
                                        alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">BARDA<br> PERIMETRAL</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{ asset('/img/almada/icon/control-03.svg') }}" width="80"
                                        alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">ACCESO <br> VEHICULAR CONTROLADO</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{ asset('/img/almada/icon/modelos-iconos-03.svg') }}" width="80"
                                        alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">4 MODELOS<br>DE VIVIENDA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center">
                            <img src="/img/almada/icon/master-almada.svg" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-12 disfruta-titular">
                        <h4 class="disfruta pb-3">Disfruta la vida <br>
                            <span class="disfruta-color">EN TU NUEVO HOGAR</span>
                        </h4>
                        <a href="" class="btn btn-primary">DESCARGAR BROCHURE</a>
                    </div>
                </div>
                <div class="bg-mv ">
                    <div class="detalle-mv-2">
                        <div class="container ">
                            <h4 class="titular-mv-2">Estas amenidades las encontrarás<br>
                                <span class="inner-titular-2">en cada uno de los clusters:</span>
                            </h4>
                            <div class="row pt-4">
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-6 icon-amenidades-mv">
                                            <img src="{{ asset('/img/miraverde/amenidades/terraza-03.svg') }}" width="43"
                                                alt="">
                                        </div>
                                        <div class="col-6">
                                            <p class="amenidades-en-mv pt-2">Terraza semitechada</p>
                                        </div>
                                        <div class="col-6 icon-amenidades-mv">
                                            <img src="{{ asset('/img/miraverde/amenidades/chapoteadero-03.svg') }}"
                                                width="43" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p class="amenidades-en-mv pt-2">Chapoteadero</p>
                                        </div>
                                        <div class="col-6 icon-amenidades-mv">
                                            <img src="{{ asset('/img/miraverde/amenidades/gimnasio-03.svg') }}"
                                                width="43" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p class="amenidades-en-mv pt-2">Gym al aire libre</p>
                                        </div>
                                        <div class="col-6 icon-amenidades-mv">
                                            <img src="{{ asset('/img/miraverde/amenidades/tradicionales.svg') }}"
                                                width="43" alt="">
                                        </div>
                                        <div class="col-6">
                                            <p class="amenidades-en-mv pt-2">Área de juegos tradicionales</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-6 icon-amenidades-mv-1">
                                            <img src="{{ asset('/img/miraverde/amenidades/balon-03.svg') }}" width="43"
                                                alt="">
                                        </div>
                                        <div class="col-6 p-amenidad-mv">
                                            <p class="amenidades-en-mv-1 pt-2">Cancha de usos múltiples</p>
                                        </div>
                                        <div class="col-6 icon-amenidades-mv-1">
                                            <img src="{{ asset('/img/miraverde/amenidades/gradas-03.svg') }}" width="43"
                                                alt="">
                                        </div>
                                        <div class="col-6 p-amenidad-mv">
                                            <p class="amenidades-en-mv-1 pt-2">Gradas</p>
                                        </div>
                                        <div class="col-6 icon-amenidades-mv-1">
                                            <img src="{{ asset('/img/miraverde/amenidades/area-de-juegos-03.svg') }}"
                                                width="43" alt="">
                                        </div>
                                        <div class="col-6 p-amenidad-mv">
                                            <p class="amenidades-en-mv-1 pt-2">Área de juegos infantiles</p>
                                        </div>
                                        <div class="col-6 icon-amenidades-mv-1">
                                            <img src="{{ asset('/img/miraverde/amenidades/pista-de-trote-03.svg') }}"
                                                width="43" alt="">
                                        </div>
                                        <div class="col-6 p-amenidad-mv">
                                            <p class="amenidades-en-mv-1 pt-2">Pista de Jogging</p>
                                        </div>
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
                    <img src="{{ asset('/img/modelos/1.svg') }}" width="40"
                        alt="datos relevantes | Gran Calzada">
                    <p class="entorno-p">338 <br><span class="entorno-sp" style="color: #fff;">Viviendas</span></p>
                </div>
                <div class="col">
                    <img src="{{ asset('/img/modelos/2.svg') }}" width="40"
                        alt="datos relevantes | Gran Calzada">
                    <p class="entorno-p">1 Gran <br><span class="entorno-sp" style="color: #fff;">Parque
                            Central</span></p>
                </div>
                <div class="col">
                    <img src="{{ asset('/img/modelos/3.svg') }}" width="40"
                        alt="datos relevantes | Gran Calzada">
                    <p class="entorno-p">8 <br><span class="entorno-sp" style="color: #fff;">Amenidades</span></p>
                </div>
                <div class="col">
                    <img src="{{ asset('/img/modelos/4.svg') }}" width="40"
                        alt="datos relevantes | Gran Calzada">
                    <p class="entorno-p">Barda <br><span class="entorno-sp" style="color: #fff;">Perimetral</span>
                    </p>
                </div>
                <div class="col">
                    <img src="{{ asset('/img/modelos/5.svg') }}" width="40"
                        alt="datos relevantes | Gran Calzada">
                    <p class="entorno-p">1 Caseta <br><span class="entorno-sp" style="color: #fff;">con acceso
                            <br>controlado</span></p>
                </div>
                <div class="col">
                    <img src="{{ asset('/img/modelos/6.svg') }}" width="40"
                        alt="datos relevantes | Gran Calzada">
                    <p class="entorno-p">2 accesos<br><span class="entorno-sp"
                            style="color: #fff;">peatonales</span></p>
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
                        <img src="{{ asset('/img/almada/cluster.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/almada/cluster.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/almada/cluster.jpg') }}" class="d-block w-100" alt="...">
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
        <div class="container-fluid text-center">
            <div class="row pt-5">
                <div class="col-md-6">
                    <p class="amenidades-r">8 Amenidades <br> para los residentes</p>
                </div>
                <div class="col-md-6 text-center pt-3">
                    <a href="" class="btn btn-warning ">CONOCE LOS DESARROLLOS</a>
                </div>
            </div>
            <div class="col-12">
                <h4 class="cotiza-color">¡Cotiza tu Casa!</h4>
            </div>
            <div class="col-12">
                <svg version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 1207.2158 853.73132" xml:space="preserve"
                    sodipodi:docname="miraverde.svg" width="1207.2158" height="853.73132"
                    inkscape:version="1.1 (c68e22c387, 2021-05-23)"
                    xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                    xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg"
                    xmlns:svg="http://www.w3.org/2000/svg">
                    <defs id="defs3517">

                    </defs>
                    <sodipodi:namedview id="namedview3515" pagecolor="#ffffff" bordercolor="#999999" borderopacity="1"
                        inkscape:pageshadow="0" inkscape:pageopacity="0" inkscape:pagecheckerboard="0" showgrid="false"
                        fit-margin-top="0" fit-margin-left="0" fit-margin-right="0" fit-margin-bottom="0"
                        inkscape:zoom="4.2346806" inkscape:cx="838.31589" inkscape:cy="571.58975"
                        inkscape:window-width="1920" inkscape:window-height="1001" inkscape:window-x="-9"
                        inkscape:window-y="-9" inkscape:window-maximized="1" inkscape:current-layer="Capa_1" />
                    <style type="text/css" id="style2">
                        .st0 {
                            fill: #255B33;
                        }

                        .st1 {
                            font-family: 'Avenir-Black';
                        }

                        .st2 {
                            font-size: 34.5154px;
                        }

                        .st3 {
                            letter-spacing: 3;
                        }

                        .st4 {
                            fill: none;
                            stroke: #255B33;
                            stroke-miterlimit: 10;
                        }

                        .st5 {
                            fill: #285A33;
                        }

                        .st6 {
                            font-family: 'Syne-Bold';
                        }

                        .st7 {
                            font-size: 21.4324px;
                        }

                        .st8 {
                            font-size: 16.1343px;
                        }

                        .st9 {
                            fill: #DC9643;
                        }

                        .st10 {
                            font-size: 11px;
                        }

                        .st11 {
                            opacity: 0.2;
                            fill: #F6A733;
                        }

                        .st12 {
                            fill: #CAC8C8;
                        }

                        .st13 {
                            fill: #FDEEEB;
                        }

                        .st14 {
                            fill: #5EB030;
                        }

                        .st15 {
                            fill: #777778;
                            stroke: #FFFFFF;
                            stroke-width: 0.25;
                            stroke-miterlimit: 10;
                        }

                        .st16 {
                            fill: #FFFFFF;
                            stroke: #1D1D1B;
                            stroke-width: 0.25;
                            stroke-miterlimit: 10;
                        }

                        .st17 {
                            fill: #FFFFFF;
                            font-weight: bold;
                        }

                        .st18 {
                            font-family: 'MyriadPro-Regular';
                        }

                        .st19 {
                            font-size: 8.5px;
                        }

                        .st20 {
                            fill: #ffffff;
                        }

                        .st21 {
                            font-size: 6px;
                        }

                        .st22 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                        }

                        .st23 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 7.1429, 3.5714;
                        }

                        .st24 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 8.1481, 4.074;
                        }

                        .st25 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 7.5286, 3.7643;
                        }

                        .st26 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 8.1714, 4.0857;
                        }

                        .st27 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 8, 4;
                        }

                        .st28 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 8.0902, 4.0451;
                        }

                        .st29 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 7.9534, 3.9767;
                        }

                        .st30 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 8.0857, 4.0429;
                        }

                        .st31 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 8.2691, 4.1346;
                        }

                        .st32 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 8.4962, 4.2481;
                        }

                        .st33 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 8.2191, 4.1095;
                        }

                        .st34 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 7.0143, 3.5071;
                        }

                        .st35 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 6.8652, 3.4326;
                        }

                        .st36 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 7.0541, 3.5271;
                        }

                        .st37 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 9.0294, 4.5147;
                        }

                        .st38 {
                            fill: none;
                            stroke: #FCD100;
                            stroke-width: 4;
                            stroke-miterlimit: 10;
                            stroke-dasharray: 8.1478, 4.0739;
                        }

                        .st39 {
                            font-size: 19.9496px;
                        }

                        .st40 {
                            font-size: 13px;
                        }

                        .st41 {
                            font-size: 11.8234px;
                        }

                        .st42 {
                            fill: #1D2A4C;
                        }

                        .st43 {
                            fill: #E1AA48;
                        }

                        .st44 {
                            fill: #304796;
                        }

                        .st45 {
                            fill: #E42320;
                        }

                        .st46 {
                            fill: #C4589C;
                        }

                        .st47 {
                            fill: #18274E;
                        }

                        .st48 {
                            font-family: 'Avenir-Roman';
                        }

                        .st49 {
                            font-size: 12.5294px;
                        }

                        .st50 {
                            fill: #E73E73;
                        }

                        .st51 {
                            fill: #1D1D1B;
                        }

                        .st52 {
                            font-size: 10px;
                        }

                        .st53 {
                            fill: #C6637F;
                        }

                        .st54 {
                            fill: #F7AF51;
                        }

                        .st55 {
                            fill: #376EA8;
                        }

                        .st56 {
                            fill: none;
                            stroke: #F7AF51;
                            stroke-width: 0.38;
                            stroke-miterlimit: 10;
                        }

                        .st57 {
                            fill: none;
                            stroke: #C6637F;
                            stroke-width: 0.38;
                            stroke-miterlimit: 10;
                        }

                        .st58 {
                            fill: none;
                            stroke: #376EA8;
                            stroke-width: 0.38;
                            stroke-miterlimit: 10;
                        }

                        .st59 {
                            fill: #3C3C3B;
                        }

                        .st60 {
                            fill: #777778;
                        }

                        .st61 {
                            fill: none;
                            stroke: #777778;
                            stroke-miterlimit: 10;
                        }

                        .st62 {
                            font-family: 'ArialMT';
                        }

                        .st63 {
                            font-size: 7.6731px;
                        }

                        .st64 {
                            font-size: 7.6732px;
                        }

                        .st65 {
                            fill: none;
                            stroke: #305F29;
                            stroke-miterlimit: 10;
                        }

                        .st66 {
                            fill: #ff0000;
                            stroke: #1D1D1B;
                            stroke-width: 0.25;
                            stroke-miterlimit: 10;
                        }

                        .st67 {
                            fill: #3700ff;
                            stroke: #1D1D1B;
                            stroke-width: 0.25;
                            stroke-miterlimit: 10;
                        }

                        .st68 {
                            fill: #007a47;
                            stroke: #1D1D1B;
                            stroke-width: 0.25;
                            stroke-miterlimit: 10;
                        }

                    </style>
                    {{-- <g id="g20" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(166.1465,717.6689)" id="text18">
                            <tspan x="0" y="0" class="st0 st1 st2 st3" id="tspan4">E</tspan>
                            <tspan x="24.9" y="0" class="st0 st1 st2" id="tspan6">T</tspan>
                            <tspan x="44.599998" y="0" class="st0 st1 st2 st3" id="tspan8">A</tspan>
                            <tspan x="73.300003" y="0" class="st0 st1 st2" id="tspan10">P</tspan>
                            <tspan x="95.599998" y="0" class="st0 st1 st2 st3" id="tspan12">A</tspan>
                            <tspan x="124.2" y="0" class="st0 st1 st2 st3" id="tspan14"> </tspan>
                            <tspan x="137.5" y="0" class="st0 st1 st2" id="tspan16">1</tspan>
                        </text>
                    </g> --}}
                    {{-- <rect x="308.19739" y="782.84851" class="st4" width="806.20496" height="70.301819"
                        id="rect22" style="stroke-width:1.16201" /> --}}
                    {{-- < text id="text30" x="318.35153" y="808.36267" style="font-size:13.9442px;stroke-width:1.16201">
                        <tspan x="318.35153" y="808.36267" class="st5 st6 st7" id="tspan24"
                            style="stroke-width:1.16201">8</tspan>
                        <tspan x="335.20071" y="804.87665" class="st5 st6 st7" id="tspan26"
                            style="stroke-width:1.16201">9</tspan>
                        <tspan x="352.51471" y="808.36267" class="st5 st6 st7" id="tspan28"
                            style="stroke-width:1.16201"> Viviendas
                        </tspan>
                    </text>
                    <text id="text36" x="318.26123" y="826.31287" style="font-size:13.9442px;stroke-width:1.16201">
                        <tspan x="318.26123" y="826.31287" class="st5 st6 st8" id="tspan32"
                            style="stroke-width:1.16201">3</tspan>
                        <tspan x="330.22998" y="828.6369" class="st5 st6 st8" id="tspan34" style="stroke-width:1.16201">
                            Colores a elegir
                        </tspan>
                    </text> --}}
                    {{-- <g id="g40" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(543.0186,689.6568)" class="st9 st6 st10" id="text38">Almendro</text>
                    </g> --}}
                    <rect x="356.07233" y="249.94911" class="st11" width="74.368866" height="105.74323"
                        id="rect42" style="stroke-width:1.16201" />
                    <g id="g46" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <path class="st12"
                            d="M 405,215.4 404.8,57.8 h 346.7 l 2,140.9 33.6,-2.6 2.6,-5.2 19.8,-3.4 2.6,7.8 48.2,-6 v 389.2 l 0.9,34.4 -31,-1.7 -70.6,12.1 h -47.4 l -17.2,-7.8 -22.4,0.9 -8.6,6 H 419.4 c 0,0 -1.7,-27.6 -34.4,-36.2 l -0.9,-259.2 2.6,-21.5 h 58.6 l 0.1,-90.1 z"
                            id="path44" />
                    </g>
                    <rect x="550.82581" y="302.1235" class="st13" width="199.1691" height="102.8382" id="rect48"
                        style="stroke-width:1.16201" />
                    <path class="st14"
                        d="m 593.47168,372.54152 c 4.53186,0.1162 8.7151,2.09162 11.73634,5.46146 5.11286,5.81007 13.47936,14.75757 18.35981,17.66261 5.57767,3.36984 68.675,4.41565 100.86277,4.76425 9.87712,0.1162 17.5464,-8.5989 16.26819,-18.35981 l -8.13409,-61.58671 c -1.04582,-8.2503 -8.2503,-14.29277 -16.5006,-14.06037 l -133.39914,3.95085 c -2.78883,0.1162 -5.57767,0.92961 -8.0179,2.44023 l -4.18324,2.55643 c -3.25364,1.97542 -5.69387,5.11286 -6.85588,8.7151 l -1.27822,3.83464 c -0.581,1.62682 -0.81341,3.36984 -0.81341,5.11286 v 21.38105 c 0,2.55643 0.58101,4.99666 1.74302,7.20448 v 0 c 2.09163,4.18325 5.81007,7.20449 10.34192,8.3665 l 6.04247,1.62682 c 1.27822,0.3486 2.44023,0.4648 3.71845,0.58101 z"
                        id="path50" style="stroke-width:1.16201" />
                    <g>
                        @foreach ($lots as $lot)
                            <a xlink:href="#cotiza-tu-casa"
                                xlink:title="{{ $lot->number }} - @switch($lot->status)@case('sold') Vendido @break @case('reservation') Apartado @break @case('available') Disponible @break @case('hold') No disponible @break @endswitch"
                                data-toggle="modal" data-target="#myModal-{{ $lot->id }}">
                                <polyline class="@switch($lot->status)@case('sold') st66 @break @case('reservation') st67 @break @case('available') st68 @break @case('hold') {{ $lot->class }} @break @endswitch"
                                    points="{{ $lot->x }}" id="M147" transform="{{ $lot->y }}" />
                            </a>
                        @endforeach
                    </g>
                    <text class="st17 st18 st19" id="text728" x="504.39941" y="345.22025"
                        style="stroke-width:1.16201">24</text>
                    <text class="st20 st18 st19" id="text730" x="386.32166" y="391.70081"
                        style="stroke-width:1.16201">59</text>
                    <text class="st20 st18 st19" id="text732" x="386.32166" y="407.19427"
                        style="stroke-width:1.16201">60</text>
                    <text class="st20 st18 st19" id="text734" x="386.32166" y="422.68774"
                        style="stroke-width:1.16201">61</text>
                    <text class="st20 st18 st19" id="text736" x="386.32166" y="438.18134"
                        style="stroke-width:1.16201">62</text>
                    <text class="st20 st18 st19" id="text738" x="386.32166" y="453.6748"
                        style="stroke-width:1.16201">63</text>
                    <text class="st20 st18 st19" id="text740" x="386.32166" y="469.16827"
                        style="stroke-width:1.16201">64</text>
                    <text class="st20 st18 st19" id="text742" x="386.32166" y="483.49985"
                        style="stroke-width:1.16201">65</text>
                    <text class="st20 st18 st19" id="text744" x="386.32166" y="498.99335"
                        style="stroke-width:1.16201">66</text>
                    <text class="st20 st18 st19" id="text746" x="386.32166" y="514.48682"
                        style="stroke-width:1.16201">67</text>
                    <text class="st20 st18 st19" id="text748" x="386.32166" y="529.98041"
                        style="stroke-width:1.16201">68</text>
                    <text class="st20 st18 st19" id="text750" x="386.32166" y="545.47388"
                        style="stroke-width:1.16201">69</text>
                    <text class="st20 st18 st19" id="text752" x="386.32166" y="560.96747"
                        style="stroke-width:1.16201">70</text>
                    <text class="st20 st18 st19" id="text754" x="386.32166" y="576.46094"
                        style="stroke-width:1.16201">71</text>
                    <text class="st20 st18 st19" id="text756" x="386.32166" y="591.95453"
                        style="stroke-width:1.16201">72</text>
                    <text class="st20 st18 st19" id="text758" x="386.32166" y="607.448"
                        style="stroke-width:1.16201">73</text>
                    <text class="st20 st18 st19" id="text760" x="386.32166" y="621.77948"
                        style="stroke-width:1.16201">74</text>
                    <text class="st20 st18 st19" id="text762" x="386.32166" y="637.27307"
                        style="stroke-width:1.16201">75</text>
                    <g id="g766" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(458.9466,595.088)" class="st20 st18 st19" id="text764">76</text>
                    </g>
                    <g id="g770" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(471.9466,595.088)" class="st20 st18 st19" id="text768">77</text>
                    </g>
                    <g id="g774" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(484.9466,595.088)" class="st20 st18 st19" id="text772">78</text>
                    </g>
                    <g id="g778" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(498.9466,595.088)" class="st20 st18 st19" id="text776">79</text>
                    </g>
                    <g id="g782" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(511.9466,595.088)" class="st20 st18 st19" id="text780">80</text>
                    </g>
                    <g id="g786" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(524.9465,595.088)" class="st20 st18 st19" id="text784">81</text>
                    </g>
                    <g id="g790" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(537.9465,595.088)" class="st20 st18 st19" id="text788">82</text>
                    </g>
                    <g id="g794" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(550.9465,595.088)" class="st20 st18 st19" id="text792">83</text>
                    </g>
                    <g id="g798" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(563.9465,595.088)" class="st20 st18 st19" id="text796">84</text>
                    </g>
                    <g id="g802" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(577.9465,595.088)" class="st20 st18 st19" id="text800">85</text>
                    </g>
                    <g id="g806" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(590.9465,595.088)" class="st20 st18 st19" id="text804">86</text>
                    </g>
                    <g id="g810" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(603.9465,595.088)" class="st20 st18 st19" id="text808">87</text>
                    </g>
                    <g id="g814" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(616.9465,595.088)" class="st20 st18 st19" id="text812">88</text>
                    </g>
                    <g id="g818" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(629.9465,595.088)" class="st20 st18 st19" id="text816">89</text>
                    </g>
                    <g id="g822" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(643.9465,595.088)" class="st20 st18 st19" id="text820">90</text>
                    </g>
                    <g id="g826" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(656.9465,595.088)" class="st20 st18 st19" id="text824">91</text>
                    </g>
                    <g id="g830" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(669.9465,595.088)" class="st20 st18 st19" id="text828">92</text>
                    </g>
                    <g id="g834" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(682.9465,595.088)" class="st20 st18 st19" id="text832">93</text>
                    </g>
                    <g id="g838" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(695.9465,595.088)" class="st20 st18 st19" id="text836">94</text>
                    </g>
                    <g id="g842" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(708.9465,595.088)" class="st20 st18 st19" id="text840">95</text>
                    </g>
                    <g id="g846" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(721.9465,595.088)" class="st20 st18 st19" id="text844">96</text>
                    </g>
                    <text class="st17 st18 st19" id="text848" x="776.31042" y="652.76654"
                        style="stroke-width:1.16201">97</text>
                    <text class="st17 st18 st19" id="text850" x="791.41663" y="652.76654"
                        style="stroke-width:1.16201">98</text>
                    <text class="st17 st18 st19" id="text852" x="805.36078" y="652.76654"
                        style="stroke-width:1.16201">99</text>
                    <text class="st17 st18 st19" id="text854" x="819.69189" y="652.76654"
                        style="stroke-width:1.16201">100</text>
                    <text class="st17 st18 st19" id="text856" x="834.7981" y="652.76654"
                        style="stroke-width:1.16201">101</text>
                    <text class="st17 st18 st19" id="text858" x="849.90424" y="652.76654"
                        style="stroke-width:1.16201">102</text>
                    <text class="st17 st18 st19" id="text860" x="866.17242" y="652.76654"
                        style="stroke-width:1.16201">103</text>
                    <text class="st17 st18 st19" id="text862" x="881.27863" y="652.76654"
                        style="stroke-width:1.16201">104</text>
                    <text class="st17 st18 st19" id="text864" x="896.38477" y="652.76654"
                        style="stroke-width:1.16201">105</text>
                    <text class="st17 st18 st19" id="text866" x="886.3136" y="600.86322"
                        style="stroke-width:1.16201">106</text>
                    <text class="st17 st18 st19" id="text868" x="886.3136" y="585.75702"
                        style="stroke-width:1.16201">107</text>
                    <text class="st17 st18 st19" id="text870" x="886.3136" y="570.65088"
                        style="stroke-width:1.16201">108</text>
                    <text class="st17 st18 st19" id="text872" x="886.3136" y="555.54468"
                        style="stroke-width:1.16201">109</text>
                    <text class="st17 st18 st19" id="text874" x="886.3136" y="540.43854"
                        style="stroke-width:1.16201">110</text>
                    <text class="st17 st18 st19" id="text876" x="886.3136" y="524.17035"
                        style="stroke-width:1.16201">111</text>
                    <text class="st17 st18 st19" id="text878" x="886.3136" y="509.06415"
                        style="stroke-width:1.16201">112</text>
                    <text class="st17 st18 st19" id="text880" x="886.3136" y="493.95798"
                        style="stroke-width:1.16201">113</text>
                    <text class="st17 st18 st19" id="text882" x="886.3136" y="478.85181"
                        style="stroke-width:1.16201">114</text>
                    <text class="st17 st18 st19" id="text884" x="886.3136" y="463.74564"
                        style="stroke-width:1.16201">115</text>
                    <text class="st17 st18 st19" id="text886" x="886.3136" y="448.63947"
                        style="stroke-width:1.16201">116</text>
                    <text class="st17 st18 st19" id="text888" x="886.3136" y="433.53329"
                        style="stroke-width:1.16201">117</text>
                    <text class="st17 st18 st19" id="text890" x="886.3136" y="417.26511"
                        style="stroke-width:1.16201">118</text>
                    <text class="st17 st18 st19" id="text892" x="886.3136" y="402.15891"
                        style="stroke-width:1.16201">119</text>
                    <text class="st17 st18 st19" id="text894" x="886.3136" y="387.05273"
                        style="stroke-width:1.16201">120</text>
                    <text class="st17 st18 st19" id="text896" x="886.3136" y="371.94656"
                        style="stroke-width:1.16201">121</text>
                    <text class="st17 st18 st19" id="text898" x="886.3136" y="356.84039"
                        style="stroke-width:1.16201">122</text>
                    <text class="st17 st18 st19" id="text900" x="886.3136" y="341.73422"
                        style="stroke-width:1.16201">123</text>
                    <text class="st17 st18 st19" id="text902" x="886.3136" y="326.62805"
                        style="stroke-width:1.16201">124</text>
                    <text class="st17 st18 st19" id="text904" x="886.3136" y="310.35986"
                        style="stroke-width:1.16201">125</text>
                    <text class="st17 st18 st19" id="text906" x="886.3136" y="295.25369"
                        style="stroke-width:1.16201">126</text>
                    <text class="st17 st18 st19" id="text908" x="824.33997" y="600.86322"
                        style="stroke-width:1.16201">338</text>
                    <text class="st17 st18 st19" id="text910" x="824.33997" y="585.75702"
                        style="stroke-width:1.16201">337</text>
                    <text class="st17 st18 st19" id="text912" x="824.33997" y="570.65088"
                        style="stroke-width:1.16201">336</text>
                    <text class="st17 st18 st19" id="text914" x="824.33997" y="555.54468"
                        style="stroke-width:1.16201">335</text>
                    <text class="st17 st18 st19" id="text916" x="824.33997" y="540.43854"
                        style="stroke-width:1.16201">334</text>
                    <text class="st17 st18 st19" id="text918" x="824.33997" y="524.17035"
                        style="stroke-width:1.16201">333</text>
                    <text class="st17 st18 st19" id="text920" x="824.33997" y="509.06415"
                        style="stroke-width:1.16201">332</text>
                    <text class="st17 st18 st19" id="text922" x="824.33997" y="493.95798"
                        style="stroke-width:1.16201">331</text>
                    <text class="st17 st18 st19" id="text924" x="824.33997" y="478.85181"
                        style="stroke-width:1.16201">330</text>
                    <text class="st17 st18 st19" id="text926" x="824.33997" y="463.74564"
                        style="stroke-width:1.16201">329</text>
                    <text class="st17 st18 st19" id="text928" x="824.33997" y="448.63947"
                        style="stroke-width:1.16201">328</text>
                    <text class="st17 st18 st19" id="text930" x="824.33997" y="433.53329"
                        style="stroke-width:1.16201">327</text>
                    <text class="st17 st18 st19" id="text932" x="824.33997" y="417.26511"
                        style="stroke-width:1.16201">326</text>
                    <text class="st17 st18 st19" id="text934" x="824.33997" y="402.15891"
                        style="stroke-width:1.16201">325</text>
                    <text class="st17 st18 st19" id="text936" x="824.33997" y="387.05273"
                        style="stroke-width:1.16201">324</text>
                    <text class="st17 st18 st19" id="text938" x="824.33997" y="371.94656"
                        style="stroke-width:1.16201">323</text>
                    <text class="st17 st18 st19" id="text940" x="824.33997" y="356.84039"
                        style="stroke-width:1.16201">322</text>
                    <text class="st17 st18 st19" id="text942" x="824.33997" y="341.73422"
                        style="stroke-width:1.16201">321</text>
                    <text class="st17 st18 st19" id="text944" x="824.33997" y="326.62805"
                        style="stroke-width:1.16201">320</text>
                    <text class="st17 st18 st19" id="text946" x="824.33997" y="310.35986"
                        style="stroke-width:1.16201">319</text>
                    <text class="st17 st18 st19" id="text948" x="824.33997" y="295.25369"
                        style="stroke-width:1.16201">318</text>
                    <text class="st17 st18 st19" id="text950" x="785.60596" y="600.86322"
                        style="stroke-width:1.16201">297</text>
                    <text class="st17 st18 st19" id="text952" x="785.60596" y="585.75702"
                        style="stroke-width:1.16201">298</text>
                    <text class="st17 st18 st19" id="text954" x="785.60596" y="570.65088"
                        style="stroke-width:1.16201">299</text>
                    <text class="st17 st18 st19" id="text956" x="785.60596" y="555.54468"
                        style="stroke-width:1.16201">300</text>
                    <text class="st17 st18 st19" id="text958" x="785.60596" y="540.43854"
                        style="stroke-width:1.16201">301</text>
                    <text class="st17 st18 st19" id="text960" x="785.60596" y="524.17035"
                        style="stroke-width:1.16201">302</text>
                    <text class="st17 st18 st19" id="text962" x="785.60596" y="509.06415"
                        style="stroke-width:1.16201">303</text>
                    <text class="st17 st18 st19" id="text964" x="785.60596" y="493.95798"
                        style="stroke-width:1.16201">304</text>
                    <text class="st17 st18 st19" id="text966" x="785.60596" y="478.85181"
                        style="stroke-width:1.16201">305</text>
                    <text class="st17 st18 st19" id="text968" x="785.60596" y="463.74564"
                        style="stroke-width:1.16201">306</text>
                    <text class="st17 st18 st19" id="text970" x="785.60596" y="448.63947"
                        style="stroke-width:1.16201">307</text>
                    <text class="st17 st18 st19" id="text972" x="785.60596" y="433.53329"
                        style="stroke-width:1.16201">308</text>
                    <text class="st17 st18 st19" id="text974" x="785.60596" y="417.26511"
                        style="stroke-width:1.16201">309</text>
                    <text class="st17 st18 st19" id="text976" x="785.60596" y="402.15891"
                        style="stroke-width:1.16201">310</text>
                    <text class="st17 st18 st19" id="text978" x="785.60596" y="387.05273"
                        style="stroke-width:1.16201">311</text>
                    <text class="st17 st18 st19" id="text980" x="785.60596" y="371.94656"
                        style="stroke-width:1.16201">312</text>
                    <text class="st17 st18 st19" id="text982" x="785.60596" y="356.84039"
                        style="stroke-width:1.16201">313</text>
                    <text class="st17 st18 st19" id="text984" x="785.60596" y="341.73422"
                        style="stroke-width:1.16201">314</text>
                    <text class="st17 st18 st19" id="text986" x="785.60596" y="326.62805"
                        style="stroke-width:1.16201">315</text>
                    <text class="st17 st18 st19" id="text988" x="785.60596" y="310.35986"
                        style="stroke-width:1.16201">316</text>
                    <text class="st17 st18 st19" id="text990" x="785.60596" y="295.25369"
                        style="stroke-width:1.16201">317</text>
                    <text class="st17 st18 st21" id="text992" x="895.28241" y="244.8998"
                        style="stroke-width:1.16201">127</text>
                    <text class="st17 st18 st21" id="text994" x="880.17621" y="244.8998"
                        style="stroke-width:1.16201">128</text>
                    <text class="st17 st18 st21" id="text996" x="865.07001" y="244.8998"
                        style="stroke-width:1.16201">129</text>
                    <text class="st17 st18 st21" id="text998" x="849.96387" y="244.8998"
                        style="stroke-width:1.16201">130</text>
                    <text class="st17 st18 st21" id="text1000" x="834.85767" y="244.8998"
                        style="stroke-width:1.16201">131</text>
                    <text class="st17 st18 st21" id="text1002" x="818.58948" y="244.8998"
                        style="stroke-width:1.16201">132</text>
                    <text class="st17 st18 st21" id="text1004" x="803.48334" y="244.8998"
                        style="stroke-width:1.16201">133</text>
                    <text class="st17 st18 st21" id="text1006" x="789.53918" y="244.8998"
                        style="stroke-width:1.16201">134</text>
                    <text class="st17 st18 st21" id="text1008" x="774.8205" y="244.8998"
                        style="stroke-width:1.16201">135</text>
                    <text class="st17 st18 st19" id="text1010" x="504.39941" y="330.5015"
                        style="stroke-width:1.16201">23</text>
                    <text class="st17 st18 st19" id="text1012" x="504.39941" y="314.62061"
                        style="stroke-width:1.16201">22</text>
                    <text class="st17 st18 st19" id="text1014" x="504.39941" y="299.90173"
                        style="stroke-width:1.16201">21</text>
                    <text class="st17 st18 st19" id="text1016" x="504.39941" y="284.02084"
                        style="stroke-width:1.16201">20</text>
                    <text class="st17 st18 st19" id="text1018" x="504.39941" y="269.30209"
                        style="stroke-width:1.16201">19</text>
                    <text class="st17 st18 st19" id="text1020" x="504.39941" y="253.42119"
                        style="stroke-width:1.16201">18</text>
                    <text class="st17 st18 st19" id="text1022" x="504.39941" y="238.70244"
                        style="stroke-width:1.16201">17</text>
                    <text class="st17 st18 st19" id="text1024" x="504.39941" y="222.82155"
                        style="stroke-width:1.16201">16</text>
                    <text class="st17 st18 st19" id="text1026" x="504.39941" y="208.10268"
                        style="stroke-width:1.16201">15</text>
                    <text class="st17 st18 st19" id="text1028" x="504.39941" y="192.22179"
                        style="stroke-width:1.16201">14</text>
                    <text class="st17 st18 st19" id="text1030" x="504.39941" y="176.341"
                        style="stroke-width:1.16201">13</text>
                    <text class="st17 st18 st19" id="text1032" x="467.60358" y="284.02084"
                        style="stroke-width:1.16201">5</text>
                    <text class="st17 st18 st19" id="text1034" x="467.60358" y="269.30209"
                        style="stroke-width:1.16201">6</text>
                    <text class="st17 st18 st19" id="text1036" x="467.60358" y="253.42119"
                        style="stroke-width:1.16201">7</text>
                    <text class="st17 st18 st19" id="text1038" x="467.60358" y="237.54042"
                        style="stroke-width:1.16201">8</text>
                    <text class="st17 st18 st19" id="text1040" x="467.60358" y="222.82155"
                        style="stroke-width:1.16201">9</text>
                    <text class="st17 st18 st19" id="text1042" x="465.27954" y="208.10268"
                        style="stroke-width:1.16201">10</text>
                    <text class="st17 st18 st19" id="text1044" x="465.27954" y="192.22179"
                        style="stroke-width:1.16201">11</text>
                    <text class="st17 st18 st19" id="text1046" x="465.27954" y="177.50302"
                        style="stroke-width:1.16201">12</text>
                    <text class="st17 st18 st19" id="text1048" x="695.35645" y="91.514023"
                        style="stroke-width:1.16201">141</text>
                    <text class="st17 st18 st19" id="text1050" x="710.46265" y="91.514023"
                        style="stroke-width:1.16201">140</text>
                    <text class="st17 st18 st19" id="text1052" x="725.56879" y="91.514023"
                        style="stroke-width:1.16201">139</text>
                    <text class="st17 st18 st19" id="text1054" x="740.67499" y="91.514023"
                        style="stroke-width:1.16201">138</text>
                    <text class="st17 st18 st19" id="text1056" x="756.94318" y="91.514023"
                        style="stroke-width:1.16201">137</text>
                    <text class="st17 st18 st19" id="text1058" x="772.04938" y="91.514023"
                        style="stroke-width:1.16201">136</text>
                    <text class="st17 st18 st19" id="text1060" x="604.33185" y="91.514023"
                        style="stroke-width:1.16201">147</text>
                    <text class="st17 st18 st19" id="text1062" x="618.27606" y="91.514023"
                        style="stroke-width:1.16201">146</text>
                    <text class="st17 st18 st19" id="text1064" x="633.3822" y="91.514023"
                        style="stroke-width:1.16201">145</text>
                    <text class="st17 st18 st19" id="text1066" x="648.4884" y="91.514023"
                        style="stroke-width:1.16201">144</text>
                    <text class="st17 st18 st19" id="text1068" x="664.75659" y="91.514023"
                        style="stroke-width:1.16201">143</text>
                    <text class="st17 st18 st19" id="text1070" x="679.86273" y="91.514023"
                        style="stroke-width:1.16201">142</text>
                    <text class="st17 st18 st19" id="text1072" x="695.35645" y="125.98713"
                        style="stroke-width:1.16201">182</text>
                    <text class="st17 st18 st19" id="text1074" x="710.46265" y="125.98713"
                        style="stroke-width:1.16201">183</text>
                    <text class="st17 st18 st19" id="text1076" x="725.56879" y="125.98713"
                        style="stroke-width:1.16201">184</text>
                    <text class="st17 st18 st19" id="text1078" x="740.67499" y="125.98713"
                        style="stroke-width:1.16201">185</text>
                    <text class="st17 st18 st19" id="text1080" x="756.94318" y="125.98713"
                        style="stroke-width:1.16201">186</text>
                    <text class="st17 st18 st19" id="text1082" x="772.04938" y="125.98713"
                        style="stroke-width:1.16201">187</text>
                    <text class="st17 st18 st19" id="text1084" x="736.41388" y="189.51045"
                        style="stroke-width:1.16201">188</text>
                    <text class="st17 st18 st19" id="text1086" x="720.92078" y="189.51045"
                        style="stroke-width:1.16201">189</text>
                    <text class="st17 st18 st19" id="text1088" x="705.42706" y="189.51045"
                        style="stroke-width:1.16201">190</text>
                    <text class="st17 st18 st19" id="text1090" x="689.93335" y="189.51045"
                        style="stroke-width:1.16201">191</text>
                    <text class="st17 st18 st19" id="text1092" x="674.44019" y="189.51045"
                        style="stroke-width:1.16201">192</text>
                    <text class="st17 st18 st19" id="text1094" x="658.94653" y="189.51045"
                        style="stroke-width:1.16201">193</text>
                    <text class="st17 st18 st19" id="text1096" x="643.45282" y="189.51045"
                        style="stroke-width:1.16201">194</text>
                    <text class="st17 st18 st19" id="text1098" x="629.1217" y="189.51045"
                        style="stroke-width:1.16201">195</text>
                    <text class="st17 st18 st19" id="text1100" x="613.62799" y="189.51045"
                        style="stroke-width:1.16201">196</text>
                    <text class="st17 st18 st19" id="text1102" x="598.13428" y="189.51045"
                        style="stroke-width:1.16201">197</text>
                    <text class="st17 st18 st19" id="text1104" x="582.64117" y="189.51045"
                        style="stroke-width:1.16201">198</text>
                    <text class="st17 st18 st19" id="text1106" x="567.14746" y="189.51045"
                        style="stroke-width:1.16201">199</text>
                    <text class="st17 st18 st19" id="text1108" x="552.81573" y="189.51045"
                        style="stroke-width:1.16201">200</text>
                    <text class="st17 st18 st19" id="text1110" x="736.41388" y="224.75816"
                        style="stroke-width:1.16201">218</text>
                    <text class="st17 st18 st19" id="text1112" x="720.92078" y="224.75816"
                        style="stroke-width:1.16201">217</text>
                    <text class="st17 st18 st19" id="text1114" x="705.42706" y="224.75816"
                        style="stroke-width:1.16201">216</text>
                    <text class="st17 st18 st19" id="text1116" x="691.09534" y="224.75816"
                        style="stroke-width:1.16201">215</text>
                    <text class="st17 st18 st19" id="text1118" x="675.60223" y="224.75816"
                        style="stroke-width:1.16201">214</text>
                    <text class="st17 st18 st19" id="text1120" x="660.10852" y="224.75816"
                        style="stroke-width:1.16201">213</text>
                    <text class="st17 st18 st19" id="text1122" x="644.61481" y="224.75816"
                        style="stroke-width:1.16201">212</text>
                    <text class="st17 st18 st19" id="text1124" x="629.1217" y="224.75816"
                        style="stroke-width:1.16201">211</text>
                    <text class="st17 st18 st19" id="text1126" x="613.62799" y="224.75816"
                        style="stroke-width:1.16201">210</text>
                    <text class="st17 st18 st19" id="text1128" x="598.13428" y="224.75816"
                        style="stroke-width:1.16201">209</text>
                    <text class="st17 st18 st19" id="text1130" x="582.64117" y="224.75816"
                        style="stroke-width:1.16201">208</text>
                    <text class="st17 st18 st19" id="text1132" x="567.14746" y="224.75816"
                        style="stroke-width:1.16201">207</text>
                    <text class="st17 st18 st19" id="text1134" x="552.81573" y="224.75816"
                        style="stroke-width:1.16201">206</text>
                    <text class="st17 st18 st19" id="text1136" x="736.41388" y="286.34488"
                        style="stroke-width:1.16201">219</text>
                    <text class="st17 st18 st19" id="text1138" x="720.92078" y="286.34488"
                        style="stroke-width:1.16201">220</text>
                    <text class="st17 st18 st19" id="text1140" x="705.42706" y="286.34488"
                        style="stroke-width:1.16201">221</text>
                    <text class="st17 st18 st19" id="text1142" x="691.09534" y="286.34488"
                        style="stroke-width:1.16201">222</text>
                    <text class="st17 st18 st19" id="text1144" x="675.60223" y="286.34488"
                        style="stroke-width:1.16201">223</text>
                    <text class="st17 st18 st19" id="text1146" x="660.10852" y="286.34488"
                        style="stroke-width:1.16201">224</text>
                    <text class="st17 st18 st19" id="text1148" x="644.61481" y="286.34488"
                        style="stroke-width:1.16201">225</text>
                    <text class="st17 st18 st19" id="text1150" x="629.1217" y="286.34488"
                        style="stroke-width:1.16201">226</text>
                    <text class="st17 st18 st19" id="text1152" x="613.62799" y="286.34488"
                        style="stroke-width:1.16201">227</text>
                    <text class="st17 st18 st19" id="text1154" x="598.13428" y="286.34488"
                        style="stroke-width:1.16201">228</text>
                    <text class="st17 st18 st19" id="text1156" x="582.64117" y="286.34488"
                        style="stroke-width:1.16201">229</text>
                    <text class="st17 st18 st19" id="text1158" x="567.14746" y="286.34488"
                        style="stroke-width:1.16201">230</text>
                    <text class="st17 st18 st19" id="text1160" x="552.81573" y="286.34488"
                        style="stroke-width:1.16201">231</text>
                    <text class="st17 st18 st19" id="text1162" x="736.41388" y="426.17389"
                        style="stroke-width:1.16201">244</text>
                    <text class="st17 st18 st19" id="text1164" x="720.92078" y="426.17389"
                        style="stroke-width:1.16201">243</text>
                    <text class="st17 st18 st19" id="text1166" x="705.42706" y="426.17389"
                        style="stroke-width:1.16201">242</text>
                    <text class="st17 st18 st19" id="text1168" x="691.09534" y="426.17389"
                        style="stroke-width:1.16201">241</text>
                    <text class="st17 st18 st19" id="text1170" x="675.60223" y="426.17389"
                        style="stroke-width:1.16201">240</text>
                    <text class="st17 st18 st19" id="text1172" x="660.10852" y="426.17389"
                        style="stroke-width:1.16201">239</text>
                    <text class="st17 st18 st19" id="text1174" x="644.61481" y="426.17389"
                        style="stroke-width:1.16201">238</text>
                    <text class="st17 st18 st19" id="text1176" x="629.1217" y="426.17389"
                        style="stroke-width:1.16201">237</text>
                    <text class="st17 st18 st19" id="text1178" x="613.62799" y="426.17389"
                        style="stroke-width:1.16201">236</text>
                    <text class="st17 st18 st19" id="text1180" x="598.13428" y="426.17389"
                        style="stroke-width:1.16201">235</text>
                    <text class="st17 st18 st19" id="text1182" x="582.64117" y="426.17389"
                        style="stroke-width:1.16201">234</text>
                    <text class="st17 st18 st19" id="text1184" x="567.14746" y="426.17389"
                        style="stroke-width:1.16201">233</text>
                    <text class="st17 st18 st19" id="text1186" x="552.81573" y="426.17389"
                        style="stroke-width:1.16201">232</text>
                    <text class="st17 st18 st19" id="text1188" x="736.41388" y="489.30994"
                        style="stroke-width:1.16201">245</text>
                    <text class="st17 st18 st19" id="text1190" x="720.92078" y="489.30994"
                        style="stroke-width:1.16201">246</text>
                    <text class="st17 st18 st19" id="text1192" x="705.42706" y="489.30994"
                        style="stroke-width:1.16201">247</text>
                    <text class="st17 st18 st19" id="text1194" x="691.09534" y="489.30994"
                        style="stroke-width:1.16201">248</text>
                    <text class="st17 st18 st19" id="text1196" x="675.60223" y="489.30994"
                        style="stroke-width:1.16201">249</text>
                    <text class="st17 st18 st19" id="text1198" x="660.10852" y="489.30994"
                        style="stroke-width:1.16201">250</text>
                    <text class="st17 st18 st19" id="text1200" x="644.61481" y="489.30994"
                        style="stroke-width:1.16201">251</text>
                    <text class="st17 st18 st19" id="text1202" x="629.1217" y="489.30994"
                        style="stroke-width:1.16201">252</text>
                    <text class="st17 st18 st19" id="text1204" x="613.62799" y="489.30994"
                        style="stroke-width:1.16201">253</text>
                    <text class="st17 st18 st19" id="text1206" x="598.13428" y="489.30994"
                        style="stroke-width:1.16201">254</text>
                    <text class="st17 st18 st19" id="text1208" x="582.64117" y="489.30994"
                        style="stroke-width:1.16201">255</text>
                    <text class="st17 st18 st19" id="text1210" x="567.14746" y="489.30994"
                        style="stroke-width:1.16201">256</text>
                    <text class="st17 st18 st19" id="text1212" x="552.81573" y="489.30994"
                        style="stroke-width:1.16201">257</text>
                    <text class="st17 st18 st19" id="text1214" x="736.41388" y="524.55762"
                        style="stroke-width:1.16201">270</text>
                    <text class="st17 st18 st19" id="text1216" x="720.92078" y="524.55762"
                        style="stroke-width:1.16201">269</text>
                    <text class="st17 st18 st19" id="text1218" x="705.42706" y="524.55762"
                        style="stroke-width:1.16201">268</text>
                    <text class="st17 st18 st19" id="text1220" x="691.09534" y="524.55762"
                        style="stroke-width:1.16201">267</text>
                    <text class="st17 st18 st19" id="text1222" x="675.60223" y="524.55762"
                        style="stroke-width:1.16201">266</text>
                    <text class="st17 st18 st19" id="text1224" x="660.10852" y="524.55762"
                        style="stroke-width:1.16201">265</text>
                    <text class="st17 st18 st19" id="text1226" x="644.61481" y="524.55762"
                        style="stroke-width:1.16201">264</text>
                    <text class="st17 st18 st19" id="text1228" x="629.1217" y="524.55762"
                        style="stroke-width:1.16201">263</text>
                    <text class="st17 st18 st19" id="text1230" x="613.62799" y="524.55762"
                        style="stroke-width:1.16201">262</text>
                    <text class="st17 st18 st19" id="text1232" x="598.13428" y="524.55762"
                        style="stroke-width:1.16201">261</text>
                    <text class="st17 st18 st19" id="text1234" x="582.64117" y="524.55762"
                        style="stroke-width:1.16201">260</text>
                    <text class="st17 st18 st19" id="text1236" x="567.14746" y="524.55762"
                        style="stroke-width:1.16201">259</text>
                    <text class="st17 st18 st19" id="text1238" x="552.81573" y="524.55762"
                        style="stroke-width:1.16201">258</text>
                    <text class="st17 st18 st19" id="text1240" x="736.41388" y="586.14447"
                        style="stroke-width:1.16201">271</text>
                    <text class="st17 st18 st19" id="text1242" x="720.92078" y="586.14447"
                        style="stroke-width:1.16201">272</text>
                    <text class="st17 st18 st19" id="text1244" x="705.42706" y="586.14447"
                        style="stroke-width:1.16201">273</text>
                    <text class="st17 st18 st19" id="text1246" x="691.09534" y="586.14447"
                        style="stroke-width:1.16201">274</text>
                    <text class="st17 st18 st19" id="text1248" x="675.60223" y="586.14447"
                        style="stroke-width:1.16201">275</text>
                    <text class="st17 st18 st19" id="text1250" x="660.10852" y="586.14447"
                        style="stroke-width:1.16201">276</text>
                    <text class="st17 st18 st19" id="text1252" x="644.61481" y="586.14447"
                        style="stroke-width:1.16201">277</text>
                    <text class="st17 st18 st19" id="text1254" x="629.1217" y="586.14447"
                        style="stroke-width:1.16201">278</text>
                    <text class="st17 st18 st19" id="text1256" x="613.62799" y="586.14447"
                        style="stroke-width:1.16201">279</text>
                    <text class="st17 st18 st19" id="text1258" x="598.13428" y="586.14447"
                        style="stroke-width:1.16201">280</text>
                    <text class="st17 st18 st19" id="text1260" x="582.64117" y="586.14447"
                        style="stroke-width:1.16201">281</text>
                    <text class="st17 st18 st19" id="text1262" x="567.14746" y="586.14447"
                        style="stroke-width:1.16201">282</text>
                    <text class="st17 st18 st19" id="text1264" x="552.81573" y="586.14447"
                        style="stroke-width:1.16201">283</text>
                    <text class="st17 st18 st19" id="text1266" x="604.33185" y="125.98713"
                        style="stroke-width:1.16201">176</text>
                    <text class="st17 st18 st19" id="text1268" x="618.27606" y="125.98713"
                        style="stroke-width:1.16201">177</text>
                    <text class="st17 st18 st19" id="text1270" x="633.3822" y="125.98713"
                        style="stroke-width:1.16201">178</text>
                    <text class="st17 st18 st19" id="text1272" x="648.4884" y="125.98713"
                        style="stroke-width:1.16201">179</text>
                    <text class="st17 st18 st19" id="text1274" x="664.75659" y="125.98713"
                        style="stroke-width:1.16201">180</text>
                    <text class="st17 st18 st19" id="text1276" x="679.86273" y="125.98713"
                        style="stroke-width:1.16201">181</text>
                    <text class="st17 st18 st19" id="text1278" x="504.78638" y="91.514023"
                        style="stroke-width:1.16201">153</text>
                    <text class="st17 st18 st19" id="text1280" x="519.8924" y="91.514023"
                        style="stroke-width:1.16201">152</text>
                    <text class="st17 st18 st19" id="text1282" x="534.9986" y="91.514023"
                        style="stroke-width:1.16201">151</text>
                    <text class="st17 st18 st19" id="text1284" x="551.26678" y="91.514023"
                        style="stroke-width:1.16201">150</text>
                    <text class="st17 st18 st19" id="text1286" x="566.37299" y="91.514023"
                        style="stroke-width:1.16201">149</text>
                    <text class="st17 st18 st19" id="text1288" x="580.31714" y="91.514023"
                        style="stroke-width:1.16201">148</text>
                    <text class="st17 st18 st19" id="text1290" x="412.59976" y="91.514023"
                        style="stroke-width:1.16201">159</text>
                    <text class="st17 st18 st19" id="text1292" x="427.70593" y="91.514023"
                        style="stroke-width:1.16201">158</text>
                    <text class="st17 st18 st19" id="text1294" x="383.54944" y="91.514023"
                        style="stroke-width:1.16201">161</text>
                    <text class="st17 st18 st19" id="text1296" x="397.49359" y="91.514023"
                        style="stroke-width:1.16201">160</text>
                    <text class="st17 st18 st19" id="text1298" x="443.97412" y="91.514023"
                        style="stroke-width:1.16201">157</text>
                    <text class="st17 st18 st19" id="text1300" x="459.08032" y="91.514023"
                        style="stroke-width:1.16201">156</text>
                    <text class="st17 st18 st19" id="text1302" x="474.18646" y="91.514023"
                        style="stroke-width:1.16201">155</text>
                    <text class="st17 st18 st19" id="text1304" x="489.29266" y="91.514023"
                        style="stroke-width:1.16201">154</text>
                    <text class="st17 st18 st19" id="text1306" x="504.78638" y="126.37443"
                        style="stroke-width:1.16201">170</text>
                    <text class="st17 st18 st19" id="text1308" x="519.8924" y="126.37443"
                        style="stroke-width:1.16201">171</text>
                    <text class="st17 st18 st19" id="text1310" x="534.9986" y="126.37443"
                        style="stroke-width:1.16201">172</text>
                    <text class="st17 st18 st19" id="text1312" x="551.26678" y="126.37443"
                        style="stroke-width:1.16201">173</text>
                    <text class="st17 st18 st19" id="text1314" x="566.37299" y="126.37443"
                        style="stroke-width:1.16201">174</text>
                    <text class="st17 st18 st19" id="text1316" x="580.31714" y="126.37443"
                        style="stroke-width:1.16201">175</text>
                    <text class="st17 st18 st19" id="text1318" x="412.59976" y="126.37443"
                        style="stroke-width:1.16201">164</text>
                    <text class="st17 st18 st19" id="text1320" x="427.70593" y="126.37443"
                        style="stroke-width:1.16201">165</text>
                    <text class="st17 st18 st19" id="text1322" x="383.54944" y="126.37443"
                        style="stroke-width:1.16201">162</text>
                    <text class="st17 st18 st19" id="text1324" x="397.49359" y="126.37443"
                        style="stroke-width:1.16201">163</text>
                    <text class="st17 st18 st19" id="text1326" x="443.97412" y="126.37443"
                        style="stroke-width:1.16201">166</text>
                    <text class="st17 st18 st19" id="text1328" x="459.08032" y="126.37443"
                        style="stroke-width:1.16201">167</text>
                    <text class="st17 st18 st19" id="text1330" x="474.18646" y="126.37443"
                        style="stroke-width:1.16201">168</text>
                    <text class="st17 st18 st19" id="text1332" x="489.29266" y="126.37443"
                        style="stroke-width:1.16201">169</text>
                    <text class="st17 st18 st19" id="text1334" x="396.71912" y="177.50302"
                        style="stroke-width:1.16201">201</text>
                    <text class="st17 st18 st19" id="text1336" x="396.71912" y="194.15851"
                        style="stroke-width:1.16201">202</text>
                    <text class="st17 st18 st19" id="text1338" x="396.71912" y="210.81412"
                        style="stroke-width:1.16201">203</text>
                    <text class="st17 st18 st19" id="text1340" x="396.71912" y="227.4696"
                        style="stroke-width:1.16201">204</text>
                    <text class="st17 st18 st19" id="text1342" x="396.71912" y="244.12509"
                        style="stroke-width:1.16201">205</text>

                    <text id="text1418" x="233.48875" y="363.26703" style="font-size:13.9442px;stroke-width:1.16201">
                        <tspan x="233.48875" y="363.26703" class="st5 st6 st39" id="tspan1412"
                            style="stroke-width:1.16201">Caseta</tspan>
                        <tspan x="188.51881" y="382.78885" class="st5 st6 st39" id="tspan1414"
                            style="stroke-width:1.16201">de acceso
                        </tspan>
                        <tspan x="209.31886" y="402.42688" class="st5 st6 st39" id="tspan1416"
                            style="stroke-width:1.16201">vehicular
                        </tspan>
                    </text>
                    <text class="st5 st6 st40" id="text1420" x="557.05615" y="40.318848"
                        style="stroke-width:1.16201">Acceso
                        peatonal</text>
                    <text class="st5 st6 st40" id="text1422" x="729.97888" y="742.96667"
                        style="stroke-width:1.16201">Acceso
                        peatonal</text>
                    <text transform="scale(1.0048881,0.99513569)" id="text1428" x="667.29047" y="325.93979"
                        style="font-size:14.0123px;stroke-width:1.16769">
                        <tspan x="667.29047" y="325.93979" class="st17 st6 st41" id="tspan1424"
                            style="stroke-width:1.16769">Parque
                        </tspan>
                        <tspan x="668.22461" y="337.61673" class="st17 st6 st41" id="tspan1426"
                            style="stroke-width:1.16769">central
                        </tspan>
                    </text>
                    <path class="st5"
                        d="m 336.0857,353.3683 v 45.78333 l 22.19446,-22.19446 c 0,0 -24.28609,-25.6805 -22.19446,-23.58887 z"
                        id="path1430" style="stroke-width:1.16201" />
                    <path class="st5"
                        d="m 613.57452,46.248136 h -30.67716 l 14.87377,14.873773 c 0,0 17.1978,-16.268189 15.80339,-14.873773 z"
                        id="path1432" style="stroke-width:1.16201" />
                    <path class="st5"
                        d="m 752.89993,727.07183 h 30.67716 l -14.87378,-14.87377 c 0,0 -17.19779,16.26819 -15.80338,14.87377 z"
                        id="path1434" style="stroke-width:1.16201" />
                    <g id="g1472" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <g id="g1440">
                            <g id="g1438">
                                <path class="st17"
                                    d="m 694.2,314.4 c -2,0 -4.1,-0.8 -5.5,-2.3 -2.7,-2.9 -2.5,-7.7 0.4,-10.8 -1,-2.3 -0.5,-5 1.2,-6.6 1.1,-1 2.6,-1.5 4.1,-1.4 1.5,0.1 2.9,0.7 3.8,1.8 1.5,1.7 1.7,4.3 0.6,6.3 0.8,1.1 2.8,4.1 1.9,7.7 -0.4,1.7 -1.2,3.1 -2.4,4 -1.2,0.9 -2.7,1.3 -4.1,1.3 z m -0.1,-20 c -1.1,0 -2.2,0.4 -3,1.1 -1.5,1.4 -1.8,3.7 -0.8,5.6 l 0.2,0.4 -0.3,0.3 c -2.7,2.7 -3,7 -0.6,9.5 2,2.1 5.8,2.5 8.1,0.8 1.5,-1.1 1.9,-2.8 2,-3.3 0.9,-3.5 -1.5,-6.5 -1.9,-7 l -0.3,-0.3 0.2,-0.4 c 1.1,-1.7 1,-3.9 -0.3,-5.3 -0.7,-0.8 -1.8,-1.4 -3,-1.4 -0.2,0 -0.2,0 -0.3,0 z"
                                    id="path1436" />
                            </g>
                        </g>
                        <g id="g1446">
                            <g id="g1444">
                                <path class="st17"
                                    d="m 684.6,316.6 c -1.4,0 -2.9,-0.6 -3.8,-1.6 -1.9,-2 -1.8,-5.3 0.2,-7.5 -0.7,-1.6 -0.3,-3.4 0.9,-4.6 0.9,-0.9 2.3,-1.2 3.6,-0.9 l -0.3,1.1 c -0.9,-0.2 -1.9,0 -2.6,0.6 -0.9,0.9 -1.1,2.4 -0.5,3.5 l 0.2,0.4 -0.3,0.4 c -1.8,1.7 -2,4.6 -0.4,6.2 1,1 2.6,1.5 4,1.1 l 0.3,1.1 c -0.4,0.1 -0.8,0.2 -1.3,0.2 z"
                                    id="path1442" />
                            </g>
                        </g>
                        <g id="g1452">
                            <g id="g1450">
                                <rect x="684" y="312.20001" class="st17" width="1.2" height="6.5999999"
                                    id="rect1448" />
                            </g>
                        </g>
                        <g id="g1458">
                            <g id="g1456">
                                <rect x="693.29999" y="303.79999" class="st17" width="1.2" height="14.9"
                                    id="rect1454" />
                            </g>
                        </g>
                        <g id="g1464">
                            <g id="g1462">

                                <rect x="692.20001" y="307.39999"
                                    transform="matrix(0.7071,-0.7071,0.7071,0.7071,-15.6289,580.3796)"
                                    class="st17" width="1.2" height="3.4000001" id="rect1460" />
                            </g>
                        </g>
                        <g id="g1470">
                            <g id="g1468">

                                <rect x="693.40002" y="306"
                                    transform="matrix(0.7071,-0.7071,0.7071,0.7071,-13.1138,581.4214)"
                                    class="st17" width="3.7" height="1.2" id="rect1466" />
                            </g>
                        </g>
                    </g>
                    <g id="g1504" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <g id="g1500">
                            <g id="g1484">
                                <path class="st42"
                                    d="m 400.8,267.8 c 0,0.2 0,0.4 0,0.5 0,0.8 -0.3,1.5 -0.8,2.1 -0.5,0.6 -1.2,1 -2,1.2 -0.3,0.1 -0.6,0.1 -1,0.1 -0.3,0 -0.7,0 -1.1,0 -0.2,0 -0.4,0 -0.5,0 -0.1,0 -0.3,0 -0.4,0 h -0.8 v 5.2 l 1.2,0.1 v 0.6 h -4.6 V 277 l 1.1,-0.1 v -11.3 l -1.1,-0.1 v -0.6 h 3 l 2.3,-0.1 c 1.2,0 2.2,0.2 3,0.6 1,0.6 1.6,1.4 1.7,2.4 z m -2.4,0.2 c 0,-0.7 -0.3,-1.3 -0.8,-1.8 -0.5,-0.5 -1.2,-0.7 -2,-0.7 -0.2,0 -0.6,0 -1.1,0.1 -0.1,0 -0.2,0 -0.3,0 v 5.4 h 1.2 c 0.9,0 1.6,-0.2 2.1,-0.7 0.6,-0.5 0.9,-1.3 0.9,-2.3 z"
                                    id="path1474" />
                                <path class="st42"
                                    d="m 406.2,277.7 h -4 v -0.6 l 1,-0.1 v -10.4 c 0,-0.1 0,-0.2 0,-0.3 0,-0.1 0,-0.2 0,-0.3 0,-0.2 -0.1,-0.3 -0.2,-0.4 -0.1,-0.1 -0.3,-0.2 -0.5,-0.2 -0.2,0 -0.4,0 -0.4,0 v -0.6 l 3.2,-1.2 V 277 l 1.1,0.1 v 0.6 z"
                                    id="path1476" />
                                <path class="st42"
                                    d="m 415.3,277 c -0.2,0.2 -0.3,0.4 -0.4,0.5 -0.4,0.4 -0.8,0.5 -1.3,0.5 -0.4,0 -0.7,-0.1 -0.9,-0.3 -0.2,-0.2 -0.4,-0.5 -0.6,-0.8 l -0.4,0.3 c -0.3,0.3 -0.7,0.5 -1,0.6 -0.3,0.1 -0.7,0.2 -1.1,0.2 -0.6,0 -1.1,-0.2 -1.6,-0.7 -0.4,-0.4 -0.7,-1 -0.7,-1.6 0,-0.8 0.4,-1.6 1.3,-2.3 0.7,-0.6 1.7,-1.1 2.8,-1.4 l 0.5,-0.1 v -0.8 c 0,-0.5 -0.2,-0.9 -0.5,-1.2 -0.1,-0.2 -0.4,-0.3 -0.7,-0.4 -0.1,0 -0.3,-0.1 -0.4,-0.1 0,0.2 -0.1,0.5 -0.3,0.8 -0.3,0.4 -0.6,0.5 -1,0.5 -0.3,0 -0.5,-0.1 -0.7,-0.3 -0.2,-0.2 -0.3,-0.4 -0.3,-0.7 0,-0.4 0.1,-0.6 0.5,-0.8 0.3,-0.2 0.7,-0.3 1.2,-0.3 1.2,0 2.2,0.3 3,0.8 0.9,0.6 1.3,1.4 1.3,2.4 v 4.1 c 0,0.2 0.1,0.4 0.2,0.5 0.1,0.2 0.3,0.2 0.4,0.2 0.1,0 0.3,-0.1 0.5,-0.2 0,0 0.1,-0.1 0.1,-0.1 z m -3.4,-0.9 v -3.4 l -0.4,0.1 c -0.7,0.2 -1.2,0.5 -1.7,1 -0.4,0.5 -0.7,1 -0.7,1.6 0,0.4 0.1,0.8 0.4,1 0.3,0.3 0.6,0.4 1,0.4 0.2,0 0.5,-0.1 0.7,-0.2 0.4,-0.2 0.6,-0.3 0.7,-0.5 z"
                                    id="path1478" />
                                <path class="st42"
                                    d="m 422.9,274.6 -0.9,3.3 -0.5,-0.1 c -0.1,0 -0.2,-0.1 -0.3,-0.1 -0.1,0 -0.2,0 -0.3,0 h -5.3 v -0.6 l 4.8,-7.4 h -0.9 c -0.4,0 -0.7,0.1 -1,0.2 -0.3,0.1 -0.6,0.3 -0.9,0.6 -0.3,0.2 -0.5,0.6 -0.8,1.1 -0.1,0.2 -0.2,0.4 -0.4,0.7 l -0.6,-0.2 0.8,-3.1 0.4,0.1 h 0.4 5.2 v 0.6 l -4.8,7.4 h 0.8 c 0.4,0 0.8,-0.1 1.1,-0.2 0.3,-0.1 0.6,-0.4 1,-0.7 0.3,-0.2 0.6,-0.6 1,-1.1 0.1,-0.2 0.2,-0.4 0.4,-0.7 z"
                                    id="path1480" />
                                <path class="st42"
                                    d="m 431.9,277 c -0.2,0.2 -0.3,0.4 -0.4,0.5 -0.4,0.4 -0.8,0.5 -1.3,0.5 -0.4,0 -0.7,-0.1 -0.9,-0.3 -0.2,-0.2 -0.4,-0.5 -0.6,-0.8 l -0.4,0.3 c -0.3,0.3 -0.7,0.5 -1,0.6 -0.3,0.1 -0.7,0.2 -1.1,0.2 -0.6,0 -1.1,-0.2 -1.6,-0.7 -0.4,-0.4 -0.7,-1 -0.7,-1.6 0,-0.8 0.4,-1.6 1.3,-2.3 0.7,-0.6 1.7,-1.1 2.8,-1.4 l 0.5,-0.1 v -0.8 c 0,-0.5 -0.2,-0.9 -0.5,-1.2 -0.1,-0.2 -0.4,-0.3 -0.7,-0.4 -0.1,0 -0.3,-0.1 -0.4,-0.1 0,0.2 -0.1,0.5 -0.3,0.8 -0.3,0.4 -0.6,0.5 -1,0.5 -0.3,0 -0.5,-0.1 -0.7,-0.3 -0.2,-0.2 -0.3,-0.4 -0.3,-0.7 0,-0.4 0.1,-0.6 0.5,-0.8 0.3,-0.2 0.7,-0.3 1.2,-0.3 1.2,0 2.2,0.3 3,0.8 0.9,0.6 1.3,1.4 1.3,2.4 v 4.1 c 0,0.2 0.1,0.4 0.2,0.5 0.1,0.2 0.3,0.2 0.4,0.2 0.1,0 0.3,-0.1 0.5,-0.2 0,0 0.1,-0.1 0.1,-0.1 z m -3.3,-0.9 v -3.4 l -0.4,0.1 c -0.7,0.2 -1.2,0.5 -1.7,1 -0.4,0.5 -0.7,1 -0.7,1.6 0,0.4 0.1,0.8 0.4,1 0.3,0.3 0.6,0.4 1,0.4 0.2,0 0.5,-0.1 0.7,-0.2 0.4,-0.2 0.6,-0.3 0.7,-0.5 z"
                                    id="path1482" />
                            </g>
                            <g id="g1498">
                                <path class="st42"
                                    d="m 401,289.9 -0.2,0.5 c -0.4,1 -1,1.8 -1.8,2.4 -0.8,0.6 -1.8,0.9 -2.8,0.9 -1.6,0 -2.9,-0.6 -3.9,-1.9 -0.9,-1.2 -1.4,-2.6 -1.4,-4.4 0,-1.9 0.5,-3.5 1.4,-4.8 1,-1.5 2.3,-2.2 4,-2.2 0.3,0 0.9,0.1 1.8,0.2 0.4,0.1 0.6,0.1 0.7,0.1 0.4,-0.1 0.6,-0.1 0.7,-0.1 0.1,0 0.3,-0.1 0.6,-0.2 l 0.9,3.9 -0.6,0.1 -0.2,-0.4 c -0.6,-1 -1.1,-1.7 -1.5,-2.1 -0.6,-0.6 -1.3,-0.9 -2.1,-0.9 -1.1,0 -1.9,0.5 -2.5,1.6 -0.5,0.9 -0.8,2.1 -0.8,3.4 0,1.6 0.3,3 1,4.2 0.8,1.4 1.8,2 3.1,2 0.7,0 1.3,-0.2 1.8,-0.5 0.5,-0.4 0.9,-0.9 1.2,-1.5 l 0.2,-0.4 z"
                                    id="path1486" />
                                <path class="st42"
                                    d="m 410,292.7 c -0.2,0.2 -0.3,0.4 -0.4,0.5 -0.4,0.4 -0.8,0.5 -1.3,0.5 -0.4,0 -0.7,-0.1 -0.9,-0.3 -0.2,-0.2 -0.4,-0.5 -0.6,-0.8 l -0.4,0.3 c -0.3,0.3 -0.7,0.5 -1,0.6 -0.3,0.1 -0.7,0.2 -1.1,0.2 -0.6,0 -1.1,-0.2 -1.6,-0.7 -0.4,-0.4 -0.7,-1 -0.7,-1.6 0,-0.8 0.4,-1.6 1.3,-2.3 0.7,-0.6 1.7,-1.1 2.8,-1.4 l 0.5,-0.1 V 287 c 0,-0.5 -0.2,-0.9 -0.5,-1.2 -0.1,-0.2 -0.4,-0.3 -0.7,-0.4 -0.1,0 -0.3,-0.1 -0.4,-0.1 0,0.2 -0.1,0.5 -0.3,0.8 -0.3,0.4 -0.6,0.5 -1,0.5 -0.3,0 -0.5,-0.1 -0.7,-0.3 -0.2,-0.2 -0.3,-0.4 -0.3,-0.7 0,-0.4 0.1,-0.6 0.5,-0.8 0.3,-0.2 0.7,-0.3 1.2,-0.3 1.2,0 2.2,0.3 3,0.8 0.9,0.6 1.3,1.4 1.3,2.4 v 4.1 c 0,0.2 0.1,0.4 0.2,0.5 0.1,0.2 0.3,0.2 0.4,0.2 0.1,0 0.3,-0.1 0.5,-0.2 0,0 0.1,-0.1 0.1,-0.1 z m -3.3,-0.8 v -3.4 l -0.4,0.1 c -0.7,0.2 -1.2,0.5 -1.7,1 -0.4,0.5 -0.7,1 -0.7,1.6 0,0.4 0.1,0.8 0.4,1 0.3,0.3 0.6,0.4 1,0.4 0.2,0 0.5,-0.1 0.7,-0.2 0.4,-0.2 0.5,-0.4 0.7,-0.5 z"
                                    id="path1488" />
                                <path class="st42"
                                    d="m 414.8,293.4 h -4 v -0.6 l 1,-0.1 v -10.4 c 0,-0.1 0,-0.2 0,-0.3 0,-0.1 0,-0.2 0,-0.3 0,-0.2 -0.1,-0.3 -0.2,-0.4 -0.1,-0.1 -0.3,-0.2 -0.5,-0.2 -0.2,0 -0.4,0 -0.4,0 v -0.6 l 3.2,-1.2 v 13.3 l 1.1,0.1 v 0.7 z"
                                    id="path1490" />
                                <path class="st42"
                                    d="m 420.1,293.4 h -4 v -0.6 l 1,-0.1 v -5.8 c 0,-0.2 0,-0.4 -0.1,-0.5 0,-0.1 -0.1,-0.3 -0.2,-0.4 -0.1,-0.1 -0.2,-0.1 -0.3,-0.2 -0.1,0 -0.2,0 -0.4,0 0,0 -0.1,0 -0.1,0 0,0 0,0 -0.1,0 v -0.5 l 3.2,-1 v 8.4 l 1.1,0.1 v 0.6 z m -0.9,-11.6 c 0,0.3 -0.1,0.6 -0.3,0.8 -0.2,0.2 -0.5,0.3 -0.8,0.3 -0.3,0 -0.6,-0.1 -0.8,-0.3 -0.2,-0.2 -0.4,-0.5 -0.4,-0.8 0,-0.3 0.1,-0.6 0.3,-0.8 0.2,-0.2 0.5,-0.4 0.8,-0.4 0.3,0 0.6,0.1 0.8,0.3 0.3,0.3 0.4,0.5 0.4,0.9 z"
                                    id="path1492" />
                                <path class="st42"
                                    d="m 428.2,290.3 -0.9,3.3 -0.5,-0.1 c -0.1,0 -0.2,-0.1 -0.3,-0.1 -0.1,0 -0.2,0 -0.3,0 H 421 v -0.6 l 4.8,-7.4 H 425 c -0.4,0 -0.7,0.1 -1,0.2 -0.3,0.1 -0.6,0.3 -0.9,0.6 -0.3,0.2 -0.5,0.6 -0.8,1.1 -0.1,0.2 -0.2,0.4 -0.4,0.7 l -0.6,-0.2 0.8,-3.1 0.4,0.1 h 0.4 5.2 v 0.6 l -4.8,7.4 h 0.8 c 0.4,0 0.8,-0.1 1.1,-0.2 0.3,-0.1 0.6,-0.4 1,-0.7 0.3,-0.2 0.6,-0.6 1,-1.1 0.1,-0.2 0.2,-0.4 0.4,-0.7 z"
                                    id="path1494" />
                                <path class="st42"
                                    d="m 437.2,292.7 c -0.2,0.2 -0.3,0.4 -0.4,0.5 -0.4,0.4 -0.8,0.5 -1.3,0.5 -0.4,0 -0.7,-0.1 -0.9,-0.3 -0.2,-0.2 -0.4,-0.5 -0.6,-0.8 l -0.4,0.3 c -0.3,0.3 -0.7,0.5 -1,0.6 -0.3,0.1 -0.7,0.2 -1.1,0.2 -0.6,0 -1.1,-0.2 -1.6,-0.7 -0.4,-0.4 -0.7,-1 -0.7,-1.6 0,-0.8 0.4,-1.6 1.3,-2.3 0.7,-0.6 1.7,-1.1 2.8,-1.4 l 0.5,-0.1 V 287 c 0,-0.5 -0.2,-0.9 -0.5,-1.2 -0.1,-0.2 -0.4,-0.3 -0.7,-0.4 -0.1,0 -0.3,-0.1 -0.4,-0.1 0,0.2 -0.1,0.5 -0.3,0.8 -0.3,0.4 -0.6,0.5 -1,0.5 -0.3,0 -0.5,-0.1 -0.7,-0.3 -0.2,-0.2 -0.3,-0.4 -0.3,-0.7 0,-0.4 0.1,-0.6 0.5,-0.8 0.3,-0.2 0.7,-0.3 1.2,-0.3 1.2,0 2.2,0.3 3,0.8 0.9,0.6 1.3,1.4 1.3,2.4 v 4.1 c 0,0.2 0.1,0.4 0.2,0.5 0.1,0.2 0.3,0.2 0.4,0.2 0.1,0 0.3,-0.1 0.5,-0.2 0,0 0.1,-0.1 0.1,-0.1 z m -3.4,-0.8 v -3.4 l -0.4,0.1 c -0.7,0.2 -1.2,0.5 -1.7,1 -0.4,0.5 -0.7,1 -0.7,1.6 0,0.4 0.1,0.8 0.4,1 0.3,0.3 0.6,0.4 1,0.4 0.2,0 0.5,-0.1 0.7,-0.2 0.4,-0.2 0.6,-0.4 0.7,-0.5 z"
                                    id="path1496" />
                            </g>
                        </g>
                        <path class="st43"
                            d="m 428.1,246.8 h -2.7 c 0,5.7 -3.6,10.6 -8.7,12.5 l 0.1,-9.5 c 3.2,-1.7 5.3,-5 5.3,-8.9 0,-5.5 -4.5,-10 -10,-10 -8.8,0 -16,7.2 -16,16 0,8.8 7.2,16 16,16 1.2,0 2.3,-0.1 3.4,-0.4 0,0 0.1,0 0.1,0 7.1,-1.7 12.5,-8.1 12.5,-15.7 z m -16,1.3 c -1.1,0 -2,-0.9 -2,-2 0,-1.1 0.9,-2 2,-2 1.1,0 2,0.9 2,2 v 1.7 c -0.7,0.2 -1.4,0.3 -2,0.3 z m -13.3,-1.3 c 0,-7.3 6,-13.3 13.3,-13.3 4,0 7.3,3.3 7.3,7.3 0,2.2 -1,4.2 -2.6,5.5 v -0.2 c 0,0 0,0 0,0 0,0 0,0 0,0 0,-2.6 -2.1,-4.7 -4.7,-4.7 -2.6,0 -4.7,2.1 -4.7,4.7 0,2.6 2.1,4.7 4.7,4.7 0.7,0 1.3,-0.1 1.9,-0.2 l -0.1,9.3 c -0.6,0.1 -1.2,0.1 -1.8,0.1 -7.4,0.1 -13.3,-5.9 -13.3,-13.2 z"
                            id="path1502" />
                    </g>
                    {{-- <text class="st44 st6 st10" id="text1506" x="850.42206" y="801.3905"
                        style="stroke-width:1.16201">Bugambilia
                        Plus</text>
                    <text class="st45 st6 st10" id="text1508" x="1031.7242" y="800.22845"
                        style="stroke-width:1.16201">Ceiba Plus</text>
                    <text class="st46 st6 st10" id="text1510" x="674.46265" y="800.22845"
                        style="stroke-width:1.16201">Flamboyán
                        Plus</text>
                    <text class="st47 st48 st49" id="text1512" x="952.34045" y="706.11792" style="stroke-width:1.16201">UN
                        DESARROLLO
                        EN:</text> --}}
                    {{-- <path class="st50"
                        d="m 926.15618,759.2596 v 0 c 2.5564,4.53186 7.0882,5.92627 11.3877,6.27488 4.9967,0.3486 10.4581,-0.46481 13.9442,-5.22906 1.6268,-2.20783 2.7888,-4.99666 3.6022,-7.9017 1.743,-6.04247 2.2078,-25.33189 -0.3486,-30.79335 -1.2782,-2.67263 -3.1374,-4.64806 -5.1129,-6.15867 -6.5072,-4.76426 -13.8279,-3.83465 -19.8704,1.74302 -4.067,3.83464 -4.8805,8.36649 -5.3453,14.75757 -0.4648,5.22906 -0.6972,22.89166 1.7431,27.30731"
                        id="path1514" style="stroke-width:1.16201" />
                    <path class="st17"
                        d="m 949.04778,741.24839 h 0.6972 v -1.62681 h -0.6972 c -3.1374,0 -5.9262,1.62681 -7.6693,4.06704 v -4.76425 c 2.9051,-0.58101 6.6235,-3.60224 6.6235,-10.10952 h -1.6268 c 0,5.69387 -3.0212,7.78549 -4.9967,8.3665 v -2.78884 c 1.7431,-0.4648 2.6727,-2.20782 2.6727,-4.99665 0,-3.36984 -2.3241,-6.04247 -5.2291,-6.04247 -2.5564,0 -8.0179,1.97542 -8.0179,8.25029 0,5.57767 5.5777,7.20449 8.9475,7.43689 v 0.58101 0 4.06704 c -1.743,-2.44023 -4.5318,-4.06704 -7.6693,-4.06704 h -0.6972 v 1.62681 h 0.6972 c 3.9509,0 7.2045,3.02124 7.6693,6.85588 -1.743,-2.44022 -4.5318,-3.95084 -7.6693,-3.95084 h -0.6972 v 1.62682 h 0.6972 c 4.1833,0 7.6693,3.48604 7.6693,7.66929 v 0.6972 1.39442 h 1.6268 v -1.39442 -0.6972 c 0,-4.18325 3.4861,-7.66929 7.6693,-7.66929 h 0.6972 v -1.62682 h -0.6972 c -3.1374,0 -5.9262,1.62682 -7.6693,3.95084 0.4648,-3.83464 3.7185,-6.85588 7.6693,-6.85588 m -16.5006,-9.76091 c 0,-5.46146 4.9967,-6.50727 6.2749,-6.50727 1.9754,0 3.6022,1.85922 3.6022,4.29945 0,0.8134 -0.1162,2.55643 -1.0458,3.13743 -0.1162,-1.62682 -0.9296,-3.71844 -2.324,-4.41565 -0.8134,-0.4648 -1.743,-0.4648 -2.6726,0.1162 -0.9296,0.58101 -1.2782,1.74302 -0.9296,2.90504 0.4648,1.51061 1.8592,2.90503 4.1832,3.25363 v 2.90504 c -1.6268,-0.1162 -7.0883,-0.92961 -7.0883,-5.69387 m 7.2045,1.16201 c -1.3944,-0.2324 -2.324,-1.16201 -2.5564,-1.97542 0,-0.2324 -0.2324,-0.81341 0.2324,-1.04581 0.2324,-0.1162 0.3486,-0.2324 0.581,-0.2324 0.1162,0 0.2324,0 0.3486,0.1162 0.6972,0.3486 1.3944,1.74302 1.3944,3.13743"
                        id="path1516" style="stroke-width:1.16201" />
                    <path class="st47"
                        d="m 967.52378,751.93892 c -0.2324,-0.2324 -0.4648,-0.46481 -0.6972,-0.46481 -0.2324,-0.1162 -0.4648,-0.1162 -0.6972,-0.1162 -0.3486,0 -0.581,0.1162 -0.9296,0.2324 -0.2324,0.11621 -0.4648,0.23241 -0.6972,0.46481 -0.2324,0.2324 -0.3486,0.4648 -0.4648,0.69721 -0.1162,0.2324 -0.1162,0.581 -0.1162,0.92961 0,0.3486 0,0.69721 0.1162,0.92961 0.1162,0.2324 0.2324,0.58101 0.4648,0.69721 0.2324,0.2324 0.4648,0.3486 0.6972,0.4648 0.2324,0.1162 0.581,0.23241 0.9296,0.23241 0.2324,0 0.4648,-0.11621 0.6972,-0.23241 0.2324,-0.1162 0.4648,-0.3486 0.6972,-0.581 l 0.9297,0.6972 c -0.2325,0.34861 -0.6973,0.69721 -1.0459,0.81341 -0.4648,0.23241 -0.8134,0.23241 -1.2782,0.23241 -0.4648,0 -0.9296,-0.11621 -1.3944,-0.23241 -0.4648,-0.1162 -0.8134,-0.3486 -1.0458,-0.6972 -0.3486,-0.34861 -0.581,-0.69721 -0.6972,-1.04582 -0.1162,-0.4648 -0.2324,-0.81341 -0.2324,-1.39441 0,-0.46481 0.1162,-0.92961 0.2324,-1.39442 0.1162,-0.4648 0.3486,-0.81341 0.6972,-1.04581 0.3486,-0.34861 0.6972,-0.46481 1.0458,-0.69721 0.4648,-0.1162 0.8134,-0.2324 1.3944,-0.2324 0.4648,0 0.8134,0.1162 1.162,0.2324 0.3486,0.1162 0.6972,0.46481 1.0458,0.81341 z"
                        id="path1518" style="stroke-width:1.16201" />
                    <rect x="971.1261" y="750.42828" class="st47" width="1.1620135" height="6.3910742"
                        id="rect1520" style="stroke-width:1.16201" />
                    <path class="st47"
                        d="m 980.53838,754.49535 c 0,0.3486 -0.1162,0.69721 -0.2324,1.04581 -0.1162,0.3486 -0.3486,0.58101 -0.581,0.81341 -0.2324,0.2324 -0.4648,0.3486 -0.8134,0.4648 -0.3486,0.11621 -0.6972,0.23241 -1.0458,0.23241 -0.3486,0 -0.6972,-0.1162 -1.0459,-0.23241 -0.3486,-0.1162 -0.581,-0.2324 -0.8134,-0.4648 -0.2324,-0.2324 -0.4648,-0.46481 -0.581,-0.81341 -0.1162,-0.3486 -0.2324,-0.69721 -0.2324,-1.04581 v -4.06705 h 1.162 v 3.95085 c 0,0.1162 0,0.3486 0.1162,0.4648 0,0.1162 0.1162,0.34861 0.2324,0.46481 0.1162,0.1162 0.2324,0.2324 0.4649,0.3486 0.2324,0.1162 0.4648,0.1162 0.6972,0.1162 0.2324,0 0.4648,0 0.6972,-0.1162 0.2324,-0.1162 0.3486,-0.2324 0.4648,-0.3486 0.1162,-0.1162 0.2324,-0.34861 0.2324,-0.46481 0,-0.1162 0.1162,-0.3486 0.1162,-0.4648 v -3.95085 h 1.162 z"
                        id="path1522" style="stroke-width:1.16201" />
                    <path class="st47"
                        d="m 983.79198,750.4283 h 2.5565 c 0.4648,0 0.8134,0.1162 1.162,0.2324 0.3486,0.1162 0.6972,0.34861 1.0458,0.58101 0.3486,0.2324 0.581,0.58101 0.6972,1.04581 0.2324,0.34861 0.2324,0.81341 0.2324,1.39442 0,0.58101 -0.1162,1.04581 -0.3486,1.39441 -0.2324,0.34861 -0.4648,0.69721 -0.8134,1.04582 -0.3486,0.2324 -0.6972,0.4648 -1.0458,0.581 -0.3486,0.1162 -0.8134,0.23241 -1.162,0.23241 h -2.3241 z m 1.9755,5.46146 c 0.3486,0 0.6972,0 1.0458,-0.1162 0.3486,-0.1162 0.581,-0.2324 0.8134,-0.3486 0.2324,-0.1162 0.4648,-0.34861 0.581,-0.69721 0.1162,-0.2324 0.2324,-0.58101 0.2324,-1.04581 0,-0.34861 -0.1162,-0.69721 -0.2324,-1.04581 -0.1162,-0.23241 -0.2324,-0.46481 -0.4648,-0.69721 -0.2324,-0.1162 -0.4648,-0.34861 -0.8134,-0.34861 -0.3486,-0.1162 -0.581,-0.1162 -0.9296,-0.1162 h -1.0459 v 4.29945 h 0.8135 z"
                        id="path1524" style="stroke-width:1.16201" />
                    <path class="st47"
                        d="m 994.48258,750.4283 h 0.9296 l 2.7888,6.39107 h -1.2782 l -0.581,-1.51061 h -2.7889 l -0.581,1.51061 h -1.2782 z m 1.3944,3.95085 -0.9296,-2.55643 -1.0459,2.55643 z"
                        id="path1526" style="stroke-width:1.16201" />
                    <path class="st47"
                        d="m 1000.7574,750.4283 h 2.5565 c 0.4648,0 0.8134,0.1162 1.162,0.2324 0.3486,0.1162 0.6972,0.34861 1.0458,0.58101 0.3486,0.2324 0.581,0.58101 0.6972,1.04581 0.2324,0.34861 0.2324,0.81341 0.2324,1.39442 0,0.58101 -0.1162,1.04581 -0.3486,1.39441 -0.2324,0.34861 -0.4648,0.69721 -0.8134,1.04582 -0.3486,0.2324 -0.6972,0.4648 -1.0458,0.581 -0.3486,0.1162 -0.8134,0.23241 -1.162,0.23241 h -2.3241 z m 1.9754,5.46146 c 0.3487,0 0.6973,0 1.0459,-0.1162 0.3486,-0.1162 0.581,-0.2324 0.8134,-0.3486 0.2324,-0.1162 0.4648,-0.34861 0.581,-0.69721 0.1162,-0.2324 0.2324,-0.58101 0.2324,-1.04581 0,-0.34861 -0.1162,-0.69721 -0.2324,-1.04581 -0.1162,-0.23241 -0.2324,-0.46481 -0.4648,-0.69721 -0.2324,-0.1162 -0.4648,-0.34861 -0.8134,-0.34861 -0.3486,-0.1162 -0.581,-0.1162 -0.9296,-0.1162 h -1.1621 v 4.29945 h 0.9296 z"
                        id="path1528" style="stroke-width:1.16201" />
                    <polygon class="st47"
                        points="952.9,645.8 950.7,651.3 949.8,651.3 947.7,645.8 948.8,645.8 950.3,650 951.9,645.8 "
                        id="polygon1530" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)" />
                    <rect x="1021.5575" y="750.42828" class="st47" width="1.1620135" height="6.3910742"
                        id="rect1532" style="stroke-width:1.16201" />
                    <polygon class="st47"
                        points="963.3,645.8 961.1,651.3 960.3,651.3 958.1,645.8 959.2,645.8 960.7,650 962.3,645.8 "
                        id="polygon1534" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)" />
                    <path class="st47"
                        d="m 1035.2692,750.4283 h 0.9296 l 2.7889,6.39107 h -1.2782 l -0.5811,-1.51061 h -2.7888 l -0.581,1.51061 h -1.2782 z m 1.5106,3.95085 -0.9296,-2.55643 -1.0458,2.55643 z"
                        id="path1536" style="stroke-width:1.16201" />
                    <path class="st50"
                        d="m 978.21438,739.15677 -1.2783,0.2324 v 4.29945 l 0.1163,0.81341 v 0.58101 c -0.3487,-0.1162 -0.4649,-0.1162 -0.4649,-0.1162 h -0.3486 c -0.3486,0 -1.0458,0.2324 -2.324,0.69721 -1.2782,0.4648 -2.4402,0.6972 -3.6022,0.6972 -2.5565,0 -4.5319,-0.92961 -6.1587,-2.90503 -1.5106,-1.85922 -2.324,-4.06705 -2.324,-6.50728 0,-2.67263 0.6972,-5.11285 2.2078,-7.08828 1.5106,-2.09162 3.486,-3.25364 5.6939,-3.25364 0.581,0 1.162,0.11621 1.743,0.23241 0.581,0.1162 1.2782,0.2324 1.9754,0.3486 0.4648,0 0.9296,0 1.2782,-0.1162 0.3486,-0.1162 0.581,-0.2324 0.6972,-0.2324 l 1.3944,5.57766 -1.0458,0.2324 -0.3486,-0.581 c -0.8134,-1.39442 -1.5106,-2.44023 -2.2078,-3.02124 -0.9296,-0.81341 -1.9754,-1.27821 -3.2536,-1.27821 -1.5106,0 -2.7889,0.81341 -3.6023,2.32402 -0.8134,1.39442 -1.162,3.02124 -1.162,4.88046 0,2.55643 0.581,4.88046 1.743,6.73968 1.2782,2.20783 2.9051,3.25364 4.9967,3.25364 0.6972,0 1.0458,0 1.162,-0.1162 0.1162,-0.11621 0.2324,-0.11621 0.3486,-0.23241 v -5.34526 l -1.5106,-0.1162 v -0.92961 h 6.2749 z"
                        id="path1538" style="stroke-width:1.16201" />
                    <path class="st50"
                        d="m 988.67248,734.16011 c 0,0.46481 -0.2324,0.92961 -0.581,1.27822 -0.3486,0.3486 -0.8134,0.4648 -1.3944,0.4648 -0.2324,0 -0.581,-0.1162 -1.0458,-0.2324 -0.1163,0 -0.1163,-0.1162 -0.2325,-0.1162 -0.1162,0.2324 -0.2324,0.3486 -0.2324,0.4648 -0.2324,0.34861 -0.3486,0.69721 -0.4648,1.04582 -0.1162,0.3486 -0.2324,0.581 -0.2324,0.81341 -0.2324,0.8134 -0.2324,1.51061 -0.2324,2.32402 v 4.64806 l 1.5107,0.2324 v 0.81341 h -5.9263 v -0.92961 l 1.3944,-0.23241 v -6.50727 c 0,-0.58101 -0.1162,-1.16201 -0.2324,-1.85922 -0.1162,-0.69721 -0.3486,-1.16202 -0.4648,-1.39442 -0.1162,-0.1162 -0.3486,-0.2324 -0.581,-0.3486 -0.2324,-0.1162 -0.4648,-0.1162 -0.4648,-0.1162 v -0.81341 l 3.1374,-1.27822 c 0.2324,0.58101 0.4648,0.81341 0.4648,0.92961 0.1162,0.23241 0.2324,0.58101 0.3486,0.92961 0.1162,0.34861 0.2324,0.81341 0.2324,1.16202 0.1162,0.3486 0.1162,0.81341 0.1162,1.16201 l 0.2324,-0.69721 c 0.3486,-0.92961 0.8134,-1.62682 1.2782,-2.20782 0.5811,-0.69721 1.1621,-1.04582 1.8593,-1.04582 0.6972,0 1.0458,0.11621 1.2782,0.46481 0.1162,0.2324 0.2324,0.58101 0.2324,1.04581"
                        id="path1540" style="stroke-width:1.16201" />
                    <path class="st50"
                        d="m 1001.687,744.85064 c -0.2324,0.3486 -0.4648,0.581 -0.6972,0.81341 -0.581,0.581 -1.27822,0.8134 -1.97542,0.8134 -0.4648,0 -0.9296,-0.1162 -1.2782,-0.4648 -0.3486,-0.3486 -0.6972,-0.69721 -0.8134,-1.27822 l -0.581,0.46481 c -0.4648,0.46481 -0.9296,0.69721 -1.3944,0.92961 -0.4648,0.2324 -0.9297,0.2324 -1.5107,0.2324 -0.9296,0 -1.6268,-0.3486 -2.324,-0.92961 -0.6972,-0.69721 -0.9296,-1.39441 -0.9296,-2.32402 0,-1.16202 0.581,-2.32403 1.8592,-3.36984 1.0458,-0.92961 2.4403,-1.51062 4.0671,-2.09163 l 0.6972,-0.2324 v -1.16201 c 0,-0.69721 -0.2324,-1.27822 -0.6972,-1.74302 -0.2324,-0.23241 -0.581,-0.46481 -1.0458,-0.58101 -0.1162,0 -0.3486,-0.1162 -0.6972,-0.2324 0,0.3486 -0.1163,0.6972 -0.4649,1.16201 -0.4648,0.46481 -0.9296,0.81341 -1.5106,0.81341 -0.4648,0 -0.8134,-0.1162 -1.162,-0.3486 -0.3486,-0.23241 -0.4648,-0.58101 -0.4648,-1.04582 0,-0.4648 0.2324,-0.92961 0.6972,-1.16201 0.4648,-0.2324 1.0458,-0.3486 1.743,-0.3486 1.8593,0 3.2537,0.3486 4.5319,1.16201 1.2782,0.81341 1.9754,1.97542 1.9754,3.48604 v 6.04247 c 0,0.3486 0.1162,0.58101 0.2324,0.81341 0.11622,0.2324 0.34862,0.3486 0.69722,0.3486 0.2324,0 0.4648,-0.1162 0.6972,-0.3486 l 0.2324,-0.2324 z m -4.88042,-1.16202 v -5.11286 l -0.4648,0.1162 c -0.9296,0.23241 -1.743,0.69721 -2.4403,1.39442 -0.6972,0.69721 -0.9296,1.51062 -0.9296,2.32403 0,0.581 0.2324,1.16201 0.581,1.51062 0.3486,0.4648 0.9297,0.6972 1.5107,0.6972 0.3486,0 0.6972,-0.1162 1.0458,-0.3486 0.2324,-0.2324 0.4648,-0.46481 0.6972,-0.58101"
                        id="path1542" style="stroke-width:1.16201" />
                    <path class="st50"
                        d="m 1015.3988,746.01265 h -5.3453 v -0.92961 l 1.2782,-0.2324 v -7.55309 c 0,-0.69721 -0.1162,-1.27822 -0.4648,-1.74302 -0.3486,-0.58101 -0.8134,-0.81341 -1.3944,-0.81341 -0.3486,0 -0.6972,0.1162 -1.0458,0.2324 -0.3486,0.1162 -0.6972,0.34861 -0.9296,0.58101 l -0.581,0.581 v 8.71511 l 1.2782,0.2324 v 0.92961 h -5.5777 v -0.92961 l 1.3945,-0.2324 v -8.5989 c 0,-0.34861 0,-0.69721 -0.1162,-0.81341 0,-0.1162 -0.2324,-0.34861 -0.3486,-0.58101 -0.1162,-0.1162 -0.2324,-0.1162 -0.3486,-0.2324 -0.2324,0 -0.3487,0 -0.4649,0 h -0.3486 v -0.81341 l 3.3699,-1.51062 c 0.3486,0.3486 0.581,0.69721 0.8134,1.16201 0.1162,0.34861 0.2324,0.58101 0.2324,0.69721 0,0.2324 0.1162,0.46481 0.1162,0.69721 0.1162,-0.3486 0.581,-0.81341 1.2782,-1.27821 0.9296,-0.69721 1.743,-1.04582 2.5564,-1.04582 1.0459,0 1.9755,0.46481 2.6727,1.27822 0.6972,0.81341 1.0458,1.74302 1.0458,2.90503 v 8.1341 l 1.162,0.2324 v 0.92961 z"
                        id="path1544" style="stroke-width:1.16201" />
                    <path class="st50"
                        d="m 1037.7095,740.66739 -0.2324,0.69721 c -0.5811,1.51061 -1.3945,2.67263 -2.6727,3.60224 -1.2782,0.81341 -2.6726,1.27821 -4.1832,1.27821 -2.4403,0 -4.2995,-0.92961 -5.8101,-2.78883 -1.3944,-1.74302 -1.9754,-3.83464 -1.9754,-6.50728 0,-2.78883 0.6972,-5.11285 2.0916,-7.08828 1.5106,-2.20782 3.486,-3.25364 5.8101,-3.25364 0.4648,0 1.2782,0.11621 2.6726,0.34861 0.581,0.1162 0.9296,0.1162 1.0458,0.1162 0.581,-0.1162 0.9296,-0.1162 1.0458,-0.2324 0.1162,0 0.3486,-0.1162 0.8134,-0.34861 l 1.2783,5.69387 -0.9297,0.2324 -0.3486,-0.581 c -0.8134,-1.39442 -1.5106,-2.44023 -2.2078,-3.13744 -0.9296,-0.92961 -1.9754,-1.27822 -3.1374,-1.27822 -1.5106,0 -2.7889,0.81341 -3.7185,2.44023 -0.8134,1.39442 -1.162,3.02124 -1.162,4.99666 0,2.32403 0.4648,4.41565 1.3944,6.15867 1.162,1.97542 2.5565,3.02124 4.5319,3.02124 1.0458,0 1.8592,-0.23241 2.6726,-0.81341 0.8134,-0.58101 1.3944,-1.27822 1.8592,-2.20783 l 0.2324,-0.58101 z"
                        id="path1546" style="stroke-width:1.16201" />
                    <path class="st50"
                        d="m 1050.9564,744.85064 c -0.2324,0.3486 -0.4648,0.581 -0.6972,0.81341 -0.581,0.581 -1.2782,0.8134 -1.9754,0.8134 -0.4648,0 -0.9296,-0.1162 -1.2782,-0.4648 -0.3486,-0.3486 -0.6972,-0.69721 -0.8134,-1.27822 l -0.5811,0.46481 c -0.4648,0.46481 -0.9296,0.69721 -1.3944,0.92961 -0.4648,0.2324 -0.9296,0.2324 -1.5106,0.2324 -0.9296,0 -1.6268,-0.3486 -2.324,-0.92961 -0.6972,-0.69721 -0.9296,-1.39441 -0.9296,-2.32402 0,-1.16202 0.581,-2.32403 1.8592,-3.36984 1.0458,-0.92961 2.4402,-1.51062 4.067,-2.09163 l 0.6973,-0.2324 v -1.16201 c 0,-0.69721 -0.2325,-1.27822 -0.6973,-1.74302 -0.2324,-0.23241 -0.581,-0.46481 -1.0458,-0.58101 -0.1162,0 -0.3486,-0.1162 -0.6972,-0.2324 0,0.3486 -0.1162,0.6972 -0.4648,1.16201 -0.4648,0.46481 -0.9296,0.81341 -1.5106,0.81341 -0.4648,0 -0.8134,-0.1162 -1.162,-0.3486 -0.3486,-0.23241 -0.4648,-0.58101 -0.4648,-1.04582 0,-0.4648 0.2324,-0.92961 0.6972,-1.16201 0.4648,-0.2324 1.0458,-0.3486 1.743,-0.3486 1.8592,0 3.2536,0.3486 4.5319,1.16201 1.2782,0.81341 1.9754,1.97542 1.9754,3.48604 v 6.04247 c 0,0.3486 0.1162,0.58101 0.2324,0.81341 0.1162,0.2324 0.3486,0.3486 0.6972,0.3486 0.2324,0 0.4648,-0.1162 0.6972,-0.3486 l 0.2324,-0.2324 z m -4.8804,-1.16202 v -5.11286 l -0.4649,0.1162 c -0.9296,0.23241 -1.743,0.69721 -2.4402,1.39442 -0.6972,0.69721 -0.9296,1.51062 -0.9296,2.32403 0,0.581 0.2324,1.16201 0.581,1.51062 0.3486,0.4648 0.9296,0.6972 1.5106,0.6972 0.3486,0 0.6972,-0.1162 1.0458,-0.3486 0.2324,-0.2324 0.4648,-0.46481 0.6973,-0.58101"
                        id="path1548" style="stroke-width:1.16201" />
                    <path class="st50"
                        d="m 1058.0447,746.01265 h -5.9263 v -0.92961 l 1.5106,-0.2324 v -15.33858 -0.46481 -0.4648 c 0,-0.23241 -0.1162,-0.46481 -0.3486,-0.58101 -0.2324,-0.1162 -0.4648,-0.2324 -0.8134,-0.2324 -0.3486,0 -0.581,0 -0.581,0 v -0.92961 l 4.6481,-1.74302 v 19.75423 l 1.5106,0.2324 z"
                        id="path1550" style="stroke-width:1.16201" />
                    <path class="st50"
                        d="m 1070.1296,741.3646 -1.2782,4.88045 -0.6972,-0.1162 c -0.2324,0 -0.3486,-0.1162 -0.3486,-0.1162 -0.1162,0 -0.2324,0 -0.4648,0 h -7.7855 v -0.81341 l 7.0883,-10.92293 h -1.2782 c -0.581,0 -1.0458,0.1162 -1.3944,0.23241 -0.3486,0.2324 -0.8135,0.4648 -1.2783,0.81341 -0.3486,0.3486 -0.8134,0.8134 -1.2782,1.51061 -0.1162,0.23241 -0.3486,0.58101 -0.581,1.04582 l -0.8134,-0.23241 1.162,-4.53185 0.581,0.2324 h 0.581 7.6693 v 0.81341 l -7.0883,10.92293 h 1.2783 c 0.6972,0 1.162,-0.1162 1.6268,-0.2324 0.4648,-0.23241 0.9296,-0.46481 1.5106,-0.92961 0.4648,-0.34861 0.9296,-0.92962 1.3944,-1.62682 0.1162,-0.23241 0.3486,-0.58101 0.581,-1.04582 z"
                        id="path1552" style="stroke-width:1.16201" />
                    <path class="st50"
                        d="m 1083.3766,744.85064 c -0.2324,0.3486 -0.4648,0.581 -0.6972,0.81341 -0.581,0.581 -1.2782,0.8134 -1.9754,0.8134 -0.4649,0 -0.9297,-0.1162 -1.2783,-0.4648 -0.3486,-0.3486 -0.6972,-0.69721 -0.8134,-1.27822 l -0.581,0.46481 c -0.4648,0.46481 -0.9296,0.69721 -1.3944,0.92961 -0.4648,0.2324 -0.9296,0.2324 -1.5106,0.2324 -0.9296,0 -1.6268,-0.3486 -2.324,-0.92961 -0.6972,-0.69721 -0.9297,-1.39441 -0.9297,-2.32402 0,-1.16202 0.5811,-2.32403 1.8593,-3.36984 1.0458,-0.92961 2.4402,-1.51062 4.067,-2.09163 l 0.6972,-0.2324 v -1.16201 c 0,-0.69721 -0.2324,-1.27822 -0.6972,-1.74302 -0.2324,-0.23241 -0.581,-0.46481 -1.0458,-0.58101 -0.1162,0 -0.3486,-0.1162 -0.6972,-0.2324 0,0.3486 -0.1162,0.6972 -0.4648,1.16201 -0.4648,0.46481 -0.9296,0.81341 -1.5106,0.81341 -0.4648,0 -0.8134,-0.1162 -1.162,-0.3486 -0.3486,-0.23241 -0.4648,-0.58101 -0.4648,-1.04582 0,-0.4648 0.2324,-0.92961 0.6972,-1.16201 0.4648,-0.2324 1.0458,-0.3486 1.743,-0.3486 1.8592,0 3.2536,0.3486 4.5318,1.16201 1.2783,0.81341 1.9755,1.97542 1.9755,3.48604 v 6.04247 c 0,0.3486 0.1162,0.58101 0.2324,0.81341 0.1162,0.2324 0.3486,0.3486 0.6972,0.3486 0.2324,0 0.4648,-0.1162 0.6972,-0.3486 l 0.2324,-0.2324 z m -4.8805,-1.16202 v -5.11286 l -0.4648,0.1162 c -0.9296,0.23241 -1.743,0.69721 -2.4402,1.39442 -0.6972,0.69721 -0.9296,1.51062 -0.9296,2.32403 0,0.581 0.2324,1.16201 0.581,1.51062 0.3486,0.4648 0.9296,0.6972 1.5106,0.6972 0.3486,0 0.6972,-0.1162 1.0458,-0.3486 0.2324,-0.2324 0.4648,-0.46481 0.6972,-0.58101"
                        id="path1554" style="stroke-width:1.16201" />
                    <path class="st50"
                        d="m 1096.9721,745.31544 -3.2536,1.16201 c -0.1162,-0.1162 -0.2324,-0.3486 -0.3486,-0.581 -0.1162,-0.2324 -0.2324,-0.34861 -0.2324,-0.46481 -0.1162,-0.1162 -0.1162,-0.3486 -0.2324,-0.4648 -0.1162,-0.23241 -0.1162,-0.46481 -0.1162,-0.69721 l -0.4648,0.58101 c -0.8134,1.04581 -1.8592,1.51061 -3.1374,1.51061 -1.3945,0 -2.5565,-0.6972 -3.4861,-1.97542 -0.8134,-1.16201 -1.162,-2.67263 -1.162,-4.29945 0,-1.85922 0.4648,-3.48604 1.3944,-4.88046 1.0458,-1.51061 2.324,-2.32402 3.9509,-2.32402 0.581,0 1.0458,0 1.3944,0.1162 0.3486,0.1162 0.8134,0.2324 1.2782,0.58101 v -4.41566 c 0,-0.4648 -0.2324,-0.81341 -0.581,-1.04581 -0.1162,-0.1162 -0.3486,-0.1162 -0.581,-0.1162 h -0.3486 -0.1162 v -0.92961 l 4.648,-1.39442 v 16.9654 c 0,0.46481 0,0.81341 0.1162,1.16201 0.1162,0.34861 0.2324,0.58101 0.581,0.69721 0.3486,0.1162 0.581,0.2324 0.8134,0.2324 v 0.58101 z m -4.4156,-2.32403 v -7.66928 c -0.2324,-0.23241 -0.4648,-0.58101 -0.581,-0.81341 -0.4648,-0.46481 -1.162,-0.69721 -1.8592,-0.69721 -1.0459,0 -1.7431,0.581 -2.2079,1.62682 -0.3486,0.92961 -0.581,1.97542 -0.581,3.36984 0,1.39441 0.2324,2.67263 0.6972,3.71844 0.581,1.27821 1.5107,1.85922 2.6727,1.85922 0.4648,0 0.9296,-0.2324 1.2782,-0.58101 0.4648,-0.581 0.581,-0.81341 0.581,-0.81341"
                        id="path1556" style="stroke-width:1.16201" />
                    <path class="st50"
                        d="m 1109.8705,744.85064 c -0.2324,0.3486 -0.4648,0.581 -0.6972,0.81341 -0.581,0.581 -1.2782,0.8134 -1.9754,0.8134 -0.4648,0 -0.9297,-0.1162 -1.2783,-0.4648 -0.3486,-0.3486 -0.6972,-0.69721 -0.8134,-1.27822 l -0.581,0.46481 c -0.4648,0.46481 -0.9296,0.69721 -1.3944,0.92961 -0.4648,0.2324 -0.9296,0.2324 -1.5106,0.2324 -0.9296,0 -1.6268,-0.3486 -2.324,-0.92961 -0.6972,-0.69721 -0.9296,-1.39441 -0.9296,-2.32402 0,-1.16202 0.581,-2.32403 1.8592,-3.36984 1.0458,-0.92961 2.4402,-1.51062 4.067,-2.09163 l 0.6972,-0.2324 v -1.16201 c 0,-0.69721 -0.2324,-1.27822 -0.6972,-1.74302 -0.2324,-0.23241 -0.581,-0.46481 -1.0458,-0.58101 -0.1162,0 -0.3486,-0.1162 -0.6972,-0.2324 0,0.3486 -0.1162,0.6972 -0.4648,1.16201 -0.4648,0.46481 -0.9296,0.81341 -1.5106,0.81341 -0.4648,0 -0.8134,-0.1162 -1.162,-0.3486 -0.3486,-0.23241 -0.4648,-0.58101 -0.4648,-1.04582 0,-0.4648 0.2324,-0.92961 0.6972,-1.16201 0.4648,-0.2324 1.0458,-0.3486 1.743,-0.3486 1.8592,0 3.2536,0.3486 4.5318,1.16201 1.2783,0.81341 1.9755,1.97542 1.9755,3.48604 v 6.04247 c 0,0.3486 0.1162,0.58101 0.2324,0.81341 0.1162,0.2324 0.3486,0.3486 0.6972,0.3486 0.2324,0 0.4648,-0.1162 0.6972,-0.3486 0,0 0.1162,-0.1162 0.2324,-0.2324 z m -4.8805,-1.16202 v -5.11286 l -0.4648,0.1162 c -0.9296,0.23241 -1.743,0.69721 -2.4402,1.39442 -0.6972,0.69721 -0.9296,1.51062 -0.9296,2.32403 0,0.581 0.2324,1.16201 0.581,1.51062 0.3486,0.4648 0.9296,0.6972 1.5106,0.6972 0.3486,0 0.6972,-0.1162 1.0458,-0.3486 0.2324,-0.2324 0.4648,-0.46481 0.6972,-0.58101"
                        id="path1558" style="stroke-width:1.16201" /> --}}
                    {{-- <text id="text1568" x="542.88226" y="816.43854" style="font-size:13.9442px;stroke-width:1.16201">
                        <tspan x="542.88226" y="816.43854" class="st51 st48 st52" id="tspan1560"
                            style="stroke-width:1.16201">C.65.55 m
                        </tspan>
                        <tspan x="596.45111" y="812.95251" class="st51 st48 st21" id="tspan1562"
                            style="stroke-width:1.16201">2</tspan>
                        <tspan x="542.88226" y="830.38275" class="st51 st48 st52" id="tspan1564"
                            style="stroke-width:1.16201">2 Recámaras
                        </tspan>
                        <tspan x="542.88226" y="844.3269" class="st51 st48 st52" id="tspan1566"
                            style="stroke-width:1.16201">1 Baño
                        </tspan>
                    </text> --}}
                    {{-- <g id="g1580" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(809.1309,703.6068)" id="text1578">
                            <tspan x="0" y="0" class="st51 st48 st52" id="tspan1570">C.73.69 m</tspan>
                            <tspan x="46.099998" y="-3" class="st51 st48 st21" id="tspan1572">2</tspan>
                            <tspan x="0" y="12" class="st51 st48 st52" id="tspan1574">2 Recámaras </tspan>
                            <tspan x="0" y="24" class="st51 st48 st52" id="tspan1576">2 1/2 Baños</tspan>
                        </text>
                    </g>
                    <g id="g1592" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(965.7498,702.6068)" id="text1590">
                            <tspan x="0" y="0" class="st51 st48 st52" id="tspan1582">C.82.25 m</tspan>
                            <tspan x="46.099998" y="-3" class="st51 st48 st21" id="tspan1584">2</tspan>
                            <tspan x="0" y="12" class="st51 st48 st52" id="tspan1586">3 Recámaras </tspan>
                            <tspan x="0" y="24" class="st51 st48 st52" id="tspan1588">2 1/2 Baños</tspan>
                        </text>
                    </g>
                    <g id="g1604" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(657.5615,702.6068)" id="text1602">
                            <tspan x="0" y="0" class="st51 st48 st52" id="tspan1594">C.65.73 m</tspan>
                            <tspan x="46.099998" y="-3" class="st51 st48 st21" id="tspan1596">2</tspan>
                            <tspan x="0" y="12" class="st51 st48 st52" id="tspan1598">2 Recámaras </tspan>
                            <tspan x="0" y="24" class="st51 st48 st52" id="tspan1600">2 1/2 Baños</tspan>
                        </text>
                    </g> --}}
                    <g id="g1832" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <polyline class="st53"
                            points="574.5,525.3 574.5,537.6 569.4,537.6 569.4,544.6 563.4,544.6 563.4,518.4 570.3,518.4 570.3,525.3    574.5,525.3  "
                            id="polyline1606" />
                        <polyline class="st54"
                            points="489.1,468.9 476.8,468.9 476.8,463.8 469.8,463.8 469.8,457.7 496,457.7 496,464.7 489.1,464.7    489.1,468.9  "
                            id="polyline1608" />
                        <polyline class="st55"
                            points="489.1,482.1 476.8,482.1 476.8,477 469.8,477 469.8,470.9 496,470.9 496,477.9 489.1,477.9    489.1,482.1  "
                            id="polyline1610" />
                        <polyline class="st53"
                            points="489.1,495.3 476.8,495.3 476.8,490.1 469.8,490.1 469.8,484.1 496,484.1 496,491.1 489.1,491.1    489.1,495.3  "
                            id="polyline1612" />
                        <polyline class="st54"
                            points="489.1,508.4 476.8,508.4 476.8,503.3 469.8,503.3 469.8,497.3 496,497.3 496,504.2 489.1,504.2    489.1,508.4  "
                            id="polyline1614" />
                        <polyline class="st55"
                            points="489.1,521.6 476.8,521.6 476.8,516.5 469.8,516.5 469.8,510.5 496,510.5 496,517.4 489.1,517.4    489.1,521.6  "
                            id="polyline1616" />
                        <polyline class="st55"
                            points="509.3,510.5 521.5,510.5 521.5,515.6 528.6,515.6 528.6,521.6 502.3,521.6 502.3,514.7 509.3,514.7    509.3,510.5  "
                            id="polyline1618" />
                        <polyline class="st54"
                            points="509.3,523.6 521.5,523.6 521.5,528.8 528.6,528.8 528.6,534.8 502.3,534.8 502.3,527.8 509.3,527.8    509.3,523.6  "
                            id="polyline1620" />
                        <polyline class="st53"
                            points="509,497.3 521.3,497.3 521.3,502.4 528.3,502.4 528.3,508.4 502,508.4 502,501.5 509,501.5    509,497.3  "
                            id="polyline1622" />
                        <polyline class="st54"
                            points="509.3,484.1 521.5,484.1 521.5,489.2 528.6,489.2 528.6,495.3 502.3,495.3 502.3,488.3 509.3,488.3    509.3,484.1  "
                            id="polyline1624" />
                        <polyline class="st53"
                            points="489.1,534.8 476.8,534.8 476.8,529.7 469.8,529.7 469.8,523.6 496,523.6 496,530.6 489.1,530.6    489.1,534.8  "
                            id="polyline1626" />
                        <polyline class="st54"
                            points="489.1,548.3 476.8,548.3 476.8,543.1 469.8,543.1 469.8,537.1 496,537.1 496,544.1 489.1,544.1    489.1,548.3  "
                            id="polyline1628" />
                        <polyline class="st54"
                            points="587.7,525.3 587.7,537.6 582.6,537.6 582.6,544.6 576.5,544.6 576.5,518.4 583.5,518.4 583.5,525.3    587.7,525.3  "
                            id="polyline1630" />
                        <polyline class="st55"
                            points="600.6,525.3 600.6,537.6 595.5,537.6 595.5,544.6 589.4,544.6 589.4,518.4 596.4,518.4 596.4,525.3    600.6,525.3  "
                            id="polyline1632" />
                        <polyline class="st53"
                            points="613.8,525.3 613.8,537.6 608.7,537.6 608.7,544.6 602.6,544.6 602.6,518.4 609.6,518.4 609.6,525.3    613.8,525.3  "
                            id="polyline1634" />
                        <polyline class="st54"
                            points="627,525.3 627,537.6 621.8,537.6 621.8,544.6 615.8,544.6 615.8,518.4 622.8,518.4 622.8,525.3    627,525.3  "
                            id="polyline1636" />
                        <polyline class="st55"
                            points="640.2,525.3 640.2,537.6 635.1,537.6 635.1,544.6 629,544.6 629,518.4 636,518.4 636,525.3    640.2,525.3  "
                            id="polyline1638" />
                        <polyline class="st53"
                            points="653.5,525.3 653.5,537.6 648.4,537.6 648.4,544.6 642.4,544.6 642.4,518.4 649.3,518.4 649.3,525.3    653.5,525.3  "
                            id="polyline1640" />
                        <polyline class="st54"
                            points="666.5,525.3 666.5,537.6 661.4,537.6 661.4,544.6 655.3,544.6 655.3,518.4 662.3,518.4 662.3,525.3    666.5,525.3  "
                            id="polyline1642" />
                        <polyline class="st55"
                            points="679.7,525.3 679.7,537.6 674.6,537.6 674.6,544.6 668.5,544.6 668.5,518.4 675.5,518.4 675.5,525.3    679.7,525.3  "
                            id="polyline1644" />
                        <polyline class="st53"
                            points="692.9,525.3 692.9,537.6 687.7,537.6 687.7,544.6 681.7,544.6 681.7,518.4 688.7,518.4 688.7,525.3    692.9,525.3  "
                            id="polyline1646" />
                        <polyline class="st54"
                            points="706.1,525.3 706.1,537.6 700.9,537.6 700.9,544.6 694.9,544.6 694.9,518.4 701.9,518.4 701.9,525.3    706.1,525.3  "
                            id="polyline1648" />
                        <polyline class="st53"
                            points="424.2,538.7 437.1,538.7 437.1,549.9 424.2,549.9 424.2,538.7  " id="polyline1650" />
                        <polyline class="st54"
                            points="424.2,525.5 437.1,525.5 437.1,536.7 424.2,536.7 424.2,525.5  " id="polyline1652" />
                        <polyline class="st54"
                            points="470.7,585.2 470.7,572.3 481.9,572.3 481.9,585.2 470.7,585.2  " id="polyline1654" />
                        <polyline class="st53"
                            points="484.1,585.2 484.1,572.3 495.3,572.3 495.3,585.2 484.1,585.2  " id="polyline1656" />
                        <polyline class="st55" points="457.9,585.2 457.9,572.3 469,572.3 469,585.2 457.9,585.2  "
                            id="polyline1658" />
                        <polyline class="st54" points="708,585.2 708,572.3 719.2,572.3 719.2,585.2 708,585.2  "
                            id="polyline1660" />
                        <polyline class="st53"
                            points="721.1,585.2 721.1,572.3 732.3,572.3 732.3,585.2 721.1,585.2  " id="polyline1662" />
                        <polyline class="st55" points="708,544.4 708,531.5 719.2,531.5 719.2,544.4 708,544.4  "
                            id="polyline1664" />
                        <polyline class="st55" points="695,585.2 695,572.3 706.2,572.3 706.2,585.2 695,585.2  "
                            id="polyline1666" />
                        <polyline class="st53"
                            points="424.2,340.9 437.1,340.9 437.1,352.1 424.2,352.1 424.2,340.9  " id="polyline1668" />
                        <polyline class="st55"
                            points="424.2,512.3 424.2,523.5 432.1,523.5 432.1,518 437.1,518 437.1,512.3 424.2,512.3  "
                            id="polyline1670" />
                        <polyline class="st53"
                            points="424.2,499.1 424.2,510.3 432.1,510.3 432.1,504.8 437.1,504.8 437.1,499.1 424.2,499.1  "
                            id="polyline1672" />
                        <polyline class="st54"
                            points="424.2,486 424.2,497.1 432.1,497.1 432.1,491.6 437.1,491.6 437.1,486 424.2,486  "
                            id="polyline1674" />
                        <polyline class="st55"
                            points="424.2,472.8 424.2,484 432.1,484 432.1,478.5 437.1,478.5 437.1,472.8 424.2,472.8  "
                            id="polyline1676" />
                        <polyline class="st53"
                            points="424.2,459.4 424.2,470.6 432.1,470.6 432.1,465.1 437.1,465.1 437.1,459.4 424.2,459.4  "
                            id="polyline1678" />
                        <polyline class="st54"
                            points="424.2,446.3 424.2,457.5 432.1,457.5 432.1,452 437.1,452 437.1,446.3 424.2,446.3  "
                            id="polyline1680" />
                        <polyline class="st55"
                            points="424.2,433.3 424.2,444.5 432.1,444.5 432.1,439 437.1,439 437.1,433.3 424.2,433.3  "
                            id="polyline1682" />
                        <polyline class="st53"
                            points="424.2,420.2 424.2,431.4 432.1,431.4 432.1,425.9 437.1,425.9 437.1,420.2 424.2,420.2  "
                            id="polyline1684" />
                        <polyline class="st54"
                            points="424.3,407.1 424.3,418.3 432.1,418.3 432.1,412.8 437.2,412.8 437.2,407.1 424.3,407.1  "
                            id="polyline1686" />
                        <polyline class="st55"
                            points="424.2,393.5 424.2,404.7 432.1,404.7 432.1,399.2 437.1,399.2 437.1,393.5 424.2,393.5  "
                            id="polyline1688" />
                        <polyline class="st53"
                            points="424.2,380.5 424.2,391.7 432.1,391.7 432.1,386.2 437.1,386.2 437.1,380.5 424.2,380.5  "
                            id="polyline1690" />
                        <polyline class="st54"
                            points="485.2,389.9 485.2,378.7 477.4,378.7 477.4,384.2 472.4,384.2 472.4,389.9 485.2,389.9  "
                            id="polyline1692" />
                        <polyline class="st53"
                            points="485.2,376.6 485.2,365.4 477.4,365.4 477.4,370.9 472.4,370.9 472.4,376.6 485.2,376.6  "
                            id="polyline1694" />
                        <polyline class="st55"
                            points="485.2,403 485.2,391.8 477.4,391.8 477.4,397.3 472.4,397.3 472.4,403 485.2,403  "
                            id="polyline1696" />
                        <polyline class="st53"
                            points="485.2,416.2 485.2,405 477.4,405 477.4,410.5 472.4,410.5 472.4,416.2 485.2,416.2  "
                            id="polyline1698" />
                        <polyline class="st54"
                            points="513.1,444.5 513.1,455.7 520.9,455.7 520.9,450.1 526,450.1 526,444.5 513.1,444.5  "
                            id="polyline1700" />
                        <polyline class="st53"
                            points="513.1,457.7 513.1,468.9 520.9,468.9 520.9,463.4 526,463.4 526,457.7 513.1,457.7  "
                            id="polyline1702" />
                        <polyline class="st55"
                            points="513.1,470.9 513.1,482.1 520.9,482.1 520.9,476.6 526,476.6 526,470.9 513.1,470.9  "
                            id="polyline1704" />
                        <polyline class="st55"
                            points="513.1,431.4 513.1,442.6 520.9,442.6 520.9,437.1 526,437.1 526,431.4 513.1,431.4  "
                            id="polyline1706" />
                        <polyline class="st53"
                            points="513.1,418.3 513.1,429.5 520.9,429.5 520.9,423.9 526,423.9 526,418.3 513.1,418.3  "
                            id="polyline1708" />
                        <polyline class="st54"
                            points="513.1,405 513.1,416.2 520.9,416.2 520.9,410.7 526,410.7 526,405 513.1,405  "
                            id="polyline1710" />
                        <polyline class="st55"
                            points="513.1,391.8 513.1,403 520.9,403 520.9,397.5 526,397.5 526,391.8 513.1,391.8  "
                            id="polyline1712" />
                        <polyline class="st53"
                            points="513.1,378.7 513.1,389.9 520.9,389.9 520.9,384.4 526,384.4 526,378.7 513.1,378.7  "
                            id="polyline1714" />
                        <g id="g1720">
                            <polyline class="st54"
                                points="486.2,286.2 473.4,286.2 473.4,280.5 478.4,280.5 478.4,275 486.2,275 486.2,286.2   "
                                id="polyline1716" />

                            <rect x="473.10001" y="275.29999" transform="rotate(-90,475.86435,277.80415)"
                                class="st56" width="5.5" height="5.0999999" id="rect1718" />
                        </g>
                        <g id="g1726">
                            <polyline class="st53"
                                points="485.2,337.1 472.4,337.1 472.4,331.4 477.4,331.4 477.4,325.9 485.2,325.9 485.2,337.1   "
                                id="polyline1722" />

                            <rect x="472.10001" y="326.10001" transform="rotate(-90,474.86435,328.66675)"
                                class="st57" width="5.5" height="5.0999999" id="rect1724" />
                        </g>
                        <g id="g1732">
                            <polyline class="st53"
                                points="513,536.8 525.9,536.8 525.9,542.5 520.9,542.5 520.9,548 513,548 513,536.8   "
                                id="polyline1728" />

                            <rect x="520.70001" y="542.70001" transform="rotate(90,523.38885,545.24315)"
                                class="st57" width="5.5" height="5.0999999" id="rect1730" />
                        </g>
                        <g id="g1738">
                            <polyline class="st55"
                                points="576.5,584.9 576.5,572 582.2,572 582.2,577 587.7,577 587.7,584.9 576.5,584.9   "
                                id="polyline1734" />
                            <rect x="582.20001" y="572" class="st58" width="5.5" height="5.0999999"
                                id="rect1736" />
                        </g>
                        <g id="g1744">
                            <polyline class="st55"
                                points="560.9,531.5 560.9,544.4 555.2,544.4 555.2,539.3 549.7,539.3 549.7,531.5 560.9,531.5   "
                                id="polyline1740" />

                            <rect x="549.70001" y="539.29999" transform="rotate(180,552.4551,541.8593)"
                                class="st58" width="5.5" height="5.0999999" id="rect1742" />
                        </g>
                        <g id="g1750">
                            <polyline class="st54"
                                points="589.5,584.9 589.5,572 595.2,572 595.2,577 600.7,577 600.7,584.9 589.5,584.9   "
                                id="polyline1746" />
                            <rect x="595.20001" y="572" class="st56" width="5.5" height="5.0999999"
                                id="rect1748" />
                        </g>
                        <g id="g1756">
                            <polyline class="st53"
                                points="602.7,584.9 602.7,572 608.4,572 608.4,577 613.9,577 613.9,584.9 602.7,584.9   "
                                id="polyline1752" />
                            <rect x="608.40002" y="572" class="st57" width="5.5" height="5.0999999"
                                id="rect1754" />
                        </g>
                        <polyline class="st55"
                            points="615.8,585.1 615.8,572.2 621.5,572.2 621.5,577.3 627,577.3 627,585.1 615.8,585.1  "
                            id="polyline1758" />
                        <polyline class="st54"
                            points="629,585.1 629,572.2 634.7,572.2 634.7,577.3 640.2,577.3 640.2,585.1 629,585.1  "
                            id="polyline1760" />
                        <polyline class="st53"
                            points="642.1,585.1 642.1,572.2 647.8,572.2 647.8,577.3 653.3,577.3 653.3,585.1 642.1,585.1  "
                            id="polyline1762" />
                        <polyline class="st55"
                            points="655.4,585.1 655.4,572.2 661.1,572.2 661.1,577.3 666.6,577.3 666.6,585.1 655.4,585.1  "
                            id="polyline1764" />
                        <polyline class="st54"
                            points="668.7,585.2 668.7,572.3 674.4,572.3 674.4,577.3 679.9,577.3 679.9,585.2 668.7,585.2  "
                            id="polyline1766" />
                        <polyline class="st53"
                            points="681.8,585.1 681.8,572.2 687.5,572.2 687.5,577.3 693,577.3 693,585.1 681.8,585.1  "
                            id="polyline1768" />
                        <polyline class="st55"
                            points="497.1,585.1 497.1,572.2 502.8,572.2 502.8,577.3 508.3,577.3 508.3,585.1 497.1,585.1  "
                            id="polyline1770" />
                        <polyline class="st54"
                            points="510.5,585.1 510.5,572.2 516.1,572.2 516.1,577.3 521.6,577.3 521.6,585.1 510.5,585.1  "
                            id="polyline1772" />
                        <polyline class="st53"
                            points="523.6,585.1 523.6,572.2 529.3,572.2 529.3,577.3 534.8,577.3 534.8,585.1 523.6,585.1  "
                            id="polyline1774" />
                        <polyline class="st55"
                            points="536.8,585.1 536.8,572.2 542.5,572.2 542.5,577.3 548,577.3 548,585.1 536.8,585.1  "
                            id="polyline1776" />
                        <polyline class="st54"
                            points="549.7,585.1 549.7,572.2 555.4,572.2 555.4,577.3 560.9,577.3 560.9,585.1 549.7,585.1  "
                            id="polyline1778" />
                        <polyline class="st53"
                            points="563.4,585.1 563.4,572.2 569,572.2 569,577.3 574.5,577.3 574.5,585.1 563.4,585.1  "
                            id="polyline1780" />
                        <polyline class="st54"
                            points="424.2,327.9 437.1,327.9 437.1,339.1 424.2,339.1 424.2,327.9  " id="polyline1782" />
                        <polyline class="st53"
                            points="512.7,339.1 525.5,339.1 525.5,350.3 512.7,350.3 512.7,339.1  " id="polyline1784" />
                        <polyline class="st55"
                            points="512.7,352.3 525.5,352.3 525.5,363.5 512.7,363.5 512.7,352.3  " id="polyline1786" />
                        <polyline class="st54"
                            points="472.4,339.1 485.2,339.1 485.2,350.3 472.4,350.3 472.4,339.1  " id="polyline1788" />
                        <polyline class="st55"
                            points="472.4,352.3 485.2,352.3 485.2,363.5 472.4,363.5 472.4,352.3  " id="polyline1790" />
                        <polyline class="st54"
                            points="512.7,365.4 525.5,365.4 525.5,376.6 512.7,376.6 512.7,365.4  " id="polyline1792" />
                        <polyline class="st54"
                            points="512.7,325.9 525.5,325.9 525.5,337.1 512.7,337.1 512.7,325.9  " id="polyline1794" />
                        <polyline class="st55"
                            points="473.2,288.2 486.1,288.2 486.1,299.4 473.2,299.4 473.2,288.2  " id="polyline1796" />
                        <g id="g1802">
                            <polyline class="st55"
                                points="485,442.5 472.2,442.5 472.2,436.9 477.2,436.9 477.2,431.4 485,431.4 485,442.5   "
                                id="polyline1798" />

                            <rect x="471.89999" y="431.60001" transform="rotate(-90,474.65425,434.11905)"
                                class="st58" width="5.5" height="5.0999999" id="rect1800" />
                        </g>
                        <g id="g1808">
                            <polyline class="st54"
                                points="485,429.4 472.2,429.4 472.2,423.7 477.2,423.7 477.2,418.2 485,418.2 485,429.4   "
                                id="polyline1804" />

                            <rect x="471.89999" y="418.39999" transform="rotate(-90,474.6542,420.945)"
                                class="st56" width="5.5" height="5.0999999" id="rect1806" />
                        </g>
                        <g id="g1814">
                            <polyline class="st53"
                                points="485,455.7 472.2,455.7 472.2,450 477.2,450 477.2,444.5 485,444.5 485,455.7   "
                                id="polyline1810" />

                            <rect x="471.89999" y="444.70001" transform="rotate(-90,474.6542,447.2324)"
                                class="st57" width="5.5" height="5.0999999" id="rect1812" />
                        </g>
                        <polyline class="st53"
                            points="490.1,273 477.9,273 477.9,267.9 470.8,267.9 470.8,261.9 497.1,261.9 497.1,268.8 490.1,268.8    490.1,273  "
                            id="polyline1816" />
                        <polyline class="st55"
                            points="486.2,259.8 486.2,248.6 478.4,248.6 478.4,254.1 473.4,254.1 473.4,259.8 486.2,259.8  "
                            id="polyline1818" />
                        <g id="g1824">
                            <polyline class="st55"
                                points="424.2,354.3 437.1,354.3 437.1,359.9 432.1,359.9 432.1,365.4 424.2,365.4 424.2,354.3   "
                                id="polyline1820" />

                            <rect x="431.89999" y="360.10001" transform="rotate(90,434.59405,362.68045)"
                                class="st58" width="5.5" height="5.0999999" id="rect1822" />
                        </g>
                        <g id="g1830">
                            <polyline class="st54"
                                points="424.2,367.5 437.1,367.5 437.1,373.2 432.1,373.2 432.1,378.7 424.2,378.7 424.2,367.5   "
                                id="polyline1826" />

                            <rect x="431.89999" y="373.39999" transform="rotate(90,434.5941,375.914)"
                                class="st56" width="5.5" height="5.0999999" id="rect1828" />
                        </g>
                    </g>
                    <text class="st20 st18 st19" id="text1834" x="454.67615" y="346.38226"
                        style="stroke-width:1.16201">1</text>
                    <text class="st20 st18 st19" id="text1836" x="454.67615" y="330.5015"
                        style="stroke-width:1.16201">2</text>
                    <text class="st20 st18 st19" id="text1838" x="454.67676" y="314.62061"
                        style="stroke-width:1.16201">3</text>
                    <text class="st20 st18 st19" id="text1840" x="454.67615" y="299.90173"
                        style="stroke-width:1.16201">4</text>
                    <text class="st17 st18 st19" id="text1842" x="467.04755" y="330.5015"
                        style="stroke-width:1.16201">B+</text>
                    <text class="st17 st18 st19" id="text1844" x="467.04755" y="345.22025"
                        style="stroke-width:1.16201">C+</text>
                    <text class="st17 st18 st19" id="text1846" x="467.04755" y="298.73996"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1848" x="469.36938" y="314.62061"
                        style="stroke-width:1.16201">A</text>
                    <g id="g1852" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,335.088)" class="st20 st18 st19" id="text1850">58</text>
                    </g>
                    <g id="g1856" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,348.4213)" class="st20 st18 st19" id="text1854">57</text>
                    </g>
                    <g id="g1860" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,361.7546)" class="st20 st18 st19" id="text1858">56</text>
                    </g>
                    <g id="g1864" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,375.088)" class="st20 st18 st19" id="text1862">55</text>
                    </g>
                    <g id="g1868" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,388.4213)" class="st20 st18 st19" id="text1866">54</text>
                    </g>
                    <g id="g1872" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,401.7546)" class="st20 st18 st19" id="text1870">53</text>
                    </g>
                    <g id="g1876" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,414.088)" class="st20 st18 st19" id="text1874">52</text>
                    </g>
                    <g id="g1880" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,427.4213)" class="st20 st18 st19" id="text1878">51</text>
                    </g>
                    <g id="g1884" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,440.7546)" class="st20 st18 st19" id="text1882">50</text>
                    </g>
                    <g id="g1888" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,454.088)" class="st20 st18 st19" id="text1886">49</text>
                    </g>
                    <text class="st17 st18 st19" id="text1890" x="464.89551" y="389.37677"
                        style="stroke-width:1.16201">B+</text>
                    <text class="st17 st18 st19" id="text1892" x="464.75189" y="404.87024"
                        style="stroke-width:1.16201">C+</text>
                    <text class="st17 st18 st19" id="text1894" x="464.75189" y="420.36371"
                        style="stroke-width:1.16201">C+</text>
                    <text class="st17 st18 st19" id="text1896" x="464.42676" y="435.8573"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1898" x="464.42676" y="451.35077"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1900" x="464.42676" y="466.84427"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1902" x="464.42676" y="481.17584"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1904" x="464.89551" y="496.66931"
                        style="stroke-width:1.16201">B+</text>
                    <text class="st17 st18 st19" id="text1906" x="509.20734" y="633.63989"
                        style="stroke-width:1.16201">B+</text>
                    <text class="st17 st18 st19" id="text1908" x="464.89551" y="512.16278"
                        style="stroke-width:1.16201">B+</text>
                    <text class="st17 st18 st19" id="text1910" x="464.89551" y="527.65637"
                        style="stroke-width:1.16201">B+</text>
                    <text class="st17 st18 st19" id="text1912" x="507.9007" y="420.36371"
                        style="stroke-width:1.16201">C+</text>
                    <text class="st17 st18 st19" id="text1914" x="507.9007" y="435.8573"
                        style="stroke-width:1.16201">C+</text>
                    <text class="st17 st18 st19" id="text1916" x="507.9007" y="390.20691"
                        style="stroke-width:1.16201">C+</text>
                    <text class="st17 st18 st19" id="text1918" x="507.9007" y="405.7005"
                        style="stroke-width:1.16201">C+</text>
                    <text class="st17 st18 st19" id="text1920" x="507.57556" y="451.35077"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1922" x="507.57556" y="466.84427"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1924" x="507.57556" y="481.17584"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1926" x="507.57556" y="496.66931"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1928" x="507.57556" y="512.16278"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1930" x="507.57556" y="527.65637"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1932" x="507.57556" y="542.80029"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1934" x="507.57556" y="558.29388"
                        style="stroke-width:1.16201">D+</text>
                    <text class="st17 st18 st19" id="text1936" x="466.88184" y="540.43878"
                        style="stroke-width:1.16201">A</text>
                    <text class="st17 st18 st19" id="text1938" x="466.88184" y="555.54504"
                        style="stroke-width:1.16201">A</text>
                    <text class="st17 st18 st19" id="text1940" x="466.88184" y="570.65143"
                        style="stroke-width:1.16201">A</text>
                    <text class="st17 st18 st19" id="text1942" x="466.88184" y="585.75787"
                        style="stroke-width:1.16201">A</text>
                    <text class="st17 st18 st19" id="text1944" x="466.88184" y="600.86426"
                        style="stroke-width:1.16201">A</text>
                    <text class="st17 st18 st19" id="text1946" x="466.88184" y="615.9707"
                        style="stroke-width:1.16201">A</text>
                    <text class="st17 st18 st19" id="text1948" x="510.03125" y="570.65143"
                        style="stroke-width:1.16201">A</text>
                    <text class="st17 st18 st19" id="text1950" x="510.03125" y="585.75787"
                        style="stroke-width:1.16201">A</text>
                    <text class="st17 st18 st19" id="text1952" x="510.03125" y="600.86426"
                        style="stroke-width:1.16201">A</text>
                    <text class="st17 st18 st19" id="text1954" x="510.03125" y="615.9707"
                        style="stroke-width:1.16201">A</text>
                    <text class="st17 st18 st19" id="text1956" x="466.88184" y="631.07697"
                        style="stroke-width:1.16201">A</text>
                    <g id="g1960" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,467.4213)" class="st20 st18 st19" id="text1958">48</text>
                    </g>
                    <g id="g1964" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,480.7547)" class="st59 st18 st19" id="text1962">47</text>
                    </g>
                    <g id="g1968" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,494.088)" class="st20 st18 st19" id="text1966">46</text>
                    </g>
                    <g id="g1972" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,507.4214)" class="st20 st18 st19" id="text1970">45</text>
                    </g>
                    <g id="g1976" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,520.7547)" class="st59 st18 st19" id="text1974">44</text>
                    </g>
                    <g id="g1980" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,533.088)" class="st20 st18 st19" id="text1978">43</text>
                    </g>
                    <g id="g1984" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(487.2796,546.4214)" class="st20 st18 st19" id="text1982">42</text>
                    </g>
                    <g id="g1988" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,335.088)" class="st20 st18 st19" id="text1986">25</text>
                    </g>
                    <g id="g1992" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,348.4213)" class="st20 st18 st19" id="text1990">26</text>
                    </g>
                    <g id="g1996" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,361.7546)" class="st20 st18 st19" id="text1994">27</text>
                    </g>
                    <g id="g2000" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,375.088)" class="st20 st18 st19" id="text1998">28</text>
                    </g>
                    <g id="g2004" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,388.4213)" class="st20 st18 st19" id="text2002">29</text>
                    </g>
                    <g id="g2008" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,401.7546)" class="st20 st18 st19" id="text2006">30</text>
                    </g>
                    <g id="g2012" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,414.088)" class="st20 st18 st19" id="text2010">31</text>
                    </g>
                    <g id="g2016" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,427.4213)" class="st20 st18 st19" id="text2014">32</text>
                    </g>
                    <g id="g2020" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,440.7546)" class="st20 st18 st19" id="text2018">33</text>
                    </g>
                    <g id="g2024" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,454.088)" class="st20 st18 st19" id="text2022">34</text>
                    </g>
                    <g id="g2028" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,467.4213)" class="st20 st18 st19" id="text2026">35</text>
                    </g>
                    <g id="g2032" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,480.7547)" class="st20 st18 st19" id="text2030">36</text>
                    </g>
                    <g id="g2036" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,494.088)" class="st20 st18 st19" id="text2034">37</text>
                    </g>
                    <g id="g2040" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,507.4214)" class="st20 st18 st19" id="text2038">38</text>
                    </g>
                    <g id="g2044" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,520.7547)" class="st59 st18 st19" id="text2042">39</text>
                    </g>
                    <g id="g2048" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,533.088)" class="st20 st18 st19" id="text2046">40</text>
                    </g>
                    <g id="g2052" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(501.9466,546.4209)" class="st20 st18 st19" id="text2050">41</text>
                    </g>
                    <g id="g2056" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(709.6125,528.088)" class="st20 st18 st19" id="text2054">296</text>
                    </g>
                    <g id="g2060" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(695.2795,528.2271)" class="st20 st18 st19" id="text2058">295</text>
                    </g>
                    <g id="g2064" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(681.946,528.2271)" class="st20 st18 st19" id="text2062">294</text>
                    </g>
                    <g id="g2068" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(669.6125,528.2271)" class="st59 st18 st19" id="text2066">293</text>
                    </g>
                    <g id="g2072" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(656.2795,528.2271)" class="st20 st18 st19" id="text2070">292</text>
                    </g>
                    <g id="g2076" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(642.946,528.2271)" class="st20 st18 st19" id="text2074">291</text>
                    </g>
                    <g id="g2080" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(629.6125,528.2271)" class="st59 st18 st19" id="text2078">290</text>
                    </g>
                    <g id="g2084" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(616.2795,528.2271)" class="st20 st18 st19" id="text2082">289</text>
                    </g>
                    <g id="g2088" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(602.946,528.2271)" class="st20 st18 st19" id="text2086">288</text>
                    </g>
                    <g id="g2092" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(589.6125,528.2271)" class="st59 st18 st19" id="text2090">287</text>
                    </g>
                    <g id="g2096" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(576.2795,528.2271)" class="st20 st18 st19" id="text2094">286</text>
                    </g>
                    <g id="g2100" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(562.946,528.2271)" class="st20 st18 st19" id="text2098">285</text>
                    </g>
                    <g id="g2104" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(551.6125,528.088)" class="st20 st18 st19" id="text2102">284</text>
                    </g>
                    <g id="g2108" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(710.7922,537.8575)" class="st17 st18 st19" id="text2106">C+</text>
                    </g>
                    <g id="g2112" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(697.2922,537.9966)" class="st17 st18 st19" id="text2110">A</text>
                    </g>
                    <g id="g2116" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(683.9587,537.9966)" class="st17 st18 st19" id="text2114">A</text>
                    </g>
                    <g id="g2120" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(671.6252,537.9966)" class="st17 st18 st19" id="text2118">A</text>
                    </g>
                    <g id="g2124" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(658.2922,537.9966)" class="st17 st18 st19" id="text2122">A</text>
                    </g>
                    <g id="g2128" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(644.9587,537.9966)" class="st17 st18 st19" id="text2126">A</text>
                    </g>
                    <g id="g2132" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(631.6252,537.9966)" class="st17 st18 st19" id="text2130">A</text>
                    </g>
                    <g id="g2136" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(618.2922,537.9966)" class="st17 st18 st19" id="text2134">A</text>
                    </g>
                    <g id="g2140" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(604.9587,537.9966)" class="st17 st18 st19" id="text2138">A</text>
                    </g>
                    <g id="g2144" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(591.6252,537.9966)" class="st17 st18 st19" id="text2142">A</text>
                    </g>
                    <g id="g2148" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(578.2922,537.9966)" class="st17 st18 st19" id="text2146">A</text>
                    </g>
                    <g id="g2152" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(564.9587,537.9966)" class="st17 st18 st19" id="text2150">A</text>
                    </g>
                    <g id="g2156" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(552.9158,537.8575)" class="st17 st18 st19" id="text2154">B+</text>
                    </g>
                    {{-- <polyline class="st60"
                        points="612.3,724 649.7,724 649.7,697.8 631.3,697.8 631.3,681 612.3,681 612.3,724 "
                        id="polyline2158" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)" />
                    <polyline class="st60"
                        points="535.2,692.5 535.2,713.5 526.3,713.5 526.3,725.6 516,725.6 516,680.5 527.9,680.5 527.9,692.5   535.2,692.5 "
                        id="polyline2160" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)" />
                    <g id="g2168" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <g id="g2166">
                            <polyline class="st60"
                                points="763.4,725.1 763.4,682 782.4,682 782.4,698.9 800.8,698.9 800.8,725.1 763.4,725.1   "
                                id="polyline2162" />
                            <rect x="782.40002" y="681.90002" class="st61" width="18.299999" height="16.9"
                                id="rect2164" />
                        </g>
                    </g>
                    <polyline class="st60" points="914.2,685.3 957.2,685.3 957.2,722.7 914.2,722.7 914.2,685.3 "
                        id="polyline2170" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)" /> --}}
                    {{-- <g id="g2174" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(521.2295,706.2578)" class="st17 st6 st10" id="text2172">A</text>
                    </g>
                    <g id="g2178" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(774.3977,711.2578)" class="st17 st6 st10" id="text2176">B+</text>
                    </g>
                    <g id="g2182" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(623.104,710.2578)" class="st17 st6 st10" id="text2180">D+</text>
                    </g>
                    <g id="g2186" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(928.1057,708.2578)" class="st17 st6 st10" id="text2184">C+</text>
                    </g> --}}
                    <text transform="rotate(-1.0491783)" class="st62 st63" id="text2188" x="581.89703" y="666.15527"
                        style="stroke-width:1.16198">CALLE 17-F</text>
                    <text transform="rotate(-1.0549071)" class="st62 st63" id="text2190" x="586.13116" y="566.76862"
                        style="stroke-width:1.16198">CALLE 17-D</text>
                    <text transform="rotate(-1.0325647)" class="st62 st64" id="text2192" x="591.58142" y="469.67453"
                        style="stroke-width:1.16197">CALLE 17-C</text>
                    <text transform="rotate(-1.0382935)" class="st62 st64" id="text2194" x="582.22137" y="267.35657"
                        style="stroke-width:1.16197">CALLE 17-A</text>
                    <text transform="rotate(-1.0165238)" class="st62 st63" id="text2196" x="583.74316" y="169.07407"
                        style="stroke-width:1.16196">CALLE 17</text>
                    <text transform="rotate(-1.0440224)" class="st62 st63" id="text2198" x="804.08289" y="635.8905"
                        style="stroke-width:1.16197">CALLE 17-E</text>
                    <text transform="rotate(-1.0440224)" class="st62 st63" id="text2200" x="808.99805" y="290.67664"
                        style="stroke-width:1.16197">CALLE 17-A</text>
                    <g id="g2218" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="matrix(-0.0116,-0.9999,0.9999,-0.0116,816.798,372.1736)" class="st62 st63"
                            id="text2202">2</text>
                        <text transform="matrix(-0.0116,-0.9999,0.9999,-0.0116,816.8475,376.4389)" class="st62 st63"
                            id="text2204">5</text>
                        <text transform="matrix(-0.0116,-0.9999,0.9999,-0.0116,816.8723,378.5716)" class="st62 st63"
                            id="text2206">
                        </text>
                        <text transform="matrix(-0.0116,-0.9999,0.9999,-0.0116,816.9316,383.6894)" class="st62 st63"
                            id="text2208">E</text>
                        <text transform="matrix(-0.0116,-0.9999,0.9999,-0.0116,816.9821,387.9557)" class="st62 st63"
                            id="text2210">L</text>
                        <text transform="matrix(-0.0116,-0.9999,0.9999,-0.0116,817.0306,392.221)" class="st62 st63"
                            id="text2212">L</text>
                        <text transform="matrix(-0.0116,-0.9999,0.9999,-0.0116,817.09,397.3398)" class="st62 st63"
                            id="text2214">A</text>
                        <text transform="matrix(-0.0116,-0.9999,0.9999,-0.0116,817.1543,402.8785)" class="st62 st63"
                            id="text2216">C</text>
                    </g>
                    <g id="g2236" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="matrix(-0.01218,-0.9999,0.9999,-0.01218,734.5749,370.8124)" class="st62 st64"
                            id="text2220">4</text>
                        <text transform="matrix(-0.01218,-0.9999,0.9999,-0.01218,734.6278,375.0778)" class="st62 st64"
                            id="text2222">5</text>
                        <text transform="matrix(-0.01218,-0.9999,0.9999,-0.01218,734.6528,377.2104)" class="st62 st64"
                            id="text2224">
                        </text>
                        <text transform="matrix(-0.01218,-0.9999,0.9999,-0.01218,734.7161,382.3282)" class="st62 st64"
                            id="text2226">E</text>
                        <text transform="matrix(-0.01218,-0.9999,0.9999,-0.01218,734.7681,386.5945)" class="st62 st64"
                            id="text2228">L</text>
                        <text transform="matrix(-0.01218,-0.9999,0.9999,-0.01218,734.8191,390.8599)" class="st62 st64"
                            id="text2230">L</text>
                        <text transform="matrix(-0.01218,-0.9999,0.9999,-0.01218,734.8814,395.9786)" class="st62 st64"
                            id="text2232">A</text>
                        <text transform="matrix(-0.01218,-0.9999,0.9999,-0.01218,734.9489,401.5193)" class="st62 st64"
                            id="text2234">C</text>
                    </g>
                    <g id="g2258" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,543.0647,442.8472)" class="st62 st63"
                            id="text2238">B</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,543.0948,445.4017)" class="st62 st63"
                            id="text2240">-</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,543.1451,449.668)" class="st62 st63"
                            id="text2242">4</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,543.1954,453.9344)" class="st62 st63"
                            id="text2244">5</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,543.2206,456.067)" class="st62 st63"
                            id="text2246">
                        </text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,543.2809,461.1848)" class="st62 st63"
                            id="text2248">E</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,543.3312,465.4511)" class="st62 st63"
                            id="text2250">L</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,543.3815,469.7174)" class="st62 st63"
                            id="text2252">L</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,543.4419,474.8343)" class="st62 st63"
                            id="text2254">A</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,543.5072,480.3749)" class="st62 st63"
                            id="text2256">C</text>
                    </g>
                    <g id="g2280" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,542.2512,191.7135)" class="st62 st63"
                            id="text2260">B</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,542.2814,194.2685)" class="st62 st63"
                            id="text2262">-</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,542.3317,198.5348)" class="st62 st63"
                            id="text2264">4</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,542.382,202.8001)" class="st62 st63"
                            id="text2266">5</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,542.4071,204.9333)" class="st62 st63"
                            id="text2268">
                        </text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,542.4675,210.0516)" class="st62 st63"
                            id="text2270">E</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,542.5178,214.3169)" class="st62 st63"
                            id="text2272">L</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,542.5681,218.5832)" class="st62 st63"
                            id="text2274">L</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,542.6284,223.7005)" class="st62 st63"
                            id="text2276">A</text>
                        <text transform="matrix(-0.01179,-0.9999,0.9999,-0.01179,542.6937,229.2407)" class="st62 st63"
                            id="text2278">C</text>
                    </g>
                    <text transform="rotate(-90.697898)" class="st62 st64" id="text2282" x="-528.02893" y="439.87073"
                        style="stroke-width:1.16198">CALLE 54-C</text>
                    <text transform="rotate(-90.697898)" class="st62 st64" id="text2284" x="-280.16943" y="442.50696"
                        style="stroke-width:1.16198">CALLE 54-C</text>
                    <text transform="rotate(-1.0549071)" class="st62 st63" id="text2286" x="482.31961" y="66.554695"
                        style="stroke-width:1.16198">CALLE 15-D</text>
                    <text transform="rotate(-90.697898)" class="st62 st64" id="text2288" x="-215.36635" y="369.26816"
                        style="stroke-width:1.16198">CALLE 56</text>
                    <text transform="rotate(-1.0491783)" class="st62 st63" id="text2290" x="583.20081" y="727.77435"
                        style="stroke-width:1.16198">CALLE 19</text>
                    <text transform="rotate(-1.0165238)" class="st62 st63" id="text2292" x="457.06561" y="376.32703"
                        style="stroke-width:1.16196">CALLE 17-B</text>
                    <g id="g3352" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <polyline class="st65" points="589.2,305.8 561,305.8 561,308.6 589.2,308.6 589.2,305.8  "
                            id="polyline2294" />
                        <polyline class="st65"
                            points="638.2,338.7 647.6,338.7 647.6,335.9 638.2,335.9 638.2,338.7  " id="polyline2296" />
                        <polyline class="st65"
                            points="654.6,298.5 653.6,298.5 653.6,302.2 654.6,302.2 654.6,298.5  " id="polyline2298" />
                        <polyline class="st65" points="651.7,303 650.8,303 650.8,306.7 651.7,306.7 651.7,303  "
                            id="polyline2300" />
                        <polyline class="st65"
                            points="652.7,301.5 651.7,301.5 651.7,305.2 652.7,305.2 652.7,301.5  " id="polyline2302" />
                        <polyline class="st65" points="650.8,303 647.6,303 647.6,306.7 650.8,306.7 650.8,303  "
                            id="polyline2304" />
                        <polyline class="st65"
                            points="697.8,322.7 661.7,322.8 661.7,335.9 697.8,335.9 697.8,322.7  " id="polyline2306" />
                        <path class="st65" d="m 705.6,276.9 c -1.1,-7.6 -7.8,-13.2 -15.5,-12.9" id="path2308" />
                        <line class="st65" x1="690.09998" y1="264" x2="579" y2="268.89999" id="line2310" />
                        <path class="st65" d="m 579,268.9 c -10.1,0.4 -18,8.7 -18,18.8" id="path2312" />
                        <line class="st65" x1="561" y1="287.70001" x2="561" y2="309" id="line2314" />
                        <path class="st65" d="m 561,309 c 0,5.2 4.2,9.4 9.3,9.4" id="path2316" />
                        <line class="st65" x1="570.29999" y1="318.39999" x2="584.79999" y2="318.5"
                            id="line2318" />
                        <path class="st65" d="m 597,323.2 c -3.4,-3 -7.7,-4.6 -12.2,-4.7" id="path2320" />
                        <line class="st65" x1="597" y1="323.20001" x2="609.29999" y2="335.79999" id="line2322" />
                        <path class="st65" d="m 609.3,335.8 c 2.8,2.9 6.7,4.7 10.8,4.8" id="path2324" />
                        <path class="st65" d="m 705.9,344.5 c 2.3,0.2 4.5,-0.7 6,-2.4 1.6,-1.7 2.3,-3.9 2,-6.2"
                            id="path2326" />
                        <line class="st65" x1="713.90002" y1="336" x2="705.59998" y2="276.89999" id="line2328" />
                        <path class="st65" d="m 664.2,332.6 c 0,0 0,0 0,0" id="path2330" />
                        <path class="st65" d="m 664.3,332.6 c 0,0 0,0 0,0" id="path2332" />
                        <path class="st65" d="m 664.3,332.6 c 0,0 0,0 0,0 0,0 0,-0.1 0,0" id="path2334" />
                        <path class="st65" d="m 664.3,332.5 c 0,0 0,0 0,0" id="path2336" />
                        <path class="st65" d="m 664.3,332.5 c 0,0 0,0 0,0" id="path2338" />
                        <line class="st65" x1="664.29999" y1="332.5" x2="664.29999" y2="332.5" id="line2340" />
                        <path class="st65" d="m 664.3,332.5 c 0,0 0,0 0,0" id="path2342" />
                        <path class="st65" d="m 664.3,332.5 c 0,0 0,0 0,0" id="path2344" />
                        <path class="st65" d="m 664.3,332.5 c 0,0 0.1,0 0,0" id="path2346" />
                        <path class="st65" d="m 664.4,332.5 c 0,0 0,0 0,0" id="path2348" />
                        <path class="st65" d="m 664.3,332.5 c 0,0 0,0 0,0" id="path2350" />
                        <path class="st65" d="m 664.3,332.5 c 0,0 0,0 0,0" id="path2352" />
                        <line class="st65" x1="664.29999" y1="332.5" x2="664.29999" y2="332.5" id="line2354" />
                        <path class="st65" d="m 664.3,332.5 c 0,0 0,0 0,0" id="path2356" />
                        <path class="st65" d="m 664.3,332.5 c 0,0 0,0 0,0" id="path2358" />
                        <line class="st65" x1="664.29999" y1="332.39999" x2="664.29999" y2="332.39999"
                            id="line2360" />
                        <path class="st65" d="m 664.3,332.4 c 0,0 0,0 0,0" id="path2362" />
                        <path class="st65" d="m 664.3,332.4 c 0,0 0,0 0,0" id="path2364" />
                        <line class="st65" x1="664.29999" y1="332.39999" x2="664.29999" y2="332.39999"
                            id="line2366" />
                        <line class="st65" x1="664.29999" y1="332.39999" x2="664.29999" y2="332.39999"
                            id="line2368" />
                        <path class="st65" d="m 664.3,332.4 c 0,0 0,0 0,0" id="path2370" />
                        <path class="st65" d="m 664.3,332.4 c 0,0 0,0 0,0" id="path2372" />
                        <line class="st65" x1="664.29999" y1="332.39999" x2="664.29999" y2="332.39999"
                            id="line2374" />
                        <path class="st65" d="m 664.3,332.4 c 0,0 0,0 0,0" id="path2376" />
                        <path class="st65" d="m 664.3,332.4 c 0,0 0,0 0,0" id="path2378" />
                        <line class="st65" x1="664.29999" y1="332.39999" x2="664.29999" y2="332.39999"
                            id="line2380" />
                        <line class="st65" x1="664.29999" y1="332.39999" x2="664.29999" y2="332.39999"
                            id="line2382" />
                        <path class="st65" d="m 664.3,332.3 c 0,0 0,0 0,0" id="path2384" />
                        <path class="st65" d="m 664.3,332.3 c 0,0 0,0 0,0" id="path2386" />
                        <path class="st65" d="m 664.3,332.3 c -0.1,0 -0.1,0 0,0" id="path2388" />
                        <line class="st65" x1="664.20001" y1="332.39999" x2="664.09998" y2="332.29999"
                            id="line2390" />
                        <path class="st65" d="m 664.1,332.3 c 0,0 0,0 0,0" id="path2392" />
                        <line class="st65" x1="664.09998" y1="332.29999" x2="664.09998" y2="332.29999"
                            id="line2394" />
                        <path class="st65" d="m 664.1,332.3 c -0.1,0 -0.1,0 0,0" id="path2396" />
                        <path class="st65" d="m 664,332.3 c 0,0 -0.1,0 0,0 -0.1,0 -0.1,0.1 0,0" id="path2398" />
                        <path class="st65" d="m 663.9,332.4 c 0.1,0 0.1,0 0,0" id="path2400" />
                        <path class="st65" d="m 664,332.4 c 0,0 0,0 0,0" id="path2402" />
                        <line class="st65" x1="664" y1="332.5" x2="664.09998" y2="332.5" id="line2404" />
                        <path class="st65" d="m 664.1,332.4 c 0,0 0,0 0,0" id="path2406" />
                        <path class="st65" d="m 664.1,332.5 c 0,0 0.1,0 0,0" id="path2408" />
                        <path class="st65" d="m 664.2,332.5 c 0,0 0,0.1 0,0" id="path2410" />
                        <path class="st65" d="m 664.3,332.6 c 0,0 -0.1,0 0,0" id="path2412" />
                        <path class="st65" d="m 664.3,332.6 c 0,0 0,0 0,0" id="path2414" />
                        <path class="st65" d="m 664.3,332.7 c 0,0 0,0 0,0 0,0 0,-0.1 0,0" id="path2416" />
                        <path class="st65" d="m 664.2,332.7 c 0,0 0,0 0,0" id="path2418" />
                        <path class="st65" d="m 664.2,332.7 c 0,0 0,0 0,0" id="path2420" />
                        <line class="st65" x1="664.20001" y1="332.70001" x2="664.20001" y2="332.70001"
                            id="line2422" />
                        <path class="st65" d="m 664.2,332.7 c 0,0 0,0 0,0" id="path2424" />
                        <path class="st65" d="m 664.2,332.7 c 0,0 0,0 0,0" id="path2426" />
                        <path class="st65" d="m 664.2,332.7 c 0,0 0,0 0,0" id="path2428" />
                        <path class="st65" d="m 664.2,332.7 c 0,0 0,0 0,0" id="path2430" />
                        <path class="st65" d="m 664.2,332.7 c 0,0 0,0 0,0" id="path2432" />
                        <path class="st65" d="m 664.2,332.7 c 0,0 0,0 0,0" id="path2434" />
                        <line class="st65" x1="664.20001" y1="332.70001" x2="664.20001" y2="332.70001"
                            id="line2436" />
                        <path class="st65" d="m 664.2,332.7 c 0,0 0,0 0,0" id="path2438" />
                        <path class="st65" d="m 664.2,332.8 c 0,-0.1 0,-0.1 0,0" id="path2440" />
                        <line class="st65" x1="664.20001" y1="332.79999" x2="664.20001" y2="332.79999"
                            id="line2442" />
                        <path class="st65" d="m 664.2,332.7 c 0,0 0,0 0,0" id="path2444" />
                        <path class="st65" d="m 664.1,332.7 c 0,0 0,0 0,0" id="path2446" />
                        <line class="st65" x1="664.09998" y1="332.70001" x2="664.09998" y2="332.70001"
                            id="line2448" />
                        <line class="st65" x1="664.09998" y1="332.70001" x2="664.09998" y2="332.70001"
                            id="line2450" />
                        <path class="st65" d="m 664.1,332.8 c 0,-0.1 0,-0.1 0,0" id="path2452" />
                        <path class="st65" d="m 664.1,332.8 c 0,0 0,0 0,0" id="path2454" />
                        <line class="st65" x1="664.09998" y1="332.79999" x2="664.09998" y2="332.79999"
                            id="line2456" />
                        <path class="st65" d="m 664.1,332.8 c 0,0 0,0 0,0" id="path2458" />
                        <path class="st65" d="m 664.1,332.7 c 0,0 0,0.1 0,0" id="path2460" />
                        <line class="st65" x1="664.09998" y1="332.79999" x2="664.09998" y2="332.79999"
                            id="line2462" />
                        <line class="st65" x1="664.09998" y1="332.79999" x2="664.09998" y2="332.79999"
                            id="line2464" />
                        <path class="st65" d="m 664,332.8 c 0,0 0,0 0,0" id="path2466" />
                        <path class="st65" d="m 664,332.7 c 0,0 0,0.1 0,0" id="path2468" />
                        <path class="st65" d="m 664,332.7 c 0,0 0,0 0,0" id="path2470" />
                        <line class="st65" x1="664" y1="332.70001" x2="664" y2="332.70001" id="line2472" />
                        <path class="st65" d="m 664,332.6 c 0,0 -0.1,0 0,0" id="path2474" />
                        <line class="st65" x1="663.90002" y1="332.60001" x2="663.90002" y2="332.60001"
                            id="line2476" />
                        <path class="st65" d="m 663.8,332.5 c 0.1,0.1 0.1,0.1 0,0" id="path2478" />
                        <path class="st65" d="m 663.9,332.5 c 0,0 0,0 0,0 0,0 0,0 0,0" id="path2480" />
                        <path class="st65" d="m 664,332.5 c -0.1,0 -0.1,0 0,0" id="path2482" />
                        <path class="st65" d="m 664,332.5 c 0,0 0,0 0,0" id="path2484" />
                        <line class="st65" x1="664" y1="332.5" x2="664" y2="332.60001" id="line2486" />
                        <path class="st65" d="m 664,332.5 c 0,0 0.1,0.1 0,0" id="path2488" />
                        <path class="st65" d="m 664.2,332.6 c -0.1,0 -0.1,0 0,0" id="path2490" />
                        <path class="st65" d="m 664.2,332.6 c 0,0 0,0 0,0" id="path2492" />
                        <path class="st65" d="m 666.3,333.7 c 0,0 0,0 0,0" id="path2494" />
                        <path class="st65" d="m 666.2,333.6 c 0,0 0,0.1 0,0" id="path2496" />
                        <path class="st65" d="m 666.3,333.6 c 0,0 -0.1,0 0,0 -0.1,0 -0.1,0 0,0" id="path2498" />
                        <path class="st65" d="m 666.3,333.6 c 0,0 0,0 0,0" id="path2500" />
                        <path class="st65" d="m 666.3,333.6 c 0,0 0,0 0,0" id="path2502" />
                        <line class="st65" x1="666.29999" y1="333.60001" x2="666.29999" y2="333.60001"
                            id="line2504" />
                        <path class="st65" d="m 666.3,333.6 c 0,0 0,0 0,0" id="path2506" />
                        <path class="st65" d="m 666.3,333.6 c 0,0 0,0 0,0" id="path2508" />
                        <path class="st65" d="m 666.3,333.5 c 0,0 0,0.1 0,0" id="path2510" />
                        <path class="st65" d="m 666.3,333.5 c 0,0 0,0 0,0" id="path2512" />
                        <path class="st65" d="m 666.3,333.6 c 0,0 0,0 0,0" id="path2514" />
                        <path class="st65" d="m 666.3,333.6 c 0,0 0.1,0 0,0" id="path2516" />
                        <line class="st65" x1="666.29999" y1="333.60001" x2="666.29999" y2="333.60001"
                            id="line2518" />
                        <path class="st65" d="m 666.4,333.6 c 0,0 0,0 0,0" id="path2520" />
                        <path class="st65" d="m 666.3,333.5 c 0,0 0,0.1 0,0" id="path2522" />
                        <line class="st65" x1="666.29999" y1="333.5" x2="666.29999" y2="333.5" id="line2524" />
                        <path class="st65" d="m 666.4,333.5 c 0,0 0,0 0,0" id="path2526" />
                        <path class="st65" d="m 666.4,333.6 c 0,-0.1 0,-0.1 0,0" id="path2528" />
                        <line class="st65" x1="666.40002" y1="333.60001" x2="666.40002" y2="333.60001"
                            id="line2530" />
                        <line class="st65" x1="666.40002" y1="333.60001" x2="666.40002" y2="333.60001"
                            id="line2532" />
                        <path class="st65" d="m 666.4,333.5 c 0,0 0,0 0,0" id="path2534" />
                        <path class="st65" d="m 666.4,333.5 c 0,0 0,0 0,0" id="path2536" />
                        <line class="st65" x1="666.40002" y1="333.5" x2="666.40002" y2="333.5" id="line2538" />
                        <path class="st65" d="m 666.4,333.5 c 0,0 0,0 0,0" id="path2540" />
                        <path class="st65" d="m 666.4,333.5 c 0,0 0,0 0,0" id="path2542" />
                        <line class="st65" x1="666.40002" y1="333.5" x2="666.40002" y2="333.5" id="line2544" />
                        <line class="st65" x1="666.40002" y1="333.5" x2="666.40002" y2="333.5" id="line2546" />
                        <path class="st65" d="m 666.5,333.5 c 0,0 0,0 0,0" id="path2548" />
                        <path class="st65" d="m 666.5,333.5 c 0,0 0,0 0,0" id="path2550" />
                        <path class="st65" d="m 666.5,333.6 c 0,0 0,0 0,0" id="path2552" />
                        <line class="st65" x1="666.5" y1="333.60001" x2="666.5" y2="333.60001" id="line2554" />
                        <path class="st65" d="m 666.5,333.6 c 0.1,0 0.1,0.1 0,0" id="path2556" />
                        <line class="st65" x1="666.59998" y1="333.70001" x2="666.59998" y2="333.70001"
                            id="line2558" />
                        <path class="st65" d="m 666.7,333.7 c 0,0 0,0 0,0" id="path2560" />
                        <path class="st65" d="m 666.6,333.8 c 0,0 0,0 0,0 0.1,0 0.1,0 0,0" id="path2562" />
                        <path class="st65" d="m 666.6,333.8 c 0,0 0,0 0,0" id="path2564" />
                        <path class="st65" d="m 666.5,333.8 c 0,0 0,0 0,0" id="path2566" />
                        <line class="st65" x1="666.5" y1="333.79999" x2="666.5" y2="333.70001" id="line2568" />
                        <path class="st65" d="m 666.5,333.7 c 0,0 0,0 0,0" id="path2570" />
                        <path class="st65" d="m 666.4,333.7 c 0,0 0,0 0,0" id="path2572" />
                        <path class="st65" d="m 666.3,333.7 c 0,0 0,0 0,0" id="path2574" />
                        <path class="st65" d="m 666.3,333.7 c 0,0 0,0 0,0" id="path2576" />
                        <path class="st65" d="m 666.2,333.7 c 0,0 0,0 0,0" id="path2578" />
                        <path class="st65" d="m 666.2,333.7 c 0,0 0,0 0,0 0,0 0,0 0,0" id="path2580" />
                        <path class="st65" d="m 666.2,333.7 c 0,0.1 0,0.1 0,0" id="path2582" />
                        <path class="st65" d="m 666.2,333.8 c 0,0 0,0 0,0" id="path2584" />
                        <line class="st65" x1="666.20001" y1="333.79999" x2="666.20001" y2="333.79999"
                            id="line2586" />
                        <path class="st65" d="m 666.2,333.8 c 0,0 0,0 0,0" id="path2588" />
                        <path class="st65" d="m 666.2,333.8 c 0,0 0,-0.1 0,0" id="path2590" />
                        <path class="st65" d="m 666.2,333.8 c 0,0 0,0 0,0" id="path2592" />
                        <path class="st65" d="m 666.2,333.8 c 0,0 0,0 0,0" id="path2594" />
                        <path class="st65" d="m 666.2,333.8 c 0,0 0,0 0,0" id="path2596" />
                        <path class="st65" d="m 666.2,333.8 c 0,0 0,0 0,0" id="path2598" />
                        <line class="st65" x1="666.20001" y1="333.79999" x2="666.20001" y2="333.79999"
                            id="line2600" />
                        <path class="st65" d="m 666.2,333.8 c 0,0 0,0 0,0" id="path2602" />
                        <path class="st65" d="m 666.2,333.8 c 0,0 0,0 0,0" id="path2604" />
                        <line class="st65" x1="666.20001" y1="333.79999" x2="666.20001" y2="333.79999"
                            id="line2606" />
                        <path class="st65" d="m 666.2,333.8 c 0,0 0,0 0,0" id="path2608" />
                        <path class="st65" d="m 666.2,333.8 c 0,0 0,0 0,0" id="path2610" />
                        <line class="st65" x1="666.20001" y1="333.89999" x2="666.20001" y2="333.89999"
                            id="line2612" />
                        <line class="st65" x1="666.20001" y1="333.89999" x2="666.20001" y2="333.89999"
                            id="line2614" />
                        <path class="st65" d="m 666.2,333.9 c 0,0 0,0 0,0" id="path2616" />
                        <path class="st65" d="m 666.2,333.8 c 0,0.1 0,0.1 0,0" id="path2618" />
                        <line class="st65" x1="666.20001" y1="333.89999" x2="666.20001" y2="333.89999"
                            id="line2620" />
                        <path class="st65" d="m 666.2,333.9 c 0,0 0,0 0,0" id="path2622" />
                        <path class="st65" d="m 666.2,333.9 c 0,0 0,0 0,0" id="path2624" />
                        <line class="st65" x1="666.20001" y1="333.89999" x2="666.20001" y2="333.89999"
                            id="line2626" />
                        <line class="st65" x1="666.20001" y1="333.89999" x2="666.20001" y2="333.89999"
                            id="line2628" />
                        <path class="st65" d="m 666.2,333.9 c 0,0 0,0.1 0,0" id="path2630" />
                        <path class="st65" d="m 666.2,333.9 c 0,0 0.1,0 0,0" id="path2632" />
                        <path class="st65" d="m 666.3,333.9 c 0,0 0,0 0,0" id="path2634" />
                        <line class="st65" x1="666.29999" y1="333.89999" x2="666.40002" y2="333.89999"
                            id="line2636" />
                        <path class="st65" d="m 666.4,334 c 0,-0.1 0,-0.1 0,0" id="path2638" />
                        <line class="st65" x1="666.40002" y1="334" x2="666.40002" y2="334" id="line2640" />
                        <path class="st65" d="m 666.5,334 c 0,0 0,0 0,0" id="path2642" />
                        <path class="st65" d="m 666.5,334 c 0.1,0 0.1,0 0,0 0.1,-0.1 0.1,-0.1 0,0"
                            id="path2644" />
                        <path class="st65" d="m 666.6,333.9 c 0,0 0,0 0,0" id="path2646" />
                        <path class="st65" d="m 666.5,333.8 c 0,0 0,0 0,0" id="path2648" />
                        <line class="st65" x1="666.5" y1="333.79999" x2="666.40002" y2="333.79999"
                            id="line2650" />
                        <path class="st65" d="m 666.4,333.8 c 0,0 0,0 0,0" id="path2652" />
                        <path class="st65" d="m 666.4,333.8 c 0,0 -0.1,0 0,0" id="path2654" />
                        <path class="st65" d="m 666.3,333.8 c 0,-0.1 0,-0.1 0,0" id="path2656" />
                        <path class="st65"
                            d="m 664,333.4 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.1,0.1 0.3,0 0.4,-0.1"
                            id="path2658" />
                        <path class="st65"
                            d="m 664.8,331.9 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.1,0.1 0.3,0 0.4,-0.1"
                            id="path2660" />
                        <path class="st65"
                            d="m 663.6,332.2 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.2,0.1 0.3,0.1 0.4,-0.1"
                            id="path2662" />
                        <path class="st65"
                            d="m 665.1,333.1 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.1,0.1 0.3,0 0.4,-0.1"
                            id="path2664" />
                        <path class="st65"
                            d="m 664.1,331.8 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.2,0.1 0.3,0.1 0.4,-0.1"
                            id="path2666" />
                        <path class="st65"
                            d="m 663.5,332.9 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.2,0.1 0.4,0 0.4,-0.1"
                            id="path2668" />
                        <path class="st65"
                            d="m 665.2,332.4 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.1,0.1 0.3,0 0.4,-0.1"
                            id="path2670" />
                        <path class="st65"
                            d="m 664.6,333.5 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.1,0.1 0.3,0 0.4,-0.1"
                            id="path2672" />
                        <path class="st65"
                            d="m 666.3,334.6 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.1,0.1 0.3,0.1 0.4,-0.1"
                            id="path2674" />
                        <path class="st65"
                            d="m 667.1,333.2 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.1,0.1 0.3,0 0.4,-0.1"
                            id="path2676" />
                        <path class="st65"
                            d="m 667.4,334.3 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.2,0.1 0.3,0 0.4,-0.1"
                            id="path2678" />
                        <path class="st65"
                            d="m 665.9,333.5 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.2,0.1 0.4,0 0.4,-0.1"
                            id="path2680" />
                        <path class="st65"
                            d="m 667.5,333.7 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.1,0.1 0.3,0 0.4,-0.1"
                            id="path2682" />
                        <path class="st65"
                            d="m 666.9,334.7 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.2,0.1 0.3,0.1 0.4,-0.1"
                            id="path2684" />
                        <path class="st65"
                            d="m 666.4,333.1 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.2,0.1 0.4,0 0.4,-0.1"
                            id="path2686" />
                        <path class="st65"
                            d="m 665.9,334.1 c 0.1,-0.1 0,-0.3 -0.1,-0.4 -0.1,-0.1 -0.3,0 -0.4,0.1 -0.1,0.1 0,0.3 0.1,0.4 0.1,0.1 0.3,0.1 0.4,-0.1"
                            id="path2688" />
                        <path class="st65"
                            d="m 565.1,300.6 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2690" />
                        <path class="st65"
                            d="m 572.5,298.3 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.3 0.5,-0.5"
                            id="path2692" />
                        <path class="st65"
                            d="m 572.5,303 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.3 0.5,-0.5"
                            id="path2694" />
                        <path class="st65" d="m 708.4,276.5 c -1.3,-9.1 -9.2,-15.7 -18.4,-15.4" id="path2696" />
                        <line class="st65" x1="690" y1="261.20001" x2="578.90002" y2="266.10001" id="line2698" />
                        <path class="st65" d="m 578.9,266.1 c -11.6,0.5 -20.7,10 -20.7,21.6" id="path2700" />
                        <line class="st65" x1="558.20001" y1="287.70001" x2="558.20001" y2="309" id="line2702" />
                        <path class="st65" d="m 558.2,309 c 0,6.7 5.4,12.2 12.1,12.2" id="path2704" />
                        <line class="st65" x1="570.29999" y1="321.20001" x2="584.70001" y2="321.29999"
                            id="line2706" />
                        <path class="st65" d="m 595.1,325.2 c -2.9,-2.5 -6.5,-3.9 -10.3,-3.9" id="path2708" />
                        <line class="st65" x1="595.09998" y1="325.20001" x2="607.29999" y2="337.79999"
                            id="line2710" />
                        <path class="st65" d="m 607.3,337.8 c 3.3,3.4 7.9,5.5 12.6,5.7" id="path2712" />
                        <path class="st65" d="m 705.8,347.4 c 3.1,0.2 6.2,-1 8.3,-3.3 2.1,-2.3 3.1,-5.4 2.7,-8.5"
                            id="path2714" />
                        <line class="st65" x1="716.70001" y1="335.60001" x2="708.40002" y2="276.5"
                            id="line2716" />
                        <path class="st65"
                            d="m 555.8,299.6 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.3 0.5,-0.5"
                            id="path2718" />
                        <path class="st65"
                            d="m 554,304.5 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.3 0.5,-0.5"
                            id="path2720" />
                        <polyline class="st65" points="613.7,271 589.2,271 589.2,295.5 613.7,295.4 613.7,271  "
                            id="polyline2722" />
                        <polyline class="st65"
                            points="610.9,273.8 592.1,273.8 592.1,292.6 610.9,292.6 610.9,273.8  " id="polyline2724" />
                        <path class="st65"
                            d="m 579.2,300.6 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2726" />
                        <path class="st65"
                            d="m 586.6,298.3 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.3 0.5,-0.5"
                            id="path2728" />
                        <path class="st65"
                            d="m 586.6,303 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.3 0.5,-0.5"
                            id="path2730" />
                        <path class="st65"
                            d="m 601.9,299.2 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2732" />
                        <path class="st65"
                            d="m 594.4,299.2 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2734" />
                        <path class="st65"
                            d="m 609.5,299.2 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2736" />
                        <polyline class="st65"
                            points="639.7,284.6 613.7,284.6 613.7,308.6 639.7,308.6 639.7,284.6  " id="polyline2738" />
                        <polyline class="st65"
                            points="638.2,308.6 613.7,308.6 613.7,335.9 638.2,335.9 638.2,308.6  " id="polyline2740" />
                        <polyline class="st65"
                            points="635.3,314.3 616.5,314.3 616.5,333.1 635.3,333.1 635.3,314.3  " id="polyline2742" />
                        <path class="st65"
                            d="m 626.4,311.4 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2744" />
                        <path class="st65"
                            d="m 618.4,311.4 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2746" />
                        <path class="st65"
                            d="m 634.4,311.4 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2748" />
                        <path class="st65"
                            d="m 643.4,301.1 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.3 0.5,-0.5"
                            id="path2750" />
                        <path class="st65"
                            d="m 643.4,330.3 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.3 0.5,-0.5"
                            id="path2752" />
                        <path class="st65"
                            d="m 643.4,320.5 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2754" />
                        <path class="st65"
                            d="m 643.4,310.8 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2756" />
                        <path class="st65"
                            d="m 651.7,327.9 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2758" />
                        <path class="st65"
                            d="m 659.1,325.6 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,-0.1 0.5,-0.3 0.5,-0.5"
                            id="path2760" />
                        <path class="st65"
                            d="m 659.1,330.3 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,-0.1 0.5,-0.3 0.5,-0.5"
                            id="path2762" />
                        <path class="st65"
                            d="m 701.9,327.9 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2764" />
                        <path class="st65"
                            d="m 709.4,325.6 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.3 0.5,-0.5"
                            id="path2766" />
                        <path class="st65"
                            d="m 709.4,330.3 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,-0.1 0.5,-0.3 0.5,-0.5"
                            id="path2768" />
                        <path class="st65"
                            d="m 719.2,327.9 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path2770" />
                        <polyline class="st65"
                            points="649.8,306.7 647.6,306.7 647.6,320.2 649.8,320.2 649.8,306.7  " id="polyline2772" />
                        <polyline class="st65"
                            points="649.8,320.2 647.6,320.2 647.6,322.5 649.8,322.5 649.8,320.2  " id="polyline2774" />
                        <polyline class="st65"
                            points="658.7,295.4 656.4,295.4 656.4,322.5 658.7,322.5 658.7,295.4  " id="polyline2776" />
                        <polyline class="st65"
                            points="656.4,320.2 649.8,320.2 649.8,322.5 656.4,322.5 656.4,320.2  " id="polyline2778" />
                        <polyline class="st65" points="653.6,300 652.7,300 652.7,303.7 653.6,303.7 653.6,300  "
                            id="polyline2780" />
                        <polyline class="st65"
                            points="656.4,295.4 655.5,295.4 655.5,299.2 656.4,299.2 656.4,295.4  " id="polyline2782" />
                        <polyline class="st65"
                            points="661.7,322.8 658.7,322.8 658.7,323.4 655.5,323.4 654.1,333.1 661.7,333.1 661.7,322.8  "
                            id="polyline2784" />
                        <polyline class="st65"
                            points="655.5,323.4 647.6,323.4 647.6,333.1 654.1,333.1 655.5,323.4  " id="polyline2786" />
                        <polyline class="st65"
                            points="647.6,295.4 638.2,295.4 638.2,335.9 647.6,335.9 647.6,323.4 647.3,323.4 647.3,306.7 647.6,306.7    647.6,295.4  "
                            id="polyline2788" />
                        <polyline class="st65"
                            points="575.1,295.5 569,295.5 567.5,305.8 575.1,305.8 575.1,295.5  " id="polyline2790" />
                        <polyline class="st65" points="569,295.5 561,295.5 561,305.8 567.5,305.8 569,295.5  "
                            id="polyline2792" />
                        <polyline class="st65"
                            points="583.1,295.5 575.1,295.5 575.1,305.8 581.6,305.8 583.1,295.5  " id="polyline2794" />
                        <polyline class="st65"
                            points="589.2,295.5 583.1,295.5 581.6,305.8 589.2,305.8 589.2,295.5  " id="polyline2796" />
                        <polyline class="st65"
                            points="613.7,295.4 589.2,295.5 589.2,308.6 613.7,308.6 613.7,295.4  " id="polyline2798" />
                        <polyline class="st65" points="616.8,270.2 614,270.2 614,284.2 616.8,284.2 616.8,270.2  "
                            id="polyline2800" />
                        <polyline class="st65" points="616.8,267.2 614,267.3 614,270.2 616.8,270.2 616.8,267.2  "
                            id="polyline2802" />
                        <polyline class="st65"
                            points="661.7,333.1 647.6,333.1 647.6,335.9 661.7,335.9 661.7,333.1  " id="polyline2804" />
                        <polyline class="st65"
                            points="713.5,333.1 697.8,333.1 697.8,335.9 713.9,335.9 713.5,333.1  " id="polyline2806" />
                        <polyline class="st65"
                            points="705.8,322.7 697.8,322.7 697.8,322.8 697.8,333.1 704.4,333.1 705.8,322.7  "
                            id="polyline2808" />
                        <polyline class="st65" points="712,322.7 705.8,322.7 704.4,333.1 713.5,333.1 712,322.7  "
                            id="polyline2810" />
                        <polyline class="st65"
                            points="647.6,292.1 638.9,292.1 638.9,293.7 647.6,293.7 647.6,292.1  " id="polyline2812" />
                        <polyline class="st65"
                            points="647.6,293.7 638.9,293.7 638.9,295.4 647.6,295.4 647.6,293.7  " id="polyline2814" />
                        <polyline class="st65"
                            points="725.7,318 721,313.3 721,266.2 725.7,261.5 725.7,227.5 721.9,223.7 621.2,223.7 550.6,223.7    546.9,227.5 546.9,261.5 551.6,266.2 551.6,286.9 546.9,291.6 546.9,379.9 550.6,383.7 621.2,383.7 721.9,383.7 725.7,379.9    725.7,318  "
                            id="polyline2816" />
                        <path class="st65" d="m 673.7,324 c 0,0.1 0.1,0.1 0,0" id="path2818" />
                        <path class="st65" d="m 673.8,324.1 c 0,0 0,0 0,0" id="path2820" />
                        <path class="st65" d="m 673.8,324.1 c 0,0 0,-0.1 0,0 0,-0.1 0,-0.1 0,0" id="path2822" />
                        <path class="st65" d="m 673.8,324 c 0,0 0,0 0,0" id="path2824" />
                        <path class="st65" d="m 673.7,324 c 0,0 0,0 0,0" id="path2826" />
                        <line class="st65" x1="673.70001" y1="324" x2="673.70001" y2="324" id="line2828" />
                        <path class="st65" d="m 673.8,324 c -0.1,0 -0.1,0 0,0" id="path2830" />
                        <path class="st65" d="m 673.7,324 c 0,0 0.1,0 0,0" id="path2832" />
                        <path class="st65" d="m 673.8,324 c 0,0 0,0 0,0" id="path2834" />
                        <path class="st65" d="m 673.8,323.9 c 0,0 0,0 0,0" id="path2836" />
                        <path class="st65" d="m 673.8,323.9 c 0,0 0,0 0,0" id="path2838" />
                        <path class="st65" d="m 673.7,323.9 c 0,0 0,0 0,0" id="path2840" />
                        <line class="st65" x1="673.70001" y1="323.89999" x2="673.70001" y2="323.89999"
                            id="line2842" />
                        <path class="st65" d="m 673.7,323.9 c 0,0 0,0 0,0" id="path2844" />
                        <path class="st65" d="m 673.7,323.9 c 0,0 0.1,0 0,0" id="path2846" />
                        <line class="st65" x1="673.70001" y1="323.89999" x2="673.70001" y2="323.89999"
                            id="line2848" />
                        <path class="st65" d="m 673.7,323.9 c 0,0 0,0 0,0" id="path2850" />
                        <path class="st65" d="m 673.7,323.9 c 0,0 0,0 0,0" id="path2852" />
                        <line class="st65" x1="673.70001" y1="323.89999" x2="673.70001" y2="323.89999"
                            id="line2854" />
                        <line class="st65" x1="673.70001" y1="323.89999" x2="673.70001" y2="323.89999"
                            id="line2856" />
                        <path class="st65" d="m 673.7,323.9 c 0,0 0,0 0,0" id="path2858" />
                        <path class="st65" d="m 673.7,323.9 c 0,0 0,0 0,0" id="path2860" />
                        <line class="st65" x1="673.70001" y1="323.89999" x2="673.70001" y2="323.89999"
                            id="line2862" />
                        <path class="st65" d="m 673.7,323.8 c 0,0 0,0.1 0,0" id="path2864" />
                        <path class="st65" d="m 673.7,323.9 c 0,0 0,0 0,0" id="path2866" />
                        <line class="st65" x1="673.70001" y1="323.89999" x2="673.70001" y2="323.89999"
                            id="line2868" />
                        <line class="st65" x1="673.70001" y1="323.89999" x2="673.70001" y2="323.89999"
                            id="line2870" />
                        <path class="st65" d="m 673.7,323.8 c 0,0 0,0 0,0" id="path2872" />
                        <path class="st65" d="m 673.6,323.8 c 0,0 0,0.1 0,0" id="path2874" />
                        <path class="st65" d="m 673.6,323.9 c 0,0 0,0 0,0" id="path2876" />
                        <line class="st65" x1="673.59998" y1="323.89999" x2="673.5" y2="323.89999"
                            id="line2878" />
                        <path class="st65" d="m 673.5,323.9 c 0,0 0,0 0,0" id="path2880" />
                        <line class="st65" x1="673.5" y1="323.89999" x2="673.40002" y2="323.89999"
                            id="line2882" />
                        <path class="st65" d="m 673.4,323.9 c 0,0 0,0 0,0" id="path2884" />
                        <path class="st65" d="m 673.4,324 c -0.1,0 -0.1,0 0,0 -0.1,0 0,0 0,0" id="path2886" />
                        <path class="st65" d="m 673.4,324 c 0,0 0,0 0,0" id="path2888" />
                        <path class="st65" d="m 673.4,324.1 c 0,0 0.1,0 0,0" id="path2890" />
                        <line class="st65" x1="673.5" y1="324.10001" x2="673.5" y2="324" id="line2892" />
                        <path class="st65" d="m 673.6,324 c 0,0 -0.1,0 0,0" id="path2894" />
                        <path class="st65" d="m 673.6,324 c 0,0 0,0.1 0,0" id="path2896" />
                        <path class="st65" d="m 673.7,324.1 c 0,0 0,0 0,0" id="path2898" />
                        <path class="st65" d="m 673.8,324.1 c 0,0 -0.1,0 0,0" id="path2900" />
                        <path class="st65" d="m 673.8,324.1 c 0,0 0,0 0,0" id="path2902" />
                        <path class="st65" d="m 673.8,324.2 c 0,0 0,0 0,0 0,-0.1 0,-0.1 0,0" id="path2904" />
                        <path class="st65" d="m 673.7,324.2 c 0.1,0 0.1,0 0,0" id="path2906" />
                        <path class="st65" d="m 673.8,324.2 c -0.1,0 -0.1,0 0,0" id="path2908" />
                        <line class="st65" x1="673.70001" y1="324.20001" x2="673.70001" y2="324.20001"
                            id="line2910" />
                        <path class="st65" d="m 673.7,324.2 c 0,0 0,0 0,0" id="path2912" />
                        <path class="st65" d="m 673.8,324.2 c 0,0 -0.1,0 0,0" id="path2914" />
                        <path class="st65" d="m 673.8,324.2 c 0,0 0,0 0,0" id="path2916" />
                        <path class="st65" d="m 673.8,324.2 c 0,0 0,0 0,0" id="path2918" />
                        <path class="st65" d="m 673.7,324.2 c 0.1,0 0.1,0 0,0" id="path2920" />
                        <path class="st65" d="m 673.7,324.2 c 0,0 0,0 0,0" id="path2922" />
                        <line class="st65" x1="673.70001" y1="324.20001" x2="673.70001" y2="324.20001"
                            id="line2924" />
                        <path class="st65" d="m 673.7,324.2 c 0,0 0,0 0,0" id="path2926" />
                        <path class="st65" d="m 673.8,324.3 c 0,-0.1 -0.1,-0.1 0,0" id="path2928" />
                        <line class="st65" x1="673.70001" y1="324.29999" x2="673.70001" y2="324.29999"
                            id="line2930" />
                        <path class="st65" d="m 673.7,324.3 c 0,0 0,0 0,0" id="path2932" />
                        <path class="st65" d="m 673.7,324.3 c 0,0 0,0 0,0" id="path2934" />
                        <line class="st65" x1="673.70001" y1="324.29999" x2="673.70001" y2="324.29999"
                            id="line2936" />
                        <line class="st65" x1="673.70001" y1="324.29999" x2="673.70001" y2="324.29999"
                            id="line2938" />
                        <path class="st65" d="m 673.7,324.3 c 0,0 0,0 0,0" id="path2940" />
                        <path class="st65" d="m 673.7,324.3 c 0,0 0,0 0,0" id="path2942" />
                        <line class="st65" x1="673.70001" y1="324.29999" x2="673.70001" y2="324.29999"
                            id="line2944" />
                        <path class="st65" d="m 673.7,324.3 c 0,0 0,0 0,0" id="path2946" />
                        <path class="st65" d="m 673.7,324.3 c 0,0 0,0 0,0" id="path2948" />
                        <line class="st65" x1="673.70001" y1="324.29999" x2="673.70001" y2="324.29999"
                            id="line2950" />
                        <line class="st65" x1="673.70001" y1="324.29999" x2="673.70001" y2="324.29999"
                            id="line2952" />
                        <path class="st65" d="m 673.6,324.3 c 0.1,0 0.1,0 0,0" id="path2954" />
                        <path class="st65" d="m 673.6,324.3 c 0,0 0,0 0,0" id="path2956" />
                        <path class="st65" d="m 673.6,324.3 c 0,0 0,0 0,0" id="path2958" />
                        <line class="st65" x1="673.59998" y1="324.29999" x2="673.5" y2="324.29999"
                            id="line2960" />
                        <path class="st65" d="m 673.5,324.3 c 0,-0.1 0,-0.1 0,0" id="path2962" />
                        <line class="st65" x1="673.5" y1="324.29999" x2="673.40002" y2="324.29999"
                            id="line2964" />
                        <path class="st65" d="m 673.4,324.2 c 0,0.1 0,0.1 0,0" id="path2966" />
                        <path class="st65" d="m 673.4,324.1 c 0,0 -0.1,0.1 0,0 -0.1,0.1 -0.1,0.1 0,0"
                            id="path2968" />
                        <path class="st65" d="m 673.4,324.1 c 0,0 0,0 0,0" id="path2970" />
                        <path class="st65" d="m 673.5,324.1 c 0,0 -0.1,0 0,0" id="path2972" />
                        <line class="st65" x1="673.5" y1="324.10001" x2="673.5" y2="324.10001" id="line2974" />
                        <path class="st65" d="m 673.5,324.1 c 0,0 0.1,0 0,0" id="path2976" />
                        <path class="st65" d="m 673.7,324.1 c -0.1,0 -0.1,0 0,0" id="path2978" />
                        <path class="st65" d="m 673.7,324.1 c 0,0 0,0 0,0" id="path2980" />
                        <path class="st65" d="m 676,324.1 c 0,0 0,0 0,0" id="path2982" />
                        <path class="st65" d="m 676,324.1 c 0,0 0,0 0,0" id="path2984" />
                        <path class="st65" d="m 676,324 c 0,0 0,0 0,0 0,0 0,0.1 0,0" id="path2986" />
                        <path class="st65" d="m 676,324 c 0,0 0,0 0,0" id="path2988" />
                        <path class="st65" d="m 676,324 c 0,0 0,0 0,0" id="path2990" />
                        <line class="st65" x1="676" y1="324" x2="676" y2="324" id="line2992" />
                        <path class="st65" d="m 676.1,324 c -0.1,0 -0.1,0 0,0" id="path2994" />
                        <path class="st65" d="m 676,324 c 0,0 0,0 0,0" id="path2996" />
                        <path class="st65" d="m 676,324 c 0,0 0,0 0,0" id="path2998" />
                        <path class="st65" d="m 676,323.9 c 0,0 0,0 0,0" id="path3000" />
                        <path class="st65" d="m 676,324 c 0,-0.1 0,-0.1 0,0" id="path3002" />
                        <path class="st65" d="m 676.1,323.9 c 0,0 0,0 0,0" id="path3004" />
                        <line class="st65" x1="676" y1="323.89999" x2="676" y2="323.89999" id="line3006" />
                        <path class="st65" d="m 676.1,323.9 c 0,0 0,0 0,0" id="path3008" />
                        <path class="st65" d="m 676,323.9 c 0,0 0,0 0,0" id="path3010" />
                        <line class="st65" x1="676" y1="323.89999" x2="676" y2="323.89999" id="line3012" />
                        <path class="st65" d="m 676.1,323.9 c 0,0 0,0 0,0" id="path3014" />
                        <path class="st65" d="m 676.1,323.9 c 0,0 0,0 0,0" id="path3016" />
                        <line class="st65" x1="676.09998" y1="323.89999" x2="676.09998" y2="323.89999"
                            id="line3018" />
                        <line class="st65" x1="676.09998" y1="323.89999" x2="676.09998" y2="323.89999"
                            id="line3020" />
                        <path class="st65" d="m 676.1,323.9 c 0,0 0,0 0,0" id="path3022" />
                        <path class="st65" d="m 676,323.9 c 0,0 0.1,0 0,0" id="path3024" />
                        <line class="st65" x1="676.09998" y1="323.89999" x2="676.09998" y2="323.89999"
                            id="line3026" />
                        <path class="st65" d="m 676.1,323.9 c 0,0 0,-0.1 0,0" id="path3028" />
                        <path class="st65" d="m 676.1,323.9 c 0,0 0,0 0,0" id="path3030" />
                        <line class="st65" x1="676.09998" y1="323.89999" x2="676.09998" y2="323.89999"
                            id="line3032" />
                        <line class="st65" x1="676.09998" y1="323.89999" x2="676.09998" y2="323.89999"
                            id="line3034" />
                        <path class="st65" d="m 676.1,323.8 c 0,0 0,0 0,0" id="path3036" />
                        <path class="st65" d="m 676.1,323.9 c 0,0 0,-0.1 0,0" id="path3038" />
                        <path class="st65" d="m 676.2,323.9 c 0,0 0,0 0,0" id="path3040" />
                        <line class="st65" x1="676.20001" y1="323.89999" x2="676.20001" y2="323.89999"
                            id="line3042" />
                        <path class="st65" d="m 676.2,323.9 c 0.1,0 0.1,0 0,0" id="path3044" />
                        <line class="st65" x1="676.29999" y1="323.89999" x2="676.29999" y2="323.89999"
                            id="line3046" />
                        <path class="st65" d="m 676.4,323.9 c 0,0 0,0 0,0" id="path3048" />
                        <path class="st65" d="m 676.4,324.1 c 0,-0.1 0,-0.1 0,0 0,-0.1 0,-0.1 0,0"
                            id="path3050" />
                        <path class="st65" d="m 676.4,324 c 0,0 0,0 0,0" id="path3052" />
                        <path class="st65" d="m 676.3,324.1 c 0,0 0,0 0,0" id="path3054" />
                        <line class="st65" x1="676.29999" y1="324.10001" x2="676.20001" y2="324"
                            id="line3056" />
                        <path class="st65" d="m 676.3,324 c -0.1,0 -0.1,0 0,0" id="path3058" />
                        <path class="st65" d="m 676.1,324.1 c 0.1,0 0.1,-0.1 0,0" id="path3060" />
                        <path class="st65" d="m 676.1,324.1 c 0,0 0,0 0,0" id="path3062" />
                        <path class="st65" d="m 676.1,324.1 c -0.1,0 -0.1,0 0,0" id="path3064" />
                        <path class="st65" d="m 676,324.1 c 0,0 0,0 0,0" id="path3066" />
                        <path class="st65" d="m 676,324.1 c 0,0 0,0 0,0 0,0.1 0,0.1 0,0" id="path3068" />
                        <path class="st65" d="m 676,324.2 c 0,0 0,0 0,0" id="path3070" />
                        <path class="st65" d="m 676,324.2 c 0,0 0,0 0,0" id="path3072" />
                        <line class="st65" x1="676" y1="324.20001" x2="676" y2="324.20001" id="line3074" />
                        <path class="st65" d="m 676,324.2 c 0,0 0,0 0,0" id="path3076" />
                        <path class="st65" d="m 676,324.2 c 0,0 0,0 0,0" id="path3078" />
                        <path class="st65" d="m 676,324.2 c 0,0 0,0 0,0" id="path3080" />
                        <path class="st65" d="m 676,324.2 c 0,0 0,0 0,0" id="path3082" />
                        <path class="st65" d="m 676,324.2 c 0,0 0,0 0,0" id="path3084" />
                        <path class="st65" d="m 676.1,324.2 c 0,0 0,0 0,0" id="path3086" />
                        <line class="st65" x1="676" y1="324.20001" x2="676" y2="324.20001" id="line3088" />
                        <path class="st65" d="m 676,324.2 c 0.1,0 0.1,0 0,0" id="path3090" />
                        <path class="st65" d="m 676,324.2 c 0,0 0,0 0,0" id="path3092" />
                        <line class="st65" x1="676" y1="324.29999" x2="676" y2="324.29999" id="line3094" />
                        <path class="st65" d="m 676,324.3 c 0.1,0 0.1,0 0,0" id="path3096" />
                        <path class="st65" d="m 676.1,324.3 c 0,0 0,0 0,0" id="path3098" />
                        <line class="st65" x1="676.09998" y1="324.29999" x2="676.09998" y2="324.29999"
                            id="line3100" />
                        <line class="st65" x1="676.09998" y1="324.29999" x2="676.09998" y2="324.29999"
                            id="line3102" />
                        <path class="st65" d="m 676.1,324.3 c 0,0 0,0 0,0" id="path3104" />
                        <path class="st65" d="m 676.1,324.3 c 0,0 -0.1,0 0,0" id="path3106" />
                        <line class="st65" x1="676.09998" y1="324.29999" x2="676.09998" y2="324.29999"
                            id="line3108" />
                        <path class="st65" d="m 676.1,324.3 c 0,0 0,0 0,0" id="path3110" />
                        <path class="st65" d="m 676.1,324.3 c 0,0 0,0 0,0" id="path3112" />
                        <line class="st65" x1="676.09998" y1="324.29999" x2="676.09998" y2="324.29999"
                            id="line3114" />
                        <line class="st65" x1="676.09998" y1="324.29999" x2="676.09998" y2="324.29999"
                            id="line3116" />
                        <path class="st65" d="m 676.1,324.3 c 0,0 0,0 0,0" id="path3118" />
                        <path class="st65" d="m 676.1,324.3 c 0,0 0,0 0,0" id="path3120" />
                        <path class="st65" d="m 676.1,324.3 c 0.1,0 0.1,0 0,0" id="path3122" />
                        <line class="st65" x1="676.20001" y1="324.29999" x2="676.20001" y2="324.29999"
                            id="line3124" />
                        <path class="st65" d="m 676.3,324.2 c 0,0 0,0 0,0" id="path3126" />
                        <line class="st65" x1="676.29999" y1="324.29999" x2="676.29999" y2="324.29999"
                            id="line3128" />
                        <path class="st65" d="m 676.3,324.3 c 0.1,0 0.1,0 0,0" id="path3130" />
                        <path class="st65" d="m 676.4,324.2 c 0,0 0,0 0,0 0,0 0,-0.1 0,0" id="path3132" />
                        <path class="st65" d="m 676.4,324.1 c 0,0 0,0 0,0" id="path3134" />
                        <path class="st65" d="m 676.4,324.1 c -0.1,0 -0.1,0 0,0" id="path3136" />
                        <line class="st65" x1="676.29999" y1="324.10001" x2="676.20001" y2="324.10001"
                            id="line3138" />
                        <path class="st65" d="m 676.2,324.1 c 0,0 0,0 0,0" id="path3140" />
                        <path class="st65" d="m 676.2,324.2 c 0,-0.1 0,-0.1 0,0" id="path3142" />
                        <path class="st65" d="m 676.1,324.1 c 0,0 0,0 0,0" id="path3144" />
                        <path class="st65"
                            d="m 673.9,324.9 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.1,0 0.3,-0.1 0.3,-0.3"
                            id="path3146" />
                        <path class="st65"
                            d="m 673.9,323.2 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.1,0 0.3,-0.1 0.3,-0.3"
                            id="path3148" />
                        <path class="st65"
                            d="m 673,324.1 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3150" />
                        <path class="st65"
                            d="m 674.7,324.1 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3152" />
                        <path class="st65"
                            d="m 673.3,323.5 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3154" />
                        <path class="st65"
                            d="m 673.3,324.7 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3156" />
                        <path class="st65"
                            d="m 674.5,323.5 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.1,0 0.3,-0.2 0.3,-0.3"
                            id="path3158" />
                        <path class="st65"
                            d="m 674.5,324.7 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.1,0 0.3,-0.2 0.3,-0.3"
                            id="path3160" />
                        <path class="st65"
                            d="m 676.5,324.9 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.1 0.3,-0.3"
                            id="path3162" />
                        <path class="st65"
                            d="m 676.5,323.2 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.1 0.3,-0.3"
                            id="path3164" />
                        <path class="st65"
                            d="m 677.3,324.1 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3166" />
                        <path class="st65"
                            d="m 675.6,324.1 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3168" />
                        <path class="st65"
                            d="m 677.1,323.5 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3170" />
                        <path class="st65"
                            d="m 677.1,324.7 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3172" />
                        <path class="st65"
                            d="m 675.9,323.5 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3174" />
                        <path class="st65"
                            d="m 675.9,324.7 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3176" />
                        <path class="st65"
                            d="m 671.1,327.5 c 0,-1 -0.8,-1.9 -1.9,-1.9 -1,0 -1.9,0.8 -1.9,1.9 0,1 0.8,1.9 1.9,1.9 1.1,0 1.9,-0.9 1.9,-1.9"
                            id="path3178" />
                        <line class="st65" x1="669.20001" y1="329.39999" x2="669.20001" y2="327.89999"
                            id="line3180" />
                        <line class="st65" x1="667.90002" y1="326.20001" x2="669" y2="327.20001"
                            id="line3182" />
                        <line class="st65" x1="669.5" y1="327.79999" x2="670.5" y2="328.79999" id="line3184" />
                        <line class="st65" x1="669.59998" y1="327.5" x2="671.09998" y2="327.5" id="line3186" />
                        <line class="st65" x1="669" y1="327.79999" x2="667.90002" y2="328.79999"
                            id="line3188" />
                        <path class="st65"
                            d="m 670.4,327.5 c 0,-0.6 -0.5,-1.1 -1.1,-1.1 -0.6,0 -1.1,0.5 -1.1,1.1 0,0.6 0.5,1.1 1.1,1.1 0.5,0 1.1,-0.5 1.1,-1.1"
                            id="path3190" />
                        <line class="st65" x1="670.5" y1="326.20001" x2="669.5" y2="327.20001" id="line3192" />
                        <path class="st65"
                            d="m 669.6,327.5 c 0,-0.2 -0.2,-0.4 -0.4,-0.4 -0.2,0 -0.4,0.2 -0.4,0.4 0,0.2 0.2,0.4 0.4,0.4 0.2,0 0.4,-0.2 0.4,-0.4"
                            id="path3194" />
                        <line class="st65" x1="669.20001" y1="327.10001" x2="669.20001" y2="325.60001"
                            id="line3196" />
                        <line class="st65" x1="667.29999" y1="327.5" x2="668.90002" y2="327.5" id="line3198" />
                        <polyline class="st65" points="683.6,329 684,328.3 684.5,328.6 684.1,329.2 683.6,329  "
                            id="polyline3200" />
                        <polyline class="st65"
                            points="684.2,329.3 684.5,328.6 685,328.9 684.7,329.5 684.2,329.3  " id="polyline3202" />
                        <line class="st65" x1="684.70001" y1="329.5" x2="685" y2="328.89999" id="line3204" />
                        <path class="st65"
                            d="m 681.2,326.6 c 0,-0.6 -0.5,-1.1 -1.1,-1.1 -0.6,0 -1.1,0.5 -1.1,1.1 0,0.6 0.5,1.1 1.1,1.1 0.6,0 1.1,-0.5 1.1,-1.1"
                            id="path3206" />
                        <polyline class="st65"
                            points="683.1,328.7 683.4,328 683.9,328.3 683.6,328.9 683.1,328.7  " id="polyline3208" />
                        <polyline class="st65"
                            points="682.4,328.7 682.7,328.1 683.2,328.4 682.8,329 682.4,328.7  " id="polyline3210" />
                        <polyline class="st65"
                            points="683.1,327.4 682.7,328 683.2,328.3 683.6,327.7 683.1,327.4  " id="polyline3212" />
                        <polyline class="st65"
                            points="682,328.1 682.4,327.4 682.9,327.7 682.5,328.4 682,328.1  " id="polyline3214" />
                        <polyline class="st65"
                            points="681.3,328.2 681.6,327.5 682.1,327.8 681.8,328.4 681.3,328.2  " id="polyline3216" />
                        <polyline class="st65"
                            points="682,326.8 681.6,327.5 682.1,327.7 682.5,327.1 682,326.8  " id="polyline3218" />
                        <polyline class="st65"
                            points="680.9,327.5 681.3,326.9 681.8,327.1 681.4,327.8 680.9,327.5  " id="polyline3220" />
                        <path class="st65"
                            d="m 678.7,330.9 c 0,-0.8 -0.6,-1.4 -1.4,-1.4 -0.8,0 -1.4,0.6 -1.4,1.4 0,0.8 0.6,1.4 1.4,1.4 0.8,0 1.4,-0.6 1.4,-1.4"
                            id="path3222" />
                        <polyline class="st65"
                            points="679.4,332.9 680.2,331.6 680.2,331.6 679.5,333 679.4,332.9  " id="polyline3224" />
                        <path class="st65"
                            d="m 679.2,330.9 c 0,-1 -0.8,-1.9 -1.9,-1.9 -1,0 -1.9,0.8 -1.9,1.9 0,1 0.8,1.9 1.9,1.9 1.1,0 1.9,-0.8 1.9,-1.9"
                            id="path3226" />
                        <path class="st65"
                            d="m 678.3,330.9 c 0,-0.5 -0.4,-0.9 -0.9,-0.9 -0.5,0 -0.9,0.4 -0.9,0.9 0,0.5 0.4,0.9 0.9,0.9 0.4,0.1 0.9,-0.4 0.9,-0.9"
                            id="path3228" />
                        <polyline class="st65"
                            points="681.6,334.1 682.3,332.8 682.4,332.8 681.7,334.1 681.6,334.1  " id="polyline3230" />
                        <path class="st65"
                            d="m 677.8,330.9 c 0,-0.3 -0.2,-0.5 -0.5,-0.5 -0.3,0 -0.5,0.2 -0.5,0.5 0,0.3 0.2,0.5 0.5,0.5 0.3,0 0.5,-0.2 0.5,-0.5"
                            id="path3232" />
                        <polyline class="st65"
                            points="680.2,333.3 680.9,332 680.9,332 680.2,333.4 680.2,333.3  " id="polyline3234" />
                        <polyline class="st65"
                            points="680.9,333.7 681.6,332.4 681.7,332.4 680.9,333.7 680.9,333.7  " id="polyline3236" />
                        <path class="st65"
                            d="m 691.5,330.3 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.1 0.3,-0.3"
                            id="path3238" />
                        <path class="st65"
                            d="m 688.8,330.7 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.1 0.3,-0.3"
                            id="path3240" />
                        <path class="st65"
                            d="m 689.5,331 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.1,0 0.3,-0.1 0.3,-0.3"
                            id="path3242" />
                        <path class="st65"
                            d="m 690.2,331.3 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.1,0 0.3,-0.1 0.3,-0.3"
                            id="path3244" />
                        <path class="st65"
                            d="m 690.8,331.7 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3246" />
                        <path class="st65"
                            d="m 689.1,330 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.1 0.3,-0.3"
                            id="path3248" />
                        <path class="st65"
                            d="m 689.8,330.3 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.1 0.3,-0.3"
                            id="path3250" />
                        <path class="st65"
                            d="m 690.5,330.7 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3252" />
                        <path class="st65"
                            d="m 691.1,331 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3254" />
                        <path class="st65"
                            d="m 689.5,329.3 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.1 0.3,-0.3"
                            id="path3256" />
                        <path class="st65"
                            d="m 690.1,329.7 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,-0.1 0.3,-0.2 0.3,-0.3"
                            id="path3258" />
                        <path class="st65"
                            d="m 690.8,330 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.1 0.3,-0.3"
                            id="path3260" />
                        <path class="st65"
                            d="m 689.8,328.7 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,-0.1 0.3,-0.2 0.3,-0.3"
                            id="path3262" />
                        <path class="st65"
                            d="m 690.5,329 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.1 0.3,-0.3"
                            id="path3264" />
                        <path class="st65"
                            d="m 691.1,329.3 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.1 0.3,-0.3"
                            id="path3266" />
                        <path class="st65"
                            d="m 690.8,328.3 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.1 0.3,-0.3"
                            id="path3268" />
                        <path class="st65"
                            d="m 691.8,329.6 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.1 0.3,-0.3"
                            id="path3270" />
                        <path class="st65"
                            d="m 690.1,328 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3272" />
                        <path class="st65"
                            d="m 691.5,328.6 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.1,0 0.3,-0.1 0.3,-0.3"
                            id="path3274" />
                        <path class="st65"
                            d="m 692.1,329 c 0,-0.2 -0.1,-0.3 -0.3,-0.3 -0.2,0 -0.3,0.1 -0.3,0.3 0,0.2 0.1,0.3 0.3,0.3 0.2,0 0.3,-0.2 0.3,-0.3"
                            id="path3276" />
                        <polyline class="st65"
                            points="695.4,329.6 697,330.6 696.9,330.6 695.3,329.7 695.4,329.6  " id="polyline3278" />
                        <polyline class="st65"
                            points="695.1,330.1 696.7,331.1 696.6,331.2 695,330.2 695.1,330.1  " id="polyline3280" />
                        <polyline class="st65"
                            points="694.8,330.6 696.4,331.6 696.3,331.7 694.7,330.7 694.8,330.6  " id="polyline3282" />
                        <polyline class="st65"
                            points="694.5,331.1 696.1,332.1 696.1,332.1 694.5,331.2 694.5,331.1  " id="polyline3284" />
                        <polyline class="st65"
                            points="694.2,331.6 695.8,332.6 695.8,332.6 694.2,331.7 694.2,331.6  " id="polyline3286" />
                        <polyline class="st65"
                            points="693.9,332.1 695.5,333.1 695.5,333.1 693.9,332.2 693.9,332.1  " id="polyline3288" />
                        <polyline class="st65"
                            points="693.6,332.6 695.3,333.6 695.2,333.6 693.6,332.7 693.6,332.6  " id="polyline3290" />
                        <polyline class="st65"
                            points="693.3,333.2 695,334.1 694.9,334.1 693.3,333.2 693.3,333.2  " id="polyline3292" />
                        <polyline class="st65" points="693,333.6 694.7,334.6 694.6,334.6 693,333.7 693,333.6  "
                            id="polyline3294" />
                        <polyline class="st65"
                            points="692.8,334.1 694.4,335.1 694.4,335.1 692.7,334.2 692.8,334.1  " id="polyline3296" />
                        <polyline class="st65"
                            points="694.5,325.6 694.7,324.9 695.2,325 695,325.8 694.5,325.6  " id="polyline3298" />
                        <polyline class="st65"
                            points="693.8,325.8 694,325.1 694.5,325.2 694.3,326 693.8,325.8  " id="polyline3300" />
                        <polyline class="st65"
                            points="694.2,324.3 694,325 694.5,325.2 694.7,324.5 694.2,324.3  " id="polyline3302" />
                        <polyline class="st65"
                            points="691.8,323.6 691.6,324.3 692.2,324.5 692.4,323.7 691.8,323.6  " id="polyline3304" />
                        <polyline class="st65"
                            points="693.3,325.2 693.5,324.5 694,324.7 693.8,325.4 693.3,325.2  " id="polyline3306" />
                        <polyline class="st65"
                            points="692.6,325.4 692.8,324.7 693.3,324.9 693.1,325.6 692.6,325.4  " id="polyline3308" />
                        <polyline class="st65"
                            points="693,323.9 692.8,324.7 693.3,324.8 693.6,324.1 693,323.9  " id="polyline3310" />
                        <polyline class="st65"
                            points="692.1,324.9 692.3,324.2 692.9,324.3 692.6,325 692.1,324.9  " id="polyline3312" />
                        <polyline class="st65"
                            points="691.4,325.1 691.6,324.4 692.1,324.5 691.9,325.3 691.4,325.1  " id="polyline3314" />
                        <polyline class="st65"
                            points="690.9,324.5 691.1,323.8 691.7,324 691.4,324.7 690.9,324.5  " id="polyline3316" />
                        <polyline class="st65"
                            points="558.2,295.5 550.6,295.5 550.6,308.6 558.2,308.6 558.2,295.5  " id="polyline3318" />
                        <line class="st65" x1="714.90002" y1="322.70001" x2="716.70001" y2="335.60001"
                            id="line3320" />
                        <path class="st65" d="m 716.7,335.9 c 0,-0.1 0,-0.2 0,-0.3" id="path3322" />
                        <polyline class="st65" points="716.7,335.9 721.9,335.9 721.9,322.7 714.9,322.7  "
                            id="polyline3324" />
                        <polyline class="st65"
                            points="622.8,280.8 616.8,280.8 616.8,282.5 622.8,282.5 622.8,280.8  " id="polyline3326" />
                        <polyline class="st65"
                            points="622.8,282.5 616.8,282.5 616.8,284.2 622.8,284.2 622.8,282.5  " id="polyline3328" />
                        <polyline class="st65"
                            points="667.7,322.8 661.7,322.8 661.7,322.8 667.6,322.8 667.7,322.8  " id="polyline3330" />
                        <polyline class="st65"
                            points="721.9,319.5 721.9,347.9 621.2,347.9 550.6,347.9 550.6,293.2 555.3,288.4 555.3,264.6 550.6,259.9    550.6,259.5 721.9,259.5 721.9,259.9 717.2,264.6 717.2,314.8 721.9,319.5 721.9,324.1  "
                            id="polyline3332" />
                        <polyline class="st65"
                            points="725.7,323.5 725.7,318 721,313.3 721,266.2 725.7,261.5 725.7,227.5 721.9,223.7 621.2,223.7    550.6,223.7 546.9,227.5 546.9,261.5 551.6,266.2 551.6,286.9 546.9,291.6 546.9,379.9 550.6,383.7 621.2,383.7 721.9,383.7    725.7,379.9 725.7,318  "
                            id="polyline3334" />
                        <polyline class="st65"
                            points="546.9,267.1 551.6,267.1 551.6,276.5 546.9,276.5 546.9,267.1  " id="polyline3336" />
                        <polyline class="st65"
                            points="546.9,276.5 551.6,276.5 551.6,286 546.9,286 546.9,276.5  " id="polyline3338" />
                        <polyline class="st65" points="721,266.2 725.7,266.2 725.7,275.6 721,275.6 721,266.2  "
                            id="polyline3340" />
                        <polyline class="st65" points="721,275.6 725.7,275.6 725.7,285 721,285 721,275.6  "
                            id="polyline3342" />
                        <polyline class="st65" points="721,285 725.7,285 725.7,294.4 721,294.4 721,285  "
                            id="polyline3344" />
                        <polyline class="st65" points="725.7,303.8 725.7,294.4 721,294.4 721,303.8  "
                            id="polyline3346" />
                        <polyline class="st65" points="721,313.3 725.7,313.3 725.7,303.8 721,303.8 721,313.3  "
                            id="polyline3348" />
                        <polyline class="st65"
                            points="550.6,328.2 550.6,325.4 553.5,325.4 553.5,328.2 550.6,328.2  " id="polyline3350" />
                    </g>
                    {{-- <circle class="st55" cx="361.65002" cy="839.6709" r="6.7396784" id="circle3354"
                        style="stroke-width:1.16201" />
                    <circle class="st54" cx="403.71487" cy="840.01959" r="6.7396784" id="circle3356"
                        style="stroke-width:1.16201" />
                    <circle class="st53" cx="447.17419" cy="840.01959" r="6.7396784" id="circle3358"
                        style="stroke-width:1.16201" /> --}}
                    <g id="g3362" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.9182,337.088)" class="st17 st18 st19" id="text3360">C+</text>
                    </g>
                    <g id="g3366" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.9182,350.4213)" class="st17 st18 st19" id="text3364">C+</text>
                    </g>
                    <g id="g3370" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(425.0418,363.7546)" class="st17 st18 st19" id="text3368">B+</text>
                    </g>
                    <g id="g3374" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(425.0418,377.088)" class="st17 st18 st19" id="text3372">B+</text>
                    </g>
                    <g id="g3378" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.6385,390.4213)" class="st17 st18 st19" id="text3376">D+</text>
                    </g>
                    <g id="g3382" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.6385,403.7546)" class="st17 st18 st19" id="text3380">D+</text>
                    </g>
                    <g id="g3386" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.6385,416.088)" class="st17 st18 st19" id="text3384">D+</text>
                    </g>
                    <g id="g3390" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.6385,429.4213)" class="st17 st18 st19" id="text3388">D+</text>
                    </g>
                    <g id="g3394" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.6385,442.7546)" class="st17 st18 st19" id="text3392">D+</text>
                    </g>
                    <g id="g3398" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.6385,456.088)" class="st17 st18 st19" id="text3396">D+</text>
                    </g>
                    <g id="g3402" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.6385,469.4213)" class="st17 st18 st19" id="text3400">D+</text>
                    </g>
                    <g id="g3406" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.6385,482.7547)" class="st17 st18 st19" id="text3404">D+</text>
                    </g>
                    <g id="g3410" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.6385,496.088)" class="st17 st18 st19" id="text3408">D+</text>
                    </g>
                    <g id="g3414" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.6385,509.4214)" class="st17 st18 st19" id="text3412">D+</text>
                    </g>
                    <g id="g3418" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.6385,522.7547)" class="st17 st18 st19" id="text3416">D+</text>
                    </g>
                    <g id="g3422" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.9182,535.088)" class="st17 st18 st19" id="text3420">C+</text>
                    </g>
                    <g id="g3426" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(424.9182,548.4214)" class="st17 st18 st19" id="text3424">C+</text>
                    </g>
                    <g id="g3430" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(458.4593,582.4214)" class="st17 st18 st19" id="text3428">C+</text>
                    </g>
                    <g id="g3434" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(471.4593,582.4214)" class="st17 st18 st19" id="text3432">C+</text>
                    </g>
                    <g id="g3438" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(484.4593,582.4214)" class="st17 st18 st19" id="text3436">C+</text>
                    </g>
                    <g id="g3442" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(498.1795,582.4214)" class="st17 st18 st19" id="text3440">D+</text>
                    </g>
                    <g id="g3446" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(511.1795,582.4214)" class="st17 st18 st19" id="text3444">D+</text>
                    </g>
                    <g id="g3450" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(524.1794,582.4214)" class="st17 st18 st19" id="text3448">D+</text>
                    </g>
                    <g id="g3454" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(537.1794,582.4214)" class="st17 st18 st19" id="text3452">D+</text>
                    </g>
                    <g id="g3458" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(550.1794,582.4214)" class="st17 st18 st19" id="text3456">D+</text>
                    </g>
                    <g id="g3462" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(563.1794,582.4214)" class="st17 st18 st19" id="text3460">D+</text>
                    </g>
                    <g id="g3466" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(577.5828,582.4214)" class="st17 st18 st19" id="text3464">B+</text>
                    </g>
                    <g id="g3470" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(590.5828,582.4214)" class="st17 st18 st19" id="text3468">B+</text>
                    </g>
                    <g id="g3474" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(603.5828,582.4214)" class="st17 st18 st19" id="text3472">B+</text>
                    </g>
                    <g id="g3478" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(616.1794,582.4214)" class="st17 st18 st19" id="text3476">D+</text>
                    </g>
                    <g id="g3482" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(629.1794,582.4214)" class="st17 st18 st19" id="text3480">D+</text>
                    </g>
                    <g id="g3486" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(643.1794,582.4214)" class="st17 st18 st19" id="text3484">D+</text>
                    </g>
                    <g id="g3490" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(656.1794,582.4214)" class="st17 st18 st19" id="text3488">D+</text>
                    </g>
                    <g id="g3494" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(669.1794,582.4214)" class="st17 st18 st19" id="text3492">D+</text>
                    </g>
                    <g id="g3498" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(682.1794,582.4214)" class="st17 st18 st19" id="text3496">D+</text>
                    </g>
                    <g id="g3502" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(695.4592,582.4214)" class="st17 st18 st19" id="text3500">C+</text>
                    </g>
                    <g id="g3506" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(708.4592,582.4214)" class="st17 st18 st19" id="text3504">C+</text>
                    </g>
                    <g id="g3510" transform="matrix(1.1620135,0,0,1.1620135,-88.165417,0)">
                        <text transform="translate(721.4592,582.4214)" class="st17 st18 st19" id="text3508">C+</text>
                    </g>
                    <path class="st50"
                        d="m 1117.5398,730.20927 h -0.1162 l -0.1162,-0.11621 -1.162,-1.62681 v 0 c 0,0 0.1162,0 0.2324,-0.11621 0.1162,0 0.2324,-0.1162 0.2324,-0.1162 0.3486,-0.2324 0.4648,-0.4648 0.4648,-0.81341 0,-0.1162 0,-0.2324 0,-0.3486 -0.1162,-0.2324 -0.2324,-0.3486 -0.4648,-0.46481 -0.1162,-0.1162 -0.3486,-0.1162 -0.581,-0.1162 h -0.1162 -1.0459 -0.6972 -0.1162 v 0.1162 0 c 0,0 0.1162,0 0.2324,0 0.1162,0 0.1162,0 0.1162,0 0,0 0,0 0.1162,0.11621 0,0 0,0.1162 0,0.1162 v 2.78883 c 0,0.1162 0,0.1162 -0.1162,0.2324 0,0 -0.1162,0.1162 -0.1162,0.1162 0,0 -0.1162,0 -0.1162,0 h -0.1162 v 0.1162 h 0.1162 c 0.1162,0 0.2324,0 0.3486,0 0.1162,0 0.2324,0 0.3486,0 0.1162,0 0.2325,0 0.3487,0 0.1162,0 0.2324,0 0.3486,0 h 0.1162 v -0.1162 h -0.1162 c 0,0 -0.1162,0 -0.1162,0 0,0 -0.1162,0 -0.1162,-0.1162 0,0 -0.1162,-0.1162 -0.1162,-0.2324 v -3.02124 h 0.1162 c 0,0 0.1162,0 0.1162,0 0,0 0.1162,0 0.2324,0 h 0.1162 c 0,0 0.1162,0 0.2324,0 0.1162,0 0.2324,0.11621 0.3486,0.23241 0.1162,0.1162 0.1162,0.2324 0.1162,0.4648 0,0.23241 -0.1162,0.46481 -0.3486,0.58101 -0.2324,0.1162 -0.4648,0.2324 -0.6972,0.2324 h -0.2324 v 0.1162 l 1.5106,1.85922 h 0.1162 0.3486 0.3486 v 0 z m -4.0671,0.3486 c -0.4648,-0.58101 -0.8134,-1.27821 -0.8134,-2.09162 0,-0.81341 0.2324,-1.51062 0.8134,-2.09163 0.581,-0.581 1.2782,-0.92961 2.2079,-0.92961 0.9296,0 1.743,0.34861 2.324,0.92961 0.4648,0.58101 0.6972,1.27822 0.6972,2.09163 0,0.81341 -0.2324,1.51061 -0.6972,2.09162 -0.581,0.58101 -1.2782,0.92961 -2.324,0.92961 -1.0459,0 -1.6269,-0.2324 -2.2079,-0.92961 m 4.7643,0.2324 c 0.581,-0.581 0.8134,-1.39441 0.8134,-2.32402 0,-0.92961 -0.2324,-1.74302 -0.8134,-2.32403 -0.581,-0.69721 -1.5106,-1.04581 -2.5564,-1.04581 -1.0459,0 -1.8593,0.3486 -2.5565,1.04581 -0.581,0.58101 -0.8134,1.39442 -0.8134,2.32403 0,0.92961 0.2324,1.74302 0.8134,2.32402 0.581,0.69721 1.5106,1.04582 2.5565,1.04582 1.162,0.1162 1.9754,-0.34861 2.5564,-1.04582"
                        id="path3512" style="stroke-width:1.16201" />
                </svg>

                @foreach ($lots as $lot)
                    @if ($lot->status == 'available')
                        <!-- Modal -->
                        <div class="modal fade" id="myModal-{{ $lot->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Lote {{ $lot->number }}</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row align-items-center px-3">
                                            <div class="col-12 col-md-6 text-center">
                                                <h2>Modelo {{ $lot->model->name }}</h2>
                                                <p><strong>Area:</strong> {{ $lot->area }}m<sup>2</sup></p>
                                                <p><strong>Area de construcción:</strong>
                                                    {{ $lot->construction_area }}m<sup>2</sup></p>
                                                <a href="{{ route('miraverde.model', $lot->model) }}"
                                                    class="btn btn-primary btn-md d-block mb-2">VER MODELO</a>
                                                <a href="{{ route('miraverde.lead', $lot->model) }}"
                                                    class="btn btn-primary btn-md d-block">COTIZAR</a>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <img src="{{ Storage::url($lot->model->image) }}"
                                                    alt="{{ $lot->model->name }}" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        {{-- <a href="{{ route('almada.lead', $lot->model) }}"
                                            class="btn btn-primary">Cotizar</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <section id="cotiza-tu-casa">
        <div class="container">
            <div class="elige-tu-casa">
                <div class="col-12">
                    <h4 class="cotiza-color">Elige tu casa</h4>
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
                                @foreach ($miraverde->models as $model)
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
                                                    <h2 class="t-mod" style="color: #265B33;">
                                                        {{ $model->name }}</h2>
                                                    <p class="p-desde" style="color: #265B33;">Desde:
                                                        <span>${{ number_format($model->price, 2) }}</span>
                                                    </p>
                                                </div>
                                                @switch($model->id)
                                                    @case(6)
                                                        <div class="row">
                                                            <!--Amenidades por modelo-->
                                                            <div class="col-6 izq-mod">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/comedor.svg') }}"
                                                                    width="36" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod pt-2">
                                                                <p>Sala / Comedor </p>
                                                            </div>
                                                            <div class="col-6 izq-mod ">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/cocina.svg') }}"
                                                                    width="32" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod">
                                                                <p>Cocina <br> independiente</p>
                                                            </div>
                                                            <div class="col-6 izq-mod">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/recamara.svg') }}"
                                                                    width="32" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod pt-1">
                                                                <p>2 Recámaras</p>
                                                            </div>
                                                            <div class="col-6 izq-mod">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/bano.svg') }}"
                                                                    width="32" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod pt-3">
                                                                <p>1 baños</p>
                                                            </div>
                                                            <div class="espacio-bco-mv">
                                                            </div>
                                                        </div>
                                                    @break
                                                    @case(7)
                                                        <div class="row">
                                                            <!--Amenidades por modelo-->
                                                            <div class="col-6 izq-mod">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/comedor.svg') }}"
                                                                    width="36" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod pt-2">
                                                                <p>Sala / Comedor </p>
                                                            </div>
                                                            <div class="col-6 izq-mod ">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/cocina.svg') }}"
                                                                    width="32" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod">
                                                                <p>Cocina <br> independiente</p>
                                                            </div>
                                                            <div class="col-6 izq-mod">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/recamara.svg') }}"
                                                                    width="32" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod pt-1">
                                                                <p>2 Recámaras</p>
                                                            </div>
                                                            <div class="col-6 izq-mod">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/bano.svg') }}"
                                                                    width="32" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod pt-3">
                                                                <p>1 baños</p>
                                                            </div>
                                                            <div class="espacio-bco-mv">
                                                            </div>
                                                        </div>
                                                    @break
                                                    @case(8)
                                                        <div class="row">
                                                            <!--Amenidades por modelo-->
                                                            <div class="col-6 izq-mod">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/comedor.svg') }}"
                                                                    width="36" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod pt-2">
                                                                <p>Sala / Comedor </p>
                                                            </div>
                                                            <div class="col-6 izq-mod ">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/cocina.svg') }}"
                                                                    width="32" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod">
                                                                <p>Cocina <br> independiente</p>
                                                            </div>
                                                            <div class="col-6 izq-mod">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/recamara.svg') }}"
                                                                    width="32" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod pt-1">
                                                                <p>2 Recámaras</p>
                                                            </div>
                                                            <div class="col-6 izq-mod">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/bano.svg') }}"
                                                                    width="32" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod pt-3">
                                                                <p>1 baños</p>
                                                            </div>
                                                            <div class="col-6 izq-mod pt-2">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/terraza.svg') }}"
                                                                    width="40" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod pt-3">
                                                                <p>Terraza</p>
                                                            </div>
                                                        </div>
                                                    @break
                                                    @case(9)
                                                        <div class="row">
                                                            <!--Amenidades por modelo-->
                                                            <div class="col-6 izq-mod">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/comedor.svg') }}"
                                                                    width="36" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod">
                                                                <p>Sala / Comedor <br> / Cocina</p>
                                                            </div>
                                                            <div class="col-6 izq-mod ">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/cocina.svg') }}"
                                                                    width="32" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod">
                                                                <p>Cocina <br> independiente</p>
                                                            </div>
                                                            <div class="col-6 izq-mod">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/recamara.svg') }}"
                                                                    width="32" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod pt-1">
                                                                <p>2 Recámaras</p>
                                                            </div>
                                                            <div class="col-6 izq-mod">
                                                                <img src="{{ asset('/img/miraverde/venta-cruzada/icon/bano.svg') }}"
                                                                    width="32" alt="">
                                                            </div>
                                                            <div class="col-6 der-mod pt-3">
                                                                <p>1 1/2 baños</p>
                                                            </div>
                                                            <div class="espacio-bco-mv-1">
                                                            </div>
                                                        </div>
                                                    @break
                                                    @default
                                                @endswitch
                                                <div class="boton-cotizar mt-2 mb-3 text-center">
                                                    <a href="{{ route('miraverde.model', $model) }}"
                                                        class="btn btn-success">Cotizar</a>
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
            </div>
    </section>


@endsection
