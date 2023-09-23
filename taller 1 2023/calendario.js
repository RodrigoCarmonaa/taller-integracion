document.addEventListener("DOMContentLoaded", function() {
  const calendar = document.getElementById("calendar");
  const taskInput = document.getElementById("task");
  const addTaskButton = document.getElementById("add-task");
  const taskList = document.getElementById("tasks");

  // Obtener la fecha actual
  const today = new Date();
  let currentMonth = today.getMonth();
  let currentYear = today.getFullYear();

  // Array de nombres de los días de la semana
  const daysOfWeek = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];

  // Función para obtener el nombre del día de la semana
  function getDayOfWeek(date) {
      return daysOfWeek[date.getDay()];
  }

  // Función para generar el calendario
  function generateCalendar(month, year) {
      const firstDay = new Date(year, month, 1);
      const lastDay = new Date(year, month + 1, 0);
      const daysInMonth = lastDay.getDate();
      const startingDay = firstDay.getDay();

      // Crear una tabla para el calendario
      let html = "<table><tr><th>Domingo</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th></tr><tr>";

      // Rellenar los días vacíos al principio del mes
      for (let i = 0; i < startingDay; i++) {
          html += "<td></td>";
      }

      // Rellenar los días del mes
      for (let day = 1; day <= daysInMonth; day++) {
          const date = new Date(year, month, day);
          const dayOfWeek = getDayOfWeek(date);
          html += `<td class="calendar-day" data-day="${dayOfWeek}, ${day}">${day}</td>`;

          // Pasar a la siguiente fila al final de la semana
          if ((day + startingDay) % 7 === 0) {
              html += "</tr><tr>";
          }
      }

      // Cerrar la tabla
      html += "</tr></table>";

      calendar.innerHTML = html;

      // Agregar evento al hacer clic en un día
      const dayCells = document.querySelectorAll(".calendar-day");
      dayCells.forEach(cell => {
          cell.addEventListener("click", () => {
              const taskText = taskInput.value.trim();
              if (taskText !== "") {
                  const dayAndDate = cell.getAttribute("data-day");
                  const taskItem = document.createElement("li");
                  taskItem.textContent = `${dayAndDate}: ${taskText}`;
                  taskList.appendChild(taskItem);
                  taskInput.value = "";
              }
          });
      });
  }

  // Generar el calendario inicial
  generateCalendar(currentMonth, currentYear);

  // Cambiar al mes anterior
  document.getElementById("prev-month").addEventListener("click", () => {
      currentMonth--;
      if (currentMonth < 0) {
          currentMonth = 11;
          currentYear--;
      }
      generateCalendar(currentMonth, currentYear);
  });

  // Cambiar al mes siguiente
  document.getElementById("next-month").addEventListener("click", () => {
      currentMonth++;
      if (currentMonth > 11) {
          currentMonth = 0;
          currentYear++;
      }
      generateCalendar(currentMonth, currentYear);
  });
});
