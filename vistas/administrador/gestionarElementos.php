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
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

  <style>
    body {
      background-color: #B6DFD3;
    }

    em {
      color: crimson !important;
    }

    .btn:focus {
      outline: none !important;
      box-shadow: none;
    }

    input[type="button"] {
      border: none;
      outline: none;
    }

    .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
      width: 450px !important;
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

        <a href="elementos.php" class="d-block text-light p-3 border-0">
          <ion-icon name="arrow-back-outline" size="small"></ion-icon></i>
          Atras
        </a>

      </div>
    </div>


    <div class="w-100">


      <div class="container">
        <br><br>
        <div class="row text-center mt-5">
          <h1><strong></strong></h1>
          <hr />
          <br>
        </div>

        <?php

        include('../../configuraciones/configuracion.php');
        $sqlServicios   = ("SELECT * FROM  servicios");
        $dataServicios  = mysqli_query($con, $sqlServicios);

        ?>


        <form action="../../controladores/ControladoresAdmin/controladorElementos.php" method="POST">
          <div class="row-fluid">
            <div class="col-md-6">
              <label for="servicios" class="text-right">Lista de Servicios: (<em>Recuerde seleccionar un servicio</em>)</label>
              <br>
              <select name="idServicio" class="selectpicker" data-show-subtext="false" data-live-search="true" required>
                <option value=""> Servicios ...</option>

                <?php

                while ($data = mysqli_fetch_array($dataServicios)) { ?>
                  <option value="<?php echo $data["idServicio"]; ?>"><?php echo utf8_encode($data["nombre"]); ?> </option>

                <?php } ?>

              </select>
            </div>
           
            <div class="col-md-2">
              <label for="Nombre" class="text-left">Nombre</label>
              <input type="text" name="Nombre[]" class="form-control" required>
            </div>
            <div class="col-md-2">
              <label for="costo" class="text-left">Costo</label>
              <input type="text" name="costo[]" class="form-control" required>
            </div>
            <div class="col-md-1">
              <label for="code" class="text-left"></label><br>
              <button type="button" class="btn btn-success" id="btnMore">
                <i class="zmdi zmdi-plus zmdi-hc-lg"></i>
              </button>
            </div>
          </div>



          <div class="row-fluid" id="incrementa">

          </div>

          <br><br>
          <br><br>
          <br>
          <div class="row"></div>
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <button type="submit" class="btn btn-primary form-control">Guardar Elementos</button>
          </div>
          <div class="col-md-4"></div>
          <br><br>
          <br><br>


        </form>


      </div>



      <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

      <script>
        $(function() {
          var i = 1;
          $('#btnMore').click(function() {


            var divElement = '<div class="col-md-1"> </div>';
            var divInputElement = '<div class="col-md-2"><label for="code" class="text-left"> Numero Elemento  </label>';
            var inputCodeElement = '<input type="text" name="Codelemento[]" class="form-control"> </div>';


            var divnom = '<div class="col-md-1"></div>';
            var divInputnom = '<div class="col-md-2"><label for="code" class="text-left"> Nombre  </label>';
            var inputCodenom = '<input type="text" name="Nombre[]" class="form-control"> </div>';


            var divcos = '<div class="col-md-1"></div>';
            var divInputCos = '<div class="col-md-2"><label for="code" class="text-left"> Costo  </label>';
            var inputCodeCos = '<input type="text" name="costo[]" class="form-control"> </div>';


            i++;
            //Importante esta variable debe ir debajo del autoincrementable
            var btnDelete = '<button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button>';
            $('#incrementa').append('<div class="row-fluid' + i + '">' + divElement + divInputElement + inputCodeElement + divnom + divInputnom + inputCodenom + divcos + divInputCos + inputCodeCos + ' <div class="col-md-1"><br> ' + btnDelete + ' </div> </div> <br><br><br>');
          });


          $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            console.log(button_id);
            $('.row-fluid' + button_id + '').remove();
          });


        });
      </script>


      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>

</html>