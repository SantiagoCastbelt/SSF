<?php 

$conexion= mysqli_connect('localhost','root','','proyecto_final_web2');

 ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="../../Recursos/Bootstrap.css">


    <style type="text/css">
        
        *{
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
                                
               <a href="paginaprincipal.php" class="d-block text-light p-3 border-0"><ion-icon name="grid-outline"></ion-icon></i>
                Pagina principal</a>

                 <a href="ServiciosOfertados.php" class="d-block text-light p-3 border-0"><ion-icon name="grid-outline"></ion-icon></i>
                 Servicio Ofertados</a>

            </div>
        </div>
        <!-- Fin sidebar -->

        <div class="w-100">

         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
         </nav>
          <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">
          <h1>Todos los servicios registrados en el sistema</h1>  
          <h4>Seleccionar Los servicios los cuales se ofertaran</h4>      

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
                     $result= mysqli_query($conexion,$sqlPrepared);

                     while ($mostrar=mysqli_fetch_array($result)){
                 ?>
                <tbody>
                  <tr>
                    <th scope="row">-</th>
                    <td><?php echo $mostrar['idServicio']; ?></td>
                    <td><?php echo $mostrar['nombre']; ?></td>
                    <td><?php echo $mostrar['Nombre']; ?></td>

                      <td><a href="../../controladores/BotonOfertar.php?

                        idServicio=<?php echo $mostrar['idServicio']; ?> &
                        nombre=<?php echo $mostrar['nombre']; ?>  ">

         <button class="btn btn-primary badge-pill" style="width: 250px; background-color: #4487B3;">Ofertar</button></a>
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