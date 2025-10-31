let max = 10;
let min = 2;
let acertos = 0;
let erros = 0;

campo1 = document.querySelector('#campo1');
campo2 = document.querySelector('#campo2');
campoAcertos = document.querySelector('#campoAcertos');
campoErros = document.querySelector('#campoErros');
campoRespostaUsuario = document.querySelector('#respostaUsuario');

document.addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        verifica();    
    }
});

function iniciar() {
    valor1 = Math.floor(Math.random() * (max - min + 1)) + min;
    valor2 = Math.floor(Math.random() * (max - min + 1)) + min;
    campo1.value = valor1;
    campo2.value = valor2;
    campoRespostaUsuario.focus();
}

function verifica() {
    respostaUsuario = campoRespostaUsuario.value;
    respostaCorreta = valor1 * valor2;
    if (respostaCorreta == respostaUsuario) {
        acertos++;    
    } else {
        erros++;
    }
    campoAcertos.innerHTML = "Acertos: " + acertos; 
    campoErros.innerHTML = "Erros: " + erros;
    campoRespostaUsuario.value = "";
    iniciar();
}

iniciar();







