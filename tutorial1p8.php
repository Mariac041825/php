<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Solucion t1 punto8</h1>
    <h2>Tabla de multiplicar con For</h2>
<?php
for($f=2;$f<=20;$f=$f+2)
{
    echo $f;
    echo "<br>";
}
?>
<h2>Tabla de multiplicar con While</h2>
<?php
$inicio=2;
while($inicio<=20)
{
    echo $inicio;
    echo "<br>";
$inicio+=2;
}
?>
<h2>Tabla de multiplicar con Do/while</h2>
<?php
$inicio= 2;
do {
    echo $inicio;
    echo "<br>";
    $inicio+= 2;
} while ($inicio<=20);
?>
<br>
<a href="index.php">Regresar pagina inicial</a>
</body>
</html>