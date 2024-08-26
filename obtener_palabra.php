<?php
include 'conexion.php';

// Verificar si se ha proporcionado la ruta del audio en la URL
if(isset($_GET['ruta_audio'])) {
    // Obtener la ruta del audio de la URL
    $ruta_audio = $_GET['ruta_audio'];

    // Realizar la consulta para obtener la palabra asociada a la ruta del audio
    $consulta_palabra = "SELECT Palabras.Palabra FROM Audios INNER JOIN Palabras ON Audios.PalabraID = Palabras.PalabraID WHERE Audios.AudioPath = '$ruta_audio'";
    $resultado_palabra = mysqli_query($conexion, $consulta_palabra);

    if(mysqli_num_rows($resultado_palabra) > 0) {
        $row_palabra = mysqli_fetch_assoc($resultado_palabra);
        $palabra_asociada = $row_palabra['Palabra'];

        // Generar JavaScript en línea con la palabra asociada
        echo "
        document.addEventListener('DOMContentLoaded', function() {
            var palabraAsociada = '" . addslashes($palabra_asociada) . "';
            // Utiliza la variable palabraAsociada como desees en tu script.js
            console.log('Palabra asociada:', palabraAsociada);
            // Por ejemplo, puedes usar la variable para hacer algo en tu script.js
            // document.getElementById('elemento').innerText = palabraAsociada;
        });
        ";
    }
}
?>


