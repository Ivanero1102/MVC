<?php
class Usuario extends Crud {
    private $id, $nombre, $apellido, $sexo, $direccion, $telefono, $edad, $conexion;
    const TABLA = "usuarios";
    function __construct($id, $nombre, $apellido, $sexo, $direccion, $telefono, $edad){
        parent::__construct(self::TABLA);
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->edad = $edad;
        // $this->conexion = parent::__get(conexion);
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