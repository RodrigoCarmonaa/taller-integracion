document.addEventListener('DOMContentLoaded', function () {
    const selector = document.getElementById('selector');
    const horario = document.getElementById('horario');

    // Función para crear filas de horas
// Función para crear filas de horas dentro de un intervalo específico
function crearFilasDeHoras(inicio, fin) {
    for (let i = inicio; i <= fin; i++) {
        const fila = horario.insertRow(-1);
        const hora = fila.insertCell(0);
        hora.textContent = `${i}:00  - ${i + 1}:00  `;

        for (let j = 1; j <= 5; j++) { // 5 días de la semana (Lunes a Viernes)
            const celda = fila.insertCell(j);
            celda.textContent = ''; // Inicialmente, las celdas están vacías
        }
    }
}

// Llamar a la función para crear filas de horas dentro de un intervalo específico
crearFilasDeHoras(8, 19); // Ejemplo: crea filas desde las 8:00 AM hasta las 5:00 PM

    // Función para cargar opciones desde un archivo CSV
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

    // Llamar a la función para crear filas de horas al cargar la página
    crearFilasDeHoras();

    // Llamar a la función para cargar opciones desde CSV al cargar la página
    cargarOpcionesDesdeCSV();

    // Evento change en el selector para insertar selección en la tabla
    selector.addEventListener('change', function () {
        const seleccion = selector.value;

        // Solicitar al usuario que elija una hora y un día
        const horaSeleccionada = prompt('Elija una hora (8-20):');
        const diaSeleccionado = prompt('Elija un día (Lunes, Martes, Miércoles, Jueves, Viernes):');

        // Validar la hora ingresada
        const horaNumerica = parseInt(horaSeleccionada);
        if (horaNumerica >= 8 && horaNumerica <= 20) {
            // Encontrar la fila correspondiente a la hora
            const filaHora = horario.rows[horaNumerica - 8 + 1]; // +1 para ajustar por la fila de encabezados

            // Validar el día ingresado
            const columnaDia = {
                'Lunes': 1,
                'Martes': 2,
                'Miércoles': 3,
                'Jueves': 4,
                'Viernes': 5
            }[diaSeleccionado];

            if (filaHora && columnaDia) {
                // Insertar la selección en la celda correspondiente
                const celda = filaHora.cells[columnaDia];
                celda.textContent = seleccion;
            } else {
                alert('Hora o día no válidos. Asegúrese de que la hora esté entre 8 y 20 y el día sea uno de los siguientes: Lunes, Martes, Miércoles, Jueves, Viernes.');
            }
        } else {
            alert('Hora no válida. Ingrese una hora entre 8 y 20.');
        }
    });
});
