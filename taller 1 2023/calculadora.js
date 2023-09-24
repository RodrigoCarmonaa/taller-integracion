// 1.- Funcion
// 2.- Iniciar objetos
// 3.- Escuchar eventos


// Agregar materia

function editariHTML(objeto, texto) {
    objeto.innerHTML = texto;
}

const boton = document.querySelector('#agregarMateria');
const divMaterias = document.querySelector('#materias');


boton.addEventListener("click", function() {
    const input = document.querySelector('#nombreMateria').value;
    const nuevop = document.createElement("p");
    divMaterias.appendChild(nuevop);
    nuevop.innerText = input;
    editariHTML(divMaterias, input);
})