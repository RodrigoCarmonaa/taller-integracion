<?php
    $id = $_GET["id"];
    $nombre = $_GET["nombre"];
    $nNotas = $_GET["nNotas"];

    include("conex.inc");

    $sql = "INSERT INTO materias (id, nombre, nNotas)";
    $sql .= "VALUES ('$id', '$nombre', '$nNotas')";
    echo "El sql es: $sql";

    $resultado = mysqli_query($db, $sql);

    if ($resultado) {
        echo"Hemos recibido tus datos";
    }
    else {
        echo "Error al ingresar registro";
    }

?>