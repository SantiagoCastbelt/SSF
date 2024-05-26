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


    <title>Sistema SIF - secretaria</title>
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
                    Gestion de citas</a>

                <a href="usuarios.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
                    Gestion Pacientes</a>

                <a href="facturacion.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i>
                    Facturacion</a>
            </div>
        </div>
        <!-- Fin sidebar -->

        <div class="w-100">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container">

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
                                <h2 class="font-weight-bold mb-0">Secretaria</h2>
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
                                                <h6 class="text-muted">Pacientes</h6>
                                                <h3 class="font-weight-bold"><?php echo $mostrar['NumeroPacientes']; ?></h3>
                                        </div>
                                    <?php
                                            }
                                    ?>
                                    </div>
                                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                        <div class="mx-auto">
                                            <?php

                                            $conexion = mysqli_connect('localhost', 'root', '', 'proyecto_final_web2');


                                            $sqlPrepared = "SELECT COUNT(Fecha) AS CitasProximas FROM citas";
                                            $result = mysqli_query($conexion, $sqlPrepared);

                                            while ($mostrar = mysqli_fetch_array($result)) {
                                            ?>
                                                <h6 class="text-muted">Citas proximas</h6>
                                                <h3 class="font-weight-bold"><?php echo $mostrar['CitasProximas']; ?></h3>
                                        </div>
                                    <?php
                                            }
                                    ?>
                                    </div>
                                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                        <div class="mx-auto">
                                            <?php

                                            $conexion = mysqli_connect('localhost', 'root', '', 'proyecto_final_web2');


                                            $sqlPrepared = "SELECT COUNT(paciente) AS CitasRealizadas FROM pinfosesiones";
                                            $result = mysqli_query($conexion, $sqlPrepared);

                                            while ($mostrar = mysqli_fetch_array($result)) {
                                            ?>
                                                <h6 class="text-muted">Citas realizadas</h6>
                                                <h3 class="font-weight-bold"><?php echo $mostrar['CitasRealizadas']; ?></h3>
                                        </div>
                                    <?php
                                            }
                                    ?>
                                    </div>
                                </div>
                            </div>
                </section>

            </div>

        </div>
    </div>


</body>

</html>