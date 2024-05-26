<?php

$servidor = "localhost";
$usuario  = "root";
$contraseña = "";
$baseDatos = "proyecto_final_web2";
$con = mysqli_connect($servidor, $usuario, $contraseña) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($con, $baseDatos) or die("Upps! Error en conectar a la Base de Datos");

?>

