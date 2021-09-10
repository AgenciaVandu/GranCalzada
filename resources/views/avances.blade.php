@extends('layouts.template')
@section('content')
    <header class="bg-grancalzada espacio-avances" >
        <div class="container">
            <h3 class="avances-h">Avances de Obra 
                <br>
                ¡Selecciona uno de nuestros álbumes!
            </h3>
            <div class="row text-center mt-5">
                <div class="col-md-6 col-sm-12">
                    <img src="{{asset('/img/avances-m.jpg')}}" alt="">
                    <div class="boton-avances mt-4">
                        <a href="" class="btn btn-light">Ver avances</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="{{asset('/img/avances-j.jpg')}}" alt="">
                    <div class="boton-avances mt-4">
                        <a href="" class="btn btn-light">Ver avances</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-5">
                    <img src="{{asset('/img/avances-jul.jpg')}}" alt="">
                    <div class="boton-avances mt-4">
                        <a href="" class="btn btn-light">Ver avances</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-5">
                    <img src="{{asset('/img/avances-ag.jpg')}}" alt="">
                    <div class="boton-avances mt-4">
                        <a href="" class="btn btn-light">Ver avances</a>
                    </div>
                </div>
            </div>
        </div>

    </header>
@endsection