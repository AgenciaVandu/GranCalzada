@extends('layouts.template')
@section('content')
    
    <section id="entradas" class=" pt-5 bg-grancalzada">
        <div class="container">
            <h1 class="text-center blog-titular">Blog</h1>
            <div class="row">
                <div class="col-12">
                    <p class="categorias">Categorías</p>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="categorias-1">Todas</p>
                            
                        </div>
                        <div class="col-md-4">
                            <p class="categorias-1">Noticias</p>
                            
                        </div>
                        <div class="col-md-4">
                            <p class="categorias-1">Promociones</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset ('/img/blog/blog-img.jpg')}}" alt="imagen destacada blog">
                        <h4 class="pt-3 text-center">Titulo de entrada</h4>
                        <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nulla facere. Quis placeat, impedit sequi nobis repellendus amet ullam ab. Facere odit commodi maiores error, voluptate sint illo nulla tempora dicta temporibus voluptatibus ad debitis earum</p>
                        <a href="" class="btn btn-light" >Leer más</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset ('/img/blog/blog-img.jpg')}}" alt="imagen destacada blog">
                        <h4 class="pt-3 text-center">Titulo de entrada</h4>
                        <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nulla facere. Quis placeat, impedit sequi nobis repellendus amet ullam ab. Facere odit commodi maiores error, voluptate sint illo nulla tempora dicta temporibus voluptatibus ad debitis earum</p>
                        <a href="" class="btn btn-light" >Leer más</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset ('/img/blog/blog-img.jpg')}}" alt="imagen destacada blog">
                        <h4 class="pt-3 text-center">Titulo de entrada</h4>
                        <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, nulla facere. Quis placeat, impedit sequi nobis repellendus amet ullam ab. Facere odit commodi maiores error, voluptate sint illo nulla tempora dicta temporibus voluptatibus ad debitis earum</p>
                        <a href="" class="btn btn-light" >Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection