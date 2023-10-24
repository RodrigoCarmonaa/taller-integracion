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
    <!-- <div class="calculator">
        <input type="text" id="nombreMateria" placeholder="Ingrese el nombre de la materia">
        <button id="agregarMateria">Agregar materia</button>
        <div id="materias"></div>
    </div> -->
    <!-- <script src="materias.js"></script> -->
    <form method="get" action="agregarMateria.php" class="calculator">

        <label for="id">Id de la materia</label>
        <input type="text" name="id">

        <label for="nombre">Nombre Materia</label>
        <input type="text" name="nombre">
<!--         
        <label for="nNotas">Numero de notas</label>
        <input type="text" name="nNotas"> -->
        
        <input type="submit" name="enviar" value="Agregar">
    </form>
</body>
</html>