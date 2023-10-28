document.addEventListener('DOMContentLoaded', function () {
    const selector = document.getElementById('selector');
    const horario = document.getElementById('horario');

    // Función para crear filas de horas dentro de un intervalo específico
    function crearFilasDeHoras(inicio, fin) {
        for (let i = inicio; i <= fin; i++) {
            const fila = horario.insertRow(-1);
            const hora = fila.insertCell(0);
            hora.textContent = `${i}:00  - ${i + 1}:00`;

            for (let j = 1; j <= 5; j++) { // 5 días de la semana (Lunes a Viernes)
                const celda = fila.insertCell(j);
                celda.textContent = ''; // Inicialmente, las celdas están vacías
            }
        }
    }

    // Llamar a la función para crear filas de horas dentro de un intervalo específico
    crearFilasDeHoras(8, 19); // Ejemplo: crea filas desde las 8:00 AM hasta las 6:00 PM

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

    // Llamar a la función para cargar opciones desde CSV al cargar la página
    cargarOpcionesDesdeCSV();

// Evento change en el selector para insertar selección en la tabla
selector.addEventListener('change', function () {
    const seleccion = selector.value;

    // Solicitar al usuario que elija una hora o un intervalo de horas y un día
    const horaInicio = parseInt(prompt('Elija la hora de inicio (8-20):'));
    const horaFin = parseInt(prompt('Elija la hora de fin (8-20):'));
    const diaSeleccionado = prompt('Elija un día (Lunes, Martes, Miércoles, Jueves, Viernes):');

    // Convertir el día seleccionado a minúsculas
    const diaSeleccionadoLowerCase = diaSeleccionado.toLowerCase();

    // Validar las horas ingresadas
    if (horaInicio >= 8 && horaInicio <= 20 && horaFin >= 8 && horaFin <= 20 && horaInicio <= horaFin) {
        // Validar el día ingresado (insensible a mayúsculas y minúsculas)
        const columnaDia = {
            'lunes': 1,
            'martes': 2,
            'miércoles': 3,
            'jueves': 4,
            'viernes': 5
        }[diaSeleccionadoLowerCase];

        if (columnaDia) {
            // Llamar a la función para rellenar el intervalo de horas con la selección
            rellenarIntervaloConSeleccion(horaInicio, horaFin, columnaDia, seleccion);
        } else {
            alert('Día no válido. Asegúrese de que el día sea uno de los siguientes: Lunes, Martes, Miércoles, Jueves, Viernes.');
        }
    } else if (horaInicio === horaFin) {
        // Caso en el que se selecciona una sola hora
        const diaSeleccionadoLowerCase = diaSeleccionado.toLowerCase();
        const columnaDia = {
            'lunes': 1,
            'martes': 2,
            'miércoles': 3,
            'jueves': 4,
            'viernes': 5
        }[diaSeleccionadoLowerCase];

        if (columnaDia) {
            // Llamar a la función para rellenar una sola hora con la selección
            rellenarHoraConSeleccion(horaInicio, columnaDia, seleccion);
        } else {
            alert('Día no válido. Asegúrese de que el día sea uno de los siguientes: Lunes, Martes, Miércoles, Jueves, Viernes.');
        }
    } else {
        alert('Horas no válidas. Asegúrese de que la hora de inicio y la hora de fin estén entre 8 y 20, y que la hora de inicio sea anterior o igual a la hora de fin.');
    }
});
// Función para rellenar una sola hora con la selección
function rellenarHoraConSeleccion(hora, columnaDia, seleccion) {
    const filaHora = horario.rows[hora - 8 + 1]; // +1 para ajustar por la fila de encabezados
    const celda = filaHora.cells[columnaDia];
    celda.textContent = seleccion;
}



    // Función para rellenar un intervalo de horas con la selección
    function rellenarIntervaloConSeleccion(inicio, fin, columnaDia, seleccion) {
        for (let i = inicio; i <= fin; i++) {
            const filaHora = horario.rows[i - 8 + 1]; // +1 para ajustar por la fila de encabezados
            const celda = filaHora.cells[columnaDia];
            celda.textContent = seleccion;
        }
    }
});
