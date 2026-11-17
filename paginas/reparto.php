<?php

$rutaBase = '../';

require __DIR__ . '/../conexion.php';

$busqueda = '';

if (isset($_GET['buscar']) && is_string($_GET['buscar'])) {
    $busqueda = trim($_GET['buscar']);
}

if ($busqueda == '') {
    $sql = 'SELECT id, nombre, actor, imagen, alt, grupo, destacado, descripcion
            FROM personajes ORDER BY id';

    $resultado = mysqli_query($conexion, $sql);
} else {
    $sql = 'SELECT id, nombre, actor, imagen, alt, grupo, destacado, descripcion
            FROM personajes WHERE nombre LIKE ? OR actor LIKE ? ORDER BY id';

    $consulta = mysqli_prepare($conexion, $sql);

    if (!$consulta) {
        die('No se pudo preparar la búsqueda.');
    }

    $textoBuscado = '%' . $busqueda . '%';
    mysqli_stmt_bind_param($consulta, 'ss', $textoBuscado, $textoBuscado);

    if (!mysqli_stmt_execute($consulta)) {
        die('No se pudo realizar la búsqueda.');
    }

    $resultado = mysqli_stmt_get_result($consulta);
    mysqli_stmt_close($consulta);
}

if (!$resultado) {
    die('No se pudieron consultar los personajes.');
}

$personajesBD = array();
$gruposConResultados = array();

$personaje = mysqli_fetch_assoc($resultado);

while ($personaje != null) {
    $personajesBD[] = $personaje;
    $gruposConResultados[$personaje['grupo']] = true;

    $personaje = mysqli_fetch_assoc($resultado);
}
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
        <section class="bloques-inicio">
            <article class="tarjeta">
                <h2>Buscar personajes</h2>

                <form action="reparto.php" method="get">
                    <div>
                        <label for="buscar">Nombre del personaje o del actor</label>
                        <input type="text" id="buscar" name="buscar"
                               value="<?php echo htmlspecialchars($busqueda); ?>"
                               placeholder="Ejemplo: Marty o Jason Bateman">
                    </div>

                    <button type="submit">Buscar</button>
                </form>

                <p><a href="reparto.php">Ver todos los personajes</a></p>

                <?php if (empty($personajesBD)) { ?>
                    <p>No se encontraron personajes.</p>
                <?php } ?>
            </article>
        </section>
        
        <?php foreach ($grupos as $grupo => $nombreGrupo) { ?>
            <?php if (isset($gruposConResultados[$grupo])) { ?>
            <section class="reparto">
                <h2><?php echo htmlspecialchars($nombreGrupo); ?></h2>

                <div class="foto-personaje">
                    <?php foreach ($personajesBD as $personaje) { ?>
                        <?php if ($personaje['grupo'] == $grupo) { ?>
                            <article class="personaje">
                                <figure>
                                    <img src="<?php echo htmlspecialchars($personaje['imagen']); ?>" alt="<?php echo htmlspecialchars($personaje['alt']); ?>">
                                    <figcaption><?php echo htmlspecialchars($personaje['actor']); ?></figcaption>
                                </figure>

                                <div class="contenido-personaje">
                                    <h3><?php echo htmlspecialchars($personaje['nombre']); ?></h3>

                                    <?php if ($personaje['destacado']) { ?>
                                        <p class="texto-importante">Personaje destacado</p>
                                    <?php } ?>

                                    <?php
                                    $parrafos = explode("\n", $personaje['descripcion']);
                                    foreach ($parrafos as $parrafo) {
                                        if (trim($parrafo) != '') {
                                    ?>
                                            <p><?php echo htmlspecialchars($parrafo); ?></p>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </article>
                        <?php } ?>
                    <?php } ?>
                </div>
            </section>
            <?php } ?>
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

