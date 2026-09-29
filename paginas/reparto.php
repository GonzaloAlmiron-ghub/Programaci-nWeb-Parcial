<?php

$rutaBase = '../';


require __DIR__.'/../datos/personajes.php';

$grupos = array(
    'byrde' => 'Los Byrde',
    'otros' => 'Más personajes'
);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparto - Ozark</title>

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
                <h2>Reparto y personajes</h2>

                <p class="texto-importante">
                    En Ozark, los personajes no se organizan solamente entre buenos y malos.
                    Cada uno se mueve por necesidad, ambición, miedo o lealtad.
                </p>

                <p>
                    Esta página presenta algunos personajes importantes y el lugar que ocupan dentro
                    del conflicto familiar y criminal de la serie. Las relaciones cambian para bien o mal  con el avance de la historia.
                </p>
            </article>

            <figure class="imagen-principal">
                <img src="../img/reparto.jpg" alt="Imagen general del reparto principal de Ozark">
                <figcaption>Los personajes de Ozark se relacionan por familia, poder, negocios y supervivencia.</figcaption>
            </figure>
        </section>
        
        <?php foreach ($grupos as $grupo => $nombreGrupo) { ?>
            <section class="reparto">
                <h2><?php echo $nombreGrupo; ?></h2>

                <div class="foto-personaje">
                    <?php foreach ($personajes as $personaje) { ?>
                        <?php if ($personaje['grupo'] == $grupo) { ?>
                            <article class="personaje">
                                <figure>
                                    <img src="<?php echo $personaje['imagen']; ?>" alt="<?php echo $personaje['alt']; ?>">
                                    <figcaption><?php echo $personaje['actor']; ?></figcaption>
                                </figure>

                                <div class="contenido-personaje">
                                    <h3><?php echo $personaje['nombre']; ?></h3>

                                    <?php if ($personaje['destacado']) { ?>
                                        <p class="texto-importante">Personaje destacado</p>
                                    <?php } ?>

                                    <?php foreach ($personaje['descripcion'] as $parrafo) { ?>
                                        <p><?php echo $parrafo; ?></p>
                                    <?php } ?>
                                </div>
                            </article>
                        <?php } ?>
                    <?php } ?>
                </div>
            </section>
        <?php } ?>

        
                
        <aside class="dato-destacado">
            <h2>Los personajes</h2>

            <p>
                Aunque los Byrde son el eje central de la historia, la mayoría de los personajes influyen directamente en el desarrollo de la serie.
                 
            </p>
        </aside>
        
    </main>

    <?php
    require __DIR__.'/../componentes/footer.php';
    ?>
    
</body>
</html>

