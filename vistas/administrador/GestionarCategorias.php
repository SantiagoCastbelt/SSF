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
                
               <a href="categoria.php" class="d-block text-light p-3 border-0"><ion-icon name="arrow-back-outline" size="small"></ion-icon></i>
                Atras</a>

            </div>
        </div>
        <!-- Fin sidebar -->

          <div id="content" class="bg-grey w-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                      <h1 class="font-weight-bold mb-0">Registro de categorias</h1>
                    </div>
                </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-9 col-md-8">
                  <p class="font-weight-bold mb-0">Ingresar datos sobre categoria</p>
                </div>
            </div>
         <form class="row" action="../../controladores/formcontroller.php" method="POST">

                  <div class="col-md-4">
                    <label class="form-label">Codigo categoria</label>
                    <input type="text" name="codigo" class="form-control" required>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Nombre categoria</label>
                    <input  type="text" name="Nombre" class="form-control" required>
                  </div>
                </div>

          <input type="text" name="controlador" value="categoria" hidden>
            
              <div class="col-md-12">
                  <br>
 <input type="submit" name="guardar" value="Registrar categoria" class="btn btn-primary form-control">
     
 </input>
                </div>
              </form>
              </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

              
</body>

</html>