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
        include "../Controlador/Controlador.php";
        $controlador = new Controlador();
        if(isset($_REQUEST['Tabla'])){
            $tabla = $_REQUEST['Tabla'];
        }else{
            $tabla = "Usuarios";
        }
    ?>
    </script>
    <div class='menu'>
        <form action='' method='post'>
            <input type='hidden' name='Mostrar'></input>
            <p><input class='active' type='submit' name='Tabla' value='Usuarios'></p>
        </form>
        <form action='' method='post'> 
            <input type='hidden' name='Mostrar'></input>
            <p><input class='cell_menu' type='submit' name='Tabla' value='Animales'></p>
        </form>
        <form action='' method='post'>
            <input type='hidden' name='Mostrar'></input>
            <p><input class='cell_menu' type='submit' name='Tabla' value='Adopciones'></p>
        </form>
    </div>
    <?php
    // if(isset($_REQUEST["Mostrar"])){
    //     if($tabla == "Usuarios"){
    //         $mostrar = $controlador->mostrar("Usuarios");
    //         $mostrar = get_object_vars($mostrar);
    //         var_dump( $mostrar );
    //         foreach ($mostrar as $key=>$row){
    //             echo "<tr><td>".$row[0]."</td>
    //                 <td>".$row[1]."</td>
    //                 <td>".$row[2]."</td>
    //                 <td>".$row[3]."</td>
    //                 <td>".$row[4]."</td>
    //                 <td>".$row[5]."</td>
    //                 <td><form action='' method='post'>
    //                 <span><input type='submit' name='borrar' value='🗑'></span>
    //                 </form></td>
    //                 <td><form action='' method='post'>
    //                 <span><input type='submit' name='editar' value='🖉' style='font-size: 20px; font-weight:25px'></span>
    //                 </form></td></tr>";
    //         }
    //     }
    // }
            ?>
</body>
</html>