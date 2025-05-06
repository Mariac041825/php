<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Solucion t1 punto4-1 </h1>
    <?php
    $num=rand(1,1000);
    echo "El numero es ", $num , "<br>";
    if ($num<=50)
    {
    echo "El numero es menor o igual a 50";
    }
    else
    {
    echo "El numero es Mayor a 50";
    }
    ?>
    <br>
    <a href="index.php">Regresar pagina inicial</a>
</body>
</html>