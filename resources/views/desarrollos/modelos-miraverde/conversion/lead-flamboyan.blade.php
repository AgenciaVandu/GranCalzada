@extends('layouts.lead')
@section('lead-content')
    <header id="lead-mv" class="lead-espacio">
        <div class="fondo-vector">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 pt-3 centro">
                        <img src="{{ asset('/img/miraverde/miraverde-lead.svg') }}" width="220" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 pt-3 text-center">
                        <h3 style="color: #fff">¡Ya casi estrenas casa!
                            <br>
                            Nosotros te ayudaremos
                        </h3>
                    </div>

                    <div class="col-md-6 col-sm-12 lead-espacio">
                        <img src="{{ asset('/img/miraverde/lead/flamboyan.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 lead-espacio lead-position">
                        <ul>
                            <li class="modelo-li ">Modelo Flamboyán Plus</li>
                            <br>
                            <li>Construcción: <span>65.73 m<sup>2</sup></span></li>
                            <li>Terreno desde: <span>7 x 17 m</li>
                            <br>
                            <li><b>Planta Arquitectónica</b></li>

                            <br>
                            <li><b>PLANTA BAJA</b></li>
                            @foreach ($features as $feature)
                                @if ($feature->floor == 'down')
                                    <li>{{ $feature->name }}</li>
                                @endif
                            @endforeach
                            <br>
                            <li><b>PLANTA ALTA</b></li>
                            @foreach ($features as $feature)
                                @if ($feature->floor == 'top')
                                    <li>{{ $feature->name }}</li>
                                @endif
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
