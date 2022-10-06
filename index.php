<?php
    session_start();

    if(!isset($_SESSION["libros"])) {
        $_SESSION["libros"] = [];
    }

    if(!isset($_SESSION["socios"])) {
        $_SESSION["socios"] = [];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Biblioteca</h1>

    <ul>
        <li><a href="php/libro/libros.php">Libros</a></li>
        <li><a href="php/socio/socios.php">Socios</a></li>
    </ul>
</body>
</html>