<?php

$conexion = mysqli_connect('localhost', 'root', '', 'proyecto_final_web2');

?>


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

        <a href="principalsecretaria.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
          Atras - pagina principal</a>

        <a href="usuarios.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
          Gestion pacientes</a>

        <a href="facturacion.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i>
          Facturacion</a>
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

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown">


              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Fin Navbar -->
      <!-- Page Content -->
      <div id="content" class="bg-grey w-100">

        <h1>Citas proximas de pacientes</h1><br>


        <h4>Asignar transcurso de hora para citas en especifico</h4>

        <div class="box-header with-border">

        </div>

        <div class="table-responsice">
          <table class="table table-caption">
            <thead>
              <tr class="table-active" style="background-color:  #73D35E;">
                <th scope="col">#</th>
                <th scope="col">Numero identificacion</th>
                <th scope="col">Paciente</th>
                <th scope="col">Telefono</th>
                <th scope="col">fecha</th>
                <th scope="col">Hora</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>

            <?php

            $sqlPrepared = "SELECT p.NumeroIdentificacion,
                                            p.Nombre,
                                            p.Telefono,
                                            c.Fecha,
                                            c.hora
                                      FROM citas as c
                                      INNER JOIN pacientes as p
                                      on c.NumeroIdentificacion = p.NumeroIdentificacion; ";

            $result = mysqli_query($conexion, $sqlPrepared);

            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><?php echo $mostrar['NumeroIdentificacion']; ?></td>
                  <td><?php echo $mostrar['Nombre']; ?></td>
                  <td><?php echo $mostrar['Telefono']; ?></td>
                  <td><?php echo $mostrar['Fecha']; ?></td>
                  <td><?php echo $mostrar['hora']; ?></td>

                  <td>
                    <button class="btn btn-primary badge-pill" style="width: 110px; background-color: #4487B3;">Recordatorio</button></a>

                </tr>

              </tbody>
            <?php
            }
            ?>
          </table>
        </div>
      </div>






</body>

</html>