<?php
    include("conex.inc");

    $sql = "SELECT nombre FROM materias";
    $respuesta = mysqli_query($db, $sql);

    while ($fila = mysqli_fetch_object($respuesta)) {
        $nomArchivo = $fila->nombre . ".html";

        $archivo = fopen($nomArchivo, 'w');

        // Escribir contenido en el archivo
        $contenido = file_get_contents("notas.html");
        fwrite($archivo, $contenido);
        fclose($archivo);

        echo"<li><a href='$nomArchivo'>". $fila->nombre. "</a></li>";
    }
?>