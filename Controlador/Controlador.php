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

//Formulario Insertar
function formularioInsertar(){
    ?>
    <form action='' method='post'>
    <?php
    if ($_POST["Tabla"]=="Usuarios") {
        $array= array("Id","Nombre","Apellido","Sexo","Direccion", "Telefono");
    }else{
        if ($_POST["Tabla"]=="Animales") {
            $array = array(
                "Id",
                "Nombre",
                "Especie",
                "Raza",
                "Genero",
                "Color",
                "Edad"
            );
        }else{
            $array = array(
                "Id",
                "Id Usuario",
                "Id Animal",
                "Fecha",
                "Razon"
            );
        }
    }
    for ($i=0; $i < count($array); $i++) { 
        echo "<br>
        <label for='".$i."'>".$array[$i].":</label>
        <input type='text' name='".$i."'></br>";
    }
    ?>
    </form>
    <?php
    // <form action='' method='post'>
    //     <input type='hidden' name='pagina' value='3'></input>
    //     <label for='añadir_departamento_id' required>Departamento id:</label>
    //     <input type='number' name='añadir_departamento_id'></br>
    //     <label for='añadir_nombre'>Nombre:</label>
    //     <input type='text' name='añadir_nombre'></br>
    //     <label for='id'>Ubicacion ID:</label>
    //     <select name='añadir_ubicacion_id'>";
    //     $sql= "SELECT * FROM UBICACION";
    //     foreach ($conn->query($sql) as $row){
    //         echo "<option value='". $row["Ubicacion_ID"] ."'>". $row["Ubicacion_ID"] ."</option>";
    //     }
    //     echo "</select></br>
    //     <span><input type='submit' name='añadir_acabado' value='Añadir cliente'></span>
    // </form>
}

//Formulario Editar
function formularioEditar(){

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

    function borrar(){

        if(isset($_POST["borrar"])){
            $tabla= $_REQUEST['Tabla'];
            $id=$_POST['id'];
            $this->tabla->borrar($id);
           
        }

       
    }
}
?>