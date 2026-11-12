<?php
$_SESSION['visitas_sesion']=($_SESSION['visitas_sesion'] ?? 0) + 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ozark: Contador en Sesión</title>
</head>
<body>
    <p>Visitas en la sesión: <?php echo $_SESSION['visitas_sesion']; ?></p>
</body>
</html>