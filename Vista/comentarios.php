<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Comentarios</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/es.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
      <?php
      $conn= mysqli_connect('localhost', 'property', '123456', 'property-deluxe' );
      $query = "SELECT * FROM casa";
      
      if ($result = $conn->query($query) ) {
          while ($row = $result->fetch_assoc()){
          
      ?>
         
        <form method="POST" action="../Controlador/controlComentario.php?idCasa=<?php echo $row['idPropiedad'];?>">Deja de tu reseña!</a><?php
        ?>
      <?php
        }
      }
      ?>
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
    </body>
</html>
