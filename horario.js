document.addEventListener('DOMContentLoaded', function () {
    const selector = document.getElementById('selector');

    // Función para crear opciones a partir de datos CSV
    function cargarOpcionesDesdeCSV() {
        fetch('salas.csv')
            .then(response => response.text())
            .then(data => {
                const lineas = data.split('\n');
                lineas.shift(); // Eliminar la primera línea (encabezado)

                lineas.forEach(linea => {
                    const opcion = document.createElement('option');
                    opcion.textContent = linea.trim();
                    selector.appendChild(opcion);
                });
            })
            .catch(error => {
                console.error('Error al cargar el archivo CSV:', error);
            });
    }

    // Llamar a la función para cargar las opciones desde CSV
    cargarOpcionesDesdeCSV();
    
});
