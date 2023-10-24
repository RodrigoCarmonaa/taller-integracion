<?php
//conexion con la base de datos
$conexion = mysqli_connect("localhost", "root", "", "login_register_db");

//crear variable segun name de los input para enviar inform culto por el metodo POST
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$fecha = $_POST["fecha"];

if ($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["name"]);
    $nombre_final = date("Y-m-d") . "-" . date("h-i-s") . "-" . $nombre_base;
    $ruta = "archivos/" . $nombre_final;
    //muevo el archivo del formulario  ala ruta (carperta)
    //si pasa el evento de forma correcta se inserta en la base de datos
    $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
    if ($subirarchivo) {
        $insertar = "INSERT INTO soporte(nombre, apellidos, fecha, archivo) VALUES ('$nombre', '$apellidos', '$fecha', '$ruta')";
        $resultadofinal = mysqli_query($conexion, $insertar);
        if ($resultadofinal) {
            echo "<script>alert('se ha enviado su reporte correctamente'); window.location='soporte.html'</script>";
        } else {
            printf("errormessage: %s\n", mysqli_error($conexion));
        }
    }
} else {
    echo "error al subir el archivo";
}
?>