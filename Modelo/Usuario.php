<?php
class Usuario extends Crud {
    private $id, $nombre, $apellido, $sexo, $direccion, $telefono, $conexion;
    const TABLA = "usuarios";
    function __construct(){
        parent::__construct(self::TABLA);
        $this->conexion = parent::realizaConexion();
    }
    function __get($variable){
        return $this->$variable;
    }
    function __set($variable, $almacen){
        $this->$variable = $almacen;
    }
    function crear(){
        try{
            $sql = "INSERT INTO" .self::TABLA." (id, nombre, apellido, sexo,direccion,
        telefono)" .
                "VALUES (?,?,?,?,?,?)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $this->id);
            $stmt->bindParam(2, $this->nombre);
            $stmt->bindParam(3, $this->apellido);
            $stmt->bindParam(4, $this->sexo);
            $stmt->bindParam(5, $this->direccion);
            $stmt->bindParam(6, $this->telefono);
        
           
            $stmt->execute();
    
            echo "<span>Los datos del usuario se ha INSERTADO correctamente</span>";
        }catch (PDOException $e) {
                echo "<br>No se ha conectado <br>" . $e->getMessage();
            }

    }
    function actualizar(){
        try{

            $sql = "UPDATE" .self::TABLA." SET 
            nombre=?
            ,apellido=?
            ,sexo=?
            ,direccion=?
            ,telefono=?
            WHERE id=?";
        
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $this->id);
            $stmt->bindParam(2, $this->nombre);
            $stmt->bindParam(3, $this->apellido);
            $stmt->bindParam(4, $this->sexo);
            $stmt->bindParam(5, $this->direccion);
           
            $stmt->execute();
        
            echo "<span>Los datos se han actualizado CORRECTAMENTE <span>";
        
        }catch (PDOException $e) {
            echo "<br>No se ha conectado <br>" . $e->getMessage();
        }
        
    }
}
?>