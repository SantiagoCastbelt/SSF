<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">


<?php 
include ('../../configuraciones/configuracion.php');



    $NumeroIdentificacion = $_POST['NumeroIdentificacion'];
    $nombres = $_POST['nombres'];
    $Apellidos = $_POST['Apellidos'];
    $FechaNacimiento = $_POST['FechaNacimiento'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $Telefono = $_POST['Telefono'];
    $Estudios = $_POST['Estudios'];
    $Especialidades = $_POST['Especialidades'];
    $TipoIdentificacion = $_POST['TipoIdentificacion'];


    $guardarUno = $con->query("INSERT INTO profesionales VALUES ('$NumeroIdentificacion','$nombres', '$Apellidos', '$FechaNacimiento', '$sexo', '$email', '$Telefono', '$TipoIdentificacion' )");

    
        //----------------------------//
    
        $dataCode = count($Estudios);   
       if($dataCode >0)
       {
           for ($i=0; $i <$dataCode; $i++) 
            { 
       
               //Verifico si existe el codigo
               $sqlCode  = ("SELECT *  FROM especialidades WHERE Estudios='$Estudios[$i]' ");
               $queryCode      = mysqli_query($con, $sqlCode);
               if(mysqli_num_rows($queryCode)>0)
               {
                   //echo 'Ya existe el codigo';
               }else{
                   $queryInsertCode = ("INSERT INTO especialidades(Estudios,Especialidades, Identificacion ) VALUES ('".$Estudios[$i]."','".$Especialidades[$i]. "','".$NumeroIdentificacion."')");
                    $resultado = mysqli_query($con, $queryInsertCode);
                    }
            } 
       
         echo '<p style="color:#fff;"></p>';
echo "<script type='text/javascript'>
  Swal.fire(
  'Felicitaciones!',
  'Operación realizada con exito',
  'success'
).then((result) => {
      if (result.isConfirmed) {
        location.href='../../vistas/administrador/GestionProfes.php';
      } 
    })
</script>";
}else{
    echo 'Error';
}

   
 


 ?>