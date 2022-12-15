<?php
include "Conexion.php";
include "Crud.php";
include "Animales.php";
include "Usuario.php";
include "adopciones.php";

class Controlador
{

    public function obtieneUsuarios()
    {
        return $this->usuario->obtieneTodos();
    }

    public function crearAnimal()
    {

        if (isset($_POST["crear"])) {

            // Recibir los datos del formulario
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $especie = $_POST["especie"];
            $genero = $_POST["genero"];
            $raza = $_POST["raza"];
            $color = $_POST["color"];
            $edad = $_POST["edad"];
            // Crear un objeto con los datos del formulario
            $animales = new Animales($id, $nombre, $especie, $raza, $genero, $color, $edad);
            $animales->crear();
            $msj = "Se ha creado el animal ";
            header("Location:index.php?msj=$msj");
        }
    }

    public function crearUsuario()
    {

        if (isset($_POST["usuario"])) {

            // Obtenga los datos del formulario
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $sexo = $_POST['sexo'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];

            // Crear un objeto con los datos del formulario
            $usuario = new Usuario($id, $nombre, $apellido, $sexo, $direccion, $telefono);
            $usuario->crear();
            $msj = "Se ha creado el Usuario ";
            header("Location:index.php?msj=$msj");
        }
    }

    public function crearAdopcion()
    {

        if (isset($_POST["adopcion"])) {

            // Obtenga los datos del formulario
            $id = $_POST['id'];
            $idAnimal = $_POST['idAnimal'];
            $idUsuario = $_POST['idUsuario'];
            $fecha = $_POST['fecha'];
            $razon = $_POST['razon'];
            // Crear un objeto con los datos del formulario
            $adopcion = new Adopciones($id, $idAnimal, $idUsuario, $fecha, $razon);
            $adopcion->crear();
            $msj = "Se ha creado la adopcion ";
            header("Location:index.php?msj=$msj");
        }
    }
}


$controlador = new Controlador();
$controlador->crearAnimal();
$controlador->crearUsuario();
$controlador->crearAdopcion();
?>