<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../../Recursos/Bootstrap.css">

    <style type="text/css">
        * {
            font-family: Segoe UI;
            font-size: 16px;
        }
    </style>



    <title>Sistema SIF - Administrador</title>
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
                    Gestion Categorias
                </a>

                <a href="elementos.php" class="d-block text-light p-3 border-0">
                    <ion-icon name="flask-outline"></ion-icon></i>
                    Gestion Elementos
                </a>

                <a href="GestionProfes.php" class="d-block text-light p-3 border-0">
                    <ion-icon name="accessibility-outline"></ion-icon></i>
                    Gestion Profesionales
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

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a href="../../controladores/cerrarsecion.php"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mymodal" style=" margin-left: 960px; width: 130px;">Cerrar secion
                            </button></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a href="../../vistas/administrador/RegistroRoles.html"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mymodal" style=" margin-left: 960px; width: 130px;">Registrar Roles
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
                                <h2 class="font-weight-bold mb-0">Rol- Administrador</h2>
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


                                            $sqlPrepared = "SELECT COUNT(nombre) AS NumeroServicios FROM servicios ";
                                            $result = mysqli_query($conexion, $sqlPrepared);

                                            while ($mostrar = mysqli_fetch_array($result)) {
                                            ?>
                                                <h6 class="text-muted">Servicios registrados</h6>
                                                <center>
                                                    <h3 class="font-weight-bold"><?php echo $mostrar['NumeroServicios']; ?></h3>
                                                </center>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                        <div class="mx-auto">

                                        <?php
                                            }
                                        ?>

                                        <?php

                                        $conexion = mysqli_connect('localhost', 'root', '', 'proyecto_final_web2');


                                        $sqlPrepared = "SELECT COUNT(Nombre) AS NumeroCategorias FROM categoria ";
                                        $result = mysqli_query($conexion, $sqlPrepared);

                                        while ($mostrar = mysqli_fetch_array($result)) {
                                        ?>
                                            <h6 class="text-muted">Categorias</h6>
                                            <center>
                                                <h3 class="font-weight-bold"><?php echo $mostrar['NumeroCategorias']; ?></h3>
                                            </center>
                                        </div>
                                    </div>

                                <?php
                                        }
                                ?>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">


                                        <?php

                                        $conexion = mysqli_connect('localhost', 'root', '', 'proyecto_final_web2');


                                        $sqlPrepared = "SELECT COUNT(Nombres) AS NumeroProfesionales FROM profesionales";
                                        $result = mysqli_query($conexion, $sqlPrepared);

                                        while ($mostrar = mysqli_fetch_array($result)) {
                                        ?>

                                            <h6 class="text-muted">Profesionales de area</h6>
                                            <center>
                                                <h3 class="font-weight-bold"><?php echo $mostrar['NumeroProfesionales']; ?></h3>
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


                                    $sqlPrepared = "SELECT COUNT(Nombre) AS TodosElementos FROM elementos";
                                    $result = mysqli_query($conexion, $sqlPrepared);

                                    while ($mostrar = mysqli_fetch_array($result)) {
                                    ?>
                                        <h6 class="text-muted">Todos los elementos ingresados</h6>
                                        <center>
                                            <h3 class="font-weight-bold"><?php echo $mostrar['TodosElementos']; ?><h3>
                                        </center>
                                </div>

                            <?php
                                    }
                            ?>
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

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>





</body>

</html>