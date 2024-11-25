<?php 
include "conexion.php";

$mensajeExito = "";
$mensajeError = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre=$_POST['nombreREG'];
    $apellido=$_POST['apellidoREG'];
    $correo = $_POST['correoREG'];
    $password = $_POST['passwordREG'];
    $confirmar_contraseña = $_POST['passwordconfirm'];

    // Validamos que las contraseñas coincidan
    if ($password !== $confirmar_contraseña) {
        $mensajeError = "Las contraseñas no coinciden.";
    } else {
        // Verificamos si el usuario ya existe
        $sql = $conexion->prepare("SELECT * FROM usuario WHERE correo = ?");
        $sql->bind_param("s", $correo);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            $mensajeError = "Este correo ya existe.";
        } else {
            // Insertamos el nuevo usuario
            $sql = $conexion->prepare("INSERT INTO usuario (nombre, apellido,correo,contrasena) VALUES (?, ?,?,?)");
            $sql->bind_param("ssss", $nombre, $apellido,$correo,$password);

            if ($sql->execute()) {
                $mensajeExito = "Usuario registrado exitosamente.";
            } else {
                $mensajeError = "Error al registrar el usuario: " . $conexion->error;
            }
        }

        $sql->close();
    }
    $conexion->close();
}


?>