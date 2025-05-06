<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Formulario de Pedido de Pizzas</h2>
    <form action="tutorial1p15.php" method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Dirección: <input type="text" name="direccion" required><br><br>

        <input type="checkbox" name="pizza[]" value="Jamon y Queso"> Jamón y Queso
        Cantidad: <input type="text" name="cantidad_jq"><br>

        <input type="checkbox" name="pizza[]" value="Napolitana"> Napolitana
        Cantidad: <input type="text" name="cantidad_nap"><br>

        <input type="checkbox" name="pizza[]" value="Mozarella"> Mozarella
        Cantidad: <input type="text" name="cantidad_moz"><br><br>

        <input type="submit" value="Confirmar">
    </form>
    
<br>
<a href="index.php">Regresar pagina inicial</a>
</body>
</html>