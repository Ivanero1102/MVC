<?php
class Adopcion extends Crud {
    private $id, $idAnimal, $idUsuario, $fecha, $razon, $conexion;
    const TABLA = "adopcion";
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

        try{ $sql = "INSERT INTO" .self::TABLA." (id, idAnimal, idUsuario, fecha,razon,)" .
            "VALUES (?,?,?,?,?)";
        
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(1, $this->id);
        $stmt->bindParam(2, $this->idAnimal);
        $stmt->bindParam(3, $this->idUsuario);
        $stmt->bindParam(4, $this->fecha);
        $stmt->bindParam(5, $this->razon);
        
        $stmt->execute();

        echo "<span>Los datos de la adopcion se ha INSERTADO correctamente</span>";
    }catch (PDOException $e) {
        echo "<br>No se ha conectado <br>" . $e->getMessage();
    }

    }
    function actualizar(){

        try{
            $sql = "UPDATE" .self::TABLA." SET 
                id=?
                ,nombre=?
                ,especie=?
                ,raza=?
                ,genero=?
                ,color=?
                ,edad=?
                ,created_at=?
                ,updated_atCredito=?;";
        
                $stmt = $this->conexion->prepare($sql);
                $stmt->bindParam(1, $this->id);
                $stmt->bindParam(2, $this->idAnimal);
                $stmt->bindParam(3, $this->idusuario);
                $stmt->bindParam(4, $this->fecha);
                $stmt->bindParam(5, $this->razon);
                
                $stmt->execute();
        
                echo "<span>Los datos se han actualizado CORRECTAMENTE <span>";
        }catch (PDOException $e) {
            echo "<br>No se ha conectado <br>" . $e->getMessage();
        }
        
    }
}
?>