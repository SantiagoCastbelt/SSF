<?php
class ConexionBD
{

    private $conexion;

    function __construct()
    {

        require("../configuraciones/configuracion.php");
        $this->conexion = mysqli_connect(
            $servidor,
            $usuario,
            $contraseña,
            $baseDatos
        );
    }

    public  function getConexion()
    {

        return $this->conexion;
    }
}
