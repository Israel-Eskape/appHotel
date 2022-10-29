<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
</head>
<body>
    <?php
        require_once 'conexion.php';
        $ejemplo = new Conexion;
        $ejemplo->conectar();
    ?>
</body>
</html>