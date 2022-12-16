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
    
        function borrar(){
        
         

                // $sql = "SELECT COUNT(*) AS 'id_cliente' FROM CLIENTE WHERE CLIENTE_ID ='" . $_POST['id_clienteB'] . "';";
                // $result = $conn->query($sql);
                // $borrar = $result->fetch();
        
                // if ($borrar['id_cliente'] > 0) {
                //     $sql = "DELETE FROM CLIENTE WHERE CLIENTE_ID=:idb;";
                //     $stmt = $conn->prepare($sql);
                //     $stmt->bindParam(':idb', $_POST['id_clienteB']);
                //     $stmt->execute();
                //     $registros = $stmt->fetch(PDO::FETCH_ASSOC);
        
                //     echo "<span>El ID CLIENTE se ha eliminado correctamente</span>";
        
                // } else {
                //     echo "<span>El ID CLIENTE que queremos borrar NO existe en la BD</span>";
                // }
    
        }
    
        abstract function crear();
        abstract function actualizar();
    }
?>