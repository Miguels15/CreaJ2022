<?php
$nom= isset($_POST['nomp'])?$_POST['nomp']:"";
$direc=isset($_POST['direc'])?$_POST['direc']:"";
$precio=isset($_POST['precio'])?$_POST['precio']:"";
$depa=isset($_POST['depa'])?$_POST['depa']:"";
$descu=isset($_POST['descu'])?$_POST['descu']:"";
$fotos=isset($_POST['image'])?$_POST['image']:"";
$id = isset($_SESSION['id'])?$_SESSION['id']:"";
$accion = isset($_REQUEST['accion'])?$_REQUEST['accion']:"";

if($accion=="Registrar propiedad"){
    require_once '../Modelo/classCasa.php';
    require_once '../Modelo/insertCasa.php';
    $con= new connCasa();
    $casas= new Casa($nom, $direc, $precio, $depa, $descu, $fotos);
    $con->insertar($casas);
}
?>