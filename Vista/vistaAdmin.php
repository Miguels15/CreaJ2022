<!DOCTYPE html>
<html lang="es">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="vista/main2.js"></script>
    
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/busqueda.css">
    <title>Buscar una vivienda</title>
</head>
<body>
    
<header>
        <div class="container">
            <nav>

                <ul>
                    <li><a id="icono" class="icono">Menú</a></li>
                    <li><a id="icono" class="icono2"  href="index.html">Inicio</a></li>
                    <li><a id="icono2" class="icono2">Servicios</a></li>
                    <li><a id="icono2"  href="buscar-Vivienda.html" class="icono2">Explorar</a></li>
                    <li class="submenu">
                        <a id="icono2" class="icono2">Administradores</a>
                        <ul class="children">
                            <li><a href="vistaAdmin.php">Lista usuarios</a></li>
                            <li><a href="#">Listado de propiedades</a></li>      
                        </ul>
                    </li>
                    <li><a id="icono2" href="Vista/form.php" class="icono2">Cuenta</a></li>
                </ul>
                <div class="enlaces uno" id="enlaces">
                    <a href="index.html">Inicio</a>
                    <a href="#">Servicios</a>
                    <a href="buscar-Vivienda.html">Explorar</a>
                    <a href="Vista/form.php">Cuenta</a>
                </div>
            </nav>
           
    </header>


<h1 class="title">Busca un nuevo hogar</h1>
<div class="search_wrap search_wrap">
    <div class="search_box">
        <div class="btn btn_common">
            <i class="fas fa-search"></i>
        </div>
        <input type="text" class="input" placeholder="Buscar">
    </div>
</div>


<table class="table caption-top">
            <caption>Listado Usuarios</caption>
            <tr>
            <th>id</th><th  >Nombre</th><th>Username</th><th>Rol</th><th>Modificar</th><th>Eliminar</th>
            </tr>
<?php

    if(!isset($cliente)){
        require_once "../Modelo/daoCliente.php";
    }else
        require_once "../Modelo/daoCliente.php";
    $dao = new DaoClient();
    $clientes = $dao->listadoClientes();
    $enlace ="<a href='../Controlador/controlCliente.php?accion=modificar&id=";
    $enlace2 ="<a href='../Controlador/controlCliente.php?accion=eliminar&id=";
    foreach($clientes as $cliente){
        echo "<tr><td>". $cliente['Id_Usuario'] ."</td><td>". $cliente['nombre'] ."</td><td>". $cliente['username'] ."</td><td>". $cliente['rol'] ."</td><td>".$enlace . $cliente['Id_Usuario'] ."'><i class='fas fa-edit'></i></a></td><td>".$enlace2 . $cliente['Id_Usuario'] ."'><i class='fas fa-trash-alt'></i></a></td></tr>";
    }
?>
    </table>
    

    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>
</html>