// Numero de notas

const nNotas = document.querySelector('#nNotas')
const divNotas = document.querySelector('#divNotas')

nNotas.addEventListener('input', function () {
    const numNotas = parseInt(nNotas.value);

    // Limpiar el contenedor de notas antes de agregar las nuevas
    divNotas.innerHTML = '';

    for (let i = 1; i <= numNotas; i++) {
        const notaText = document.createElement('p');
        notaText.textContent = `Nota ${i}`;
        divNotas.appendChild(notaText);
    }
});