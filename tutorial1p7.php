<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Solucion t1 punto7</h1>
    <?php
    $valor=rand(1,10);
    echo "El valor sorteado es $valor<br>";
    if ($valor<=5)
    {
    echo "Es menor o igual a 5";
    }
    else
    {
    echo "Es mayor a 5";
    }
    ?>
    <br>
    <a href="index.php">Regresar pagina inicial</a>
</body>
</html>