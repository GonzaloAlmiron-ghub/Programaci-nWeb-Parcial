<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje enviado - Ozark</title>

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
                <h2>Mensaje enviado</h2>

                <p>
                    El formulario fue enviado correctamente. Gracias por tu mensaje. En breve nos pondremos en contacto.
                </p>

                <p>
                    <a href="index.php">Volver al inicio</a>
                </p>
            </article>
        </section>
    </main>
//footer
    <?php 
    require __DIR__ . '/componentes/footer.php'; 
    ?>

</body>
</html>
