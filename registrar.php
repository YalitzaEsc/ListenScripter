<?php
include_once('conexion.php');

if (isset($_POST['registro'])) {
    $nombre = $_POST['Nombre'];
    $usuario = $_POST['Usuario'];
    $password = $_POST['Password'];
    $confirmar_password = $_POST['confirmar_password'];

    // Verificar si el nombre de usuario ya existe en la base de datos
    $query_verificar_usuario = "SELECT * FROM Usuarios WHERE Usuario='$usuario'";
    $result_verificar_usuario = mysqli_query($conexion, $query_verificar_usuario);

    if (mysqli_num_rows($result_verificar_usuario) > 0) {
        // Si el nombre de usuario ya existe, redirigir con un mensaje de error
        header("Location: index.php?error=usuario_existente");
        exit;
    }

    // Insertar el nuevo usuario si el nombre de usuario no existe
    $query_insertar_usuario = "INSERT INTO Usuarios (Usuario, Nombre, Password) VALUES ('$usuario', '$nombre', '$password')";
    $result_insertar_usuario = mysqli_query($conexion, $query_insertar_usuario);

    if ($result_insertar_usuario) {
        // Si el registro es exitoso, iniciar sesión y redirigir al usuario
        session_start();
        $_SESSION['nID'] = 1;
        $_SESSION['usuario'] = $usuario;
        header("Location: niveles.php?exito=registro_exitoso");
        exit;
    } else {
        // Si hay algún error en la inserción, redirigir con un mensaje de error
        header("Location: index.php?error=error_en_el_registro");
        exit;
    }
}
?>