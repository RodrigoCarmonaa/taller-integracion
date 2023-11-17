<?php
    $nNotas = $_GET["nNotas"];

    include("../conex.inc");

    /*
    $sql1 = "SELECT nombre FROM materias";
    $respuesta = mysqli_query($db, $sql1);
    */

    $sql = "INSERT INTO notas (nNotas)";
    $sql .= "VALUES ('$nNotas')";

    $respuesta = mysqli_query($db, $sql);

    if ($respuesta) {
        header("Location:notas.php");
    }

    /*
    while ($fila = mysqli_fetch_object($respuesta)) {
        echo"<li>$fila->nombre</li>";
    }
    */

    // que onda este codigo??? que estaba pensando? ;_; estaba pensando?
    /*
    $sql = "INSERT INTO notas (nNotas)";
    $sql .= "VALUES ('$nNotas')";
    
    $resultado = mysqli_query($db, $sql);

    if ($resultado) {
        header("Location:$nomArchivo");
    }
    */
?>