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

        <a href="categoria.php" class="d-block text-light p-3 border-0">
          <ion-icon name="grid-outline"></ion-icon></i>
          Gestion de categorias
        </a>

        <a href="elementos.php" class="d-block text-light p-3 border-0">
          <ion-icon name="flask-outline"></ion-icon></i>
          Gestion Elementos
        </a>

        <a href="Gestionprofes.php" class="d-block text-light p-3 border-0">
          <ion-icon name="accessibility-outline"></ion-icon></i>
          Gestion de profesionales
        </a>

        <a href="paginaprincipal.php" class="d-block text-light p-3 border-0">
          <ion-icon name="apps-outline"></ion-icon></i>
          Pagina principal
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

      <!-- Page Content -->
      <div id="content" class="bg-grey w-100">
        <h1>Registro de servicios</h1>
        <div class="box-header with-border">
          <a href="resservicios.php"><button type="button" class="btn btn-primary btn-lg">Registro servicios</button></a>

          <h3></h3>

        </div>
        <div class="table-responsice">
          <table class="table caption-top">
            <thead>
              <tr class="table-active" style="background-color: #73D35E;">
                <th scope="col">#</th>
                <th scope="col">Codigo servicio</th>
                <th scope="col">Nombre del servicio</th>
                <th scope="col">Categoria asignada</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>


              </tr>
            </thead>

            <?php

            $sqlPrepared = "SELECT s.idServicio,
                            s.nombre,
                            c.Nombre
                            FROM servicios as s
                            INNER JOIN categoria as c
                            on s.IdCategoria = c.idCategoria";
                            
            $result = mysqli_query($conexion, $sqlPrepared);

            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
              <tbody>
                <tr>
                  <th scope="row">-</th>
                  <td><?php echo $mostrar['idServicio']; ?></td>
                  <td><?php echo $mostrar['nombre']; ?></td>
                  <td><?php echo $mostrar['Nombre']; ?></td>


                  <td><a href="EditarServicio.php? 

                        idServicio=<?php echo $mostrar['idServicio']; ?> &
                        nombre=<?php echo $mostrar['nombre']; ?>  & 
                        idCategoria=<?php echo $mostrar['Nombre']; ?>">

                      <button class="btn btn-primary badge-pill" style="width: 80px; background-color: #4487B3;">Editar</button></a>

                    </a>
                  </td>


                  <td><a href="../../controladores/BotonSe.php?

                        id=<?php echo $mostrar['idServicio']; ?>">

                      <button class="btn btn-primary badge-pill" style="width: 80px; background-color: #4487B3;">Eliminar</button></a>
                  </td>
                </tr>


              </tbody>
            <?php
            }
            ?>
          </table>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




</body>

</html>