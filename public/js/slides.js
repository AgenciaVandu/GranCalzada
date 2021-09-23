$(function(){
  $('#modal-promo').modal()
});

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

window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista2'),{
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        dots: '.carousel__indicadores2',
        arrows: {
            prev: '.carousel__anterior',
            next: '.carousel__siguiente'
        }, 
        responsive: [
            {
              // screens greater than >= 775px
              breakpoint: 800,
              settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: '2',
                slidesToScroll: '1',
              }
            },{
              // screens greater than >= 1024px
              breakpoint: 904,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                itemWidth: 150,
                duration: 0.25
              }
            }
          ]
    });

});

  let cont1=document.getElementById('cont1'),
      cont2=document.getElementById('cont2'),
      cont3=document.getElementById('cont3')
  let cant1=0,cant2=0,cant3=0
      tiem=25

  let tiempo1= setInterval(() => {
        cont1.textContent=cant1+=1

        if (cant1==19) {
          clearInterval(tiempo1)
        }

      }, '${tiem}' );

  let tiempo2= setInterval(() => {
    cont2.textContent=cant2+=1

        if (cant2==8438) {
          clearInterval(tiempo2)
        }

      }, '${tiem}' );

  let tiempo3= setInterval(() => {
    cont3.textContent=cant3+=1

        if (cant3==32908) {
          clearInterval(tiempo3)
        }

      }, '${tiem}' );