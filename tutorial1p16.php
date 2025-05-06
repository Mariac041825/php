<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Lista de Pedidos</h2>
    <?php
    $archivo = "pedidos.txt";

    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        echo nl2br($contenido);
    } else {
        echo "<p>No hay pedidos registrados.</p>";
    }
    ?>
<br>
<a href="index.php">Regresar pagina inicial</a>
</body>
</html>