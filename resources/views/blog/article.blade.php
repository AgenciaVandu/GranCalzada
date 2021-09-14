@extends('layouts.article')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-8">
                
                <div class="control-box p-3 main-content">
                    <div class="cabecera-blog">
                        <img src="{{asset('/img/blog/cabecera-blog.jpg')}}" alt="Cabecera blog" class="img-fluid">
                        <div class="row pt-3">
                            <div class="col-10 compartir">
                               <h5>Compartir</h5>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                   <div class="redes-sociales pl-2">
                                    <i class="fab fa-facebook"></i>
                                   </div>
                                    <div class="redes-sociales pl-2">
                                        <i class="fab fa-facebook"></i>
                                    </div>
                                    <div class="redes-sociales pl-2">
                                        <i class="fab fa-facebook"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <h4 class="titular-de-blog pt-4">Estrena casa, y además obtén hasta $3,000 para usar en Boxito</h4>
                    <h4 class=" pt-4">¿Cómo obtenerlo? </h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, asperiores reiciendis? Id incidunt obcaecati debitis, placeat consectetur, eum culpa exercitationem aspernatur corrupti expedita, delectus libero modi iure magni? Quis, dolore doloremque et reprehenderit deserunt id totam porro rerum, facilis repellendus sequi harum quas iste veniam? Minus at libero obcaecati iusto, illo expedita accusamus voluptates nostrum dolore eaque nulla! Esse, illo?
                    </p>
                    <h4 class="pt-2">¿Cuándo vence?</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, asperiores reiciendis? Id incidunt obcaecati debitis, placeat consectetur, eum culpa exercitationem aspernatur corrupti expedita, delectus libero modi iure magni? Quis, dolore doloremque et reprehenderit deserunt id totam porro rerum, facilis repellendus sequi harum quas iste veniam? Minus at libero obcaecati iusto, illo expedita accusamus voluptates nostrum dolore eaque nulla! Esse, illo?
                    </p>
                    <img src="{{asset ('/img/blog/imagen-de-entrada.jpg')}}" class="img-fluid" alt="">
                    <div class="enlace pt-4 text-center">
                        <a href="https://grancalzada.testvandu.com/conoce-gran-calzada">Conoce los modelos disponibles</a>
                    </div>
                   
       
                </div>
            </div>
            <div class="col-md-4">
                <div class="control-box p-3">
                    <h2>Páginas</h2>
                </div>
                <div class="control-box p-3 mt-3 sidebar">
                    <a href="carrinho.html">
                        <img src="https://www.negocioem21dias.org/wp-content/uploads/2018/01/negocio-em-21-dias-logo-principal-750x400.jpg" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection