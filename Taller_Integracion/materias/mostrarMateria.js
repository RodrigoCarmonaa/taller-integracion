// const btn_agregar = document.getElementById('btn_agregar')
// const divSelect = document.getElementById('divSelect')
// const seleccionar = document.getElementById('seleccionar')
// const mostrarNotas = document.getElementById('mostrarNotas')

const nuevaMateria = document.getElementById('nuevaMateria')

// seleccionar.addEventListener('change', function(){
//     fetch(`obtenerMateria.php`)
//     .then(respuesta => respuesta.text())
//     .then(data => {
//         mostrarNotas.innerHTML = data;
//     })
// })

function mostrarMateria(){
    fetch(`mostrarMateria.php`)
    .then(respuesta => respuesta.text())
    .then(data => {
        nuevaMateria.innerHTML = data;
    })
}

mostrarMateria()