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
        header("location:Index.php?alerta=No se pudo acceder");
    }
    $controlador->formulario($tabla);
?>
</body>
</html>