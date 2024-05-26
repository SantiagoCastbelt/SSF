<?php 

$idServicio = $_GET['idServicio'];
$nombre = $_GET['nombre'];

$cnx = mysqli_connect("localhost", "root", "", "proyecto_final_web2");
$sql = ("INSERT INTO serviciosofertados(idServicio, NombreServicio) values('".$idServicio."','".$nombre."')");
$rta = mysqli_query($cnx, $sql);

if (!$rta) {
	echo "no se la insercion";
}else{
	header("Location:../vistas/Gerente/servicios.php");
}



 ?>