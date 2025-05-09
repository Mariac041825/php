<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "", "base1") or die("Error en la conexión");

$nombre = $_POST['nombre'];

$consulta = "SELECT * FROM alumnos WHERE nombre LIKE '%$nombre%'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    echo "<h2>Resultados encontrados:</h2>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "Código: " . $fila['codigo'] . "<br>";
        echo "Nombre: " . $fila['nombre'] . "<br>";
        echo "Email: " . $fila['mail'] . "<br>";
        echo "Curso: " . ($fila['codigocurso'] == 1 ? "PHP" : ($fila['codigocurso'] == 2 ? "ASP" : "JSP")) . "<br>";
        echo "<hr>";
    }
} else {
    echo "No se encontraron alumnos con ese nombre.";
}
mysqli_close($conexion);
?>
<br>
<a href="tutorial2p22-1.php">Regresar al formulario</a>
<br>
<a href="index.php">Regresar pagina inicial</a>
</body> zs 
</html>