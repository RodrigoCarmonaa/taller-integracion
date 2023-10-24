<?php
    include("conex.inc");

    $sql = "SELECT nombre FROM materias";
    $respuesta = mysqli_query($db, $sql);

    while ($fila = mysqli_fetch_object($respuesta)) {
        $nomArchivo = $fila->nombre . ".html";

        $archivo = fopen($nomArchivo, 'w');

        // Cambiar los contenidos. Crear otro archivo antes de este codigo
        // Para abrirlo antes y colocarlo luego en contenido
        // Espera, el contenido tiene que ser simplemente lo que esta en notas.html
        $contenido = "<html><body><h1>$nomArchivo</h1></body></html>";
        fwrite($archivo, $contenido);
        fclose($archivo);

        echo"<li><a href='$nomArchivo'>". $fila->nombre. "</a></li>";
    }
?>