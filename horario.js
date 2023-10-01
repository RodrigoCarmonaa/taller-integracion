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
document.addEventListener('DOMContentLoaded', function () {
    const tabla = document.querySelector('table');
    const cambiosRealizados = {};

    tabla.addEventListener('click', function (event) {
        const cell = event.target;
        if (cell.tagName === 'TD') {
            const fila = cell.parentNode.rowIndex;
            const columna = cell.cellIndex;
            const coordenada = `${fila}-${columna}`;
            const currentValue = cell.textContent;
            const newValue = prompt('Ingrese el nuevo valor:', currentValue);

            if (newValue !== null) {
                cell.textContent = newValue;
                cambiosRealizados[coordenada] = newValue;
            }
        }
    });

    function guardarCambios() {
        if (Object.keys(cambiosRealizados).length > 0) {
            // Aquí puedes realizar acciones para guardar los cambios, como enviarlos a un servidor
            // Por ahora, simplemente mostraremos una alerta con los cambios
            let mensaje = 'Se han realizado los siguientes cambios:\n\n';
            for (const coordenada in cambiosRealizados) {
                const valorNuevo = cambiosRealizados[coordenada];
                mensaje += `Coordenada ${coordenada}: ${valorNuevo}\n`;
            }
            alert(mensaje);
        } else {
            alert('No se realizaron cambios.');
        }
    }

    // Agrega un botón para guardar los cambios
    const guardarCambiosButton = document.createElement('button');
    guardarCambiosButton.textContent = 'Guardar Cambios';
    guardarCambiosButton.addEventListener('click', guardarCambios);
    document.body.appendChild(guardarCambiosButton);

    // Cargar datos desde un archivo CSV
    fetch('scraping_cursos (1).csv')
        .then(response => response.text())
        .then(data => {
            // Parsear los datos CSV
            const filas = data.split('\n');
            for (let i = 1; i < filas.length; i++) {
                const valores = filas[i].split(',');
                if (valores.length === 6) {
                    const fila = tabla.insertRow(-1);
                    for (let j = 0; j < valores.length; j++) {
                        const celda = fila.insertCell(j);
                        celda.textContent = valores[j];
                    }
                }
            }
        })
        .catch(error => {
            console.error('Error al cargar el archivo CSV:', error);
        });
});
