<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Well Mind</title>
  <!-- Incluir Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!--Estilos Propios -->
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #8ecae6;">
    <div class="container">
      <a class="navbar-brand" href="Well_Mind.php"><span class="text-primary">Well</span> Mind</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarW"
        aria-controls="navbarW" aria-expanded="false" aria-label="Toggle navigation">
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
  <div id="carouselW" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselW" data-bs-slide-to="0" class="active"
        aria-current="true"></button>
      <button type="button" data-bs-target="#carouselW" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselW" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/img5.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>empieza ahora</h5>
          <p>Nunca es tarde para mejorar, empieza tu proceso de mejora a un futuro mejor
          </p>
          <a href="prueba.php" class="btn mt-3" style="background-color:#eae2b7;"> Inicia Ya</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/img3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>¿no sabes donde empezar?</h5>
          <p>Tranquil@ puedes echarle un vistazo a los recursos antes de iniciar, te sugerimos pero pasar primero por una evaluacion previa ;)
          </p>
          <a href="recursos.php" class="btn mt-3"style="background-color:#eae2b7;"> Vamos!</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/img4.png" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Ayuda a un click</h5>
          <p>La ayuda psicológica es fundamental en tu proceso de mejora, no tengas miedo a buscarla.</p>
          <a href="#" class="btn mt-3"style="background-color:#eae2b7;"> Buscar</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselW" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselW" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container">
    <h1 class="text-center mt-3">Bienvenido a Well Mind</h1>
    <h3>Aquí encontrarás un espacio seguro y confidencial para evaluar tu bienestar emocional,
      acceder a recursos personalizados y conectar con profesionales cuando lo necesites.
      Nuestro objetivo es ayudarte a cuidar tu salud mental de manera proactiva, brindándote herramientas para manejar
      la ansiedad, el estrés y la depresión.
      No estás solo en este viaje; estamos aquí para acompañarte en cada paso.
      ¡Comienza ahora y descubre cómo podemos apoyarte!</h3>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-4 colo-xl-4 d-flex">
        <div class="card flex-fill mt-4 mb-5">
          <img src="/img/card1.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">A veces, la vida nos presenta desafíos que pueden hacernos sentir abrumados y tristes.
              No estás solo; es normal sentirte así.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-4 colo-xl-4 d-flex ">
        <div class="card flex-fill mt-4 mb-5">
          <img src="/img/card2.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Es en los momentos más oscuros donde una pequeña chispa de esperanza puede guiarnos. La
              ayuda está a un paso.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-4 colo-xl-4 d-flex">
        <div class="card flex-fill mt-4 mb-5">
          <img src="/img/card3.avif" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Superar momentos difíciles es posible. Con el apoyo adecuado, puedes encontrar tu
              camino hacia la felicidad y el bienestar.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>

