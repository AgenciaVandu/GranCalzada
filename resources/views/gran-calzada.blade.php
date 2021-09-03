@extends('layouts.template')
@section('content')

<header id="sgran-calzada">
    <div class="container-fluid text-center p-0">
        <img src="{{asset('/img/gran-calzada/superior.jpg')}}" class="img-fluid p-0" alt="">
    </div>
</header>

<section id="conoce-los-desarrollos">
    <div class="bg-plantas">
        <div class="container">
            <div class="row espacio text-center">
                <div class="col-md-8 ">
                    <h3 class="conoce-1" >Conoce a detalle <span class="gran-1">LOS DESARROLOS</span></h3>
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
                        <img src="{{asset('/img/gran-calzada/mapaGC_.svg')}}"  class="img-fluid" alt="Mapa de ubicación | Gran Calzada">
                    </div>
                    <div class="col-md-6">
                        <h4 class="comunidad" style="color: #fff">Una <span class="gran">Gran</span> ubicación <br>Privilegiada...</h4>
                        <div class="row text-center pt-3">
                            <div class="col-6">
                                <div class="imagen-titulo pb-3">
                                    <img src="{{asset('/img/icon/1-i.svg')}}" alt="">
                                </div>
                                <img src="{{asset('/img/icon/5-min.svg')}}" width="40" alt=""> <p class="pt-1 distancia" style="color: #fff">MIN. DE <br> PERIFÉRICO</p>
                                <img src="{{asset('/img/icon/8-min.svg')}}" width="40" alt=""> <p class="pt-1 distancia" style="color: #fff">MIN. DE CIUDAD <br> INDUSTRIAL</p>
                                <img src="{{asset('/img/icon/12-min.svg')}}" width="40" alt=""> <p class="pt-1 distancia" style="color: #fff">MIN. DE <br>SERVICIOS</p>
                            </div>
                            <div class="col-6">
                                <div class="imagen-titulo pb-3">
                                    <img src="{{asset('/img/icon/1-d.svg')}}" alt="">
                                </div>
                                <img src="{{asset('/img/icon/15-min.svg')}}" width="40" alt=""> <p class="pt-1 distancia" style="color: #fff">MIN. DE <br> PERIFÉRICO</p>
                                <img src="{{asset('/img/icon/17-min.svg')}}" width="40" alt=""> <p class="pt-1 distancia" style="color: #fff">MIN. DE CIUDAD<br> INDUSTRIAL</p>
                                <img src="{{asset('/img/icon/18-min.svg')}}" width="40" alt=""> <p class="pt-1 distancia" style="color: #fff">MIN. DE <br> SERVICIOS</p>
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
<div class="onda-s"> <!--Onda-s-->
    <div class="container text-center">
        <img src="{{asset('img/icon/medalla.svg')}}" class="pt-4" width="70" alt="medalla de equipamiento | Gran Calzada">
        <h1 style="color: #fff" class="pt-3 pb-4">Equipamiento de primer nivel</h1>
        <div class="row"><!--slider movil-->
            <div class="col-md-3">
                <img src="{{asset('img/icon/planta2.svg')}}"  width="230" alt="Equipamiento del desarrollo | Gran Calzada">
                <h3 class="equipamiento-h pt-2">Electricidad <br>subterránea</h3>
            </div>
            <div class="col-md-3">
                <img src="{{asset('img/icon/planta2.svg')}}"  width="230" alt="Equipamiento del desarrollo | Gran Calzada">
                <h3 class="equipamiento-h pt-2">Planta de <br>tratamiento</h3>
            </div>
            <div class="col-md-3">
                <img src="{{asset('img/icon/planta2.svg')}}"  width="230" alt="Equipamiento del desarrollo | Gran Calzada">
                <h3 class="equipamiento-h pt-2">Pozo de <br>captación</h3>
            </div>
            <div class="col-md-3">
                <img src="{{asset('img/icon/planta2.svg')}}"  width="230" alt="Equipamiento del desarrollo | Gran Calzada">
                <h3 class="equipamiento-h pt-2">Drenaje <br>pluvial</h3>
            </div>
        </div> <!--slider movil-->
    </div>
</div> <!--Onda-i-->
<div class="que-encontraras text-center pt-5">
    <div class="container">
        <h1 class="t-cercania">¿Qué encontrarás?</h1>
    <div class="row"><!--slider movil-->
        <div class="col-md-3">
            <img src="{{asset('img/icon/planta2.svg')}}"  width="230" alt="Equipamiento del desarrollo | Gran Calzada">
            <h3 class="equipamiento-h pt-2">Electricidad <br>subterránea</h3>
        </div>
        <div class="col-md-3">
            <img src="{{asset('img/icon/planta2.svg')}}"  width="230" alt="Equipamiento del desarrollo | Gran Calzada">
            <h3 class="equipamiento-h pt-2">Planta de <br>tratamiento</h3>
        </div>
        <div class="col-md-3">
            <img src="{{asset('img/icon/planta2.svg')}}"  width="230" alt="Equipamiento del desarrollo | Gran Calzada">
            <h3 class="equipamiento-h pt-2">Pozo de <br>captación</h3>
        </div>
        <div class="col-md-3">
            <img src="{{asset('img/icon/planta2.svg')}}"  width="230" alt="Equipamiento del desarrollo | Gran Calzada">
            <h3 class="equipamiento-h pt-2">Drenaje <br>pluvial</h3>
        </div>
    </div> <!--slider movil-->
    </div>
</div>
</section>





@endsection