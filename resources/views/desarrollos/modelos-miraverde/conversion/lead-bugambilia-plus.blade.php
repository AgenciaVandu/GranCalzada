@extends('layouts.lead')
@section('lead-content')
    <header id="lead-mv" class="lead-espacio">
        <div class="fondo-vector">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 pt-3 centro">
                        <img src="{{asset ('/img/miraverde/miraverde-lead.svg')}}" width="220" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 pt-3 text-center">
                        <h3 style="color: #fff">¡Ya casi estrenas casa! 
                            <br>
                        Nosotros te ayudaremos
                        </h3>
                    </div>
    
                    <div class="col-md-6 col-sm-12 lead-espacio">
                        <img src="{{asset('/img/miraverde/lead/bugambilia.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 lead-espacio lead-position">
                        <ul>
                            <li class="modelo-li ">Modelo Bugambilia Plus</li>
                            <br>
                            <li>Construcción: <span>73.69 m<sup>2</sup></span></li>
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
                            <li>Recámara principal con área <br> para closet y baño completo</li>
                            <li>Recámara secundaria con área <br> para closet </li>
                            <li>Baño completo</li>
                            <li>Terraza</li>
                                
                            
                        </ul>
                        <div class="f-hubspot">
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js">
                            </script>
                            <script>
                                hbspt.forms.create({
                                region: "na1",
                                portalId: "5510950",
                                formId: "4f8b9726-8345-4f16-b902-556d0b33072a"
                                });
                            </script>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </header>
@endsection