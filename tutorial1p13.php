<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $contrato = $_REQUEST['contrato'];
    echo "Contrato modificado: <br>";
    echo nl2br(htmlspecialchars($contrato));
?>
<br>
<a href="tutorial1p13.php">Regresar al formulario</a>
<br>
<a href="index.php">Regresar pagina inicial</a>
</body>
</html>