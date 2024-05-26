<?php

class ControladorLogin
{

  public $conexionBD;
  public $usuario;

  function __construct($conexionBD, $usuario)
  {

    $this->conexionBD = $conexionBD;
    $this->usuario = $usuario;
  }

  function consultarRegistros()
  {

    $usuario = $this->usuario;
    $sqlPrepared = "select CodigoRol from usuarios where NombreUsuario = ? and Contraseña = ?";
    $stmt = $this->conexionBD->prepare($sqlPrepared);
    $stmt->bind_param(
      "ss",
      $usuario->NombreUsuario,
      $usuario->Contraseña
    );
    $stmt->execute();
    return $stmt->get_result();
  }

  function guardar()
  {

    $usuario = $this->usuario;

    $sqlPrepared = "insert into usuarios values(?,?,?)";
    $stmt = $this->conexionBD->prepare($sqlPrepared);

    $stmt->bind_param(
      "ssi",
      $usuario->NombreUsuario,
      $usuario->Contraseña,
      $usuario->codigoRol
    );
    

    $stmt->execute();

    echo '<p style="color:#fff;"></p>';
    echo "<script type='text/javascript'>
      Swal.fire(
      'Felicitaciones!',
      'Operación realizada con exito',
      'success'
    ).then((result) => {
          if (result.isConfirmed) {
            location.href='../vistas/login.php';
          } 
        })
    </script>";
  }
}
