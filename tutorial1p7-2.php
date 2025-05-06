<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Solucion t1 punto7_2</h1>
    <?php
    $valor=rand(1,3);

    if ($valor==3)
    {
    echo "El string es tres <br>";
    }
    else
    {
        if ($valor==2)
        {
        echo "El string es dos <br>";
        }
        else
        {
        echo "El string es uno <br>";
        }
    }
    ?>
    <br>
    <a href="index.php">Regresar pagina inicial</a>
</body>
</html>