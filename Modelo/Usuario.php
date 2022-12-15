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

    }
    function actualizar(){
        
    }
}
?>