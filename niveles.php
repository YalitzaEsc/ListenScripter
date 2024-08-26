<?php
session_start();
if (!isset($_SESSION['nID']))
    header("Location: index.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levels</title>

    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styleDos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../Imágenes/headphones.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>

<body>

<header>
<div class="logo-main-container">    
            <img src="../Imágenes/headphones.png" alt="logo" id="imagen-logo">
            <p><a href = "niveles.php" class="logo-1">Listen</a></p>
            <p><a href= "niveles.php" class="logo-2">Scripter</a></p>
        </div>

        <div class="contenedor-menu">
            <ul>
               
                <li><a href="./niveles.php">Levels</a></li>
            <li><a href="./about.php">About us</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <?php
                // Verificar si hay una sesión activa
                session_start();
                if(isset($_SESSION['usuario'])) {
                    // Si hay una sesión activa, mostrar el enlace para cerrar sesión
                    echo '<li><a href="cerrarSesion.php">Log out</a></li>';
                } else {
                    // Si no hay una sesión activa, mostrar el enlace para iniciar sesión
                    echo '<li><a href="index.php">Log In</a></li>';
                }
                ?>
            </ul>
        </div>
    </header>


    <main class = "main-niveles">

        <div class = "contenedor-cartas">

            <div class = "carta">
                <img src="./assets/img/easy-earphones.png" class = "imagen-carta" alt="imagen-nivel">
                <h3 class = "titulo-carta">Elementary</h3>
                <p class = "desc-carta">Basic understanding and use of everyday expressions. Perfect for people with zero knowledge.</p>
                <button class = "boton-nivel"><a href = "./estudio.php?nivel=1">Start level!</a></button>
            </div>

            <div class = "carta">
                <img src="./assets/img/easy-earphones.png" class = "imagen-carta" alt="imagen-nivel">
                <h3 class = "titulo-carta">Beginner</h3>
                <p class = "desc-carta">Can handle simple, routine tasks and interactions. Perfect for those with basic knowledge.</p>
                <button class = "boton-nivel"><a href = "./estudio.php?nivel=2">Start level!</a></button>
            </div>

            <div class = "carta">
                <img src="./assets/img/easy-earphones.png" class = "imagen-carta" alt="imagen-nivel">
                <h3 class = "titulo-carta">Intermediate</h3>
                <p class = "desc-carta">Understands and communicates on familiar topics with some fluency. </p>
                <button class = "boton-nivel"><a href = "./estudio.php?nivel=3">Start level!</a></button>
            </div>

            <div class = "carta">
                <img src="./assets/img/pinky earphones.png" class = "imagen-carta" alt="imagen-nivel">
                <h3 class = "titulo-carta">Upper Intermediate</h3>
                <p class = "desc-carta">Can engage comfortably in various situations, discussing both concrete and abstract topics. </p>
                <button class = "boton-nivel"><a href = "./estudio.php?nivel=4">Start level!</a></button>
            </div>

            <div class = "carta">
                <img src="./assets/img/pinky earphones.png" class = "imagen-carta" alt="imagen-nivel">
                <h3 class = "titulo-carta">Advanced</h3>
                <p class = "desc-carta">Understands complex texts and expresses ideas fluently and effectively.</p>
                <button class = "boton-nivel"><a href = "./estudio.php?nivel=5">Start level!</a></button>
            </div>

            <div class = "carta">
                <img src="./assets/img/pinky earphones.png" class = "imagen-carta" alt="imagen-nivel">
                <h3 class = "titulo-carta">Proficient (soon)</h3>
                <p class = "desc-carta">Near-native proficiency, with a deep understanding and nuanced expression.</p>
                <button class = "boton-nivel"><a href = "">Start level!</a></button>
            </div>

        </div>

    </main>

   
</body>

</html>