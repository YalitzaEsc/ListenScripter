<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../Imágenes/headphones.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+15&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header>
        <div class="logo-container">    
            <img src="../Imágenes/headphones.png" alt="logo" id="imagen-logo">
            <p><a href = "niveles.php" class="logo-1">Listen</a></p>
            <p><a href= "niveles.php" class="logo-2">Scripter</a></p>
        </div>

        <div class="contenedor-menu">
            <ul>
               
                <li><a href="./niveles.php">Levels</a></li>
            <li><a href="./about.php">About us</a></li>
            <li><a href="./contact.php">Contact</a></li>
            </ul>
        </div>
    </header>

    <main>
        
        <div class = "contenedor-texto-inicio">

        <p class = "texto-inicio">Ready to sharpen your ears and</p>
            <p class = "texto-inicio">enhance your language proficiency?</p>
            <button class = "boton-comenzar"><a href="./about.php" style = "text-decoration: none; color: white;"
            >Learn more about us!</a></button>
        </div>

        <class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="assets/img/img-login.svg" alt="">
                </div>

                <div class="login__forms">
                <form action="iniciarSesion.php" class="login__registre" id="login-in" method="POST">
                        <h1 class="login__title">Sign In</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Username" name = "usuario" class="login__input">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Password" name = "password" class="login__input">
                        </div>

                        <button type="submit" name="login" class = "login__button">Sign In</button>


                        <div>
                            <span class="login__account">Don't have an Account?</span>
                            <span class="login__signin" id="sign-up">Sign Up</span>
                        </div>

                    </form>

                    <form action="registrar.php" class="login__create none" id="login-up" method="POST">
                        <h1 class="login__title">Create Account</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Full Name" name = "Nombre" class="login__input">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-at login__icon'></i>
                            <input type="text" placeholder="Username" name = "Usuario" class="login__input">
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Password" name = "Password" class="login__input">
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Confirm Password" name = "confirmar_password" class="login__input">
                        </div>

                        <button type="submit" name="registro" class = "login__button">Sign Up</button>

                        <div>
                            <span class="login__account">Already have an Account?</span>
                            <span class="login__signup" id="sign-in">Sign In</span>
                        </div>

                        <div class="login__social">
                            <a href="#" class="login__social-icon"><i class='bx bxl-facebook' ></i></a>
                            <a href="#" class="login__social-icon"><i class='bx bxl-twitter' ></i></a>
                            <a href="#" class="login__social-icon"><i class='bx bxl-google' ></i></a>
                        </div>

                    </form>
                </div>
            </div>

            <script src="./assets/js/main.js"></script>
        </div>
        </form>
     </div>

    </main>

   
</body>

</html>