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

        <a href="citas.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
          Gestion citas</a>

        <a href="principalsecretaria.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
          Atras - Pagina principal</a>

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

      </nav>
      <!-- Fin Navbar -->

      <!-- Page Content -->
      <div id="content" class="bg-grey w-100">
        <h1>Registro de pacientes</h1>

        <a href="RegistrarCliente.html"><button type="button" class="btn btn-primary btn-lg">Registrar Paciente</button></a>

        <div class="table-responsice">
          <table class="table caption-top">
            <thead>
              <tr class="table-active" style="background-color:  #73D35E;">
                <th scope="col">#</th>
                <th scope="col">identificacion</th>
                <th scope="col">Numeroidentificacion</th>
                <th scope="col">nombre</th>
                <th scope="col">apellidos</th>
                <th scope="col">CorreoElectronico</th>
                <th scope="col">Telefono</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>



              </tr>
            </thead>

            <?php

            $conexion = mysqli_connect('localhost', 'root', '', 'proyecto_final_web2');


            $sqlPrepared = "select * from pacientes";
            $result = mysqli_query($conexion, $sqlPrepared);

            while ($mostrar = mysqli_fetch_array($result)) {
            ?>

              <tbody>
                <tr>
                  <th scope="row">-</th>
                  <td><?php echo $mostrar['TipoIdentificacion']; ?></td>
                  <td><?php echo $mostrar['NumeroIdentificacion']; ?></td>
                  <td><?php echo $mostrar['Nombre']; ?></td>
                  <td><?php echo $mostrar['Apellidos']; ?></td>
                  <td><?php echo $mostrar['CorreoElectronico']; ?></td>
                  <td><?php echo $mostrar['Telefono']; ?></td>


                  <td><a href="editarpaciente.php? 

                        id=<?php echo $mostrar['NumeroIdentificacion']; ?>">

                      <button class="btn btn-primary badge-pill" style="width: 100px; background-color: #4487B3;">Editar</button></a>

                  <td><a href="informacioncompleta.php?
                        NumeroIdentificacion=<?php echo $mostrar['NumeroIdentificacion']; ?>

                        ">

                        <td><a href="../../controladores/ControladoresSecretaria/controladorpaciente.php? 

                    id=<?php echo $mostrar['NumeroIdentificacion']; ?>">
                    <button class="btn btn-primary badge-pill" style="width: 150px; background-color: #4487B3;">Eliminar </button></a>
                        
                </tr>
              </tbody>
            <?php
            }
            ?>
          </table>
        </div>




</body>

</html>