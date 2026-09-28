<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Ozark</title>

    <link rel="icon" href="../img/logo-ozark.jpg">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

    <header class="encabezado">
        <h1>
            <span class="marca-ozark">Ozark</span>
            <span class="nombre-sitio">familia, crimen y poder</span>
        </h1>

        <nav class="navegacion">
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="info.php">Sobre la serie</a></li>
                <li><a href="reparto.php">Reparto</a></li>
                <li><a href="temporadas.php">Temporadas</a></li>
                <li><a href="curiosidades.php">Curiosidades</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="bloques-inicio">
            <article class="tarjeta">
                <h2>Contacto</h2>

                <p>
                    En esta sección podés dejar un comentario o consulta relacionada con el sitio web de Ozark.
                </p>
            </article>
        </section>

        <section class="bloques-inicio">
            <article class="tarjeta">
                <h2>Formulario de contacto</h2>

                <form action="../confirmacion.php" method="get">
                    <div>
                        <label for="nombre">Nombre</label>
                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            required
                            minlength="2">
                    </div>

                    <div>
                        <label for="apellido">Apellido</label>
                        <input
                            type="text"
                            id="apellido"
                            name="apellido"
                            required
                            minlength="2">
                    </div>

                    <div>
                        <label for="email">Correo electrónico</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            required>
                    </div>

                    <div>
                        <label for="mensaje">Mensaje</label>
                        <textarea
                            id="mensaje"
                            name="mensaje"
                            rows="6"
                            required
                            minlength="10"></textarea>
                    </div>

                    <button type="submit">Enviar mensaje</button>
                </form>
            </article>
        </section>
    </main>

    <footer >
        <p>Sitio web creado por Gonzalo Almirón - Programación Web I - Escuela Da Vinci</p>
    </footer>

</body>
</html>
