const burguer = document.querySelector('.burguer');
const menu = document.querySelector('.menu');
const linha1 = document.querySelector('.burguer>div:first-child');
burguer.addEventListener('click',()=>{
  // console.log("teste");
  menu.classList.toggle('exibir');
  linha1.classList.toggle('linha1');
}); 


