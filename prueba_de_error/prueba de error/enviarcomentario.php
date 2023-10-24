<?php
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];

$conexion = mysqli_connect('localhost', 'root', '', 'login_register_db');




$nombre = mysqli_real_escape_string($conexion, $nombre);
$comentario = mysqli_real_escape_string($conexion, $comentario);

$resultado = mysqli_query($conexion, 'INSERT INTO comentarios(comentario, nombre) VALUES("' . $comentario . '","' . $nombre . '")');

if ($resultado) 
     echo "<script>alert('se ha enviado su comentario correctamente'); window.location='comentario.php'</script>";
else 
    echo ('Error, inténtelo de nuevo');


mysqli_close($conexion);
?>