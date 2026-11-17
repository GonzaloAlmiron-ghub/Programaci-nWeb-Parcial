<?php
require __DIR__ . '/conexion.php';

$sql = 'SELECT nombre, actor FROM personajes ORDER BY id';

$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {
    die('No se pudo realizar la consulta.');
}

$personaje = mysqli_fetch_assoc($resultado);

while ($personaje != null) {
    echo '<p>Personaje: ' . htmlspecialchars($personaje['nombre']) . '</p>';
    echo '<p>Actor: ' . htmlspecialchars($personaje['actor']) . '</p>';

    $personaje = mysqli_fetch_assoc($resultado);
}