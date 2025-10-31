const calcular = document.getElementById('calcular');

function imc () {
    const nome = document.getElementById ('nome').value;
    const altura = document.getElementById ('altura').value;
    const peso = document.getElementById ('peso').value;
    const resultado = document.getElementById('resultado');

    if (nome !=='' && altura !=='' && peso!=='') {
        let valorImc=(peso/(altura*altura)).toFixed(1);

        let classificacao="";
        if (valorImc<18.5){
            classificacao="Abaixo";
        }else if (valorImc<25){
            classificacao="Peso ideal";
        }else if (valorImc<30){
            classificacao="Levemente acima do peso";
        }else if (valorImc<35){
            classificacao="Obesidade Grau I";
        }else if (valorImc<40){
            classificacao="Obesidade Grau II";
        }else{
            classificacao="Obesidade Grau III";
        }
        alert (valorImc);
        resultado.textContent=`${nome} imc = ${valorImc} e você está ${classificacao}`;
   }else{
    alert ('Preencha todos os campos');
   }
}

calcular.addEventListener('click', imc);
