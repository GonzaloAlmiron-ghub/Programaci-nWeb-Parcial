<?php
$rutaBase = '../';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ozark : Información</title>

    <link rel="icon" href="../img/logo-ozark.jpg">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

    <?php
    require __DIR__.'/../componentes/header.php';
    ?>

    <main>
        <section class="presentacion">
            <article class="texto-presentacion">
                <h2>Lugar de desarrollo</h2>

                <p class="texto-importante">
                    Los Lagos de Ozarks
                </p>

                <p>
                    La serie se desarrolla en un modesto complejo turístico a orillas del lago de los Ozarks, inspirado en el Alhonna Resort and Marina, donde el creador de la serie, Bill Dubuque, trabajó como ayudante de muelle mientras cursaba sus estudios universitarios en Misuri durante la década de 1980.
                </p>

                <p>
                    La mayor parte del rodaje tuvo lugar en el área de Atlanta, concretamente en los lagos Allatoona y Lanier, en lugar de en el lago de los Ozarks, debido a los incentivos fiscales que ofrecía el estado de Georgia.
                </p>
            </article>

            <figure class="imagen-principal">
                <img src="../img/ozark-bosque.jpeg" alt="Imagen promocional oscura de la serie Ozark">
                <figcaption>Lago de los Ozarks.</figcaption>
            </figure>
        </section>

        <section class="info-serie">
            <h2>Sobre la serie</h2>

            <div class="tarjetas-claves">
                <article class="tarjeta tarjeta-clave">
                    <h3>Mantener la normalidad</h3>

                    <p>
                        Los Byrde intentan integrarse en una comunidad nueva, abrir negocios y mantener
                        una imagen familiar estable. Sin embargo, detrás de esa normalidad aparecen
                        acuerdos, mentiras y relaciones cada vez más difíciles de controlar.
                    </p>
                </article>

                <article class="tarjeta tarjeta-clave">
                    <h3>Los Ozarks como escenario</h3>

                    <p>
                        El lago, los bosques y los espacios aislados no funcionan solo como fondo.
                        Grandes escenas transcurren tanto en el agua como en los bosques.
                    </p>
                </article>

                <article class="tarjeta tarjeta-clave">
                    <h3>El lavado de dinero</h3>

                    <p>
                        Uno de los ejes principales de la serie es cómo el dinero ilegal se mezcla con negocios aparentemente comunes. Casinos, emprendimientos locales y acuerdos financieros se convierten en piezas clave dentro del conflicto.
                    </p>
                </article>
            </div>
        </section>

        <section class="datos-serie">
            <h2>Datos de la serie</h2>

            <ul class="lista-datos">
                <li><strong>Creadores:</strong> Bill Dubuque y Mark Williams.</li>
                <li><strong>Plataforma:</strong> Netflix.</li>
                <li><strong>Género:</strong> drama criminal / thriller.</li>
                <li><strong>Temporadas:</strong> 4.</li>
            </ul>
        </section>

        <section class="trailer">
            <article>
                <h2>Ozark: tráiler</h2>

                <iframe
                    width="560"
                    height="315"
                    src="https://www.youtube.com/embed/5hAXVqrljbs"
                    title="Tráiler oficial de Ozark"
                    allowfullscreen>
                </iframe>
            </article>
        </section>
    </main>

    <?php
    require __DIR__.'/../componentes/footer.php';
    ?>

</body>
</html>
