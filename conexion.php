<?php
$servername = "localhost:3307";
$database = "ListenSripter";
$username = "root";
$password = "";

$conexion = mysqli_connect($servername, $username, $password, $database);

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}
?>


