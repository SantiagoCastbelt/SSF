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

        <a href="paginaprincipal.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
          Pagina principal</a>
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
              <h1 class="font-weight-bold mb-0">Primera sesion</h1>
            </div>
          </div>
        </div>
        <div class="container">

          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-8">
                <h4 class="font-weight-bold mb-1">Informacion del paciente</h4>
              </div>
            </div>
          </div>
          <form class="row" action="../../controladores/controladorsecion1.php" method="POST">
            <div class="col-md-2">
              <label class="form-label">Identificacion</label>
              <input type="text" name="paciente" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Apellidos</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-2">
              <label class="form-label">Sexo</label>
              <input type="text" class="form-control"><br>
            </div>
            <div class="col-md-2">
              <label class="form-label">Fecha Nacimiento</label>
              <input type="text" class="form-control"><br>
            </div>

            <div class="col-md-2">
              <label class="form-label">Telefono</label>
              <input type="text" class="form-control"><br>
            </div>


            <div class="container">
              <div class="row">
                <div class="col-lg-9 col-md-8">
                  <h4 class="font-weight-bold mb-2">Datos de sesion del paciente</h4>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <label class="form-label">Peso</label>
              <input type="text" name="peso" class="form-control">
            </div>
            <div class="col-md-2">
              <label class="form-label">Presion arterial</label>
              <input type="text" name="presionArterial" class="form-control">
            </div>
            <div class="col-md-2">
              <label class="form-label">Estatura</label>
              <input type="text" name="Estatura" class="form-control"><br>
            </div>

            <div class="col-md-5">
              <label class="form-label">Diagnostico</label>
              <textarea class="form-control" name="Diagnostico" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>


            <div class="container">
              <div class="row">
                <div class="col-lg-9 col-md-8">
                  <h4 class="font-weight-bold mb-2">Plan de tratamiento</h4>
                </div>
              </div>
            </div>
            <?php

            include('../../configuraciones/configuracion.php');
            $sqlServicios   = ("SELECT * FROM  serviciosofertados");
            $dataServicios  = mysqli_query($con, $sqlServicios);

            ?>

            <div class="col-md-6">
              <label for="servicios" class="text-right">Servicio a prestar</label>
              <br>
              <select name="idServicio" class="selectpicker" data-show-subtext="false" data-live-search="true"><br>
                <option value=""> Seleccionar...</option>
                <?php
                while ($data = mysqli_fetch_array($dataServicios)) { ?>
                  <option value="<?php echo $data["idServicio"]; ?>"><?php echo utf8_encode($data["NombreServicio"]); ?> </option>
                <?php } ?>
              </select><br>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-lg-9 col-md-8">
                  <h4 class="font-weight-bold mb-2">Proxima cita</h4>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <label class="form-label">Fecha</label>
              <input type="date" name="fecha" class="form-control">
            </div>
            <div class="col-md-2">
              <label class="form-label">Hora</label>
              <input type="time" name="hora" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">N° de sesiones recomendadas</label>
              <input type="text" name="NumeroSeciones" class="form-control">
            </div>
            <input type="text" name="controlador" value="Secion1" hidden>


            <div class="col-md-12">
              <br>
              <input type="submit" name="guardar" value="Registrar secion del paciente" class="btn btn-primary form-control">
            </div>
          </form>
        </div>

        <script src="../Recursos/select.js"></script>



</body>

</html>