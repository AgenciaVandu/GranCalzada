let cont1=document.getElementById('cont1'),
cont2=document.getElementById('cont2'),
cont3=document.getElementById('cont3')
let cant1=0,cant2=7500,cant3=32000
tiem=25

let tiempo1= setInterval(() => {
  cont1.textContent=cant1+=1

  if (cant1==20) {
    clearInterval(tiempo1)
  }

}, '${tiem}' );

let tiempo2= setInterval(() => {
cont2.textContent=cant2+=1

  if (cant2==8923) {
    clearInterval(tiempo2)
  }

}, '${tiem}' );

let tiempo3= setInterval(() => {
cont3.textContent=cant3+=1

  if (cant3==34798) {
    clearInterval(tiempo3)
  }

}, '${tiem}' );
