
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../Imágenes/headphones.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+15&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styleDos.css">
    
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

    <div class = "main-about">
        
        <img src = "../Imágenes/headphones.png" height = 100>
        <h1 class = "titulo-about">Why ListenScripter?</h1>
        <p class = "texto-about">We offer a variety of exercises that will help you sharpen your ears and enhance your language proficiency. Our platform is designed
                to be user-friendly and easy to navigate, so you can focus on what matters most: learning. So what are you waiting for?
            Sign up today and start improving your listening skills with ListenScripter!</p>
        
        <div class = "botones-contenedor">
        <button class = "btn boton-started"><a href="./niveles.php">Let's get started!</a></button>
        <button class = "btn boton-contact"><a href = "./contact.php">Contact Us</a></button>
        </div>
    </div>

</body>

</html>


