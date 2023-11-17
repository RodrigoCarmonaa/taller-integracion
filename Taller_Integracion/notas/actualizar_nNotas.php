<?php
    $nNotas = $_GET["nNotas"];
    $nombre = $_GET["nombre"];

    include("../conex.inc");

    $sql = "UPDATE materias SET numero_notas = '$nNotas' WHERE nombre = '$nombre'";

    $resultado = mysqli_query($db, $sql);

    if ($resultado) {
        echo $sql;
    }
?>