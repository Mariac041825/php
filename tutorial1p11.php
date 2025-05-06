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
    echo "El nombre ingresado es: ".$nombre . "<br>";

    if (isset($_REQUEST['deportes'])){
        $cantidad_deportes = count($_REQUEST['deportes']);
        echo "La cantidad de deportes que practica es: " . $cantidad_deportes . "<br>";
    }
    else{
        echo "No practica ningun deporte";
    }
    
?>
<br>
<a href="tutorial1p11.php">Regresar al formulario</a>
<br>
<a href="index.php">Regresar pagina inicial</a>
</body>
</body>
</html>