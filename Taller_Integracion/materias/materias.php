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
            <a href="../notas/notas.php">Notas</a>
        </nav>
    </header>
    <form method="get" action="agregarMateria.php" class="calculator">
        <label for="nombre">Nombre Materia</label>
        <input type="text" name="nombre" placeholder="Ingrese el nombre de la materia">
        <input type="submit" name="enviar" value="Agregar" id="btn_agregar">
    </form>

    <ul id="nuevaMateria"></ul>

    <script src="mostrarMateria.js"></script>
</body>
</html>