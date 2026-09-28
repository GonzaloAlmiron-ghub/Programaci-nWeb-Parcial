<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página no encontrada - Ozark</title>

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
                <h2>Página no encontrada</h2>

                <p>
                    La página que estás buscando no está disponible en este momento.
                </p>

                <p>
                    Es posible que el enlace esté mal escrito, que la página haya sido movida
                    o que todavía no exista dentro del sitio.
                </p>

                <p>
                    Podés volver al inicio para seguir navegando por el proyecto.
                </p>

                <p>
                    <a href="index.php">Volver al inicio</a>
                </p>

                <p>
                    <a href="paginas/contacto.php">Contactar a soporte</a>
                </p>
            </article>
        </section>
    </main>

    <?php 
    require __DIR__ . '/componentes/footer.php'; 
    ?>

</body>
</html>
