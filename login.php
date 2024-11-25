<?php 
include "iniciar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section class="vh-100" style="background-color: #669bbc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="/img/img1.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                  <h2 class="text-center mb-4">Iniciar sesión</h2>

                        <!-- Mostrar mensaje de error si existe -->
                        <?php if (!empty($mensajeError)): ?>
                            <div class="alert alert-danger"><?php echo $mensajeError; ?></div>
                        <?php endif; ?>

                        <!-- Mostrar mensaje de éxito si existe -->
                        <?php if (!empty($mensajeExito)): ?>
                            <div class="alert alert-success"><?php echo $mensajeExito; ?></div>
                        <?php endif; ?>

                        <!-- Formulario de Inicio de Sesión -->
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico:</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Introduce tu Correo Electrónico" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Introduce tu Contraseña" required>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button type="button" class="btn btn-secondary" onclick="window.location.href='registro.php'">Registrarse</button>
                            </div>
                        </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
</body>
</html>
