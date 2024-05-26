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

                    <a href="paginaprincipal.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
                        Atras</a>

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
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-9 col-md-8">
                            <h1 class="font-weight-bold mb-0">Agendar Mi cita</h1>
                          </div>
                      </div>
                  </div>
                  <div class="container">
                    <h4>Seleccionar fecha y hora correspondiente</h4>

               <form class="row" action="../../controladores/formcontroller.php" method="POST">

                        <div class="col-md-4">
                            <label class="form-label">Fecha</label>
                            <input type="date" name="Fecha" class="form-control">
                          </div>


                        <div class="col-md-4">
                            <label class="form-label">Hora</label>
                            <input type="time" name="Hora" class="form-control">
                          </div>

                        <div class="col-md-4">
                            <label class="form-label">Numero De identificacion</label>
                            <input type="number" name="NumeroIdentificacion" class="form-control">
                          </div>


              <input type="text" name="controlador" value="citas" hidden>

                    
                    <div class="col-md-12">
                        <br>
<input type="submit" name="guardar" value="Agendar" class="btn btn-primary form-control">                    
                    </div>
                    </form>
                    </div>
          
    
</body>

</html>