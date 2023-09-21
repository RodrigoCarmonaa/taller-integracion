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
