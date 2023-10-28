<?php
$host = "db.inf.uct.cl";
$usuario = "rcarmona";
$clave = "21584530";
$basedato = "A2023_rcarmona";


$conexion = mysqli_connect($host, $usuario, $clave, $basedato);
mysqli_set_charset($conexion, "utf8");

if($conexion) 
echo"ok. Conectado 100%";

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>
