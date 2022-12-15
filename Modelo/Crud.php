<?php
abstract class Crud extends Conexion{
private $tabla;
private $conexion;

function __construct($tabla){
    $this->tabla = $tabla;
    $this->conexion = parent::realizaConexion();
}
function __get($variable){
    return $this->$variable;
}
function __set($variable, $almacen){
    $this->$variable = $almacen;
}
function obtieneTodos(){
    
}

function obtieneDeID(){
    
}

function borrar(){

}

abstract function crear();
abstract function actualizar();
}
?>