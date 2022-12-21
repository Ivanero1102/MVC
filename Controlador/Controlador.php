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
//Formularios
function formulario($tabla){
    //Formulario Insertar
    if(isset($_POST['Enviar'])){
        ?>
        <form action='Index.php' method='post'>
            <input type='hidden' name='Tabla' value='<?php echo $tabla ?>'></input>
        <?php
        if ($tabla=="Usuarios") {
            $arraySolicitud= array("Id","Nombre","Apellido","Sexo","Direccion", "Telefono");
            $arrayTipo = array("number", "text", "text", "text", "text", "text");
        }else{
            if ($tabla=="Animales") {
                $arraySolicitud = array("Id","Nombre","Especie","Raza","Genero","Color","Edad");
                $arrayTipo = array("number", "text", "text", "text", "text", "text", "number");
            }else{
                $arraySolicitud = array("Id","Id Usuario","Id Animal","Fecha","Razon");
                $arrayTipo = array("number", "number", "number", "text", "text");
            }
        }
        for ($i=0; $i < count($arraySolicitud); $i++) { 
            echo "<br>
            <label for='".$i."'>".$arraySolicitud[$i].":</label>
            <input type='".$arrayTipo[$i]."' name='".$i."'></br>";
        }
        ?>
            <span><input type='submit' name='Añadir' value='Añadir'></span>
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
    if(isset($_POST['Editar'])){
        ?>
        <form action='Index.php' method='post'>
            <input type='hidden' name='Tabla' value='<?php echo $tabla ?>'></input>
        <?php
        if ($tabla=="Usuarios") {
            $arraySolicitud= array("Id","Nombre","Apellido","Sexo","Direccion", "Telefono");
            $arrayTipo = array("number", "text", "text", "text", "text", "text");
        }else{
            if ($tabla=="Animales") {
                $arraySolicitud = array("Id","Nombre","Especie","Raza","Genero","Color","Edad");
                $arrayTipo = array("number", "text", "text", "text", "text", "text", "number");
            }else{
                $arraySolicitud = array("Id","Id Usuario","Id Animal","Fecha","Razon");
                $arrayTipo = array("number", "number", "number", "text", "text");
            }
        }
        for ($i=0; $i < count($arraySolicitud); $i++) { 
            echo "<br>
            <label for='".$i."'>".$arraySolicitud[$i].":</label>
            <input type='".$arrayTipo[$i]."' name='".$i."'></br>";
        }
        ?>
            <span><input type='submit' name='Añadir' value='Añadir'></span>
        </form>
        <?php
    }
}

//Crear
function crear($tabla){
    if(isset($_POST["Crear"])){
        //Crear Animal
        if ($tabla=="Animal") {
            // Recibir los datos del formulario
            $this->animal->__set("id", $_POST[0]);
            $this->animal->__set("nombre", $_POST[1]);
            $this->animal->__set("especie", $_POST[2]);
            $this->animal->__set("raza", $_POST[3]);
            $this->animal->__set("genero", $_POST[4]);
            $this->animal->__set("color", $_POST[5]);
            $this->animal->__set("edad", $_POST[6]);
            // Crear un objeto con los datos del formulario
            $this->animal->crear();
            $msj = "Se ha creado el animal ";
            header("Location:index.php?msj=$msj");
        }

        //Crear usuario
        if ($tabla=="usuario") { 
            // Obtenga los datos del formulario
            $this->usuario->__set("id", $_POST[0]);
            $this->usuario->__set("nombre", $_POST[1]);
            $this->usuario->__set("apellido", $_POST[2]);
            $this->usuario->__set("sexo", $_POST[3]);
            $this->usuario->__set("direccion", $_POST[4]);
            $this->usuario->__set("telefono", $_POST[5]);
            // Crear un objeto con los datos del formulario
            $this->usuario->crear();
            $msj = "Se ha creado el usuario ";
            header("Location:index.php?msj=$msj");
        }
        
        //Crear adopcion
        if ($tabla=="adopcion") { 
            // Obtenga los datos del formulario
            $this->adopcion->__set("id", $_POST[0]);
            $this->adopcion->__set("idAnimal", $_POST[1]);
            $this->adopcion->__set("idUsuario", $_POST[2]);
            $this->adopcion->__set("fecha", $_POST[3]);
            $this->adopcion->__set("razon", $_POST[4]);
            // Crear un objeto con los datos del formulario
            $this->adopcion->crear();
            $msj = "Se ha creado la adopcion ";
            header("Location:index.php?msj=$msj");
        }
    }
}

//Editar
function editar($tabla){
    if(isset($_POST["Editar"])){
        //Editar Animal
        if ($tabla=="Animal") { 
            // Recibir los datos del formulario
            $this->animal->__set("id", $_POST[0]);
            $this->animal->__set("nombre", $_POST[1]);
            $this->animal->__set("especie", $_POST[2]);
            $this->animal->__set("raza", $_POST[3]);
            $this->animal->__set("genero", $_POST[4]);
            $this->animal->__set("color", $_POST[5]);
            $this->animal->__set("edad", $_POST[6]);
            // Editar un objeto con los datos del formulario
            $this->animal->actualizar();
            $msj = "Se ha editado el animal ";
            header("Location:index.php?msj=$msj");
        }

        //Editar usuario
        if ($tabla=="usuario") { 
            // Obtenga los datos del formulario
            $this->usuario->__set("id", $_POST[0]);
            $this->usuario->__set("nombre", $_POST[1]);
            $this->usuario->__set("apellido", $_POST[2]);
            $this->usuario->__set("sexo", $_POST[3]);
            $this->usuario->__set("direccion", $_POST[4]);
            $this->usuario->__set("telefono", $_POST[5]);
            // Editar un objeto con los datos del formulario
            $this->usuario->actualizar();
            $msj = "Se ha editado el usuario ";
            header("Location:index.php?msj=$msj");
        }
        
        //Editar adopcion
        if ($tabla=="adopcion") { 
            // Obtenga los datos del formulario
            $this->adopcion->__set("id", $_POST[0]);
            $this->adopcion->__set("idAnimal", $_POST[1]);
            $this->adopcion->__set("idUsuario", $_POST[2]);
            $this->adopcion->__set("fecha", $_POST[3]);
            $this->adopcion->__set("razon", $_POST[4]);
            // Editar un objeto con los datos del formulario
            $this->adopcion->actualizar();
            $msj = "Se ha editado la adopcion ";
            header("Location:index.php?msj=$msj");
        }
    }
    }

    function borrar($tabla){

        if(isset($_POST["borrar"])){
            $id=$_POST['id'];
            $this->tabla->borrar($id);
           
        }

       
    }
}
?>