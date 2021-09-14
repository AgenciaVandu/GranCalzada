@extends('layouts.article')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-8">
                
                <div class="control-box p-3 main-content">
                    <div class="cabecera-blog">
                        <div class="control-w">
                            <img src="{{asset('/img/blog/cabecera-blog.jpg')}}" alt="Cabecera blog" class="img-fluid">
                        </div>
                        <div class="row pt-3">
                            <div class="col-10 compartir">
                               <h5>Compartir:</h5>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                   <div class="redes-sociales pl-2">
                                    <a href=""><i class="fab fa-facebook-square"></i></a>
                                   </div>
                                    <div class="redes-sociales pl-2">
                                       <a href=""> <i class="fab fa-twitter"></i></a>
                                    </div>
                                    <div class="redes-sociales pl-2">
                                        <a href=""><i class="fab fa-whatsapp-square"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <h4 class="titular-de-blog pt-4">Estrena casa, y además obtén hasta $3,000 para usar en Boxito</h4>
                    <h4 class=" pt-4">¿Cómo obtenerlo? </h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, asperiores reiciendis? Id incidunt obcaecati debitis, placeat consectetur, eum culpa exercitationem aspernatur corrupti expedita, delectus libero modi iure magni? Quis, dolore doloremque et reprehenderit deserunt id totam porro rerum, facilis repellendus sequi harum quas iste veniam? Minus at libero obcaecati iusto, illo expedita accusamus voluptates nostrum dolore eaque nulla! Esse, illo?
                    </p>
                    <h4 class="pt-2">¿Cuándo vence?</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, asperiores reiciendis? Id incidunt obcaecati debitis, placeat consectetur, eum culpa exercitationem aspernatur corrupti expedita, delectus libero modi iure magni? Quis, dolore doloremque et reprehenderit deserunt id totam porro rerum, facilis repellendus sequi harum quas iste veniam? Minus at libero obcaecati iusto, illo expedita accusamus voluptates nostrum dolore eaque nulla! Esse, illo?
                    </p>
                    <img src="{{asset ('/img/blog/imagen-de-entrada.jpg')}}" class="img-fluid" alt="">
                    <div class="enlace pt-4 text-center">
                        <a href="https://grancalzada.testvandu.com/conoce-gran-calzada">Conoce los modelos disponibles</a>
                    </div>
                   
       
                </div>
            </div>
            <div class="col-md-4">
                <div class="control-box p-3">
                    <label for="site-search">Buscar en artículos</label>
                    <input type="search" id="site-search" name="q"
                    aria-label="BUSCAR" class="btn-block">
                </div>
                <div class="control-box mt-3 sidebar">
                    <li class="categoria-articulo-h">Categorías</li>
                    <li class="categoria-articulo mt-2">Todas</li>
                    <li class="categoria-articulo mt-2">Noticias</li>
                    <li class="categoria-articulo mt-2">Promociones</li>
                </div>
                <div class="control-box p-3 mt-3">
                   <h4>
                       <b>POST RECIENTES</b>
                    </h4>
                   <div class="card pt-3">
                        <img src="{{asset ('/img/blog/blog-img.jpg')}}" alt="imagen destacada blog">
                        <h4 class="pt-3">Titulo de entrada</h4>
                        <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nulla facere. Quis placeat, impedit sequi nobis repellendus amet ullam ab. Facere odit commodi maiores error, voluptate sint illo nulla tempora dicta temporibus voluptatibus ad debitis earum</p>
                        <a href="" class="text-center" ><b>Leer más</b></a>
                    </div>
                    <div class="card pt-3">
                        <img src="{{asset ('/img/blog/blog-img.jpg')}}" alt="imagen destacada blog">
                        <h4 class="pt-3">Titulo de entrada</h4>
                        <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nulla facere. Quis placeat, impedit sequi nobis repellendus amet ullam ab. Facere odit commodi maiores error, voluptate sint illo nulla tempora dicta temporibus voluptatibus ad debitis earum</p>
                        <a href="" class="text-center" ><b>Leer más</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection