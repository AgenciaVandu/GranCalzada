@extends('layouts.template')
@section('content')
   <header id="carrusel">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('/img/banner-1.png') }}" class="d-block w-100" alt="...">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="lead title-lead">Conoce más detalles</h3>
                        </div>
                        <div class="col-6">
                            <a href="" class="btn btn-primary btn-lg">Conoce los desarrollos</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('/img/banner-1.png') }}" class="d-block w-100" alt="...">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="lead title-lead">Conoce más detalles</h3>
                        </div>
                        <div class="col-6">
                            <a href="" class="btn btn-primary btn-lg">Conoce los desarrollos</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('/img/banner-1.png') }}" class="d-block w-100" alt="...">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="lead title-lead">Conoce más detalles</h3>
                        </div>
                        <div class="col-6">
                            <a href="" class="btn btn-primary btn-lg">Conoce los desarrollos</a>
                        </div>
                    </div>
                </div>
            </div>
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
   </header>

   <section id="introduccion">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5 p-0">
                <img src="{{asset('/img/GCAL-1.jpg') }}" class="img-fluid p-0" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 txt-calzada">
                <h2 style="text-align: center" class="mb-4">Descubre cómo es vivir en una ciudad totalmente planeada</h2>
                <p style="color: #fff">Bienvenido a Gran Calzada, es un complejo habitacional con más de 4,000 mil viviendas distribuidas en 2 desarrollos: Almada y Miraverde conectados por la bella Gran Calzada que se convierte en tu eje central de servicios y áreas verdes</p>
                <div class="row mt-5 mb-3" style="text-align: center">
                    <div class="col-6">
                        <a href="" class="btn btn-primary btn-block">Descargar brochure</a>
                    </div>
                    <div class="col-6">
                        <a href="" class="btn btn-primary btn-block">Descargar brochure</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>

   <section id="beneficios">
    <div class="container">
        <h2 style="text-align: center">¿Qué encontrarás en Gran Calzada?</h2>
            <div class="row space">
                <div class="col-6 ubicacion ">
                  <p>Uman Poniente de la ciudad de Mérida</p>
                </div>
                <div class="col-6 ubicacion">
                  <p>Escuelas, zonas comerciales y <br> recreativas</p>
                </div>
                <div class="col-6 ubicacion mt-4">
                  <p>Más de 3 hectáreas de áreas verdes</p>
                </div>
                <div class="col-6 ubicacion mt-4">
                  <p>Amplas avenidas de concreto hidráulico <br> es 3 veces más resitente</p>
                </div>
              </div>
        
    </div>
   </section>

   <section id="desarrollos">
       <div class="container">
           <h2 class="text-center" style="color: #fff">Conoce nuestros dos desarrollos:
            ¿Dónde te gustaría vivir?</h2>

            <div class="row mt-5 desarrollos">
                <div class="col-6 text-center">
                    <img src="{{asset ('/img/modelo.png')}}" class="img-fluid" alt="">
                    <div class="bg-almada">
                        <img src="{{asset ('/img/almada.png')}}" alt="Gran Calzada | Ciudad Viva" class="img-fluid pt-3 pb-3">
                    <h4 style="color: #fff">
                        Desde:<span>$385,000</span>
                    </h4>
                    <p style="color: #fff">Almada® es un desarrollo tipo cerrada que conecta con nuestra Gran Calzada®, la cual concentra todos los servicios y amenidades para que tú y tu familia se den un respiro mientras la recorren para realizar las actividades de su vida diaria.</p>
                    <div class="row">
                        <div class="col-5 text-right pt-2">
                        <img src="{{asset ('/img/icon/icon.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-7 justify-center m-auto">
                            <p class="elemento">1490 Casas</p>
                        </div>
                        <div class="col-5 text-right pt-2">
                        <img src="{{asset ('/img/icon/icon.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-7 justify-center m-auto">
                            <p class="elemento">1490 Casas</p>
                        </div>
                        <div class="col-5 text-right pt-2">
                        <img src="{{asset ('/img/icon/icon.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-7 justify-center m-auto">
                            <p class="elemento">1490 Casas</p>
                        </div>
                        <div class="col-5 text-right pt-2">
                        <img src="{{asset ('/img/icon/icon.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-7 justify-center m-auto">
                            <p class="elemento">1490 Casas</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-secondary btn-almada">Vive en Almada</a>
                    </div>
                </div>

                <div class="col-6 text-center">
                    <img src="{{asset ('/img/modelo.png')}}" class="img-fluid" alt="">
                    <div class="bg-miraverde">
                        <img src="{{asset ('/img/miraverde.png')}}" alt="Gran Calzada | Ciudad Viva" class="img-fluid pt-3 pb-3">
                    <h4 style="color: #fff">
                        Desde:<span>$385,000</span>
                    </h4>
                    <p style="color: #fff">Almada® es un desarrollo tipo cerrada que conecta con nuestra Gran Calzada®, la cual concentra todos los servicios y amenidades para que tú y tu familia se den un respiro mientras la recorren para realizar las actividades de su vida diaria.</p>
                    <div class="row">
                        <div class="col-5 text-right pt-2">
                        <img src="{{asset ('/img/icon/icon-mira.svg')}}" alt="" class="img-fluid" width="35">
                        </div>
                        <div class="col-7 justify-center m-auto">
                            <p class="elemento">1490 Casas</p>
                        </div>
                        <div class="col-5 text-right pt-2">
                        <img src="{{asset ('/img/icon/icon-mira.svg')}}" alt="" class="img-fluid" width="35">
                        </div>
                        <div class="col-7 justify-center m-auto">
                            <p class="elemento">1490 Casas</p>
                        </div>
                        <div class="col-5 text-right pt-2">
                        <img src="{{asset ('/img/icon/icon-mira.svg')}}" alt="" class="img-fluid" width="35" style="width: 40">
                        </div>
                        <div class="col-7 justify-center m-auto">
                            <p class="elemento">1490 Casas</p>
                        </div>
                        <div class="col-5 text-right pt-2">
                        <img src="{{asset ('/img/icon/icon-mira.svg')}}" alt="" class="img-fluid" width="35" style="width: 40">
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
    



@endsection