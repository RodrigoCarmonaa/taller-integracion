const btn_agregar = document.getElementById('btn_agregar')
const nuevaMateria = document.getElementById('nuevaMateria')

function mostrarMateria(){
    fetch(`mostrarMateria.php`)
    .then(respuesta => respuesta.text())
    .then(data => {
        nuevaMateria.innerHTML = data;
    })
}

mostrarMateria()



/*
btn_agregar.addEventListener('submit', function(){
    fetch(`mostrarMateria.php`)
    .then(respuesta => respuesta.text())
    .then(data => {
        nuevaMateria.innerHTML = data;
    })
})
*/