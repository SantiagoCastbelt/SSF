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
                                
               <a href="categoria.php" class="d-block text-light p-3 border-0"><ion-icon name="grid-outline"></ion-icon></i>
                Gestion de categorias</a>

          <a href="paginaprincipal.php" class="d-block text-light p-3 border-0"><ion-icon name="apps-outline"></ion-icon></i>
                pagina principal</a>
              
          <a href="GestionProfes.php" class="d-block text-light p-3 border-0"><ion-icon name="accessibility-outline"></ion-icon></i>
            Gestion de profesionales</a>

          <a href="RegistroServicios.php" class="d-block text-light p-3 border-0"><ion-icon name="bag-add-outline"></ion-icon></i>
             Gestion de servicios</a> 
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
          <h1>Elementos</h1>        
        <div class="box-header with-border">
            <a href="gestionarElementos.php"><button type="button" class="btn btn-primary btn-lg">Registro de elementos</button></a>

            <h3></h3>
              <div class="table-responsice">
              <table class="table caption-top">
                <thead>
                  <tr class="table-active" style="background-color: #73D35E;">
                    <th scope="col">#</th>
                    <th scope="col">Id Elemento</th>
                    <th scope="col">Nombre Elemento</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Nombre del Servicio </th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                    

                  </tr>
                </thead>
                 <?php 
 
                     $sqlPrepared = "SELECT e.Codelemento,
                                     e.Nombre,
                                     e.costo,
                                     s.nombre
                                    FROM elementos as e
                                    INNER JOIN servicios as s
                                    on e.idServicio = s.idServicio ";

                     $result= mysqli_query($conexion,$sqlPrepared);
                     while ($mostrar=mysqli_fetch_array($result)){
                 ?>

                <tbody>
                  <tr>
                    <th scope="row">-</th>
                    <td><?php echo $mostrar['Codelemento']; ?></td>
                    <td><?php echo $mostrar['Nombre']; ?></td>
                    <td><?php echo $mostrar['costo']; ?></td>
                    <td><?php echo $mostrar['nombre']; ?></td>

                    
                    
                    <td><a href="editarElemento.php?

                        Codelemento=<?php echo $mostrar['Codelemento']; ?> &
                        Nombre=<?php echo $mostrar['Nombre']; ?> &
                        costo=<?php echo $mostrar['costo']; ?> &
                        nombre=<?php echo $mostrar['nombre']; ?> ">

      <button class="btn btn-primary badge-pill" style="width: 80px; background-color: #4487B3;">Editar</button></a>
  
                    <td><a href="../../controladores/BotonEE.php? 
                        id=<?php echo $mostrar['Codelemento']; ?>">

      <button class="btn btn-primary badge-pill" style="width: 80px; background-color: #4487B3;">Eliminar</button></a>
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
