<?php
include "../Modelo/Conexion.php";
include "../Modelo/Crud.php";
include "../Modelo/Animal.php";
include "../Modelo/Usuario.php";
include "../Modelo/Adopcion.php";
class Controlador{
    private $animal;
    private $usuario;
    private $adopcion;
    function __construct(){
        $this->animal = new Animal(); 
        $this->usuario = new Usuario(); 
        $this->adopcion = new Adopcion(); 
    }

//Mostrar
function mostrar($tabla){
        if ($tabla=="Usuarios") {
            $mostrar = $this->animal->obtieneTodos();
        }
        if ($tabla=="Animales") {
            $mostrar = $this->usuario->obtieneTodos();
        }
        if ($tabla=="Adopciones") {
            $mostrar = $this->adopcion->obtieneTodos();
        }
    return $mostrar;
}

//Crear
function crear(){
    if(isset($_POST["Crear"])){
        //Crear Animal
        if ($_POST["Tabla"]=="Animal") {
            // Recibir los datos del formulario
            $this->animal->__set("id", $_POST['id']);
            $this->animal->__set("nombre", $_POST['nombre']);
            $this->animal->__set("especie", $_POST['especie']);
            $this->animal->__set("raza", $_POST['raza']);
            $this->animal->__set("genero", $_POST['genero']);
            $this->animal->__set("color", $_POST['color']);
            $this->animal->__set("edad", $_POST['edad']);
            // Crear un objeto con los datos del formulario
            $this->animal->crear();
            $msj = "Se ha creado el animal ";
            header("Location:index.php?msj=$msj");
        }

        //Crear usuario
        if ($_POST["Tabla"]=="usuario") { 
            // Obtenga los datos del formulario
            $this->usuario->__set("id", $_POST['id']);
            $this->usuario->__set("nombre", $_POST['nombre']);
            $this->usuario->__set("apellido", $_POST['apellido']);
            $this->usuario->__set("sexo", $_POST['sexo']);
            $this->usuario->__set("direccion", $_POST['direccion']);
            $this->usuario->__set("telefono", $_POST['telefono']);
            // Crear un objeto con los datos del formulario
            $this->usuario->crear();
            $msj = "Se ha creado el usuario ";
            header("Location:index.php?msj=$msj");
        }
        
        //Crear adopcion
        if ($_POST["Tabla"]=="adopcion") { 
            // Obtenga los datos del formulario
            $this->adopcion->__set("id", $_POST['id']);
            $this->adopcion->__set("idAnimal", $_POST['idAnimal']);
            $this->adopcion->__set("idUsuario", $_POST['idUsuario']);
            $this->adopcion->__set("fecha", $_POST['fecha']);
            $this->adopcion->__set("razon", $_POST['razon']);
            // Crear un objeto con los datos del formulario
            $this->adopcion->crear();
            $msj = "Se ha creado la adopcion ";
            header("Location:index.php?msj=$msj");
        }
    }
}

//Editar
function editar(){
    if(isset($_POST["Editar"])){
        //Editar Animal
        if ($_POST["Tabla"]=="Animal") { 
            // Recibir los datos del formulario
            $this->animal->__set("id", $_POST['id']);
            $this->animal->__set("nombre", $_POST['nombre']);
            $this->animal->__set("especie", $_POST['especie']);
            $this->animal->__set("raza", $_POST['raza']);
            $this->animal->__set("genero", $_POST['genero']);
            $this->animal->__set("color", $_POST['color']);
            $this->animal->__set("edad", $_POST['edad']);
            // Editar un objeto con los datos del formulario
            $this->animal->actualizar();
            $msj = "Se ha editado el animal ";
            header("Location:index.php?msj=$msj");
        }

        //Editar usuario
        if ($_POST["Tabla"]=="usuario") { 
            // Obtenga los datos del formulario
            $this->usuario->__set("id", $_POST['id']);
            $this->usuario->__set("nombre", $_POST['nombre']);
            $this->usuario->__set("apellido", $_POST['apellido']);
            $this->usuario->__set("sexo", $_POST['sexo']);
            $this->usuario->__set("direccion", $_POST['direccion']);
            $this->usuario->__set("telefono", $_POST['telefono']);
            // Editar un objeto con los datos del formulario
            $this->usuario->actualizar();
            $msj = "Se ha editado el usuario ";
            header("Location:index.php?msj=$msj");
        }
        
        //Editar adopcion
        if ($_POST["Tabla"]=="adopcion") { 
            // Obtenga los datos del formulario
            $this->adopcion->__set("id", $_POST['id']);
            $this->adopcion->__set("idAnimal", $_POST['idAnimal']);
            $this->adopcion->__set("idUsuario", $_POST['idUsuario']);
            $this->adopcion->__set("fecha", $_POST['fecha']);
            $this->adopcion->__set("razon", $_POST['razon']);
            // Editar un objeto con los datos del formulario
            $this->adopcion->actualizar();
            $msj = "Se ha editado la adopcion ";
            header("Location:index.php?msj=$msj");
        }
    }
    }

    //borrado
    function borrardo(){
        
        if(isset($_POST["borrar"])){
            $tabla= $_REQUEST['Tabla'];
            $id=$_POST['id'];
            $this->tabla->borrar($id);
            $msj = "Se ha borrado ".$tabla." con id: ".$id;
            header("Location:index.php?msj=$msj");
        }

       
    }
}
?>