<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $pizzas = isset($_POST["pizza"]) ? $_POST["pizza"] : [];
        $cantidad_jq = $_POST["cantidad_jq"] ?? 0;
        $cantidad_nap = $_POST["cantidad_nap"] ?? 0;
        $cantidad_moz = $_POST["cantidad_moz"] ?? 0;
    
        $pedido = "Nombre: $nombre\nDirección: $direccion\n";
        $pedido .= "Pedido:\n";
    
        foreach ($pizzas as $pizza) {
            $cantidad = ($pizza == "Jamon y Queso") ? $cantidad_jq : (($pizza == "Napolitana") ? $cantidad_nap : $cantidad_moz);
            $pedido .= "- $pizza: $cantidad unidades\n";
        }
    
        $pedido .= "------------------------\n";
    
        file_put_contents("pedidos.txt", $pedido, FILE_APPEND);
    
        echo "Pedido registrado con éxito.";
    }
    
?>
<form action="tutorial1p15-1.php" method="get">
        <input type="submit" value="Ver Pedido Realizado">
    </form>
<br>
<a href="tutorial1p15-1.php">Regresar al formulario</a>
<br>
<a href="index.php">Regresar pagina inicial</a>
</body>
</html>