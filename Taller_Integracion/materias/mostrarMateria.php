<?php
    include("../conex.inc");

    $sql = "SELECT nombre FROM materias";
    $respuesta = mysqli_query($db, $sql);

    while ($fila = mysqli_fetch_object($respuesta)) {
        echo"<li>$fila->nombre</li>";
    }
?>