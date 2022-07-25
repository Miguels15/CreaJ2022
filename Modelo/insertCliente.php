<?php
require_once 'conexionClass.php';

class conClient{
    public function insertar($usuarios){
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        $sql = "INSERT INTO usuarios (nombre, correo, username, tel, pass, gen) VALUES (:nombre, :correo, :username, :tel, :pass, :gen) ";
  
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->execute((array) $usuarios);
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }  
}  
?>
