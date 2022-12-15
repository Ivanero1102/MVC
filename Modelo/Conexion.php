<?php
class Conexion{
    
    protected function realizaConexion(){
        $server = "localhost";
        $user = "root";
        $clave= "";
        $BD="protectora_animales";
        try {
        $conn = new PDO("mysql:host=".$this->server.";dbname=".$this->BD.", ".$this->user.", ". $this->clave);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexion exitosa";
        return $conn;
        }catch(PDOException $e){
            echo "Conexion fallida". $e->getMessage();
        }
    }
}
?>