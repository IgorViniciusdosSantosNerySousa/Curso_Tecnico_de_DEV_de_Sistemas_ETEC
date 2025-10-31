
const pequenas = document.querySelectorAll('#pequenas img');
const fg = document.querySelector('#fotoGrande');
const paragrafo = document.querySelector('#texto');

pequenas.forEach(element=>{
    element.addEventListener('click', ()=>{
        console.log(element.dataset.nome);
        fg.src = "images/large/"+element.dataset.nome;
        paragrafo.indexHTML = element.dataset.info;
    });    
});


