<?php
include "Conexion.php";
include "Crud.php";
include "Animales.php";
include "Usuario.php";
include "Adopciones.php";

$usuario = new Usuario();
$animal = new Animal();
$adopcion = new Adopcion();

//Crear
if(isset($_POST["Crear"])){
    //Crear Animal
    if (isset($_POST["Animal"])) {
        // Recibir los datos del formulario
        $animal->__set("id", $_POST['id']);
        $animal->__set("nombre", $_POST['nombre']);
        $animal->__set("especie", $_POST['especie']);
        $animal->__set("raza", $_POST['raza']);
        $animal->__set("genero", $_POST['genero']);
        $animal->__set("color", $_POST['color']);
        $animal->__set("edad", $_POST['edad']);
        // Crear un objeto con los datos del formulario
        $animal->crear();
        $msj = "Se ha creado el animal ";
        header("Location:index.php?msj=$msj");
    }

    //Crear usuario
    if (isset($_POST["Usuario"])) {
        // Obtenga los datos del formulario
        $usuario->__set("id", $_POST['id']);
        $usuario->__set("nombre", $_POST['nombre']);
        $usuario->__set("apellido", $_POST['apellido']);
        $usuario->__set("sexo", $_POST['sexo']);
        $usuario->__set("direccion", $_POST['direccion']);
        $usuario->__set("telefono", $_POST['telefono']);
        // Crear un objeto con los datos del formulario
        $usuario->crear();
        $msj = "Se ha creado el usuario ";
        header("Location:index.php?msj=$msj");
    }
    
    //Crear adopcion
    if (isset($_POST["Adopcion"])) {
        // Obtenga los datos del formulario
        $adopcion->__set("id", $_POST['id']);
        $adopcion->__set("idAnimal", $_POST['idAnimal']);
        $adopcion->__set("idUsuario", $_POST['idUsuario']);
        $adopcion->__set("fecha", $_POST['fecha']);
        $adopcion->__set("razon", $_POST['razon']);
        // Crear un objeto con los datos del formulario
        $adopcion->crear();
        $msj = "Se ha creado la adopcion ";
        header("Location:index.php?msj=$msj");
    }
}
?>