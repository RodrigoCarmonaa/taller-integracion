document.addEventListener('DOMContentLoaded', function () {
    const tabla = document.getElementById('tabla');

    // Hacer que las celdas sean editables al hacer clic en ellas
    tabla.addEventListener('click', function (e) {
        if (e.target.tagName === 'TD') {
            e.target.contentEditable = true;
            e.target.focus();
        }
    });

    // Desactivar la edición al presionar Enter o salir de la celda
    tabla.addEventListener('blur', function (e) {
        if (e.target.tagName === 'TD') {
            e.target.contentEditable = false;
        }
    });

    // Evitar que se presione Enter en las celdas para evitar crear nuevas filas
    tabla.addEventListener('keydown', function (e) {
        if (e.target.tagName === 'TD' && e.key === 'Enter') {
            e.preventDefault();
        }
    });
});
