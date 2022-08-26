<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/verMas.css">
    <script src="../js/VerMas.js"></script>
    <title>Ver mas</title>
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
                
                <?php
                session_start();
                if (isset($_SESSION['usuarioo'])){
                ?>

                  <a class='nav-link active' aria-current='page' href='../indexusuario.php?id=<?php echo $_SESSION['id'];?>'>Inicio</a>
                <?php  }else{
                  ?><a class='nav-link active' aria-current='page' href='../index.html'>Inicio</a>
                <?php }
                
                ?>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Servicios</a>
              </li>
              <li class="nav-item">
              <?php
                if (isset($_SESSION['usuarioo'])){
                ?>

                <a class="nav-link" href="catalogo.php?id=<?php echo $_SESSION['id'];?>">Explorar</a>
                <?php  }else{
                  ?><a class="nav-link" href="catalogo.php">Explorar</a>
                <?php }
                
                ?>
                
              </li>
              <li class="nav-item">
              <?php
                if (isset($_SESSION['usuarioo'])){
                ?>

                <a class="nav-link" href="../cerrarsesion.php">Cerrar Sesión</a>
                <?php  }else{
                  ?><a class="nav-link" href="form.php">Cuenta</a>
                <?php }
                
                ?>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <?php
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
    echo "<br><h1>".$perFila['nom']."</h1>";
    echo '<hr><hr>';

    $conn= mysqli_connect('localhost', 'property', '123456', 'property-deluxe' );
    $query = "SELECT * FROM imagenes WHERE id_Pro = ". $id;
    $query2 = "SELECT * FROM casa WHERE idPropiedad = ". $id;
    $result2 = $conn->query($query2);
    $row2 = $result2->fetch_assoc();

    echo "<br><p class='info'><b>Dirección: </b>".$perFila['direc']. "</p> <p class='info'><b>Precio:</b> $".$perFila['precio']. "<b> Departamento: </b>".$perFila['depa'].'</p><br>';
    ?>
     <a class="compra" href="compra.php?idCasa=<?php echo $row['idPropiedad'];?>">Compra ya!</a>        <?php
    echo "<div class='verMas'>";
    echo "<div class='slideshow-container'>";
    echo "<div class='mySlides2'>";?>
    <img src="../portada/<?php echo $row2["foto"] ;?>" alt="Image">
    <?php echo "</div>";

    if ($result = $conn->query($query)) {
    
    while ($row = $result->fetch_assoc()){
    ?>
    
    <div class="mySlides1">
    <img src="../upload/<?php echo $row["image"] ;?>" alt="Image">
    </div>
    

    
<?php
    
    }
    echo "<a class='prev' onclick='plusSlides(-1, 0)'>&#10094;</a>";
    echo "<a class='next' onclick='plusSlides(1, 0)'>&#10095;</a>";
    echo "</div>";
    echo "</div>";
    echo "<div class='infoBox'>";
    echo "<p class='info'><b >Descripcion: </b>".$perFila['descu'].'</p>';
    
    echo "</div>";
    
}
$result->free();
?>
 <form method="POST" action="./php/enviarcomentario.php">
          <section id="contact">
            <div class="container px-4">
              <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                <div class="col-xs-12">
         <h3>¡Haz un Comentario!</h3>

       <br>
        <div class="form-group">
        <label for="nombre" class="form-label">Nombre</label>
        <input class="form-control" name="nombre" type="text" id="nombre" placeholder="Escribe tu nombre" required >
      </div>
                        
            <br>
            <div class="form-group">
            <label for="comentario" class="form-label">Comentario:</label>
             <textarea class="form-control" name="comentario" cols="30" rows="5" type="text" id="comentario" 
                placeholder="Escribe tu comentario......"></textarea>
               </div>
             <br>
             <input class="btn" type="submit"  value="Enviar Comentario">
            <br>
         <br>
             <br>
             <?php

$conexion=mysqli_connect("localhost","property","123456","property-deluxe"); 
$resultado= mysqli_query($conexion, 'SELECT * FROM comentario');

while($comentario = mysqli_fetch_object($resultado)){
    ?>
    <b><?php echo($comentario->nomUsuario);  ?></b> Ha comentado: 
    <br />
    <?php echo ($comentario->comentario);?>
    <br />
    <hr />

    <?php
}

?> 
                         
   </form>             
    </div>           
  </section>
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
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>
</html>