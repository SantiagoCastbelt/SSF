<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Styles -->
  <link rel="stylesheet" href="../../Recursos/Bootstrap.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

  <!-- Ionic icons -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

  <style type="text/css">
    * {
      font-family: Segoe UI;
      font-size: 16px;
    }
  </style>


  <title>Sistema SIF</title>
</head>

<body>
  <div class="d-flex" id="content-wrapper">

    <!-- Sidebar -->
    <div id="sidebar-container" class="bg-primary">
      <div class="logo">
        <h4 class="text-light font-weight-bold mb-0">Sistema SIF</h4>
      </div>
      <div class="menu">

        <a href="usuarios.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
          Atras </a>
      </div>
    </div>
    <!-- Fin sidebar -->

    <div class="w-100">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

      </nav>
      <!-- Fin Navbar -->

      <!-- Page Content -->
      <div id="content" class="bg-grey w-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-8">
              <h1 class="font-weight-bold mb-0">Editar Informacion de paciente</h1><br>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-9 col-md-8">
              <h2 class="font-weight-bold mb-0">Informacion paciente</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-9 col-md-8">
              <p class="font-weight-bold mb-0">Dijitar correctamente Numero de identificacion del paciente para su cambio de informacion</p>
            </div>
          </div>
          <form class="row" action="../../controladores/formcontroller.php" method="POST">
            <div class="col-md-4">
              <label class="form-label">Tipo identificacion</label><br>
              <select name="TipoIdentificacion" class="col-md-9">
                <option value=""></option>
                <option value="CC">Cedula de ciudadania</option>
                <option value="TI">Tarjeta de identidad</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Numero identificacion</label>
              <input name="NumeroIdentificacion" type="text" class="form-control">
            </div>
            <div class="col-md-4">
              <label class="form-label">Nombre</label>
              <input name="Nombre" type="text" class="form-control">
            </div>
            <div class="col-md-4">
              <label class="form-label">Apellidos</label>
              <input name="Apellidos" type="text" class="form-control">
            </div>
            <div class="col-md-4">
              <label class="form-label">Correo electronico</label>
              <input name="CorreoElectronico" type="text" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Telefono</label>
              <input name="Telefono" type="text" class="form-control">
            </div>
            <div class="col-md-4">
              <label class="form-label">Ciudad Residencia</label>
              <input name="CiudadResidencia" type="text" class="form-control">
            </div>
            <div class="col-md-4">
              <label class="form-label">Direccion residencia</label>
              <input name="DireccionResidencia" type="text" class="form-control">
            </div>
            <div class="col-md-4">
              <label class="form-label">Sexo</label><br>
              <select name="Sexo" class="col-md-9">
                <option value=""></option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Fecha nacimiento</label>
              <input name="FechaNacimiento" type="date" class="form-control"><br>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-9 col-md-8">
                  <h2 class="font-weight-bold mb-0">Informacion Acudiente</h2>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <label class="form-label">Nombre</label>
              <input name="NombreAcudiente" type="text" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Apellidos</label>
              <input name="ApellidosAcudiente" type="text" class="form-control">
            </div>
            <div class="col-md-4">
              <label class="form-label">Correo electronico acudiente</label>
              <input name="CorreoAcudiente" type="text" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Telefono acudiente</label>
              <input name="TelefonoAcudiente" type="text" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Edad acudiente </label>
              <input name="EdadAcudiente" type="number" class="form-control">
            </div>

            <input type="text" name="controlador" value="paciente" hidden>


            <div class="col-md-12">
              <br>
              <input type="submit" name="guardar" value="Editar Paciente" class="btn btn-primary form-control">
            </div>
          </form>
        </div>


</body>

</html>