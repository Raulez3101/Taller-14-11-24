<?php

require_once 'conexion.php';


if (isset($_POST['id_recurso'])) {
    $id_recurso = $_POST['id_recurso'];

    $query = "DELETE FROM recurso WHERE recurso_id = ?";

    $stmt = $conexion->prepare($query);
    $stmt->bind_param("i", $id_recurso);

    if ($stmt->execute()) {
        // Redirigir a la página de recursos con un mensaje de éxito
        header("Location: recursos.php?success=Recurso eliminado correctamente");
        exit();
    } else {
        // Si hay un error en la ejecución
        echo "Error al eliminar el recurso: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conexion->close();
} else {
    echo "Faltan datos para eliminar el recurso.";
}
?>
