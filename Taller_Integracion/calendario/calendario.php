    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/calendario.css">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>

    <title>Calendario</title>
</head>
<body>
    <header id="page-header">
        <div class="logo">
            <img src="logo catolica.png" alt="logo" width="140">
        </div>
        <nav class="menu">
            <a href="index.html">Inicio</a>
            <a href="Asistencia.html">Asistencia</a>
            <a href="calendario.php">Calendario Evaluaciones</a>
            <a href="horario.html">Horario </a>
            <a href="materias.php">Materias</a>
        </nav>
    </header>
    <br> <br><br><br>

    <div style="max-width: 1000px; margin: auto" id="calendar"></div>
    <script src="./js/calendar.js"></script>
    <script src="./js/index.js"></script>


    <script>
       var events = <?php echo events.JSON; ?>;
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: events,

            });
            calendar.render();
        });
    </script>
</body>
</html>
