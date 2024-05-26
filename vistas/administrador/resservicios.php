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

  <style>
    em {
      color: crimson !important;
    }

    .btn:focus {
      outline: none !important;
      box-shadow: none;
    }

    input[type="button"] {
      border: none;
      outline: none;
    }

    .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
      width: 450px !important;
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


        <a href="RegistroServicios.php" class="d-block text-light p-3 border-0">
          <ion-icon name="arrow-back-outline" size="small"></ion-icon></i>
          Atras
        </a>

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
      <div id="content" class="bg-grey w-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-8">
              <h1 class="font-weight-bold mb-0">Registro de servicios</h1>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-8">
              <p class="font-weight-bold mb-0">Ingresar datos sobre servicio a prestar, asi como su categoria asignada. </p>
            </div>
          </div>
          <form class="row" action="../../controladores/formcontroller.php" method="POST">

            <div class="col-md-1">
              <label class="form-label">Codigo</label>
              <input type="text" name="codigo" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Nombre</label>
              <input type="text" name="nombre" class="form-control"><br>
            </div>

            <?php

            include('../../configuraciones/configuracion.php');
            $sqlServicios   = ("SELECT * FROM  categoria");
            $dataServicios  = mysqli_query($con, $sqlServicios);

            ?>

            <div class="col-md-6">
              <label for="servicios" class="text-right">Lista de Categorias: (<em>Recuerde seleccionar una Categoria</em>)</label>
              <br>
              <select name="IdCategoria" class="selectpicker" data-show-subtext="false" data-live-search="true" required>
                <option value=""> Seleccionar...</option>
                <?php
                while ($data = mysqli_fetch_array($dataServicios)) { ?>
                  <option value="<?php echo $data["idCategoria"]; ?>"><?php echo utf8_encode($data["Nombre"]); ?> </option>
                <?php } ?>
              </select>
            </div>

            <input type="text" name="controlador" value="servicio" hidden>

            <div class="col-md-12">
              <br>
              <input type="submit" name="guardar" value="Registrar servicio" class="btn btn-primary form-control">
            </div>
          </form>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>