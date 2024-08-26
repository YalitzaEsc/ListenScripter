
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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

    <div class = "main-contact">

        <div class = "izquierda">
            <h1 class = "titulo-contact">Want to chat?</h1>
                    <h3 class = "subtitulo-contact">We would love to know your opinion about our page.</h1>

                    <div class = "opciones-contacto">
                            
                        <div class = "contacto">
                            <img src="./assets/img/smartphone.png" class = "icono-contacto" alt="phone">
                            <p class = "texto-contacto">Call us at <br>667-451-1820</p>
                        </div>

                        <div class = "contacto">
                            <img src="./assets/img/map.png" class = "icono-contacto" alt="location">
                            <p class = "texto-contacto">Find us at<br>531 Av México 68</p>
                        </div>

                        <div class = "contacto">
                            <img src="./assets/img/gmail.png" class = "icono-contacto" alt="Email">
                            <p class = "texto-contacto">Email us at<br>ListenScripter@gmail.com</p>
                        </div>

                    </div>
        </div>

        <div class = "derecha">
            <img src = "./assets/img/pink-aesthetic.gif" alt = "headphones" height = 300>
        </div>
        


    </div>

   
</body>

</html>