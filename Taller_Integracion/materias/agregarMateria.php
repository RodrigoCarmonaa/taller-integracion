<?php
    $nombre = $_GET["nombre"];

    include("../conex.inc");

    $sql = "INSERT INTO materias (nombre)";
    $sql .= "VALUES ('$nombre')";


    $resultado = mysqli_query($db, $sql);

    if ($resultado) {
        header("Location:materias.php");
    }
?>