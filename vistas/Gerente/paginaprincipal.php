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

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

   <style type="text/css">
        
        *{
            font-family: Segoe UI;
            font-size: 16px;
        }

    </style>

   

    <title>Sistema SIF - gerente</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">Sistema SIF</h4>
            </div>
            <div class="menu">

                <a href="servicios.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
                       Gestion de Servicios a Ofertar</a>
                    
                <a href="reportes.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
                    Reportes</a>
                    
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

                           <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a href="../../controladores/cerrarsecion.php"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mymodal" style=" margin-left: 960px; width: 130px;">Cerrar secion
                </button></a>
            </div>
    
            </div>
          </nav>
          <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

              <section class="bg-light py-3">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-9 col-md-8">
                            <h1 class="font-weight-bold mb-0">Sistema de servicios fisioterapios</h1>
                            <h2 class="font-weight-bold mb-0">Gerente</h2>
                          </div>
                      </div>
                  </div>
              </section>

              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                        <div class="mx-auto">

                                            <?php

                                            $conexion = mysqli_connect('localhost', 'root', '', 'proyecto_final_web2');


                                            $sqlPrepared = "SELECT COUNT(Nombre) AS NumeroPacientes FROM pacientes";
                                            $result = mysqli_query($conexion, $sqlPrepared);

                                            while ($mostrar = mysqli_fetch_array($result)) {
                                            ?>
                                                <h6 class="text-muted">Todos los Pacientes Registrados</h6>
                                                <center><h3 class="font-weight-bold"><?php echo $mostrar['NumeroPacientes']; ?></h3></center>
                                        </div>
                                    <?php
                                            }
                                    ?>
                                    </div>
                                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                        <div class="mx-auto">

                                        <?php

                                        $conexion = mysqli_connect('localhost', 'root', '', 'proyecto_final_web2');


                                        $sqlPrepared = "SELECT COUNT(Nombre) AS NumeroCategorias FROM categoria ";
                                        $result = mysqli_query($conexion, $sqlPrepared);

                                        while ($mostrar = mysqli_fetch_array($result)) {
                                        ?>
                                            <h6 class="text-muted">Categorias Registradas</h6>
                                            <center>
                                                <h3 class="font-weight-bold"><?php echo $mostrar['NumeroCategorias']; ?></h3>
                                            </center>
                                        </div>
                                    </div>

                                <?php
                                        }
                                ?>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                    <?php

$conexion = mysqli_connect('localhost', 'root', '', 'proyecto_final_web2');


$sqlPrepared = "SELECT COUNT(idServicio) AS serviciosofertados
FROM serviciosofertados";
$result = mysqli_query($conexion, $sqlPrepared);

while ($mostrar = mysqli_fetch_array($result)) {
?>
                                        <h6 class="text-muted">Servicios Ofertados</h6>
                                        <center><h3 class="font-weight-bold"><?php echo $mostrar['serviciosofertados']; ?></h3></center>
                                    </div>
                                    <?php
                                            }
                                    ?>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>

        </div>

        </div>
    </div>

    
</body>

</html>