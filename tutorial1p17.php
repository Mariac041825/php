<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$claves_acceso = array(
    'usuario1' => 'clave123',
    'usuario2' => 'segura456',
    'usuario3' => 'password789',
    'usuario4' => 'acceso321',
    'usuario5' => 'entrada654'
);
echo $claves_acceso['usuario2'];
?>
<br>
<a href="index.php">Regresar pagina inicial</a>
</body>
</html>