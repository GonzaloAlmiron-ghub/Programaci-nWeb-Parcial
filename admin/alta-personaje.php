<?php
$rutaBase = '../';
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

                <p>Completá los datos del personaje que querés sumar al reparto.</p>
                <form action="alta-personaje.php" method="post">
    <div>
        <label for="nombre">Nombre del personaje</label>
        <input type="text" id="nombre" name="nombre"
               maxlength="100" required>
    </div>

    <div>
        <label for="actor">Actor</label>
        <input type="text" id="actor" name="actor"
               maxlength="100" required>
    </div>

    <div>
        <label for="imagen">Ruta de la imagen</label>
        <input type="text" id="imagen" name="imagen"
               placeholder="../img/elenco/personaje.jpg"
               maxlength="300" required>
    </div>

    <div>
        <label for="alt">Descripción de la imagen</label>
        <input type="text" id="alt" name="alt"
               maxlength="300" required>
    </div>

    <div>
        <label for="grupo">Grupo</label>
        <select id="grupo" name="grupo" required>
            <option value="">Seleccioná un grupo</option>
            <option value="byrde">Los Byrde</option>
            <option value="otros">Otros personajes</option>
        </select>
    </div>

    <div>
        <label for="destacado">¿Es un personaje destacado?</label>
        <select id="destacado" name="destacado">
            <option value="0">No</option>
            <option value="1">Sí</option>
        </select>
    </div>

    <div>
        <label for="descripcion">Descripción del personaje</label>
        <textarea id="descripcion" name="descripcion"
                  rows="8" required></textarea>
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