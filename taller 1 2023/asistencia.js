document.addEventListener("DOMContentLoaded", function () {
    const totalInput = document.getElementById("total");
    const attendedInput = document.getElementById("attended");
    const calculateButton = document.getElementById("calculate");
    const resultParagraph = document.getElementById("result");
    const incrementTotalButton = document.getElementById("incrementTotal");
    const decrementTotalButton = document.getElementById("decrementTotal");
    const incrementAttendedButton = document.getElementById("incrementAttended");
    const decrementAttendedButton = document.getElementById("decrementAttended");

    // Función para incrementar o decrementar el valor de un campo input
    function updateCounter(input, increment) {
        let value = parseFloat(input.value);
        if (!isNaN(value) && value >= 0) {
            value += increment;
            input.value = value;
        }
    }

    // Event listeners para los botones de incremento y decremento
    incrementTotalButton.addEventListener("click", function () {
        updateCounter(totalInput, 1);
    });

    decrementTotalButton.addEventListener("click", function () {
        updateCounter(totalInput, -1);
    });

    incrementAttendedButton.addEventListener("click", function () {
        updateCounter(attendedInput, 1);
    });

    decrementAttendedButton.addEventListener("click", function () {
        updateCounter(attendedInput, -1);
    });

    calculateButton.addEventListener("click", function () {
        const totalClasses = parseFloat(totalInput.value);
        const attendedClasses = parseFloat(attendedInput.value);

        if (!isNaN(totalClasses) && !isNaN(attendedClasses) && totalClasses >= 0 && attendedClasses >= 0) {
            const attendancePercentage = (attendedClasses / totalClasses) * 100;
            resultParagraph.textContent = `Porcentaje de asistencia: ${attendancePercentage.toFixed(2)}%`;
        } else {
            resultParagraph.textContent = "Ingrese valores válidos.";
        }
    });
});
