<?php
$rutaBase = '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Ozark</title>

    <link rel="icon" href="img/logo-ozark.jpg">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php 
    require __DIR__ . '/componentes/header.php'; 
    ?>

    <main>
        <section class="presentacion">
            <article class="texto-presentacion">
                <h2>¿Qué es Ozark y de qué trata?</h2>

                <p>
                    Ozark es una serie original de Netflix creada por Bill Dubuque y Mark Williams. El asesor financiero Martin "Marty" Byrde, interpretado por Jason Bateman, traslada repentinamente a su familia —compuesta por su esposa Wendy Byrde, y sus dos hijos, Jonah y Charlotte— desde Naperville, un suburbio de Chicago, hasta la comunidad turística de Osage Beach, Misuri, después de que una operación de lavado de dinero sale mal.
                </p>

                <p>
                    Marty debe esforzarse por apaciguar a un cártel mexicano estableciendo una operación de lavado de mayor envergadura en la región de los Ozarks. Sin embargo, al llegar a Misuri, los Byrde se ven envueltos con personajes locales, entre ellos Ruth Langmore, Jacob Snell y Darlene Snell.
                </p>
            </article>

            <figure class="imagen-principal">
                <img src="img/ozarkindex.jpg" alt="Banner de la serie Ozark">
                <figcaption>Temporada 4 ya disponible en Netflix.</figcaption>
            </figure>
        </section>

        <section class="galeria-inicio">
            <figure class="imagen-secundaria">
                <img src="img/familia.jpg" alt="Familia Byrde">
                <figcaption>Una familia dispuesta a unirse en un panorama difícil.</figcaption>
            </figure>

            <article class="texto-secundario">
                <h2>La familia Byrde</h2>

                <p>
                    La mudanza a los Ozarks no es solo un cambio de escenario. Para la familia Byrde,
                    significa entrar en un espacio donde las reglas son distintas y donde cada vínculo
                    empieza a ponerse a prueba.
                </p>
            </article>
        </section>

        <section class="claves-inicio">
            <h2>Las claves de la serie</h2>

            <div class="tarjetas-claves">
                <article class="tarjeta tarjeta-clave">
                    <h3>El inicio</h3>

                    <p>
                        Tras un altercado con el cártel mexicano, Marty Byrde se ve obligado a trasladar a su familia a los Ozarks. Allí, la familia se enfrenta a un mundo desconocido y peligroso.
                    </p>
                </article>

                <article class="tarjeta tarjeta-clave">
                    <h3>El dinero</h3>

                    <p>
                        El lavado de dinero es el motor de la historia. A partir de ese conflicto
                        aparecen negocios, alianzas y riesgos cada vez más difíciles de controlar.
                    </p>
                </article>

                <article class="tarjeta tarjeta-clave">
                    <h3>La familia</h3>

                    <p>
                        Los Byrde intentan mantenerse unidos, pero cada integrante vive la situación
                        de una manera distinta. Esa diferencia genera gran parte del conflicto.
                    </p>
                </article>

                <article class="tarjeta tarjeta-clave">
                    <h3>El cártel</h3>

                    <p>
                        Lavar dinero para un cártel mexicano no es tarea fácil, aún menos si se cometen errores. Marty tiene que buscar formas de mantener a su familia a salvo.
                    </p>
                </article>

                <article class="tarjeta tarjeta-clave">
                    <h3>La policía</h3>

                    <p>
                        La policía local no es un obstáculo menor. Marty y Wendy deben lidiar con la ley
                        mientras intentan mantener su negocio en marcha.
                    </p>
                </article>

                <article class="tarjeta tarjeta-clave">
                    <h3>La familia Snell</h3>

                    <p>
                        Los Snell son una familia de narcotraficantes locales que se convierten en un obstáculo
                        para el cártel mexicano. La situación empeora cuando sus intereses chocan con los de los Byrde.
                    </p>
                </article>
            </div>
        </section>

        <aside class="dato-destacado">
            <h2>La trama</h2>

            <p>
                Ozark también muestra cómo el lavado de dinero afecta las relaciones familiares. Las decisiones de Marty y Wendy cambian la vida de sus hijos y de quienes los rodean.
            </p>
        </aside>
    </main>
    <?php
    require __DIR__.'/componentes/footer.php';
    ?>

</body>
</html>

