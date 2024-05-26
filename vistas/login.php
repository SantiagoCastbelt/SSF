
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Recursos/normalize.css">
    <link rel="stylesheet" href="../Recursos/login.css">
</head>

<body>

    <header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="site-name">SISTEMA SIF</span>
			<span class="site-desc">LOGIN</span>
		</a> <!-- / #logo-header -->

		<nav>
			<ul>
				<li><a href="index.html">Portal pagina principal</a></li>
			</ul>
		</nav><!-- / nav -->

	</header><!-- / #main-header -->

    <div class="contenedor-formulario contenedor">
        <div class="imagen-formulario">
            
        </div>

        <form class="formulario" action="../controladores/formcontroller.php" method="POST">
            <div class="texto-formulario">
                <h2>Bienvenido a  SIF</h2>
                <p>Inicia sesión aqui</p>
            </div>
            <div class="input">
                <label for="usuario">Usuario</label>
                <input placeholder="Ingresa correo electronico" type="text" name="NombreUsuario">
            </div>
            <div class="input">
                <label for="contraseña">Contraseña</label>
                <input placeholder="Ingresa tu contraseña" type="password" name="Contraseña">
            </div>
            <div class="password-olvidada">
                <a href="Otraspaginas/registrar.html">Registrarme</a>
            </div>
            <div class="input">

         <input type="submit" value="Iniciar">
         <input type="text" name="controlador" value="login" hidden>
            
            </div>
        </form>
    </div>

    

</body>

</html>