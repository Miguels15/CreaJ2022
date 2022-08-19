
<?php
if($_POST){
  session_start();
  require('../Modelo/conexionLogin.php');
  $correo=$_POST['correo'];
  $pass=$_POST['contra'];
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
  $query= $pdo->prepare("SELECT * FROM usuarios WHERE correo=:correo AND pass=:pass");
  
  $query->bindParam(":correo",$correo);
  $query->bindParam(":pass",$pass);
  $query->execute();
  $usuario=$query->fetch(PDO::FETCH_ASSOC);
  if ($usuario) {
      if ($_POST['correo']==$usuario["correo"] && $_POST['contra']==$usuario['pass']) { 
        $_SESSION['usuarioo']=$usuario["correo"];
        /*$_SESSION['id']=$usuario["idCliente"];*/
        header('location:../indexusuario.php');
        /*echo $_SESSION['id'];*/
      }else{
        echo "<script>alert('Usuario y clave incorrectos, vuelva a intentarlo');</script>";   
      }
  }
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Cuenta</title>
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
          <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catalogo.php">Explorar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cuenta</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="../Controlador/controlCliente.php" id="registro"method="post">
			<h1>Crear una cuenta</h1>

			<span>Ingresa la información</span>
			<input type="text" name="nom" autocomplete="off" placeholder="Nombre">
			<input type="email" name="email" autocomplete="off" placeholder="Correo">
			<input type="text" name="username" autocomplete="off" placeholder="Username">
			<input type="tel" name="telefono" autocomplete="off" placeholder="Telefono">
			<input type="password" name="pass"   autocomplete="off" placeholder="Contraseña">
			<select name="genero">
				<option selected disabled="">Selecciona una opción</option>
				<option value="F">Femenino</option>
				<option value="M">Masculino</option>
			</select>
            <input type="submit" name="accion" value="Registrarse" class="botonR" onclick="validarRegistro()">
            <a href="registro-arrendador.php">¿Eres dueño de una casa, registrate como arrendador?</a>

		</form>
	</div>
    
    <div class="form-container sign-in-container2">

		<form method="post" action="../Modelo/classLogin.php">
			<h1>Inicia sesión</h1>
            <img src="../img/logo completo.png" alt="Logo" width="100%">

			<span>Ingresa correctamente tus credenciales</span>
            <input type="email" autocomplete="off" placeholder="Correo" name="correo">
            <input type="password"  autocomplete="off" placeholder="Contraseña" name="contra">
            <input type="submit" value="Inicia Sesión" class="botonL">
            <a href="registro-movil.php">¿No tienes una cuenta?</a>
		</form>
	</div>

	<div class="form-container sign-in-container">
		<form method="post" action="">
			<h1>Inicia sesión</h1>
            <img src="../img/logo completo.png" alt="Logo" width="100%">

			<span>Ingresa correctamente tus credenciales</span>
            <input type="email" autocomplete="off" id="email" placeholder="Correo" name="correo">
            <input type="password" autocomplete="off" id="pass" placeholder="Contraseña" name="contra">
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

</script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</body>
</html>
