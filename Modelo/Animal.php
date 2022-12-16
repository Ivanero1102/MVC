<?php
class Animal extends Crud {
    private $id, $nombre, $especie, $raza, $genero, $color, $edad;
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
        
    }
    function actualizar(){
        
    }
}
?>