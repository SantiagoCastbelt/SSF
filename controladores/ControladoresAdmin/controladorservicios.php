<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">


<?php 

class controladorservicios{
	
       
        
	function __construct($ConexionBD,$servicios){ 
     
        $this ->ConexionBD = $ConexionBD;
        $this->servicios = $servicios;
	
}
        function guardar() {
		
         $servicios = $this->servicios;
         $resultadoConsulta = $this->consultarRegistro();

         if ($resultadoConsulta->num_rows == 0) {

            $sqlPrepared ="insert into servicios values(?,?,?)";
            $stmt = $this->ConexionBD->prepare($sqlPrepared);

            $stmt->bind_param("isi",$servicios->codigo,
                                    $servicios->nombre,
                                    $servicios->IdCategoria);
                                    
            $stmt->execute();

        } else {

            $sqlPrepared ="update servicios set nombre = ?,
                                                IdCategoria = ?

                           where idServicio = ?";
            $stmt = $this->ConexionBD->prepare($sqlPrepared);

            $stmt->bind_param("sii",$servicios->nombre,
                                   $servicios->IdCategoria,
                                   $servicios->codigo);
            $stmt->execute();


        }
        echo '<p style="color:#fff;"></p>';
        echo "<script type='text/javascript'>
            Swal.fire(
            'Felicitaciones!',
            'Operación realizada con éxito',
            'success'
            ).then((result) => {
                if (result.isConfirmed) {
                    location.href='../../vistas/administrador/RegistroServicios.php';
                } 
            })
            </script>";

	}


function eliminar(){
        $servicios = $this->servicios;
        $sqlPrepared = "delete from servicios where = idServicio ?";
         $stmt = $this->ConexionBD->prepare($sqlPrepared);
         $stmt->bind_param("i",$servicios->codigo);

         $stmt->execute();
          

}
function listar(){
      $sqlPrepared = "select * from servicios";
      $stmt = $this->ConexionBD->prepare($sqlPrepared);
      $stmt->execute();

      return $stmt->get_result();
       }


function consultarRegistro(){
        $servicios = $this->servicios;
        $sqlPrepared = "select * from servicios where idServicio = ?";
        $stmt = $this->ConexionBD->prepare($sqlPrepared);
        $stmt->bind_param("i",$servicios->codigo);

         $stmt->execute();

         return $stmt->get_result();
}


}
