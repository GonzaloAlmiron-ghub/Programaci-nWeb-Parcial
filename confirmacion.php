<?php
$rutaBase = '';
$error = '';
$nombre = '';
$apellido = '';
$email = '';
$motivo = '';
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $error = 'Primero completá y enviá el formulario de contacto.';
} elseif (!isset($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['motivo'], $_POST['mensaje'])) {
    $error = 'Faltan datos. Completá todos los campos del formulario.';
} elseif (!is_string($_POST['nombre']) || !is_string($_POST['apellido']) || !is_string($_POST['email']) || !is_string($_POST['motivo']) || !is_string($_POST['mensaje'])) {
    $error = 'Los campos deben contener texto. Volvé a completar el formulario.';
} else {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $email = trim($_POST['email']);
    $motivo = trim($_POST['motivo']);
    $mensaje = trim($_POST['mensaje']);
}

if ($error == '') {
    if ($nombre == '' || $apellido == '' || $email == '' || $motivo == '' || $mensaje == '') {
        $error = 'Completá todos los campos del formulario.';
    }
}

if ($error == '') {
    if (strlen($nombre) < 2) {
        $error = 'El nombre debe tener al menos 2 caracteres.';
    }
}

if ($error == '') {
    if (strlen($apellido) < 2) {
        $error = 'El apellido debe tener al menos 2 caracteres.';
    }
}

if ($error == '') {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Ingresá un correo electrónico válido.';
    }
}

if ($error == '') {
    if (strlen($mensaje) < 10) {
        $error = 'El mensaje debe tener al menos 10 caracteres.';
    }
}

if ($error == '') {
    if ($motivo == 'consulta') {
        $tituloMotivo = 'Consulta sobre la serie';
        $respuesta = 'Recibimos tu consulta sobre la serie Ozark.';
    } elseif ($motivo == 'sugerencia') {
        $tituloMotivo = 'Sugerencia para el sitio';
        $respuesta = 'Gracias por tu sugerencia para el sitio.';
    } elseif ($motivo == 'error') {
        $tituloMotivo = 'Informar un error del sitio';
        $respuesta = 'Gracias por avisarnos del error.';
    } else {
        $error = 'Seleccioná uno de los motivos disponibles.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del formulario - Ozark</title>

    <link rel="icon" href="img/logo-ozark.jpg">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <?php  
    require __DIR__ . '/componentes/header.php'; 
    ?>


    <main>
        <section class="bloques-inicio">
            <article class="tarjeta">
                <?php
                if ($error == '') {
                    echo '<h2>Consulta recibida</h2>';
                    echo '<p>Gracias, ' . htmlspecialchars($nombre) . ' ' . htmlspecialchars($apellido) . '. Estos son los datos de tu consulta.</p>';
                    echo '<p>Correo electrónico: ' . htmlspecialchars($email) . '</p>';
                    echo '<p>Motivo: ' . $tituloMotivo . '</p>';
                    echo '<p>' . $respuesta . '</p>';
                    echo '<h3>Tu mensaje</h3>';
                    echo '<p>' . htmlspecialchars($mensaje) . '</p>';
                    echo '<p>Formulario de prueba. Los datos no se guardan ni se envían por correo.</p>';
                } else {
                    echo '<h2>No se pudo procesar la consulta</h2>';
                    echo '<p>' . $error . '</p>';
                }
                ?>

                <p><a href="paginas/contacto.php">Volver al formulario</a></p>
                <p><a href="index.php">Volver al inicio</a></p>
            </article>
        </section>
    </main>
    <?php 
    require __DIR__ . '/componentes/footer.php'; 
    ?>

</body>
</html>
