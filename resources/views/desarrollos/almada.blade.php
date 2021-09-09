@extends('layouts.template')
@section('content')
    <header id="almada-top">
        <div class="sp-top">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('/img/almada/cabecera.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/img/almada/cabecera.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/img/almada/cabecera.jpg')}}" class="d-block w-100" alt="...">
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
        <div class="det-almada">
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
            <div class="almada-color">
                <div class="container">
                    <div class="text-center pt-5">
                        <img src="{{asset('/img/almada/almada.svg')}}" width="150" alt="">
                        <p style="color: #fff; padding:40px;">almada es un desarrollo tipo cerrada de 1,895 casas (5 diferentes modelos) que se encuentra en la parte sur de Gran Calzada, la cul concentra todos los servicios y amenidades que las familias necesitan para su vida,ofrece un parque libre y áreas verdes para actividades recreativas y de diversión.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 text-center p-caract">
                            <div class="row">
                                <div class="col-6 pt-3">
                                    <img src="{{asset('/img/almada/icon/icono-clusters-03.svg')}}" width="80" alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">5 CLUSTERS</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{asset('/img/almada/icon/casas-icono-03.svg')}}" width="80" alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">5 CLUSTERS</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{asset('/img/almada/icon/areas-verdes-icono-03.svg')}}" width="80" alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">5 CLUSTERS</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{asset('/img/almada/icon/bardas-icono-03.svg')}}" width="80" alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">5 CLUSTERS</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{asset('/img/almada/icon/coche--icono-03.svg')}}" width="80" alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">5 CLUSTERS</p>
                                </div>
                                <div class="col-6 pt-3">
                                    <img src="{{asset('/img/almada/icon/modelos-iconos-03.svg')}}" width="80" alt="Perimetro del desarrollo | Gran Calzada">
                                    <p class="perimetro">5 CLUSTERS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center">
                            <img src="/img/almada/icon/master-almada.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="equipamiento-almada text-center pt-5">
                        <h2  style="color: #F9B2A2">Equipamiento del desarrollo</h2>
                        <div class="row p-equipamiento">
                            <div class="col">
                                <img src="{{asset ('/img/almada/icon/bardas-icono-03.svg')}}" width="80" alt="">
                                <h3 class="pt-3" style="color: #fff">Titulo 1</h3>
                            </div>
                            <div class="col">
                                <img src="{{asset ('/img/almada/icon/bardas-icono-03.svg')}}" width="80" alt="">
                                <h3 class="pt-3" style="color: #fff">Titulo 1</h3>
                            </div>
                            <div class="col">
                                <img src="{{asset ('/img/almada/icon/bardas-icono-03.svg')}}" width="80" alt="">
                                <h3 class="pt-3" style="color: #fff">Titulo 1</h3>
                            </div>
                            <div class="col">
                                <img src="{{asset ('/img/almada/icon/bardas-icono-03.svg')}}" width="80" alt="">
                                <h3 class="pt-3" style="color: #fff">Titulo 1</h3>
                            </div>
                            <div class="col">
                                <img src="{{asset ('/img/almada/icon/bardas-icono-03.svg')}}" width="80" alt="">
                                <h3 class="pt-3" style="color: #fff">Titulo 1</h3>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection