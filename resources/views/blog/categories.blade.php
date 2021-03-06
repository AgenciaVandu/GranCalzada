@extends('layouts.template')
@section('content')

    <section id="entradas" class=" pt-5 bg-grancalzada">
        <div class="container">
            <h1 class="text-center blog-titular">Blog</h1>
            <div class="row">
                <div class="col-12">
                    <p class="categorias">Categorías</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="dropdown mb-4 ml-3">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Todas
                            </button>
                            @foreach ($categories as $category)
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('blog.postCategory', $category) }}">
                                        {{ $category->name }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ Storage::url($post->resources->first()->url) }}" class="img-fluid imagem-destacada" alt="imagen destacada blog">
                            <div class="info-extracto">
                                <h4 class="pt-3 text-center">{{ $post->title }}</h4>
                                <p class="extracto">{!! $post->extract !!}</p>
                                <a href="{{ route('blog.show', $post) }}" class="btn btn-light btn-block mb-3">Leer más</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
