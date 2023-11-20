document.addEventListener("DOMContentLoaded", function () {
    const totalSpan = document.getElementById("total");
    const attendedSpan = document.getElementById("attended");
    const calculateButton = document.getElementById("calculate");
    const resultParagraph = document.getElementById("result");
    const incrementTotalButton = document.getElementById("incrementTotal");
    const decrementTotalButton = document.getElementById("decrementTotal");
    const incrementAttendedButton = document.getElementById("incrementAttended");
    const decrementAttendedButton = document.getElementById("decrementAttended");

     // Event listeners para los botones de incremento y decremento
     incrementTotalButton.addEventListener("click", function () {
        updateCounter(totalSpan, 1);
    });

    decrementTotalButton.addEventListener("click", function () {
        updateCounter(totalSpan, -1);
    });

    incrementAttendedButton.addEventListener("click", function () {
        updateCounter(attendedSpan, 1);
    });

    decrementAttendedButton.addEventListener("click", function () {
        updateCounter(attendedSpan, -1);
    });

   

    calculateButton.addEventListener("click", function () {
        const totalClasses = parseFloat(totalSpan.textContent);
        const attendedClasses = parseFloat(attendedSpan.textContent);
    
        if (!isNaN(totalClasses) && !isNaN(attendedClasses) && totalClasses >= 0 && attendedClasses >= 0) {
          const attendancePercentage = (attendedClasses / totalClasses) * 100;
          resultParagraph.textContent = `Porcentaje de asistencia: ${attendancePercentage.toFixed(2)}%`;
        } else {
          resultParagraph.textContent = "Ingrese valores válidos.";
        }
      });
      
    function updateCounter(span, increment) {
        let value = parseFloat(span.textContent);
        if (!isNaN(value)) {
          // Asegurarse de que el valor no descienda por debajo de 0
          value = Math.max(0, value + increment);
    
          // Si el span representa el total de clases, asegurarse de que no sea menor que las clases asistidas
          if (span.id === "total") {
            const attendedValue = parseFloat(attendedSpan.textContent);
            value = Math.max(value, attendedValue);
          }
    
          // Si el span representa las clases asistidas, asegurarse de que no sea mayor que el total de clases
          if (span.id === "attended") {
            const totalValue = parseFloat(totalSpan.textContent);
            value = Math.min(value, totalValue);
          }
    
          span.textContent = value;
        }
        
      }
});
