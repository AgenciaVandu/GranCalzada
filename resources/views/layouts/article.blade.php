<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gran Calzada</title>

    <!--Bootstrap 4.6-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--Font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,200;0,600;0,700;0,900;1,700&display=swap"
        rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="{{ asset('vendor/mapresponsive/jquery.rwdImageMaps.js') }}"></script>
    <style>
        img[usemap] {
            border: none;
            height: auto;
            max-width: 100%;
            width: auto;
        }

        body {
            background-color: #fff;
        }
    </style>
    @livewireStyles
</head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-grancalzada fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('/img/Logo-GranCalzada.svg') }}" width="190" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item pad active">
                        <a class="nav-link" href="/">Inicio <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item pad active">
                        <a class="nav-link" href="/conoce-gran-calzada">Gran Calzada</a>
                    </li>
                    <li class="nav-item pad dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Desarrollos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('almada.index') }}">Almada</a>
                            <a class="dropdown-item" href="/miraverde">Miraverde</a>

                        </div>
                    </li>
                    <li class="nav-item pad active">
                        <a class="nav-link" href="/avances-de-obra">Galería</a>
                    </li>

                    <li class="nav-item pad active">
                        <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item pad active">
                        <a class="nav-link" href="#">
                            <i class="whatsapp fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">

                    <button class="btn btn-light my-2 my-sm-0" type="submit">Cotiza tu casa</button>
                </form>

            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-4 col-md-4 col-sm-12 pt-5">
                    <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14902.644270028122!2d-89.620674!3d20.966122!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x676469d86fc45aa3!2sGRUPO%20CASITAS%20DESARROLLOS!5e0!3m2!1ses!2smx!4v1631721969182!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h5 class="ubis pt-4">Visita nuestros puntos de venta</h5>
                            <ul>
                                <li class="ubis">C.60 Fte. Japay</li>
                                <li class="ubis">2da. Calle Nueva </li>
                                <li class="ubis">C.56 x 61 y 63 </li>
                            </ul>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h5 class="ubis pt-4">Síguenos en nuestras redes sociales:</h5>
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        <a href=""> <i class="icono fab fa-facebook-square pr-2"></i>
                                        </a>
                                        <a href=""><i class=" icono fab fa-instagram pr-2"></i>
                                        </a>
                                        <a href=""><i class=" icono fab fa-linkedin pr-2"></i>
                                        </a>
                                        <a href=""><i class=" icono fab fa-whatsapp"></i>
                                        </a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <p class="ubis"><a href="">Tel: (999) 999 9999</a><br>
                        <span><a href="">whatsapp: (999) 999 9999</a></span>
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 hubspot pt-4">
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                    <script>
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "5510950",
                            formId: "4f8b9726-8345-4f16-b902-556d0b33072a"
                        });
                    </script>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 imagenes-center text-center">
                    <img src="{{ asset('/img/logos.svg') }}" class="img-fluid" alt="">

                </div>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>


@livewireScripts
</body>

</html>
