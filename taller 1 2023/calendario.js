document.addEventListener("DOMContentLoaded", function () {
    const currentMonthDisplay = document.getElementById("current-month");
    const calendarBody = document.getElementById("calendar-body");
    const eventDateInput = document.getElementById("event-date");
    const eventDescriptionInput = document.getElementById("event-description");
    const addEventButton = document.getElementById("add-event");
    const eventList = document.getElementById("event-list");
  
    let currentDate = new Date();
    let selectedDate = currentDate;
  
    function generateCalendar(year, month) {
        const firstDayOfMonth = new Date(year, month, 1);
        const lastDayOfMonth = new Date(year, month + 1, 0);
        const daysInMonth = lastDayOfMonth.getDate();
        const startingDay = firstDayOfMonth.getDay();
        calendarBody.innerHTML = "";
      
        currentMonthDisplay.textContent = new Intl.DateTimeFormat("es-ES", {
          year: "numeric",
          month: "long",
        }).format(firstDayOfMonth);
      
        // Crea filas para las semanas en el calendario
        let currentRow = document.createElement("tr");
        calendarBody.appendChild(currentRow);
      
        // Agrega celdas para los días de la semana
        for (let i = 0; i < startingDay; i++) {
          const dayCell = document.createElement("td");
          dayCell.textContent = "";
          currentRow.appendChild(dayCell);
        }
      
        // Agrega celdas para los días del mes
        for (let day = 1; day <= daysInMonth; day++) {
          if (currentRow.children.length === 7) {
            currentRow = document.createElement("tr");
            calendarBody.appendChild(currentRow);
          }
      
          const dayCell = document.createElement("td");
          dayCell.textContent = day;
          dayCell.addEventListener("click", () => {
            selectedDate = new Date(year, month, day);
            eventDateInput.valueAsDate = selectedDate;
          });
          currentRow.appendChild(dayCell);
        }
      }
      
  
    function addEvent() {
      const eventDate = eventDateInput.value;
      const eventDescription = eventDescriptionInput.value;
  
      if (eventDate && eventDescription) {
        const eventListItem = document.createElement("li");
        eventListItem.textContent = `${eventDate}: ${eventDescription}`;
        eventList.appendChild(eventListItem);
  
        eventDateInput.value = "";
        eventDescriptionInput.value = "";
      } else {
        alert("Por favor, complete la fecha y la descripción del evento.");
      }
    }
  
    function updateCalendar() {
      const year = selectedDate.getFullYear();
      const month = selectedDate.getMonth();
      generateCalendar(year, month);
    }
  
    addEventButton.addEventListener("click", addEvent);
  
    document.getElementById("prev-month").addEventListener("click", () => {
      selectedDate.setMonth(selectedDate.getMonth() - 1);
      updateCalendar();
    });
  
    document.getElementById("next-month").addEventListener("click", () => {
      selectedDate.setMonth(selectedDate.getMonth() + 1);
      updateCalendar();
    });
  
    // Generar el calendario inicial
    generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
  });
  
