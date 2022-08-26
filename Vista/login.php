<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Property Deluxe</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/logiinStyle.css">
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
</div>
    <form method="post" action="../Modelo/classLogin.php" class="formulario-login">
        <img src="../img/logo completo.png" alt="Logo" width="100%" height="250em">
        <h1>Login</h1>

        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fa-regular fa-envelope icon"></i>
                <input type="email" placeholder="Correo" name="correo">
            </div>
            <div class="input-contenedor">
                <i class="fa-solid fa-key icon"></i>
                <input type="password" placeholder="Contraseña" name="contra">
            </div>
            
            <input type="submit" value="Inicia Sesión" class="botonL">
            <button class="botonR"><a href="../Vista/registro.php">Registrarse</a></button>


            <!--<p>Al registrarte, aceptas nuestras condiciones de uso y politica de privacidad.</p>
            <p>¿No tienes cuenta? <a class="link" href="registro.html">Registrate</a></p>
-->
        </div>

    </form>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>