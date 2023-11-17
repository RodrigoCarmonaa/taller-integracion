<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculadora.css">
    <title>Materias</title>
</head>
<body>
    <h1>Materias</h1>
    <header id="page-header">
        <div class="logo">
            <img src="../imagenes/logo catolica.png" alt="logo" width="140">
        </div>
        <nav class="menu">
            <a href="../index.html">Inicio</a>
            <a href="../asistencia/Asistencia.html">Asistencia</a>
            <a href="../calendario/calendario.php">Calendario Evaluaciones</a>
            <a href="../horario/horario.html">Horario </a>
            <a href="materias.php">Materias</a>
        </nav>
    </header>
    <form method="get" action="agregarMateria.php" class="calculator">
        <label for="nombre">Nombre Materia</label>
        <input type="text" name="nombre" placeholder="Ingrese el nombre de la materia">
        <input type="submit" name="enviar" value="Agregar" id="btn_agregar">
    </form>

    <div id="divSelect">
        <select name="" id="selMateria">
            <option value="">Seleccione una materia</option>
            <?php include("mostrarMateria.php"); ?>
        </select>
        <div id="mostrarNotas"></div>
    </div>


    <!-- <script src="mostrarMateria.js"></script> -->
    <script>
        // const btn_agregar = document.getElementById('btn_agregar')
        const selMateria = document.getElementById('selMateria')
        const mostrarNotas = document.getElementById('mostrarNotas')

        selMateria.addEventListener('change', function(){
            fetch(`../notas/notas.php`)
            .then(resp => resp.text())
            .then(data => {
                mostrarNotas.innerHTML = data;
            });
        })

        // selMateria.addEventListener('change', function(){
        //     fetch(`obtenerMateria.php?nombre=${selMateria.value}`)
        //     .then(respuesta => respuesta.text())
        //     .then(data => {
        //         mostrarNotas.innerHTML = data;
        //     });
        // })
    </script>
</body>
</html>