<?php
session_start();
$rutaBase = '../';

$nombre = '';
$actor = '';
$imagen = '';
$alt = '';
$grupo = '';
$destacado = '';
$descripcion = '';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['nombre']) && is_string($_POST['nombre'])) {
        $nombre = trim($_POST['nombre']);
    }

    if (isset($_POST['actor']) && is_string($_POST['actor'])) {
        $actor = trim($_POST['actor']);
    }

    if (isset($_POST['imagen']) && is_string($_POST['imagen'])) {
        $imagen = trim($_POST['imagen']);
    }
    if (isset($_POST['alt']) && is_string($_POST['alt'])) {
        $alt = trim($_POST['alt']);
    }
    if (isset($_POST['grupo']) &&  is_string($_POST['grupo'])) {
        $grupo = trim($_POST['grupo']);
    }

    if (isset($_POST['destacado'])  && is_string($_POST['destacado'])) {
        $destacado = trim($_POST['destacado']);
    }

        if (isset($_POST['descripcion']) && is_string($_POST['descripcion'])) {
        $descripcion = trim($_POST['descripcion']);
    }

        if (empty($nombre) || empty($actor) || empty($imagen) ||
        empty($alt) || empty($descripcion)) {
        $error = 'Completá todos los campos para agregar el personaje.';

    } elseif (mb_strlen($nombre, 'UTF-8') > 100 ||
              mb_strlen($actor, 'UTF-8') > 100) {
        $error = 'Solo se admiten hasta 100 caracteres para este campo.';

    } elseif (mb_strlen($imagen, 'UTF-8') > 300 ||
              mb_strlen($alt, 'UTF-8') > 300) {
        $error = 'La ruta y la descripción de la imagen admiten hasta 300 caracteres.';

    } elseif (strlen($descripcion) > 20000) {
        $error = 'La descripción del personaje es demasiado extensa.';

    } elseif ($grupo != 'byrde' && $grupo != 'otros') {
        $error = 'Seleccioná un grupo válido.';

    } elseif ($destacado !== '0' && $destacado !== '1') {
        $error = 'Seleccioná si el personaje es destacado.';
    }

        if ($error == '') {
        require __DIR__ . '/../conexion.php';

        $sql = 'INSERT INTO personajes
                (nombre, actor, imagen, alt, grupo, destacado, descripcion)
                VALUES (?, ?, ?, ?, ?, ?, ?)';

        $consulta = mysqli_prepare($conexion, $sql);

        if (!$consulta) {
    $error = 'No se pudo preparar el guardado del personaje.';
} else {
    mysqli_stmt_bind_param(
        $consulta,
        'sssssis',
        $nombre,
        $actor,
        $imagen,
        $alt,
        $grupo,
        $destacado,
        $descripcion
    );

    $guardado = mysqli_stmt_execute($consulta);
mysqli_stmt_close($consulta);

if ($guardado) {
    $_SESSION['mensaje'] = 'Personaje agregado correctamente.';
    header('Location: ../paginas/reparto.php');
    exit;
} else {
    $error = 'No se pudo guardar el personaje.';
}
}
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>

    <link rel="icon" href="../img/logo-ozark.jpg">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

<header class="encabezado">
        <h1>
            <span class="marca-ozark">PANEL DE ADMINISTRADOR</span>
            
        </h1>
</header>
    <main>
        <section class="bloques-inicio">
            <article class="tarjeta">
                <h2>Agregar personaje</h2>

                <?php if ($error != '') { ?>
    <p role="alert"><?php echo htmlspecialchars($error); ?></p>
<?php } ?>

                <p>Completá los datos del personaje que querés sumar al reparto.</p>
                <form action="alta-personaje.php" method="post">
    <div>
        <label for="nombre">Nombre del personaje</label>
        <input type="text" id="nombre" name="nombre"
       value="<?php echo htmlspecialchars($nombre); ?>"
       maxlength="100" required>
    </div>

    <div>
        <label for="actor">Actor</label>
        <input type="text" id="actor" name="actor"
        value="<?php echo htmlspecialchars($actor); ?>"
               maxlength="100" required>
    </div>

    <div>
        <label for="imagen">Ruta de la imagen</label>
        <input type="text" id="imagen" name="imagen"
        value="<?php echo htmlspecialchars($imagen); ?>"
               placeholder="../img/elenco/personaje.jpg"
               maxlength="300" required>
    </div>

    <div>
        <label for="alt">Descripción de la imagen</label>
        <input type="text" id="alt" name="alt"
        value="<?php echo htmlspecialchars($alt); ?>"
               maxlength="300" required>
    </div>

    <div>
        <label for="grupo">Grupo</label>
        <select id="grupo" name="grupo" required>
            <option value="">Seleccioná un grupo</option>
            <option value="byrde" <?php if ($grupo=='byrde') { echo 'selected';} ?>>Los Byrde</option>
            <option value="otros" <?php if ($grupo=='otros') { echo 'selected';} ?>>Otros personajes</option>
        </select>
    </div>

    <div>
        <label for="destacado">¿Es un personaje destacado?</label>
        <select id="destacado" name="destacado">
            <option value="0" <?php if ($destacado == '0') { echo 'selected'; } ?>>No</option>
            <option value="1" <?php if ($destacado == '1') { echo 'selected'; } ?>>Sí</option>
        </select>
    </div>

    <div>
        <label for="descripcion">Descripción del personaje</label>
        <textarea id="descripcion" name="descripcion"
                  rows="8" required><?php echo htmlspecialchars($descripcion); ?></textarea>
    </div>

    <button type="submit">Guardar</button>
</form>

                <p><a class="enlace-volver" href="../paginas/reparto.php">Volver al reparto</a></p>
            </article>
        </section>
    </main>

    <?php require __DIR__ . '/../componentes/footer.php'; ?>

</body>
</html>