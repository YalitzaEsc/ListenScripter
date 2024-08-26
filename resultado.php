<?php
include 'conexion.php';
session_start();
if (!isset($_SESSION['nID'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['nivel'])) {
    $nivelID = $_POST['nivel'];
}

$correctas = $_GET['correctas'];
$incorrectas = $_GET['incorrectas'];
$total = $_GET['correctas'] + $_GET['incorrectas'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>

    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./styleDos.css">
    <link rel="icon" href="../Imágenes/headphones.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<header>
    <div class="logo-main-container">    
        <img src="../Imágenes/headphones.png" alt="logo" id="imagen-logo">
        <p><a href="niveles.php" class="logo-1">Listen</a></p>
        <p><a href="niveles.php" class="logo-2">Scripter</a></p>
    </div>

    <div class="contenedor-menu">
        <ul>
            <li><a href="./niveles.php">Levels</a></li>
            <li><a href="./about.php">About us</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <?php
            if (isset($_SESSION['usuario'])) {
                echo '<li><a href="cerrarSesion.php">Log out</a></li>';
            } else {
                echo '<li><a href="index.php">Log In</a></li>';
            }
            ?>
        </ul>
    </div>
</header>

<body>

<div class = "contenedor-principal">
    <div id="contenedorJuego" class="contenedor-juego">

        <div class = "contenedor-score">
                <p class = "resultado">You guessed <?php echo $correctas; ?> out of <?php echo $total; ?> words correctly!</p>
        </div>

        <div class = "contenedor-botones-fin">

            <button class = "btn try"><a href = "./niveles.php">Try again</a></button>
            <button class = "btn aboutTwo"><a href = "./about.php">About us</a></button>

        </div>
    </div>
</div>


<script src = "./assets/js/script.js">

</body>
</html>
