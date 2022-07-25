<?php
if($_POST){
    require('conexionLogin.php');
    $correo=$_POST['correo'];
    $pass=$_POST['contra'];
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    $query= $pdo->prepare("SELECT * FROM usuarios WHERE correo=:correo AND pass=:pass");
    $query->bindParam(":correo",$correo);
    $query->bindParam(":pass",$pass);
    $query->execute();
    $usuario=$query->fetch(PDO::FETCH_ASSOC);
    if($usuario){
        $_SESSION['usuario']=$usuario["correo"];
        header("location:../index.html");
    }else{
        echo "<script>alert('Correo o contraseña son incorrectos, vuelva a intentarlo');</script>";   
    }
} 
?>