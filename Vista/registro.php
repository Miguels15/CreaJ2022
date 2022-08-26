<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Property Deluxe</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/resgistroStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
<div class="fondo">
    <header>
        <div class="container">
            <nav>
                <a href="#" id="icono" class="icono">Menú</a>
                <a href="../index.html" id="icono" class="icono2">Inicio</a>
                <a href="#" id="icono2" class="icono2">Servicios</a>
                <a href="#" id="icono2" class="icono2">Explorar</a>
                <a href="login.php" id="icono2" class="icono2">Inicia sesión</a>
                <div class="enlaces uno" id="enlaces">
                    <a href="../index.html">Inicio</a>
                    <a href="">Servicios</a>
                    <a href="">Explorar</a>
                    <a href="login.php">Inicia sesión</a>
                </div>
            </nav>
        </div>
    </header>
</div><br><br><br><br><br>
<div class="contenedor">
    <form action="../Controlador/controlCliente.php" method="post" class="formulario-registro">
    <img src="../img/logo completo.png" alt="Logo" width="100%" height="250em">
        <h1>Registrate</h1>
<br>
            <div class="input-contenedor">
                <i class="fa-solid fa-user-large icon"></i>
                <input type="text" name="nom" placeholder="Nombre">
            </div>
            <div class="input-contenedor">
                <i class="fa-regular fa-envelope icon"></i>
                <input type="email" name="email" placeholder="Correo">
            </div>
            <div class="input-contenedor">
            <i class="fa-solid fa-user-check icon"></i>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="input-contenedor">
            <i class="fa-solid fa-phone icon"></i>
                <input type="tel" name="telefono" placeholder="Telefono">
            </div>
            <div class="input-contenedor">
                <i class="fa-solid fa-key icon"></i>
                <input type="password" name="pass" placeholder="Contraseña">
            </div>
            <div class="input-contenedor">
            <i class="fa-solid fa-venus-double icon"></i>  
          <select name="genero">
                    <option selected disabled="">Selecciona una opción</option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                </select>
            </div>
            <input type="submit" name="accion" value="Registrarse" class="botonR">

            <button class="botonL"><a href="login.php">Inicia Sesión</a></button>
            <br>
    </form>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>