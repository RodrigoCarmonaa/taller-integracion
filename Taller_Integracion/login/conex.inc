<?php
$host = "db.inf.uct.cl";
$usuario = "rcarmona";
$clave = "21584530" ;
$basedato = "A2023_rcarmona"; 

$conexion = mysqli_connect ($host, $usuario, $clave, $basedato)
if (!$conexion) {
    die ('error de conexion: ' . mysqli_connect());
} 
?>
