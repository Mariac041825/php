<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=rand(1,100);
    echo "el numero es : ",$num,"<br>";
    if ($num<=50)
    {
        echo"el numero es menor o igual que 50";
    }
    else
    {
        echo "el numero mayor a 50";
    }
    ?>
</body>
</html>