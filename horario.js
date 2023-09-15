document.addEventListener('DOMContentLoaded', function () {
    const horario = document.getElementById('horario');
    const cambioClaseForm = document.getElementById('cambioClaseForm');

    cambioClaseForm.addEventListener('submit', function (e) {
        e.preventDefault();
        
        const nuevaClase = document.getElementById('nuevaClase').value;
        const fila = document.getElementById('fila').value - 1; // Restamos 1 para que coincida con el índice de la fila en la tabla
        const columna = document.getElementById('columna').value;

        const celda = horario.rows[fila].cells[columna];
        celda.textContent = nuevaClase;
        
        // Limpiamos el formulario
        cambioClaseForm.reset();
    });
});
