<?php 

class controladorcitas{
	
	function __construct($ConexionBD,$citas){ 
     
        $this ->ConexionBD = $ConexionBD;
        $this->citas = $citas;
	
}
        function guardar() {
		
         $citas = $this->citas;
         $resultadoConsulta = $this->consultarRegistro();

         if ($resultadoConsulta->num_rows == 0) {

            $sqlPrepared ="insert into citas values(?,?,?)";
            $stmt = $this->ConexionBD->prepare($sqlPrepared);

            $stmt->bind_param("ssi",$citas->Fecha,
                                    $citas->Hora,
                                    $citas->NumeroIdentificacion);

            $stmt->execute();

        } else {

            $sqlPrepared ="update citas set  Hora   = ?,
                                             Fecha = ?

                           where NumeroIdentificacion = ?";
            $stmt = $this->ConexionBD->prepare($sqlPrepared);

            $stmt->bind_param("ssi",
                                    $citas->Hora,
                                    $citas->Fecha,
                                    $citas->NumeroIdentificacion);
            $stmt->execute();


        }

	}


function eliminar(){
        $citas = $this->citas;
        $sqlPrepared = "delete from citas where NumeroIdentificacion = ?";
         $stmt = $this->ConexionBD->prepare($sqlPrepared);
         $stmt->bind_param("i",$citas->NumeroIdentificacion);

         $stmt->execute();
          

}
function listar(){
      $sqlPrepared = "select * from citas";
      $stmt = $this->ConexionBD->prepare($sqlPrepared);
      $stmt->execute();

      return $stmt->get_result();
       }


function consultarRegistro(){
        $citas = $this->citas;
        $sqlPrepared = "select * from citas where NumeroIdentificacion = ?";
        $stmt = $this->ConexionBD->prepare($sqlPrepared);
        $stmt->bind_param("i",$citas->NumeroIdentificacion);

         $stmt->execute();

         return $stmt->get_result();
}


}



 ?>