<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">


<?php 
include ('../configuraciones/configuracion.php');



    $paciente = $_POST['paciente'];
    $peso = $_POST['peso'];
    $presionArterial = $_POST['presionArterial'];
    $Estatura = $_POST['Estatura'];
    $Diagnostico = $_POST['Diagnostico'];
    $idServicio = $_POST['idServicio'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $NumeroSeciones = $_POST['NumeroSeciones'];



    $guardarUno = $con->query("INSERT INTO pinfosesiones VALUES ('$paciente','$peso', '$presionArterial', '$Estatura', '$Diagnostico')");

    
        //----------------------------//

    if ($guardarUno == true) {
    
    $guardarDos = $con->query("INSERT INTO tratamientos VALUES ('$paciente','$idServicio')");

    
    }

    if ($guardarDos == true) {
    
    $guardarTres = $con->query("INSERT INTO citaspro VALUES ('$fecha','$hora', '$NumeroSeciones', '$paciente')");

    
    }

 ?>