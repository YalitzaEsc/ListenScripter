<?php
include_once('conexion.php');

if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $query = "SELECT * FROM Usuarios WHERE Usuario='$usuario' AND Password='$password'";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['nID'] = 1;
        $_SESSION['usuario'] = $usuario;
        header("Location: niveles.php");
        exit;
    } else {
        header("Location: index.php?error=credenciales_incorrectas");
        exit;
    }
}
?>


