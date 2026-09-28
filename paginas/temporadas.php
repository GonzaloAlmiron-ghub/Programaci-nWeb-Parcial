<?php
$rutaBase = '../';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporadas y episodios - Ozark</title>

    <link rel="icon" href="../img/logo-ozark.jpg">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

    //header

    <?php
    require __DIR__.'/../componentes/header.php';
    ?>

    <main>
        <section class="presentacion">
            <article class="texto-presentacion">
                <h2>Temporadas</h2>

                <p>
                    Ozark cuenta con 4 temporadas y un total de 44 episodios. Cada temporada presenta un desarrollo progresivo de la trama, con conflictos que se intensifican y personajes que evolucionan a lo largo de la serie.
                </p>

                <p>
                    Las primeras 3 temporadas constan de 10 capítulos cada una, mientras que la temporada 4 tiene 14 episodios ,divididos en dos partes.
                </p>
            </article>

            <figure class="imagen-principal">
                <img src="../img/temporadas.jpg" alt="Imagen promocional de las temporadas de Ozark">
                <figcaption>Temporada 4 ya disponible en Netflix.</figcaption>
            </figure>
        </section>

        <section class="bloques-inicio">
            <h2>Resumen de temporadas</h2>

            <article class="tarjeta">
                <h3>Temporada 1</h3>

                <p><strong>Año:</strong> 2017</p>
                <p><strong>Episodios:</strong> 10</p>

                <p>
                    Comienzo de la serie con la mudanza de la familia Byrde a los Ozarks y el comienzo del
                    conflicto criminal. Marty intenta encontrar una forma de proteger a su familia
                    mientras cumple con las exigencias del cártel.
                </p>
            </article>

            <article class="tarjeta">
                <h3>Temporada 2</h3>

                <p><strong>Año:</strong> 2018</p>
                <p><strong>Episodios:</strong> 10</p>

                <p>
                    La familia intenta sostener sus negocios mientras aumentan los problemas
                    con el cartel, otros grupos criminales y las autoridades. Las decisiones de Marty y Wendy empiezan
                    a tener consecuencias más grandes.
                </p>
            </article>

            <article class="tarjeta">
                <h3>Temporada 3</h3>

                <p><strong>Año:</strong> 2020</p>
                <p><strong>Episodios:</strong> 10</p>

                <p>
                    Los Byrde ya tienen en funcionamiento su casino flotante para lavar dinero, pero el matrimonio choca: Marty busca cautela y mantener un perfil bajo, mientras Wendy se vuelve más ambiciosa, aliándose con el cártel y planeando expandir el imperio criminal.
                </p>
            </article>

            <article class="tarjeta">
                <h3>Temporada 4</h3>

                <p><strong>Año:</strong> 2022</p>
                <p><strong>Episodios:</strong> 14</p>

                <p>
                    En la temporada final de Ozark, dividida en dos partes, la familia Byrde busca desesperadamente limpiar sus nombres y escapar del mundo del crimen. Para lograrlo, Marty y Wendy deben pactar con el FBI y hacer un trato con el líder del cártel, Omar Navarro.
                </p>
            </article>
        </section>

        <aside class="dato-destacado">
            <h2>Dato destacado</h2>

            <p>
                La temporada 4 de Ozark funciona como una temporada final extendida. A diferencia de las anteriores, tuvo más episodios y fue dividida en dos partes, permitiendo cerrar con más desarrollo los conflictos de la familia Byrde.

            </p>
        </aside>
    </main>

    <?php
    require __DIR__.'/../componentes/footer.php';
    ?>

</body>
</html>
