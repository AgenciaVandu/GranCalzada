@extends('layouts.template')
@section('content')
    <header class="p-blog bg-grancalzada"> 
        <div class="container">
            <h1 class="text-center">Blog</h1>
        </div>
    </header>


    <section id="entradas" class=" pt-5 bg-grancalzada">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Categorías</p>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-md-4">
                            <p>Todas</p>
                            
                        </div>
                        <div class="col-md-4">
                            <p>Noticias</p>
                            
                        </div>
                        <div class="col-md-4">
                            <p>Promociones</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset ('/img/blog/blog-img.jpg')}}" alt="imagen destacada blog">
                        <h4 class="pt-3">Titulo de entrada</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae tempora ad atque. Voluptates odit impedit veritatis sequi aliquam temporibus totam?</p>
                        <a href="" class="btn btn-light" >Leer más</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset ('/img/blog/blog-img.jpg')}}" alt="imagen destacada blog">
                        <h4 class="pt-3">Titulo de entrada</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae tempora ad atque. Voluptates odit impedit veritatis sequi aliquam temporibus totam?</p>
                        <a href="" class="btn btn-light" >Leer más</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset ('/img/blog/blog-img.jpg')}}" alt="imagen destacada blog">
                        <h4 class="pt-3">Titulo de entrada</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae tempora ad atque. Voluptates odit impedit veritatis sequi aliquam temporibus totam?</p>
                        <a href="" class="btn btn-light" >Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection