@extends('layouts.lead')
@section('lead-content')
    <header id="lead-mv" class="lead-espacio">
        <div class="fondo-vector">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 pt-3 centro">
                        <a href="/">
                            <img src="{{asset ('/img/miraverde/miraverde-lead.svg')}}" width="220" alt="">
                        </a>                    </div>
                    <div class="col-md-6 col-sm-12 pt-3 text-center">
                        <h3 style="color: #fff">¡Ya casi estrenas casa! 
                            <br>
                        Nosotros te ayudaremos
                        </h3>
                    </div>
    
                    <div class="col-md-6 col-sm-12 lead-espacio">
                        <img src="{{asset('/img/miraverde/lead/ceiba-plus.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 lead-espacio lead-position">
                        <ul>
                            <li class="modelo-li ">Modelo Ceiba Plus</li>
                                <br>
                                <li>Construcción: <span>82.25 m2 m<sup>2</sup></span></li>
                                <li>Terreno desde: <span>7 x 17 m</li> 
                                <br>
                                <li><b>Planta Arquitectónica</b></li>
    
                                <br>
                                <li><b>PLANTA BAJA</b></li>
                                <li>Sala / Comedor</li>
                                <li>Cocina independiente</li> 
                                <li>½ baño</li>
                                <li>Cochera semitechada</li>
                                <br>
                                <li><b>PLANTA ALTA</b></li>
                                <li>Recámara principal con área <br> para closet y acceso a baño completo</li>
                                <li>Recámara 1 con área para closet</li>
                                <li>Recámara 2</li>
                                <li>Baño completo</li>
                                
                            
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