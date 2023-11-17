<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión a la base de datos fallida: " . $conn->connect_error);
}

// Recibir el objeto JSON del cliente
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Procesar e insertar los datos en la base de datos
foreach ($data as $fila) {
    $hora = $fila["hora"];
    $datos = json_encode($fila["datos"]); // Convierte los datos de celdas en JSON

    $sql = "INSERT INTO sexo (hora, datos) VALUES ('$hora', '$datos')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
