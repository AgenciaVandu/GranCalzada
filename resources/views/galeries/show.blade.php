@extends('layouts.template')

@section('content')
    <header class="bg-grancalzada espacio-avances">
        <div class="container-fluid">
            <h3 class="avances-h">
                {{ $galery->name }}
            </h3>
            <div class="row mt-5">
                @foreach ($galery->resources as $photo)
                    <div class="col-12 col-md-3 my-2">
                        <a data-toggle="modal" data-target="#exampleModalCenter-{{ $photo->id }}">
                            <img src="{{ Storage::url($photo->url) }}" class="img-fluid" alt="">
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter-{{ $photo->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Avance de obra</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ Storage::url($photo->url) }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </header>
@endsection
