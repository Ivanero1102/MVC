<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Vista.css"/>
    <script src="Vista.js" defer></script>
    <title>Document</title>
</head>
<body>
    <div class='navigationBar'>
        <img src="../Multimedia/Logo.png">
        <h1>Futuro Animal</h1>
    </div>
        <?php
        if(isset($_REQUEST['Tabla'])){
            $tabla = $_REQUEST['Tabla'];
        }else{
            $tabla = "Usuarios";
        }
    ?>
    </script>
    <div class='menu'>
        <form action='../Controlador/Controlador.php' method='post'>
            <input type='hidden' name='Mostrar'></input>
            <p><input class='active' type='submit' name='Tabla' value='Usuarios'></p>
        </form>
        <form action='../Controlador/Controlador.php' method='post'> 
            <input type='hidden' name='Mostrar'></input>
            <p><input class='cell_menu' type='submit' name='Tabla' value='Animales'></p>
        </form>
        <form action='../Controlador/Controlador.php' method='post'>
            <input type='hidden' name='Mostrar'></input>
            <p><input class='cell_menu' type='submit' name='Tabla' value='Adopciones'></p>
        </form>
    </div>
<div>
    <?php
    if(isset($_GET["Mostrar"])){
        if($tabla == "Usuarios"){
            ?>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Sexo</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th colspan='2'><form action='' method='post'>
                    <input type='hidden' name='pagina' value='3'></input>
                    <span><input type='submit' name='añadir' value='+' style='font-size: 40px; font-weight:25px'></span>
                    </form>
                    </th>
        <?php
        var_dump($_GET["Mostrar"]);
        foreach ($_GET["Mostrar"] as $row){
            echo "<tr><td>".$row[0]."</td>
                <td>".$row[1]."</td>
                <td>".$row[2]."</td>
                <td>".$row[3]."</td>
                <td>".$row[4]."</td>
                <td>".$row[5]."</td>
                <td><form action='' method='post'>
                <span><input type='submit' name='borrar' value='🗑'></span>
                </form></td>
                <td><form action='' method='post'>
                <span><input type='submit' name='editar' value='🖉' style='font-size: 20px; font-weight:25px'></span>
                </form></td></tr>";
        }
        }else{
            if($tabla == "Animales"){
                ?>
                <table>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Raza</th>
                    <th>Genero</th>
                    <th>Color</th>
                    <th>Edad</th>
                    <th colspan='2'><form action='' method='post'>
                    <input type='hidden' name='pagina' value='3'></input>
                    <span><input type='submit' name='añadir' value='+' style='font-size: 40px; font-weight:25px'></span>
                    </form>
                    </th>
                <?php
                print_r($_GET["Mostrar"]);
                foreach ($_GET["Mostrar"] as $row => $indice){
                    echo "<tr><td>".$row[0]."</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                        <td>".$row[3]."</td>
                        <td>".$row[4]."</td>
                        <td>".$row[5]."</td>
                        <td>".$row[6]."</td>
                        <td><form action='' method='post'>
                        <span><input type='submit' name='borrar' value='🗑'></span>
                        </form></td>
                        <td><form action='' method='post'>
                        <span><input type='submit' name='editar' value='🖉' style='font-size: 20px; font-weight:25px'></span>
                        </form></td></tr>";
                }
            }else{
                ?>
                <table>
                <tr>
                    <th>Id</th>
                    <th>Id animal</th>
                    <th>Id usuario</th>
                    <th>Fecha</th>
                    <th>Razon</th>
                    <th colspan='2'><form action='' method='post'>
                    <input type='hidden' name='pagina' value='3'></input>
                    <span><input type='submit' name='añadir' value='+' style='font-size: 40px; font-weight:25px'></span>
                    </form>
                    </th>
                </tr>
                <?php
                print_r($_GET["Mostrar"]);
                foreach ($_GET["Mostrar"] as $row){
                    echo "<tr><td>".$row[0]."</td>
                        <td>".$row[1]."</td>
                        <td>".$row[2]."</td>
                        <td>".$row[3]."</td>
                        <td>".$row[4]."</td>
                        <td><form action='' method='post'>
                        <span><input type='submit' name='borrar' value='🗑'></span>
                        </form></td>
                        <td><form action='' method='post'>
                        <span><input type='submit' name='editar' value='🖉' style='font-size: 20px; font-weight:25px'></span>
                        </form></td></tr>";
                }
            }
        }
    }
    ?>
        </table>
    </div>
    <!-- <table class='alineador'>";
        <tr>
            <th>departamento_ID</th>
            <th>Nombre</th>
            <th>Ubicacion_ID</th>
            <th colspan='2'><form action='' method='post'>
            <input type='hidden' name='pagina' value='3'></input>
            <span><input type='submit' name='añadir' value='+' style='font-size: 40px; font-weight:25px'></span>
            </form>
            </th>
        </tr>

            $sql= "SELECT * FROM DEPARTAMENTO";
            foreach ($conn->query($sql) as $row){
            echo "<tr><td>".$row["departamento_ID"]."</td>
                <td>".$row["Nombre"]."</td>
                <td>".$row["Ubicacion_ID"]."</td>
                <td><form action='' method='post'>
                <span><input type='submit' name='borrar' value='🗑'></span>
                </form></td>
                <td><form action='' method='post'>
                <span><input type='submit' name='editar' value='🖉' style='font-size: 20px; font-weight:25px'></span>
                </form></td></tr>";
            }
        </table>
    </div>"; -->
</body>
</html>