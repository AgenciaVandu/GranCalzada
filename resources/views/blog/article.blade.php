@extends('layouts.article')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="control-box p-3 main-content">
                        <div class="cabecera-blog">
                            <div class="control-w">
                                <img src="{{ Storage::url($post->resources->first()->url) }}" alt="Cabecera blog"
                                    class="img-fluid">
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-10 col-sm-12 compartir">
                                    <h5>Compartir:</h5>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <div class="row">
                                        <div class="redes-sociales pl-2">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"><i
                                                    class="fab fa-facebook-square"></i></a>
                                        </div>
                                        <div class="redes-sociales pl-2">
                                            <a href="https://twitter.com/intent/tweet?url={{ url()->full() }}2&text="> <i
                                                    class="fab fa-twitter"></i></a>
                                        </div>
                                        <div class="redes-sociales pl-2">
                                            <a href="https://api.whatsapp.com/send?text={{ url()->full() }}"><i
                                                    class="fab fa-whatsapp-square"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="titular-de-blog pt-4">{{ $post->title }}</h4>
                        <h4>{{ $post->subtitle }} </h4>
                        {!! $post->body !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="control-box p-3">
                        <label for="site-search">Buscar en artículos</label>
                        @livewire('search-posts')
                    </div>
                    <div class="control-box mt-3 sidebar">
                        @foreach ($categories as $category)
                            <a href="{{ route('blog.postCategory', $category) }}">
                                {{-- Esta clase impide la funcionalidad correcta del buscador .categoria-articulo --}}
                                <li class="mt-2 categoria-articulo">{{ $category->name }}</li>
                            </a>
                        @endforeach
                    </div>
                    <div class="control-box p-3 mt-3">
                        <h4>
                            <b>POST RECIENTES</b>
                        </h4>
                        @foreach ($posts->except($post->id) as $post)
                            <div class="card pt-3">
                                <img src="{{ Storage::url($post->resources->first()->url) }}" alt="imagen destacada blog">
                                <h4 class="pt-3">{{ $post->title }}</h4>
                                <p class="extracto">{!! $post->extract !!}</p>
                                <a href="{{ route('blog.show', $post) }}" class="text-center"><b>Leer más</b></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
