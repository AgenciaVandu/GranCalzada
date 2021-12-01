@extends('errors::illustrated-layout')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Servicio no disponible'))
@section('image')
<div class="movi">
    <img src="https://agenciavandu.com/img/Sally.svg" alt="">  
</div>  
@endsection
