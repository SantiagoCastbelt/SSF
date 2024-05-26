<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">

<?php

 include ('../../configuraciones/configuracion.php');


$Nombre   = $_POST['Nombre'];
$costo     = $_POST['costo'];
$idServicio = $_POST['idServicio'];



$dataCode = count($Nombre);
if($dataCode >0){
    for ($i=0; $i <$dataCode; $i++) { 

    //Verifico si existe el codigo
    $sqlCode  = ("SELECT *  FROM elementos WHERE Nombre='$Nombre[$i]' ");
    $queryCode      = mysqli_query($con, $sqlCode);
    if(mysqli_num_rows($queryCode)>0){
        //echo 'Ya existe el codigo';
        }else{
            $queryInsertCode = ("INSERT INTO elementos(Nombre, costo, idServicio ) 
                                       VALUES ('"
                                                  .$Nombre[$i]. "','"
                                                  .$costo[$i]."','"
                                                  .$idServicio."')")
                                       ;
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
        location.href='../../vistas/administrador/elementos.php';
      } 
    })
</script>";
}else{
    echo 'Error';
} 
?>
