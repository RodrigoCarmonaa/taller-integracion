document.addEventListener('DOMContentLoaded', function () {
    const tabla = document.querySelector('table');
    const cambiosRealizados = {};

    // Función para cargar datos desde un archivo CSV
    function cargarDatosDesdeCSV() {
        fetch('scraping_cursos (1).csv')
            .then(response => response.text())
            .then(data => {
                const filas = data.split('\n');
                const encabezados = filas[0].split(',');
                
                for (let i = 1; i < filas.length; i++) {
                    const valores = filas[i].split(',');
                    const fila = tabla.insertRow(-1);

                    for (let j = 0; j < encabezados.length; j++) {
                        const celda = fila.insertCell(j);
                        celda.textContent = valores[j];
                    }
                }
            })
            .catch(error => {
                console.error('Error al cargar el archivo CSV:', error);
            });
    }

    cargarDatosDesdeCSV();

    // El resto del código (editar y guardar cambios) sigue siendo igual
});

document.addEventListener('DOMContentLoaded', function () {
    const tabla = document.querySelector('table');

    tabla.addEventListener('click', function (event) {
        const cell = event.target;
        if (cell.tagName === 'TD') {
            const currentValue = cell.textContent;
            const newValue = prompt('Ingrese el nuevo valor:', currentValue);
            
            if (newValue !== null) {
                cell.textContent = newValue;
            }
        }
    });
});
