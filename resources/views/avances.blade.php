@extends('layouts.template')
@section('content')
    <header class="bg-grancalzada espacio-avances">
        <div class="container">
            <h3 class="avances-h">Avances de Obra
                <br>
                ¡Selecciona uno de nuestros álbumes!
            </h3>
            <div class="row text-center mt-5">
                @foreach ($galeries as $galery)
                    <div class="col-md-6 col-sm-12 mt-5">
                        <img src="{{ Storage::url($galery->image) }}" alt="">
                        <div class="boton-avances mt-4">
                            <a href="" class="btn btn-light">Ver avances</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </header>
@endsection
