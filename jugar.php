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

if (isset($_POST['cantidad_palabras'])) {
    $cantidadPalabras = $_POST['cantidad_palabras'];
}

$palabras = [];
$rutasAudios = [];

if (isset($nivelID) && isset($cantidadPalabras)) {
    // Realizar la consulta para obtener las palabras y rutas de audio del nivel seleccionado
    $consulta = "
        SELECT Palabras.Palabra, Audios.AudioPath
        FROM Niveles
        INNER JOIN NivelPalabras ON Niveles.NivelID = NivelPalabras.NivelID
        INNER JOIN Palabras ON NivelPalabras.PalabraID = Palabras.PalabraID
        INNER JOIN Audios ON Palabras.PalabraID = Audios.PalabraID
        WHERE Niveles.NivelID = $nivelID
        ORDER BY RAND()
        LIMIT $cantidadPalabras";
    
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            $palabras[] = $row['Palabra'];
            $rutasAudios[] = $row['AudioPath'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studying</title>

    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./styleDos.css">
    <link rel="icon" href="../Imágenes/headphones.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

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

<div class="contenedor-principal"> 
    <div id="contenedorJuego" class="contenedor-juego">
        <div class="reproductor">
            <audio id="miAudio"></audio>
            <h2 class="pregunta">Press the icon then listen carefully...</h2>
            <img src="./assets/img/volume.png" onclick="reproducirAudio()" class="boton-audio">
        </div>

        <input type="text" placeholder="Which word do you hear?" id="respuestaInput" class="respuesta-input">

        <div class="botones-respuesta">

            <input type="submit" onclick="verificarRespuesta()" value="Check" id="botonCheck" class="btn boton-check">
            <button onclick="siguientePalabra()" id="botonNext" class="btn boton-siguiente">Next</button>
        </div>

        <label id="resultadoLabel" class="etiqueta-respuesta"></label>
    </div>
   
</div>


<script>
    var palabras = <?php echo json_encode($palabras); ?>;
    var rutasAudios = <?php echo json_encode($rutasAudios); ?>;
</script>
<script src="./assets/js/script.js"></script>

</body>
</html>
