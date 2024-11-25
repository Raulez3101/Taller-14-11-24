<?php
// Incluir el archivo de conexión a la base de datos
require_once 'conexion.php';

// Función para extraer el ID del video de YouTube desde la URL
function getYouTubeThumbnail($url) {
    preg_match("/(?:https?:\/\/(?:www\.)?youtube\.com\/(?:[^\/]+\/[^\n\s]*\/|(?:v|e(?:mbed)?)\/|.*[?&]v=))([^\"&?\/\s]{11})/i", $url, $matches);
    if (isset($matches[1])) {
        // Generar la URL de la miniatura
        return "https://img.youtube.com/vi/" . $matches[1] . "/0.jpg";
    } else {
        // Si no es un URL válido de YouTube, retornar una miniatura por defecto
        return "ruta/a/miniatura/default.jpg"; // Asegúrate de tener una miniatura por defecto
    }
}

// Comprobar si se han recibido los datos
if (isset($_POST['id_recurso'], $_POST['titulo'], $_POST['descripcion'], $_POST['url'], $_POST['categoria'])) {

    $id_recurso = $_POST['id_recurso'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $url = $_POST['url'];
    $categoria = $_POST['categoria'];

   
    $query = "SELECT imagen_url, thumbnail_url FROM recurso WHERE recurso_id = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("i", $id_recurso);
    $stmt->execute();
    $result = $stmt->get_result();
    $recurso = $result->fetch_assoc();
    $imagen_url_actual = $recurso['imagen_url']; 
    $thumbnail_url_actual = $recurso['thumbnail_url']; 

    if (filter_var($url, FILTER_VALIDATE_URL) && strpos($url, 'youtube.com') !== false) {
        $thumbnail_url = getYouTubeThumbnail($url); 
    } else {
        if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] == 0) {
            $thumbnail = $_FILES['thumbnail'];
            $thumbnail_url = 'uploads/' . basename($thumbnail['name']);
            move_uploaded_file($thumbnail['tmp_name'], $thumbnail_url);
        } else {
            $thumbnail_url = $thumbnail_url_actual;
        }
    }

    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $imagen = $_FILES['imagen'];
        $imagen_url = 'uploads/' . basename($imagen['name']);
        move_uploaded_file($imagen['tmp_name'], $imagen_url);
    } else {
        $imagen_url = $imagen_url_actual;
    }

    $query = "UPDATE recurso SET 
        titulo = ?, 
        descripcion = ?, 
        url = ?, 
        categoria = ?, 
        imagen_url = ?, 
        thumbnail_url = ? 
        WHERE recurso_id = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("ssssssi", $titulo, $descripcion, $url, $categoria, $imagen_url, $thumbnail_url, $id_recurso);

    if ($stmt->execute()) {

        header("Location: recursos.php?success=Recurso actualizado correctamente");
        exit();
    } else {
        echo "Error al actualizar el recurso: " . $stmt->error;
    }
    $stmt->close();
    $conexion->close();
} else {
    echo "Faltan datos del formulario.";
}
?>
