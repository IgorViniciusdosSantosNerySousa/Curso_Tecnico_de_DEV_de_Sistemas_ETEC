const tituloInput = document.getElementById('titulo');
const maxChars = 300;
const contadorSpan = document.getElementById('titulo-contador');

if (contadorSpan) {
    contadorSpan.textContent = `${maxChars} caracteres restantes`;
}

tituloInput.addEventListener('input', () => {
    const atualLength = tituloInput.value.length;
    if (atualLength > maxChars) {
        tituloInput.value = tituloInput.value.slice(0, maxChars);
    }
    if (contadorSpan) {
        const restantes = maxChars - tituloInput.value.length;
        contadorSpan.textContent = `${restantes} caracteres restantes`;
    }
});