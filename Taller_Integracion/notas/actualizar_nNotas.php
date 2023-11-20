<?php
    $numero_notas = $_GET["numero_notas"];
    $nombre = $_GET["nombre"];

    include("../conex.inc");

    $sql = "UPDATE materias SET numero_notas = '$numero_notas' WHERE nombre = '$nombre'";

    $resultado = mysqli_query($db, $sql);

    if ($resultado) {
        echo $sql;
    }
?>