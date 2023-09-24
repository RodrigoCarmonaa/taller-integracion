// Numero de notas

const nNotas = document.querySelector('#nNotas')
const divNotas = document.querySelector('#divNotas')
const btn_notas = document.querySelector('#btn_nota')

nNotas.addEventListener('input', function () {
    const numNotas = parseInt(nNotas.value);

    // Limpiar el contenedor de notas antes de agregar las nuevas
    // divNotas.innerHTML = '';

    for (let i = 1; i <= numNotas; i++) {
        const notaText = document.createElement('p');
        notaText.textContent = `Nota ${i}`;
        divNotas.appendChild(notaText);
    
        //
        const notasInput = document.createElement('input');
        notasInput.type = 'number';
        notasInput.placeholder = 'Nota'
        divNotas.appendChild(notasInput);
        //
        const porcentajeInput = document.createElement('input');
        porcentajeInput.type = 'number';
        porcentajeInput.placeholder = 'Porcentaje'
        divNotas.appendChild(porcentajeInput);
    }
});

// btn_notas.addEventListener('click', function () {

// });