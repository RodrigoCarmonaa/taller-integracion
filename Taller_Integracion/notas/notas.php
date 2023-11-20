<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculadora.css">
    <title>Notas</title>
</head>
<body>
    <header id="page-header">
        <div class="logo">
            <img src="../imagenes/logo catolica.png" alt="logo" width="140">
        </div>
        <nav class="menu">
            <a href="../index.html">Inicio</a>
            <a href="../asistencia/Asistencia.html">Asistencia</a>
            <a href="../calendario/calendario.php">Calendario Evaluaciones</a>
            <a href="../horario/horario.html">Horario </a>
            <a href="../materias/materias.php">Materias</a>
            <a href="notas.php">Notas</a>
        </nav>
    </header>
    <h1>Notas</h1>
    <br><br>
    <div id="divSelect">
        <select name="" id="selMateria">
            <option value="">Seleccione una materia</option>
            <?php include("../materias/seleccionarMateria.php"); ?>
        </select>
        <div id="mostrarNotas"></div>
    </div>
    <form id="formularioNota" action="actualizar_nNotas.php"> <!-- que, mostrarMateria.php no deberia estar aca??? que hace aca? -->
        <label for="numero_notas">Numero de notas</label>
        <input type="number" name="numero_notas" id="numero_notas" placeholder="Numero de notas">
        <input type="submit" name="enviar" id="btn_nota" value="Calcular nota">
    </form>
    <div id="divNotas"></div>

    <script>
        const selMateria = document.getElementById('selMateria');
        const mostrarNotas = document.getElementById('mostrarNotas');
        const formularioNota = document.getElementById('formularioNota');

        function actualizarNotas() {
            const valorMateria = selMateria.value;

            fetch(`actualizar_nNotas.php?nombre=${valorMateria}`)
            .then(response => response.text())
            .then(data => {
                console.log(data);
            });
        }

        const valorMateria = selMateria.value;

        selMateria.addEventListener('change', function() {
            actualizarNotas();
        });

        formularioNota.addEventListener('submit', function(){
            actualizarNotas();
        });

    </script>

    <!-- <script>
        // const btn_agregar = document.getElementById('btn_agregar')
        const selMateria = document.getElementById('selMateria')
        const mostrarNotas = document.getElementById('mostrarNotas')

        selMateria.addEventListener('change', function(){
            fetch(`../materias/obtenerMateria.php?nombre=${selMateria.value}`)
            .then(respuesta => respuesta.text())
            .then(data => {
                mostrarNotas.innerHTML = data;
            });
        })
    </script> -->
    <!-- falta agregar el script que usa los porcentajes -->
    <!-- <script src="notas2.js"></script> -->
</body>
</html>