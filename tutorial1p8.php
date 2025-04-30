<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema</title>
</head>
<body>
<?php
$valor=rand(1,3);
echo "el valor sorteado es $valor<br>";
if ($valor<=9)
{
    echo "Tiene un digito";
}
else
{
    if ($valor<100)
    {
        echo "tiene 2 digitos";
    }
    else
    {
        echo "tiene 3 digitos";
    }
    if ($valor==3)
{

}
}
?>
</body>
</html>