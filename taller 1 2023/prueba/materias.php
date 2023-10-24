<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Materias</title>
</head>
<body>
    <h1>Materias</h1>
    <form method="get" action="agregarMateria.php" class="calculator">
        <label for="nombre">Nombre Materia</label>
        <input type="text" name="nombre" placeholder="Ingrese el nombre de la materia">
        <input type="submit" name="enviar" value="Agregar" id="btn_agregar">
    </form>

    <nav>
        <ul id="nuevaMateria"></ul>
    </nav>

    <script src="mostrarMateria.js"></script>
</body>
</html>