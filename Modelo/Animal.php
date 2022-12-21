<?php
class Animal extends Crud {
    private $id, $nombre, $especie, $raza, $genero, $color, $edad;
    const TABLA = "animal";
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
            $sql = "INSERT INTO" .self::TABLA." (id, nombre, especie, raza,genero,
            color,edad)" .
                    "VALUES (?,?,?,?,?,?,?)";
                
                $stmt = $this->conexion->prepare($sql);
                $stmt->bindParam(1, $this->id);
                $stmt->bindParam(2, $this->nombre);
                $stmt->bindParam(3, $this->especie);
                $stmt->bindParam(3, $this->raza);
                $stmt->bindParam(4, $this->genero);
                $stmt->bindParam(5, $this->color);
                $stmt->bindParam(6, $this->edad);
               
                $stmt->execute();
        
                echo "<span>Los datos de la adopcion se ha INSERTADO correctamente</span>";
            }catch (PDOException $e) {
                echo "<br>No se ha conectado <br>" . $e->getMessage();
            }
        
    }
    function actualizar(){
    
        try{
            $sql = "UPDATE" .self::TABLA." SET 
                nombre=?
                ,especie=?
                ,raza=?
                ,genero=?
                ,color=?
                ,edad=?
                WHERE id=?";
        
                $stmt = $this->conexion->prepare($sql);
                $stmt->bindParam(1, $this->id);
                $stmt->bindParam(2, $this->nombre);
                $stmt->bindParam(3, $this->especie);
                $stmt->bindParam(4, $this->raza);
                $stmt->bindParam(5, $this->genero);
                $stmt->bindParam(6, $this->color);
                $stmt->bindParam(7, $this->edad);
        
                $stmt->execute();
        
                echo "<span>Los datos se han actualizado CORRECTAMENTE <span>";
                
        }catch (PDOException $e) {
            echo "<br>No se ha conectado <br>" . $e->getMessage();
        }
        
    }
}
?>