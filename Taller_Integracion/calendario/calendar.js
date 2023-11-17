document.addEventListener('DOMContentLoaded', function() {
    let request_calendar = "events.json";
    console.log(request_calendar)
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',

        events: function(info, successCallback, failureCallback) {
            fetch(request_calendar)
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    let events = data.events.map(function(event) {
                        return {
                            title: event.eventTitle,
                            start: new Date(event.eventStartDate),
                            end: new Date(event.eventEndDate),
                            url: event.eventUrl,
                            location: event.eventLocation,
                            timeStart: event.eventStartTime,
                            timeEnd: event.eventTimeEndTime,
                        };
                    });

                    successCallback(events);
                })
                .catch(function(error) {
                    failureCallback(error);
                });
        },

        eventContent: function(info) {
            return {
                html: `
                <div style="overflow: hidden; font-size: 12px; position: relative; cursor: pointer; font-family: 'Inter', sans-serif;">
                        <div><strong>${info.event.title}</strong></div>
                        <div>Location: ${info.event.extendedProps.location}</div>
                        <div>Date: ${info.event.start.toLocaleDateString("es-US", {
                            month: "long",
                            day: "numeric",
                            year: "numeric",
                        })}</div>
                        <div>Time: ${info.event.extendedProps.timeStart} - ${info.event.extendedProps.timeEnd}</div>
                    </div>`
            };
        },

        eventMouseEnter: function(mouseEnterInfo) {
            let el = mouseEnterInfo.el;
            el.classList.add("relative");

            let newEL = document.createElement("div");
            let newElTitle = mouseEnterInfo.event.title;
            let newElLocation = mouseEnterInfo.event.extendedProps.location;
            let newElTimeStart = mouseEnterInfo.event.extendedProps.timeStart;
            let newElTimeEnd = mouseEnterInfo.event.extendedProps.timeEnd;
            newEL.innerHTML = `
                <div
                    class="fc-hoverable-event"
                    style="position: absolute; bottom: 100%; left: 0; width: 300px; height: auto; background-color: white; z-index: 50; border: 1px solid #e2e8f0; border-radius: 0.375rem; padding: 0.75rem; font-size: 14px; font-family: 'Inter', sans-serif; cursor: pointer;"
                >
                    <strong>${newElTitle}</strong>
                    <div>Location: ${newElLocation}</div>
                    <div>Time: ${newElTimeStart} - ${newElTimeEnd}</div>
                </div>
            `;
            el.after(newEL);
        },

        eventMouseLeave: function(mouseLeaveInfo) {
            let el = document.querySelector(".fc-hoverable-event");
            el.remove();
        },

        dateClick: function(info) {
            var eventTitle = prompt('Agregue un nombre al evento:');
            var eventLocation = prompt('Agregue la locación del evento:');
            var eventStartTime = prompt('Agregue la hora de inicio del evento (HH:MM):');
            var eventEndTime = prompt('Agregue la hora de finalización del evento (HH:MM):');
            
            if (eventTitle) {
                calendar.addEvent({
                    title: eventTitle,
                    start: info.dateStr,
                    allDay: true,
                    extendedProps: {
                        location: eventLocation,
                        timeStart: eventStartTime,
                        timeEnd: eventEndTime
                    }
                });
                
                // Llama a la función para agregar el evento al servidor
                //agregarEvento();
            }
        }
    });
        
        function agregarEvento(evento) {
            console.log("hola1")
            console.log(evento)
            fetch('guardar_evento.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(evento),
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Evento guardado:', data);
                })
                .catch(error => {
                    
                    console.error('Error al guardar el evento:', error);
                });
        }

        calendar.render();
});
