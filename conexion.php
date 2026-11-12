<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ozark_parcial2';
$port = 3306;

mysqli_report(MYSQLI_REPORT_OFF);
$conexion = mysqli_connect($host, $user, $password, $database, $port);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
mysqli_set_charset($conexion, "utf8mb4");
?>