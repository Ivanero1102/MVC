<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Vista.css"/>
    <title>Document</title>
</head>
<body>
    <div class='navigationBar'>
        <img src="../Multimedia/Logo.png">
        <h1>Futuro Animal</h1>
    </div>
    <div class='menu' >
        <form>
            <p><input class='active' type='button' name='botonEnviar' value='Usuarios'></p>
        </form>
        <form action='Index.php' method='post'>
            <input type='hidden' name='pagina' value='2'></input>
            <p><input class='cell_menu' type='submit' name='botonEnviar' value='Animales'></p>
        </form>
        <form action='Index.php' method='post'>
            <input type='hidden' name='pagina' value='3'></input>
            <p><input class='cell_menu' type='submit' name='botonEnviar' value='Apdopciones'></p>
        </form>
    </div>
    <?php
    ?>
</body>
</html>