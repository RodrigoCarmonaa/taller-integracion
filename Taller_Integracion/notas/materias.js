// 1.- Funcion
// 2.- Iniciar objetos
// 3.- Escuchar eventos


// Agregar materia

// function editariHTML(objeto, texto) {
//     objeto.innerHTML = texto;
// }

const boton = document.querySelector('#agregarMateria');


boton.addEventListener("click", function() {
    const divMaterias = document.querySelector('#materias');
    const input = document.querySelector('#nombreMateria').value;
    const nuevoDiv = document.createElement("div");
    nuevoDiv.innerHTML = input;    
    divMaterias.appendChild(nuevoDiv);

    // divMaterias.innerHTML = nuevoDiv
    // editariHTML(divMaterias, input);
})