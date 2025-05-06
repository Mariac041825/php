<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nombre = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];
    echo "El nombre ingresado es:".$nombre . "<br>";
    if ($edad<=18){
        echo "Es menor de edad ";
    }
    else{
        echo "Es mayor de edad ";
    }
?>
<br>
<a href="tutorial1p9.php">Regresar al formulario</a>
<br>
<a href="index.php">Regresar pagina inicial</a>
</body>
</html>