<?php
// Incluir el archivo de conexión a la base de datos
require_once 'conexion.php';

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo = $_POST['tipo'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $url = $_POST['url'];
    
    // Variables para las URLs de la imagen y miniatura
    $imagen_url = '';
    $thumbnail_url = '';

    // Verificar si el tipo es video y si se ha proporcionado una URL de YouTube
    if ($tipo == 'video' && !empty($url)) {
        // Extraer la ID del video de YouTube y generar la miniatura
        $thumbnail_url = getYouTubeThumbnail($url);
    } elseif ($tipo == 'artículo' && isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        // Subir una imagen si el tipo es artículo
        $imagen_url = 'uploads/' . basename($_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen_url);
    }
    
    // Preparar la consulta SQL para insertar el recurso
    $query = "INSERT INTO recurso (tipo_recurso, titulo, descripcion, categoria, url, imagen_url, thumbnail_url, fecha_creacion) 
              VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
    
    if ($stmt = $conexion->prepare($query)) {
        $stmt->bind_param("sssssss", $tipo, $titulo, $descripcion, $categoria, $url, $imagen_url, $thumbnail_url);
        $stmt->execute();
        $stmt->close();
        
        // Redirigir a la página de recursos
        header("Location: recursos.php");
        exit;
    } else {
        echo "Error: " . $conexion->error;
    }
}

// Función para obtener la miniatura de YouTube
function getYouTubeThumbnail($url) {
    // Extraer el ID del video usando una expresión regular
    preg_match("/(?:https?:\/\/(?:www\.)?youtube\.com\/(?:[^\/]+\/[^\n\s]*\/|(?:v|e(?:mbed)?)\/|.*[?&]v=))([^\"&?\/\s]{11})/i", $url, $matches);
    
    // Si se encuentra el ID del video, generar la URL de la miniatura
    if (isset($matches[1])) {
        return "https://img.youtube.com/vi/" . $matches[1] . "/0.jpg";
    } else {
        // Si no es una URL de YouTube válida, devolver una miniatura por defecto
        return "ruta/a/miniatura/default.jpg"; // Ruta a una miniatura por defecto
    }
?>
