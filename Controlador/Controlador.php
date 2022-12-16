<?php
include "../Modelo/Conexion.php";
include "../Modelo/Crud.php";
include "../Modelo/Animal.php";
include "../Modelo/Usuario.php";
include "../Modelo/Adopcion.php";

$animal = new Animal();
$usuario = new Usuario();
$adopcion = new Adopcion();

//Mostrar
if(isset($_POST["Mostrar"])){
    $tabla = $_POST['Tabla'];
    if ($tabla=="Usuarios") {
        $mostrar = $animal->obtieneTodos();
    }
    if ($tabla=="Animales") {
        $mostrar = $usuario->obtieneTodos();
    }
    if ($tabla=="Adopciones") {
        $mostrar = $adopcion->obtieneTodos();
    }
    header("location:../Vista/Index.php?Mostrar=$mostrar&Tabla=$tabla");
}

//Crear
if(isset($_POST["Crear"])){
    //Crear Animal
    if ($_POST["Tabla"]=="Animal") {
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
    if (isset($_POST["Tabla"])) {
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
    if (isset($_POST["Tabla"])) {
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

//Editar
if(isset($_POST["Editar"])){
    //Editar Animal
    if (isset($_POST["Tabla"])) {
        // Recibir los datos del formulario
        $animal->__set("id", $_POST['id']);
        $animal->__set("nombre", $_POST['nombre']);
        $animal->__set("especie", $_POST['especie']);
        $animal->__set("raza", $_POST['raza']);
        $animal->__set("genero", $_POST['genero']);
        $animal->__set("color", $_POST['color']);
        $animal->__set("edad", $_POST['edad']);
        // Editar un objeto con los datos del formulario
        $animal->actualizar();
        $msj = "Se ha editado el animal ";
        header("Location:index.php?msj=$msj");
    }

    //Editar usuario
    if (isset($_POST["Tabla"])) {
        // Obtenga los datos del formulario
        $usuario->__set("id", $_POST['id']);
        $usuario->__set("nombre", $_POST['nombre']);
        $usuario->__set("apellido", $_POST['apellido']);
        $usuario->__set("sexo", $_POST['sexo']);
        $usuario->__set("direccion", $_POST['direccion']);
        $usuario->__set("telefono", $_POST['telefono']);
        // Editar un objeto con los datos del formulario
        $usuario->actualizar();
        $msj = "Se ha editado el usuario ";
        header("Location:index.php?msj=$msj");
    }
    
    //Editar adopcion
    if (isset($_POST["Tabla"])) {
        // Obtenga los datos del formulario
        $adopcion->__set("id", $_POST['id']);
        $adopcion->__set("idAnimal", $_POST['idAnimal']);
        $adopcion->__set("idUsuario", $_POST['idUsuario']);
        $adopcion->__set("fecha", $_POST['fecha']);
        $adopcion->__set("razon", $_POST['razon']);
        // Editar un objeto con los datos del formulario
        $adopcion->actualizar();
        $msj = "Se ha editado la adopcion ";
        header("Location:index.php?msj=$msj");
    }
}
?>