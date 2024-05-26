<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">

<?php

class controladorCategoria
{

        private  $ConexionBD;
        private $categoria;

        function __construct($ConexionBD, $categoria)
        {
                $this->ConexionBD = $ConexionBD;
                $this->categoria = $categoria;
        }
        function guardar()
        {

                $categoria = $this->categoria;
                $resultadoConsulta = $this->consultarRegistro();

                if ($resultadoConsulta->num_rows == 0) {

                        $sqlPrepared = "insert into categoria values(?,?)";
                        $stmt = $this->ConexionBD->prepare($sqlPrepared);

                        $stmt->bind_param(
                                "is",
                                $categoria->codigo,
                                $categoria->nombre
                        );
                        $stmt->execute();
                } else {

                        $sqlPrepared = "update categoria set Nombre = ?  
                           where idCategoria = ?";
                        $stmt = $this->ConexionBD->prepare($sqlPrepared);

                        $stmt->bind_param(
                                "si",
                                $categoria->nombre,
                                $categoria->codigo
                        );
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
                            location.href='vistas/administrador/categoria.php';
                        } 
                    })
                    </script>";
           
                                  

        }


        function eliminar()
        {
                $categoria = $this->categoria;
                $sqlPrepared = "delete from categoria where = idCategoria ?";
                $stmt = $this->ConexionBD->prepare($sqlPrepared);
                $stmt->bind_param("i", $categoria->codigo);

                $stmt->execute();
        }
        function listar()
        {
                $sqlPrepared = "select * from categoria";
                $stmt = $this->ConexionBD->prepare($sqlPrepared);
                $stmt->execute();

                return $stmt->get_result();
        }


        function consultarRegistro()
        {
                $categoria = $this->categoria;
                $sqlPrepared = "select * from categoria where idCategoria = ?";
                $stmt = $this->ConexionBD->prepare($sqlPrepared);
                $stmt->bind_param("i", $categoria->codigo);

                $stmt->execute();

                return $stmt->get_result();
        }
}
