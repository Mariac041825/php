<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$usuario = $_POST['usuario'];
$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];

function verificar_claves($usuario, $clave1, $clave2) {
    if ($clave1 === $clave2) {
        echo "Registro exitoso. Bienvenido, $usuario.";
    } else {
        echo "Error: Las claves ingresadas no coinciden.";
    }
}
verificar_claves($usuario, $clave1, $clave2);
?>
<br>
<a href="tutorial2p18-1.php">Regresar al formulario</a>
<br>
<a href="index.php">Regresar pagina inicial</a>
</body>
</html>