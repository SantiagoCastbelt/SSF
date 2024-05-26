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
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
    <title>Crear campos de forma dinamica con Javascript</title>
    <style>
        
        *{
            font-family: Segoe UI;
            font-size: 16px;
        }

      em{
        color: crimson !important;
      }
    .btn:focus {
      outline: none !important;
      box-shadow: none;
    }
      input[type="button"]{
      border: none;
      outline:none;
      }
      .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn){
          width:450px !important;
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
              
          <a href="GestionProfes.php" class="d-block text-light p-3 border-0"><ion-icon name="arrow-back-outline" size="small"></ion-icon></i>
              Atras</a>

            </div>
        </div>
        <!-- Fin sidebar -->

        <div class="w-100">
             <div id="content" class="bg-grey w-100">
                <div class="row"></div>
          
            <div class="container">
              <h1>Registro de Profesionales de area</h1>
              <div class="row">
                <div class="col-lg-9 col-md-8">
                  <p class="font-weight-bold mb-0">Ingresar informacion del profesional de area.</p><br>
                </div>
            </div>
              <form class="row" action="../../controladores/ControladoresAdmin/controladorprofesional.php" method="POST">
                
                
                    <div class="col-md-4">
                      <label  class="form-label">Tipo identificacion</label><br>
                      <select name="TipoIdentificacion" class="col-md-9">
                        <option value=""></option>
                        <option value="CC">Cedula de ciudadania</option>
                        <option value="TI">Tarjeta de identidad</option>
                      </select>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Numero de identificacion</label>
                    <input name="NumeroIdentificacion" type="text" class="form-control">
                  </div>  
                  <div class="col-md-4">
                    <label class="form-label">Nombre</label>
                    <input name="nombres" type="text" class="form-control">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Apellidos</label>
                    <input name="Apellidos" type="text" class="form-control">
                  </div>
                      <div class="col-md-4">
                      <label class="form-label">Fecha nacimiento</label>
                      <input name="FechaNacimiento" type="date" class="form-control">
                    </div>
                    <div class="col-md-4">
                    <label class="form-label">Telefono</label>
                    <input name="Telefono" type="text" class="form-control">
                  </div>
                     <div class="col-md-4">
                      <label  class="form-label">Sexo</label><br>
                      <select name="sexo" class="col-md-9">
                        <option value=""></option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                      </select>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Correo electronico</label>
                    <input name="email" type="text" class="form-control">
                  </div>

                <div class="row-fluid">
                 <div class="col-md-5">
                   <label for="Estudios" class="text-left">Estudios Realizados</label>
                   <input type="text" name="Estudios[]" class="form-control" required>
                 </div>
                 <div class="col-md-5">
                   <label for="Especialidades" class="text-left">Especialidades</label>
                   <input type="text" name="Especialidades[]" class="form-control" required>
                 </div>
                 <div class="col-md-1">
                   <label for="code" class="text-left"></label><br>
                   <button type="button" class="btn btn-success" id="btnMore">
                     <i class="zmdi zmdi-plus zmdi-hc-lg"></i>
                   </button>
                 </div>
               </div>
                <br><br>
              <br><br>

                <div class="row-fluid" id="incrementa"> </div>
                   <div class="row">
                   <div class="col-md-4"></div>
                   <div class="col-md-4"></div>
                   <br><br>
                   <br><br>
                    </div>
                    

                     <div class="col-md-12">
                  <br>
   <input type="submit" name="guardar" value="Registrar Profesionales de area" class="btn btn-primary form-control">

    </div>

      </form>


  </div>

  
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<script>
$(function(){
var i=1;
$('#btnMore').click(function(){

  
  var divElement ='<div class="col-md-1"> </div>';
  var divInputElement = '<div class="col-md-4"><label for="code" class="text-center"> Estudios </label>';
  var inputCodeElement ='<input type="text" name="Estudios[]" class="form-control"> </div>';


  var divnom ='<div class="col-md-1"></div>';
  var divInputnom = '<div class="col-md-4"><label for="code" class="text-center"> Especialidades  </label>';
  var inputCodenom ='<input type="text" name="Especialidades[]" class="form-control"> </div>';



  i++;
  //Importante esta variable debe ir debajo del autoincrementable
  var btnDelete ='<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button>';
  $('#incrementa').append('<div class="row-fluid'+i+'">'+divElement+divInputElement+inputCodeElement+ divnom + divInputnom + inputCodenom+' <div class="col-md-1"><br> '+ btnDelete +' </div> </div> <br><br><br>');
});
  

$(document).on('click', '.btn_remove', function(){
  var button_id = $(this).attr("id"); 
  console.log(button_id);
  $('.row-fluid'+button_id+'').remove();
}); 


});
</script>


 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    
</body>

</html>