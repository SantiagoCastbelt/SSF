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

  <!-- Google fonts -->

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

        <a href="paginaprincipal.php" class="d-block text-light p-3 border-0">
          <ion-icon name="apps-outline"></ion-icon></i>
          Atras - pagina principal
        </a>

        <a href="elementos.php" class="d-block text-light p-3 border-0">
          <ion-icon name="flask-outline"></ion-icon></i>
          Gestion Elementos
        </a>

        <a href="GestionProfes.php" class="d-block text-light p-3 border-0">
          <ion-icon name="accessibility-outline"></ion-icon></i>
          Gestion de profesionales
        </a>

        <a href="RegistroServicios.php" class="d-block text-light p-3 border-0">
          <ion-icon name="bag-add-outline"></ion-icon></i>
          Gestion servicios
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
        <h1>Registro de categorias</h1>
        <div class="box-header with-border">
          <a href="GestionarCategorias.php"><button type="button" class="btn btn-primary btn-lg">Registrar Categoria</button></a>

          <h3></h3>
          <div class="table-responsice">
            <table class="table caption-top">
              <thead>
                <tr class="table-active" style="background-color: #73D35E;">
                  <th scope="col">#</th>
                  <th scope="col">ID categoria</th>
                  <th scope="col">Nombre categoria</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>




                </tr>
              </thead>

              <?php

              $sqlPrepared = "select * from categoria";
              $result = mysqli_query($conexion, $sqlPrepared);

              while ($mostrar = mysqli_fetch_array($result)) {
              ?>

                <tbody>
                  <tr>
                    <th scope="row">-</th>
                    <td><?php echo $mostrar['idCategoria']; ?></td>
                    <td><?php echo $mostrar['Nombre']; ?></td>
                    <td></td>

                    <td><a href="Editarcategoria.php? 

                        id=<?php echo $mostrar['idCategoria']; ?> &
                        Nombre=<?php echo $mostrar['Nombre']; ?>

                        "><button class="btn btn-primary badge-pill" style="width: 150px; 
                                                                   background-color: #4487B3;">
                          Editar categoria</button></a>
                    <td>





                    <td><a href="../../controladores/BotonCA.php? 

                        id=<?php echo $mostrar['idCategoria']; ?>
                        "><button class="btn btn-primary badge-pill" style="width: 150px; 
                                                                   background-color: #4487B3;">
                          Eliminar categoria</button></a>
                    <td>


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