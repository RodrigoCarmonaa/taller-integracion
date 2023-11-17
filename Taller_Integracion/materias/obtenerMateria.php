<?php
    include("../conex.inc");
    $nombre = $_GET["nombre"];
    $sql = "SELECT nombre FROM materias WHERE nombre = '$nombre'";
    $respuesta = mysqli_query($db,$sql);
    $fila = mysqli_fetch_object($respuesta);
    echo $fila->nombre;
?>