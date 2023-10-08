const nNotas = document.querySelector('#nNotas');
const divNotas = document.querySelector('#divNotas');
const btn_notas = document.querySelector('#btn_nota');

btn_notas.addEventListener('click', function () {
    const numNotas = parseInt(nNotas.value);

    let suma = 0;

    for (let i = 1; i <= numNotas; i++) {
        const notaInput = document.querySelector(`#nota${i}`);
        const porcentajeInput = document.querySelector(`#porcentaje${i}`);

        const nota = parseFloat(notaInput.value) || 0; // Si no se ingresa un número válido, asumimos 0.
        const porcentaje = parseFloat(porcentajeInput.value) || 0;

        const resultado = (nota * porcentaje) / 100; // Calcula la contribución de esta nota al resultado final.
        suma += resultado; // Agrega la contribución al resultado total.
    }
    
    const notaFinal = document.createElement('p');
    notaFinal.innerHTML = 'Su nota final es: ${suma}';
    divNotas.appendChild(notaFinal);
    // console.log(`La suma total es: ${suma}`);
});

nNotas.addEventListener('input', function () {
    const numNotas = parseInt(nNotas.value);

    // Limpiar el contenedor de notas antes de agregar las nuevas
    divNotas.innerHTML = '';

    for (let i = 1; i <= numNotas; i++) {
        const notaText = document.createElement('p');
        notaText.innerHTML = `Nota ${i}`;
        divNotas.appendChild(notaText);

        const notaInput = document.createElement('input');
        notaInput.type = 'number';
        notaInput.placeholder = 'Nota';
        notaInput.id = `nota${i}`;
        divNotas.appendChild(notaInput);

        const porcentajeInput = document.createElement('input');
        porcentajeInput.type = 'number';
        porcentajeInput.placeholder = 'Porcentaje';
        porcentajeInput.id = `porcentaje${i}`;
        divNotas.appendChild(porcentajeInput);
    }
});
