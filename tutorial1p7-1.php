<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Solucion t1 punto7-1</h1>
    <?php
    $valor=rand(1,100);
    echo "El valor sorteado es $valor<br>";
    if ($valor<=9)
    {
    echo "Tiene un dígito";
    }
    else
    {
        if ($valor<100)
        {
        echo "Tiene 2 dígitos";
        }
        else
        {
        echo "Tiene 3 dígitos";
        }
    }
    ?>
    <br>
    <a href="index.php">Regresar pagina inicial</a>
</body>
</html>