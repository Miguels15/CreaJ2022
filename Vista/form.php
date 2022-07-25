<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/48fc494f11.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b81162faad.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PROPERTY DELUXE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="../Controlador/controlCliente.php" method="post">
			<h1>Crear una cuenta</h1>

			<span>Ingresa la información</span>
			<input type="text" name="nom" placeholder="Nombre">
			<input type="email" name="email" placeholder="Correo">
			<input type="text" name="username" placeholder="Username">
			<input type="tel" name="telefono" placeholder="Telefono">
			<input type="password" name="pass" placeholder="Contraseña">
			<select name="genero">
				<option selected disabled="">Selecciona una opción</option>
				<option value="F">Femenino</option>
				<option value="M">Masculino</option>
			</select>
            <input type="submit" name="accion" value="Registrarse" class="botonR">

		</form>
	</div>
    
    <div class="form-container sign-in-container2">

		<form method="post" action="../Modelo/classLogin.php">
			<h1>Inicia sesión</h1>
            <img src="../img/logo completo.png" alt="Logo" width="100%">

			<span>Ingresa correctamente tus credenciales</span>
            <input type="email" placeholder="Correo" name="correo">
            <input type="password" placeholder="Contraseña" name="contra">
            <input type="submit" value="Inicia Sesión" class="botonL">
            <a href="registro-movil.php">¿No tienes una cuenta?</a>
		</form>
	</div>

	<div class="form-container sign-in-container">
		<form method="post" action="../Modelo/classLogin.php">
			<h1>Inicia sesión</h1>
            <img src="../img/logo completo.png" alt="Logo" width="100%">

			<span>Ingresa correctamente tus credenciales</span>
            <input type="email" placeholder="Correo" name="correo">
            <input type="password" placeholder="Contraseña" name="contra">
            <input type="submit" value="Inicia Sesión" class="botonL">

		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
			<h1>Hola amigo</h1>
				<p>Ingresa tu información para comenzar a usar Property Deluxe</p>
				<button class="ghost" id="signIn">Inicia sesión</button>
			</div>
			<div class="overlay-panel overlay-right">
				
				<h1>Bienvenido de vuelta!</h1>
				<p>Para mantenerte conectado ingresa la información que se te solicita</p>
				<button class="ghost" id="signUp">Registrate</button>
			</div>
		</div>
	</div>
</div>
<script src="../js/form.js"></script>
<div class="container-footer" id="footer">	
        <footer class="redes-footer">
          
            <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-twitter icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
            </div>    
            <hr>
            <h4>© 2022 Property Deluxe - Todos los Derechos Reservados</h4>

        </footer>
    </div>
</body>
</html>