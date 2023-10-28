document.addEventListener("DOMContentLoaded", function () {
    const calculateButton = document.getElementById("calculate");
    const resultParagraph = document.getElementById("result");

    calculateButton.addEventListener("click", function () {
        // Obtener las notas y créditos de las materias
        const grade1 = parseFloat(document.getElementById("grade1").value);
        const credit1 = parseFloat(document.getElementById("credit1").value);
        const grade2 = parseFloat(document.getElementById("grade2").value);
        const credit2 = parseFloat(document.getElementById("credit2").value);
        const grade3 = parseFloat(document.getElementById("grade3").value);
        const credit3 = parseFloat(document.getElementById("credit3").value);

        // Calcular el promedio ponderado
        const weightedAverage = ((grade1 * credit1) + (grade2 * credit2) + (grade3 * credit3)) / (credit1 + credit2 + credit3);

        // Mostrar el resultado
        if (!isNaN(weightedAverage)) {
            resultParagraph.textContent = `Tu promedio ponderado es: ${weightedAverage.toFixed(2)}`;
        } else {
            resultParagraph.textContent = "Por favor, ingresa todas las notas y créditos.";
        }
    });
});
