<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Notas</title>
</head>
<body>
    <h2>Notas</h2>
    <form action="agregarNota.php"> <!-- que, mostrarMateria.php no deberia estar aca??? que hace aca? -->
        <label for="nNotas">Numero de notas</label>
        <input type="number" name="nNotas" id="nNotas" placeholder="Numero de notas">
        <input type="submit" name="enviar" id="btn_nota" value="Calcular nota">
    </form>
    <div id="divNotas"></div>
    <!-- falta agregar el script que usa los porcentajes -->
    <script src="notas2.js"></script>
</body>
</html>