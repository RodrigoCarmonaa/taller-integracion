<?php
// Conexión a la base de datos (ajusta las credenciales según tu configuración)
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "horarios_db"; // Nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$nombre = $_POST['nombre'];
$hora_inicio = $_POST['hora_inicio'];
$hora_fin = $_POST['hora_fin'];
$dia_semana = $_POST['dia_semana'];

// Insertar datos en la base de datos
$sql = "INSERT INTO horarios (nombre, hora_inicio, hora_fin, dia_semana)
        VALUES ('$nombre', '$hora_inicio', '$hora_fin', '$dia_semana')";

if ($conn->query($sql) === true) {
    echo "Horario guardado con éxito.";
} else {
    echo "Error al guardar el horario: " . $conn->error;
}

$conn->close();
?>
