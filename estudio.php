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
    <title>Studio</title>

    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styleDos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../Imágenes/headphones.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
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

    <?php

include 'conexion.php';

if(isset($_GET['nivel'])) {
    $nivelID = $_GET['nivel'];

    $consulta = "SELECT * FROM Niveles WHERE NivelID = $nivelID";
    $resultado = mysqli_query($conexion, $consulta);

    if(mysqli_num_rows($resultado) > 0) {
        
        $nivel = mysqli_fetch_assoc($resultado);
        $nombreNivel = $nivel['Nombre'];
    }
} 
?>

<div class="seleccion-palabras-principal">
    <div class="seleccion-palabras">
        <div>
            <img src="./assets/img/minus.png" class="boton-minus-plus" id="decrement"></img>
            <label class="cantidad-palabras" id="cantidad-palabras">5</label>
            <img src="./assets/img/add.png" class="boton-minus-plus" id="increment"></img>
        </div>
        <label class="etiqueta-palabras-seleccionadas" id="etiqueta-palabras">You have selected 5 words</label>
        <form action="jugar.php" method="post" id="formulario">
            <input type="hidden" name="cantidad_palabras" id="cantidad-palabras-hidden" value="5">
            <button type="submit" class="btn boton-cargar-palabras">Start Studying</button>
            <input type="hidden" name="nivel" value="<?php echo $nivelID; ?>">
        </form>
    </div>
</div>

<script>
    // Obtener los elementos relevantes
    var cantidadPalabrasLabel = document.getElementById("cantidad-palabras");
    var incrementBtn = document.getElementById("increment");
    var decrementBtn = document.getElementById("decrement");

    // Función para incrementar la cantidad de palabras
    incrementBtn.addEventListener("click", function() {
        var cantidadPalabras = parseInt(cantidadPalabrasLabel.textContent);
        cantidadPalabras++;
        cantidadPalabrasLabel.textContent = cantidadPalabras;
        document.getElementById("cantidad-palabras-hidden").value = cantidadPalabras;
    });

    // Función para decrementar la cantidad de palabras
    decrementBtn.addEventListener("click", function() {
        var cantidadPalabras = parseInt(cantidadPalabrasLabel.textContent);
        if (cantidadPalabras > 1) {
            cantidadPalabras--;
            cantidadPalabrasLabel.textContent = cantidadPalabras;
            document.getElementById("cantidad-palabras-hidden").value = cantidadPalabras;
        }
    });
</script>


</body>
</html>