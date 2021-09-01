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
                    <h3 class="conoce" >Conoce a detalle <span class="gran-1">LOS DESARROLOS</span></h3>
                </div>
                <div class="col-md-4 bt-desarrollos">
                 <a href="#" class="btn btn-primary">DESARROLLOS</a>
                </div>
            </div>
        </div>
        <div class="bg-azul">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="" class="img-fluid" alt="Mapa de ubicación | Gran Calzada">
                    </div>
                    <div class="col-md-6">
                        <h4 class="comunidad" style="color: #fff">Una <span class="gran">Gran</span> ubicación <br>Privilegiada...</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection