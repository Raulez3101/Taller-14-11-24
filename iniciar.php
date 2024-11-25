<?php
include "conexion.php"; // Incluye la conexión a la base de datos

$mensajeExito = "";
$mensajeError = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $contraseña_usuario = $_POST['contrasena'];

    // Verificar si el usuario existe
    $sql = "SELECT * FROM usuario WHERE correo = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario_data = $result->fetch_assoc();

        // Comparamos la contraseña sin hash (usando strcmp)
        if (strcmp($contraseña_usuario, $usuario_data['contrasena']) === 0) {
            // Iniciamos la sesión
            session_start();
            $_SESSION['usuario_id'] = $usuario_data['usuario_id'];
            $_SESSION['correo'] = $usuario_data['correo'];

            $mensajeExito = "Inicio de sesión exitoso. Bienvenido, " . htmlspecialchars($usuario_data['correo']) . "!";
            header("Location:Well_Mind.php"); // Redirigir al usuario tras un inicio de sesión exitoso
            exit();
        } else {
            $mensajeError = "Contraseña incorrecta.";
        }
    } else {
        $mensajeError = "Correo no encontrado.";
    }

    $stmt->close();
}

$conexion->close();
?>