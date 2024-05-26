<?php 

$id = $_GET['id'];

$cnx = mysqli_connect("localhost", "root", "", "proyecto_final_web2");
$sql = "delete from elementos where Codelemento like $id";
$rta = mysqli_query($cnx, $sql);

if (!$rta) {
	echo "no se elimino";
}else{
	header("Location:../vistas/administrador/elementos.php");
}



 ?>