window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista'),{
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        dots: '.carousel__indicadores',
        arrows: {
            prev: '.carousel__anterior',
            next: '.carousel__siguiente'
        }
    });

});

window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista1'),{
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        dots: '.carousel__indicadores1',
        arrows: {
            prev: '.carousel__anterior',
            next: '.carousel__siguiente'
        }
    });

});

