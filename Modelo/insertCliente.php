<?php
require_once 'conexionClass.php';

class conClient{
    public function insertar($usuario){
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        $sql = "INSERT INTO usuarios (nombre, correo, username, tel, pass, gen) VALUES (:nom, :mail, :user, :tel, :pass, :gen) ";
  
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->execute((array) $usuario);
            var_dump((array) $usuario);
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }  
}  
?>
