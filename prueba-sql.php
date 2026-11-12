<?php
require __DIR__ . '/conexion.php';

$sql = 'SELECT nombre, actor FROM personajes WHERE id = 1';

$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {
    die('No se pudo realizar la consulta.');
}

$personaje = mysqli_fetch_assoc($resultado);

if ($personaje) {
    echo '<p>Personaje: ' . htmlspecialchars($personaje['nombre']) . '</p>';
    echo '<p>Actor: ' . htmlspecialchars($personaje['actor']) . '</p>';
} else {
    echo '<p>No se encontró el personaje.</p>';
}