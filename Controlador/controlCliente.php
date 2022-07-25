<?php
$nom= isset($_POST['nom'])?$_POST['nom']:"";
$mail= isset($_POST['email'])?$_POST['email']:"";
$user= isset($_POST['username'])?$_POST['username']:"";
$tel= isset($_POST['telefono'])?$_POST['telefono']:"";
$pass= isset($_POST['pass'])?$_POST['pass']:"";
$gen= isset($_POST['genero'])?$_POST['genero']:"";
$action= isset($_REQUEST['accion'])?$_REQUEST['accion']:"";

//variable para login
$usuex;
if($action=="Registrarse"){
    require_once '../Modelo/classCliente.php';
    require_once '../Modelo/insertCliente.php';
    $con= new conClient();
    $usuarios= new Usuario($nom, $mail, $user, $tel, $pass, $gen);
    $con->insertar($usuarios);
}

?>