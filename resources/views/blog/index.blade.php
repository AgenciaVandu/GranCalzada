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
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ Storage::url($post->resources->first()->url) }}" alt="imagen destacada blog">
                            <h4 class="pt-3 text-center">{{ $post->title }}</h4>
                            <p class="extracto">{!! $post->extract !!}</p>
                            <a href="{{ route('blog.show', $post) }}" class="btn btn-light">Leer más</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
