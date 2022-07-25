<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/registroStyle.css">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/48fc494f11.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b81162faad.js" crossorigin="anonymous"></script>
</head>
<body>
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
    
	<div class="form-container sign-up-container2">
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
            <a href="form.php">¿Ya tienes una cuenta?</a>

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
				<h1>Bienvenido de vuelta!</h1>
				<p>Para mantenerte conectado ingresa la información que se te solicita</p>
				<button class="ghost" id="signIn">Inicia sesión</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hola amigo</h1>
				<p>Ingresa tu información para comenzar a usar Property Deluxe</p>
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