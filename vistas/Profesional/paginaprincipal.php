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
            font-size: 17px;
        }
    </style>



    <title>Sistema SIF - Profesional</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">Sistema SIF</h4>
            </div>
            <div class="menu">

                <a href="citas.html" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
                    Gestion de sesion</a>
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
                        <a href="../../controladores/cerrarsecion.php"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mymodal" style=" margin-left: 960px; width: 130px;">Cerrar secion
                            </button></a>
                    </div>

                </div>
            </nav>

            <!-- Fin Navbar -->

            <!-- Page Content -->

            <div id="content" class="bg-grey w-200">
                <h1 class="font-weight-bold mb-0">Sistema de servicios fisioterapios</h1>
                <h2 class="font-weight-bold mb-0">Area - Profesional</h2>


                <div id="content" class="bg-grey w-100">
                    <h4>Buscar paciente para toma de secion</h4>

                    <div class="container-fluid">
                        <form class="d-flex" action="" method="GET">
                            <input class="form-control" type="search" placeholder="Ingresar Identificacion del paciente o nombre" name="busqueda">

                            <button class="btn btn-ontline-info" type="submit" name="enviar"><b>Buscar</b></button><br><br>

                        </form>
                    </div>

                    <?php

                    $conexion = mysqli_connect("localhost", "root", "", "proyecto_final_web2");
                    $where = "";

                    if (isset($_GET['enviar'])) {
                        $busqueda = $_GET['busqueda'];

                        if (isset($_GET['busqueda'])) {
                            $where = "WHERE  pa.NumeroIdentificacion like '%" . $busqueda . "%' OR Nombre like '%" . $busqueda . "%' ";
                        }
                    }


                    ?>



                    <div class="table-responsice">
                        <table class="table table-caption">
                            <thead>
                                <tr class="table-active" style="background-color:  #73D35E;">
                                    <th scope="col">Fecha cita</th>
                                    <th scope="col">Hora</th>
                                    <th scope="col">identificacion paciente</th>
                                    <th scope="col">Nombre Paciente</th>
                                    <th scope="col">Apellidos Paciente</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $conexion = mysqli_connect("localhost", "root", "", "proyecto_final_web2");
                                $sql = "SELECT c.Fecha,
                           c.Hora,
                           c.NumeroIdentificacion,
                           pa.Nombre,
                          pa.Apellidos
                    FROM citas As c
                    INNER JOIN pacientes as pa ON c.NumeroIdentificacion = pa.NumeroIdentificacion 
                    $where";

                                $datos = mysqli_query($conexion, $sql);

                                if ($datos !== false && $datos->num_rows > 0) {
                                    while ($fila = mysqli_fetch_array($datos)) {

                                ?>

                                        <tr>
                                            <td><?php echo $fila['Fecha']; ?> </td>
                                            <td><?php echo $fila['Hora']; ?> </td>
                                            <td>
                                                <center><?php echo $fila['NumeroIdentificacion']; ?></center>
                                            </td>
                                            <td><?php echo $fila['Nombre']; ?> </td>
                                            <td><?php echo $fila['Apellidos']; ?> </td>

                                            <td>
                                                <a class="btn btn-warning" href="primerformulario.php">
                                                    <i class="fa fa-edit">Tomar Sesion</i> </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {

                                    ?>
                                    <tr class="text-center">
                                        <td colspan="16">No existen registros</td>
                                    </tr>


                                <?php

                                }

                                ?>

                            </tbody>

                        </table>



                    </div>
                </div>
</body>

</html>