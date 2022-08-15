<?php
require_once 'conexionClass.php';

class connCasa{
    public function insertar($casas){
        $cn = new Conn();        
        $dbh = $cn->getConnect();
        $sql = "INSERT INTO casa (nom, direc, precio, depa, descu, fotos) VALUES (:nom, :direc, :precio, :depa, :descu, :fotos) ";
  
        try{
            $stmt = $dbh->prepare($sql);
            $stmt->execute((array) $casas);
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }  
}  
?>