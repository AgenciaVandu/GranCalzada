@extends('layouts.lead')
@section('lead-content')
    <header id="lead-alm" class="lead-espacio">
        <div class="fondo-vector">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 pt-3 centro">
                       <a href="/">
                         <img src="{{ asset('/img/almada/lead-gc.svg') }}" width="220" alt="">
                       </a>
                    </div>
                    <div class="col-md-6 col-sm-12 pt-3 text-center">
                        <h3 style="color: #fff">¡Ya casi estrenas casa!
                            <br>
                            Nosotros te ayudaremos
                        </h3>
                    </div>

                    <div class="col-md-6 col-sm-12 lead-espacio">
                        <img src="{{ asset('/img/almada/lead/aguamarina.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 lead-espacio lead-position">
                        <ul>
                            <li class="modelo-li pt-2">Modelo {{ $model->name }}</li>
                            <br>
                            <li>Construcción: <span>42.94 m<sup>2</sup></span></li>
                            <li>Terreno desde: <span>5 x 17 m</li> <br>
                            <li><b>Planta Arquitectónica</b></li>

                            <br>
                            @foreach ($features as $feature)
                                <li>{{ $feature->name }}</li>
                            @endforeach
                        </ul>
                        <div class="f-hubspot">
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                            <script>
                            hbspt.forms.create({
                                region: "na1",
                                portalId: "5510950",
                                formId: "dc9cfba4-600b-4430-9bc3-cd95ff13c768"
                            });
                            </script>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
@endsection
