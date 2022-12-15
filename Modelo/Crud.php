<?php
    abstract class Crud extends Conexion{
        private $tabla;
        private $conexion;
    
        function __construct($tabla){
            $this->tabla = $tabla;
            $this->conexion = parent::realizaConexion();
        }
    
        function obtieneTodos(){
            $sql = "SELECT * FROM ". $this->tabla.";";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    
        function obtieneDeID($id){
            $sql = "SELECT * FROM $this->tabla WHERE id = ? ;";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(1,$id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
    
        // function borrar(){
    
        // }
    
        // abstract function crear();
        // abstract function actualizar();
    }
?>