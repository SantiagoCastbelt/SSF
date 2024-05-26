<?php
//______________Conexion Bd_____________//

include '../componentes/conexionbd.php';

//_______________controladores Administador__________//

include 'ControladoresAdmin/controladorCategoria.php';
include 'ControladoresAdmin/controladorservicios.php';
include 'controladorcitas.php';


//_______________controladores Secretaria__________//

include 'ControladoresSecretaria/controladorpaciente.php';


//_________________Otros controladores__________________//
include 'controladorlogin.php';




//________________Modelos_______________//

include '../modelos/categoria.php';
include '../modelos/servicios.php';
include '../modelos/login.php';
include '../modelos/pacientes.php';
include '../modelos/Agendarcita.php';
include '../modelos/Usuario.php';


//--------------------------------------------------------------------------------------------------//

if (isset($_POST['guardar']))

   $transaccionBD = "guardar";

elseif (isset($_POST['eliminar']))

   $transaccionBD = "eliminar";

else
   $transaccionBD = "consultar";


$controladorEjecutar = $_POST['controlador'];

//-------------------------------------------------------------------------------------------------//


$conexionBD = new ConexionBD();
$conexionBD = $conexionBD->getConexion();


//-------------------------------------------------------------------------------------------------//



//________________Controladores Apartado ADMINISTRADOR__________________//


//_______________controlador Categoria________________//

if ($controladorEjecutar == "categoria") {

   $objeto = new categoria(
      $_POST['codigo'],
      $_POST['Nombre']
   );

   $controlador = new controladorCategoria($conexionBD, $objeto);
  
}



//________________Controlador Servicios________________//

if ($controladorEjecutar == "servicio") {

   $objeto = new servicios(
      $_POST['codigo'],
      $_POST['nombre'],
      $_POST['IdCategoria']
   );

   $controlador = new controladorservicios($conexionBD, $objeto);
}

//---------------------------------------------------------------------------------------------------//



//_______________Controladores apartado SECRETARIA _____________________//


//________________Controlador Paciente______________//

if ($controladorEjecutar == "paciente") {

   $objeto = new paciente(
      $_POST['TipoIdentificacion'],
      $_POST['NumeroIdentificacion'],
      $_POST['Nombre'],
      $_POST['Apellidos'],
      $_POST['CorreoElectronico'],
      $_POST['Telefono'],
      $_POST['CiudadResidencia'],
      $_POST['DireccionResidencia'],
      $_POST['Sexo'],
      $_POST['FechaNacimiento'],
      $_POST['NombreAcudiente'],
      $_POST['ApellidosAcudiente'],
      $_POST['CorreoAcudiente'],
      $_POST['TelefonoAcudiente'],
      $_POST['EdadAcudiente']
   );

   $controlador = new controladorpaciente($conexionBD, $objeto);

   echo '<p style="color:#fff;"></p>';
   echo "<script type='text/javascript'>
     Swal.fire(
     'Felicitaciones!',
     'Operación realizada con exito',
     'success'
   ).then((result) => {
         if (result.isConfirmed) {
           location.href='../../vistas/secretaria/usuarios.php';
         } 
       })
   </script>";
   }else{
       echo 'Error';
   
}


//----------------------------------------------------------------------------------------------//


//_______________Controladores apartado CLIENTE _____________________//


//________________Controlador cita______________//


if ($controladorEjecutar == "citas") {

   $objeto = new Citas(
      $_POST['Fecha'],
      $_POST['Hora'],
      $_POST['NumeroIdentificacion']
   );

   $controlador = new controladorcitas($conexionBD, $objeto);
}




//----------------------------------------------------------------------------------------------//



//----------------------------------------------------------------------------------------------//


//_______________Controladores apartado Profesional _____________________//


//________________Controlador Secion1______________//



//----------------------------------------------------------------------------------------------//


//________________Controlador Login________________//



if ($controladorEjecutar == "login") {
   
   $objeto = new login(
      $_POST['NombreUsuario'],
      $_POST['Contraseña'],
   );

   $controlador = new ControladorLogin($conexionBD, $objeto);
}

if ($controladorEjecutar == "usuario") {
   
   $objeto = new Usuario(
      $_POST['NombreUsuario'],
      $_POST['Contraseña'],
      $_POST['codigoRol'],
   );

   $controlador = new ControladorLogin($conexionBD, $objeto);
   
}


//--------------------------------------------------------------------------------------------//


if ($transaccionBD == "guardar") {
   $controlador->guardar();
   
} elseif ($transaccionBD == "eliminar") {
   $controlador->eliminar();



   //___________________________Gestion de usuarios del login_______________________________________//


} elseif ($transaccionBD == "consultar") {

   $result = $controlador->consultarRegistros();

   if ($fila = $result->fetch_assoc()) {

      if ($fila["CodigoRol"] == "1") {

         header("Location: ../vistas/administrador/paginaprincipal.php");
      } elseif ($fila["CodigoRol"] == "2") {

         header("Location: ../vistas/Gerente/paginaprincipal.php");
      } elseif ($fila["CodigoRol"] == "3") {

         header("Location: ../vistas/secretaria/principalsecretaria.php");
      } elseif ($fila["CodigoRol"] == "4") {

         header("Location: ../vistas/Profesional/paginaprincipal.php");
      
   } elseif ($fila["CodigoRol"] == "5") {

      header("Location: ../vistas/cliente/paginaprincipal.php");
   }
   } else {

      echo "Usuario o Password Errado";
   }
}
