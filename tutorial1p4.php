<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dia=date("d/m/Y h:i:s");
    if ($dia<=10)
    {
        echo"sitio activo";
    }
    else
    {
        echo"sitio fuera de servicio";
    }


    ?>
    
</body>
</html>