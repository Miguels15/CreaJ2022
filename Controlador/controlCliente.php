<?php
$nom= isset($_POST['nom'])?$_POST['nom']:"";
$mail= isset($_POST['email'])?$_POST['email']:"";
$user= isset($_POST['username'])?$_POST['username']:"";
$tel= isset($_POST['telefono'])?$_POST['telefono']:"";
$pass= isset($_POST['pass'])?$_POST['pass']:"";
$gen= isset($_POST['genero'])?$_POST['genero']:"";
$action= isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
$accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";
$id = isset($_GET['id'])?$_GET['id']:"";
$idU= isset($_POST['Id_Usuario'])?$_POST['Id_Usuario']:"";

//variable para login
$usuex;
if($accion=="Registrarse"){
    require_once '../Modelo/classCliente.php';
    require_once '../Modelo/insertCliente.php';
    $con= new conClient();
    $usuario= new Usuario($nom, $mail, $user, $tel, $pass, $gen);
    $con->insertar($usuario);
}

//Eliminar Cliente
if($id != "" && $accion=="eliminar"){
    require_once '../Modelo/daoCliente.php';
    $dao = new DaoClient();
    $dao->eliminar($id);
    echo "<p>Registro Eliminado exitosamente...</p>";
    echo "<a href='../Vista/vistaAdmin.php'>Regresar</a>";
}


//Modificar cliente
if($id != "" && $accion=="modificar"){
    require_once '../Modelo/daoCliente.php';
    $dao = new DaoClient();
    $cliente = $dao->mostrarCliente($id); 
    $html = <<<'EOD'
    <!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../Estilos/Ctrlcliente/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<title>Cliente</title>
</head>
<body>

<br><h1>Modificar Cliente</h1>

EOD;
echo $html;
    echo "<div class='container'>    
    <form action='controlCliente.php' method='post' >
    <div class='form-group mb-2 row'>            
        <div class='col'>
        <label>
                Nombre:
        </label>
        <input class='form-control' size='20' type='text' name='nom'  required value='".$cliente["nombre"]."'/>
        </div>
        
    </div>
    <input type='hidden' name='Id_Usuario' required value='".$cliente["Id_Usuario"]."'/>

<input type='hidden' name='roles' required value='".$cliente["rol"]."'/>
<input type='hidden' name='genero' required value='".$cliente["gen"]."'/>
    <div class='form-group  mb-2 row'>
    
    <div class='col'>
        <label>
            Correo:
        </label>
        <input type='email' class='form-control' name='email' required value='".$cliente["correo"]."' />
    </div>
    </div>
    
    <div class='form-group  mb-2 row'>
    <div class='col'>
        <label>
            Nombre de Usuario:
        </label>
        <input type='text' name='username' class='form-control' required value='".$cliente["username"]."'>
    </div>
    <div class='col'>
        <label>
        Numero telefónico:
        </label>
        <input type='tel' name='telefono' class='form-control' placeholder='Ej: 7800-0500 ' required value='".$cliente["tel"]."'>
    </div>
    </div>
    
    <div class='col'>

        <label>Contraseña:</label><br>
        <input type='password' name='pass' class='form-control' placeholder='********' required value='".$cliente["pass"]."'><br>
    </div>
    <fieldset>
        <input type='submit' class='button' name='accion' value='Modificar' required />
    
    </fieldset>
    </form>";
    
    
}

if($accion == "Modificar"){
    require_once '../Modelo/classCliente.php';
    require_once '../Modelo/daoCliente.php';
    $dao = new DaoClient();

    $cliente = new Usuario($nom, $mail, $user, $tel, $pass, $gen); 
    
    $dao->modificar($cliente,$idU);
    
    header('Location: ../vista/vistaAdmin.php');
}

?>