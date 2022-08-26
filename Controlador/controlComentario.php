<?php  
$nombre = $_POST['nombre'];
$comentario= $_POST['comentario'];
$conexion=mysqli_connect("localhost","property","123456","property-deluxe");  
$nombre= mysqli_real_escape_string($conexion,$nombre);
$comentario= mysqli_real_escape_string($conexion,$comentario);
$resultado=mysqli_query($conexion,'INSERT INTO comentario (nomUsuario, comentario) VALUES ("'.$nombre.'", "'.$comentario.'")');
if(!isset($casa)){
    require_once "../Modelo/conexionLogin.php";
    require_once "../Modelo/daoCasa.php";
}else
    require_once "../Modelo/conexionLogin.php";
    require_once "../Modelo/daoCasa.php";
$id= $_GET['idCasa'];
    $dao = new DaoCasa();
    $casa = $dao->listadocasa($id);
    $select = $pdo->query("SELECT * FROM casa WHERE idPropiedad =" . $id);
    $perFila = $select->fetch(PDO::FETCH_ASSOC);

header('Location: ../Vista/verMas.php?idCasa='.$perFila['idPropiedad']); 

?>