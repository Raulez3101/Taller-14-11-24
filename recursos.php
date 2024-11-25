<?php
require_once 'conexion.php';

// Obtener los recursos de la base de datos
$query = "SELECT * FROM recurso ORDER BY fecha_creacion DESC";
$result = $conexion->query($query);

// Comprobar si hay resultados
$resources = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $resources[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #8ecae6;">
        <div class="container">
            <a class="navbar-brand" href="Well_Mind.php"><span class="text-primary">Well</span> Mind</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarW" aria-controls="navbarW" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarW">
                <ul class="navbar-nav ms-1 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="Well_Mind.php">Inicio</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="prueba.php">Evaluación</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="recursos.php">Recursos</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Ayuda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 100px;">
        <!-- Botón para abrir el modal -->
        <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addResourceModal">Añadir Recurso</button>

        <div class="row">
            <?php foreach ($resources as $resource): ?>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <?php if (!empty($resource['thumbnail_url'])): ?>
                            <img src="<?php echo $resource['thumbnail_url']; ?>" class="card-img-top" alt="Miniatura del video">
                        <?php elseif (!empty($resource['imagen_url'])): ?>
                            <img src="<?php echo $resource['imagen_url']; ?>" class="card-img-top" alt="Imagen del recurso">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $resource['titulo']; ?></h5>
                            <p class="card-text"><?php echo $resource['descripcion']; ?></p>
                            <a href="<?php echo $resource['url']; ?>" class="btn btn-primary" target="_blank">Ver Recurso</a>

                            <!-- Botón de editar que abre el modal -->
                            <button class="btn btn-warning mt-2" data-bs-toggle="modal" data-bs-target="#editarModal<?php echo $resource['recurso_id']; ?>">Editar</button>

                            <!-- Botón de eliminar -->
                            <form action="eliminar_recurso.php" method="POST" class="d-inline-block mt-2">
                                <input type="hidden" name="id_recurso" value="<?php echo $resource['recurso_id']; ?>">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal de edición para el recurso -->
                <div class="modal fade" id="editarModal<?php echo $resource['recurso_id']; ?>" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editarModalLabel">Editar Recurso</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <form action="procesar_editar_recurso.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_recurso" value="<?php echo $resource['recurso_id']; ?>">

                                    <div class="mb-3">
                                        <label for="titulo" class="form-label">Título</label>
                                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $resource['titulo']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="descripcion" class="form-label">Descripción</label>
                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?php echo $resource['descripcion']; ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="url" class="form-label">URL del Recurso</label>
                                        <input type="url" class="form-control" id="url" name="url" value="<?php echo $resource['url']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="categoria" class="form-label">Categoría</label>
                                        <input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $resource['categoria']; ?>" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Actualizar Recurso</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Modal para añadir recurso -->
    <div class="modal fade" id="addResourceModal" tabindex="-1" aria-labelledby="addResourceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addResourceModalLabel">Añadir Recurso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="procesar_recurso.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo de Recurso</label>
                            <select class="form-select" id="tipo" name="tipo" onchange="toggleFields()">
                                <option value="video">Video</option>
                                <option value="artículo">Artículo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoría</label>
                            <input type="text" class="form-control" id="categoria" name="categoria" required>
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">URL del Recurso</label>
                            <input type="url" class="form-control" id="url" name="url" required>
                        </div>
                        <div class="mb-3" id="image_upload_container" style="display: none;">
                            <label for="imagen" class="form-label">Subir Imagen</label>
                            <input type="file" class="form-control" id="imagen" name="imagen">
                        </div>
                        <div class="mb-3" id="youtube_url_container" style="display: none;">
                            <label for="youtube_url" class="form-label">URL del Video (YouTube)</label>
                            <input type="url" class="form-control" id="youtube_url" name="youtube_url">
                        </div>
                        <button type="submit" class="btn btn-primary">Añadir Recurso</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function toggleFields() {
            var tipo = document.getElementById('tipo').value;
            if (tipo === 'video') {
                document.getElementById('youtube_url_container').style.display = 'block';
                document.getElementById('image_upload_container').style.display = 'none';
            } else {
                document.getElementById('youtube_url_container').style.display = 'none';
                document.getElementById('image_upload_container').style.display = 'block';
            }
        }
    </script>
</body>
</html>
