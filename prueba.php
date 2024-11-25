<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación</title>
     <!-- Incluir Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <!--Estilos Propios -->
     <link rel="stylesheet" href="styles.css"/>
</head>
<body style="background-color:#ccdbdc;">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #8ecae6;">
    <div class="container">
      <a class="navbar-brand" href="Well_Mind.php"><span class="text-primary">Well</span> Mind</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarW"
        aria-controls="navbarNaW" aria-expanded="false" aria-label="Toggle navigation">
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
       
        <h2>Evaluación de Ansiedad</h2>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
            INICIAR
          </button>
          <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Pregunta 1: ¿Se ha sentido muy excitado, nervioso o en tensión?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <input type="radio" id="p1-1" name="p1" value="1" class="ansiedad">
                        <label for="p1-1">Sí</label><br>
                        <input type="radio" id="p1-2" name="p1" value="0" required>
                        <label for="p1-2">No</label><br>
    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>          
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Siguiente</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Pregunta 2: ¿Ha estado muy preocupado por algo?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <input type="radio" id="p2-1" name="p2" value="1" class="ansiedad">
                        <label for="p2-1">Sí</label><br>
                        <input type="radio" id="p2-2" name="p2" value="0" required>
                        <label for="p2-2">No</label><br>
    
                    </div>
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Atrás</button>          
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Siguiente</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel3">Pregunta 3: ¿Se ha sentido muy irritable?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <input type="radio" id="p3-1" name="p3" value="1" class="ansiedad">
                        <label for="p3-1">Sí</label><br>
                        <input type="radio" id="p3-2" name="p3" value="0" required>
                        <label for="p3-2">No</label><br>
    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-target="#exampleModalToggle2" data-bs-dismiss="modal">Atrás</button>      
                  <button class="btn btn-primary"id="btnModal3" data-bs-toggle="modal" onclick="calcularResultados()">Siguiente</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel4">Pregunta 4: ¿Ha tenido dificultad para relajarse?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <input type="radio" id="p4-1" name="p4" value="1">
                        <label for="p4-1">Sí</label><br>
                        <input type="radio" id="p4-2" name="p4" value="0" required>
                        <label for="p4-2">No</label><br>
    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-target="#exampleModalToggle3" data-bs-dismiss="modal">Atrás</button>                
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle5" id="siguiente" data-bs-toggle="modal">Siguiente</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel5" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel5">Pregunta 5: ¿Ha dormido mal, ha tenido dificultades para dormir?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <input type="radio" id="p5-1" name="p5" value="1">
                        <label for="p5-1">Sí</label><br>
                        <input type="radio" id="p5-2" name="p5" value="0" required>
                        <label for="p5-2">No</label><br>
    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-target="#exampleModalToggle4" data-bs-dismiss="modal">Atrás</button>             
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle6" data-bs-toggle="modal">Siguiente</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModalToggle6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel6" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel6">Pregunta 6: ¿Ha tenido dolores de cabeza o de nuca?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <input type="radio" id="p6-1" name="p6" value="1">
                        <label for="p6-1">Sí</label><br>
                        <input type="radio" id="p6-2" name="p6" value="0" required>
                        <label for="p6-2">No</label><br>
    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-target="#exampleModalToggle5" data-bs-dismiss="modal">Atrás</button>      
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle7" data-bs-toggle="modal">Siguiente</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModalToggle7" aria-hidden="true" aria-labelledby="exampleModalToggleLabel7" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel7">Pregunta 7: ¿Ha tenido alguno de los siguientes síntomas: temblores, hormigueos, mareos, sudores, diarrea? (síntomas vegetativos)</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <input type="radio" id="p7-1" name="p7" value="1">
                        <label for="p7-1">Sí</label><br>
                        <input type="radio" id="p7-2" name="p7" value="0" required>
                        <label for="p7-2">No</label><br>
    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-target="#exampleModalToggle6" data-bs-dismiss="modal">Atrás</button>          
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle8" data-bs-toggle="modal">Siguiente</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModalToggle8" aria-hidden="true" aria-labelledby="exampleModalToggleLabel8" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel8">Pregunta 8: ¿Ha estado preocupado por su salud?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <input type="radio" id="p8-1" name="p8" value="1">
                        <label for="p8-1">Sí</label><br>
                        <input type="radio" id="p8-2" name="p8" value="0" required>
                        <label for="p8-2">No</label><br>
    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-target="#exampleModalToggle7" data-bs-dismiss="modal">Atrás</button>          
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle9" data-bs-toggle="modal">Siguiente</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModalToggle9" aria-hidden="true" aria-labelledby="exampleModalToggleLabel9" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel9">Pregunta 9: ¿Ha tenido alguna dificultad para conciliar el sueño, para quedarse dormido?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div>
                            <input type="radio" id="p9-1" name="p9" value="1">
                            <label for="p9-1">Sí</label><br>
                            <input type="radio" id="p9-2" name="p9" value="0" required>
                            <label for="p9-2">No</label><br>
                        </div>
    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-target="#exampleModalToggle8" data-bs-dismiss="modal">Atrás</button>                   
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggleRes" data-bs-toggle="modal" button type="button"  onclick="calcularResultados()">Finalizar y Enviar</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="exampleModalToggleRes" aria-hidden="true" aria-labelledby="exampleModalToggleLabelRes" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabelRes">Resultado</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div>
                            <h1><p class="modal-dialog mb-5" id="resultado"></p></h1>
                        </div>
    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>          
                  <button class="btn btn-primary" id="buttonredirect" data-bs-toggle="modal">Ir a Recursos</button>
                </div>
              </div>
            </div>
          </div>
          <br><br>

          <h2>Evaluación de Depresión</h2>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalToggleD1">
            INICIAR
          </button>
          <div class="modal fade" id="exampleModalToggleD1" aria-hidden="true" aria-labelledby="exampleModalToggleLabelD" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel9">1. Tristeza</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div>
                            <input type="checkbox" id="dp1-1" name="dp1" value="0">
                            <label for="dp1-1">No me siento triste.</label><br>
                            <input type="checkbox" id="dp1-2" name="dp1" value="1" required>
                            <label for="dp1-2">Me siento triste gran parte del tiempo </label><br>
                            <input type="checkbox" id="dp1-3" name="dp1" value="2" required>
                            <label for="dp1-3">Me siento triste todo el tiempo.</label><br>
                            <input type="checkbox" id="dp1-4" name="dp1" value="3" required>
                            <label for="dp1-4">Me siento tan triste o soy tan infeliz que no puedo soportarlo</label><br>
                        </div>
    
                    </div>
                </div>
                <div class="modal-footer">
                  
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>                       
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggleD2" data-bs-toggle="modal" button type="button">Siguiente</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="modal fade" id="exampleModalToggleD2" aria-hidden="true" aria-labelledby="exampleModalToggleLabelD" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel9">2. Pesimismo</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div>
                            <input type="checkbox" id="dp2-1" name="dp2" value="0">
                            <label for="dp2-1">No estoy desalentado respecto del mi futuro.</label><br>
                            <input type="checkbox" id="dp2-2" name="dp2" value="1" required>
                            <label for="dp2-2">Me siento más desalentado respecto de mi futuro</label><label>que lo que solía estarlo.</label><br>
                            <input type="checkbox" id="dp2-3" name="dp2" value="2" required>
                            <label for="dp2-3">No espero que las cosas funcionen para mi.</label><br>
                            <input type="checkbox" id="dp2-4" name="dp2" value="3" required>
                            <label for="dp2-4">Siento que no hay esperanza para mi futuro </label><label>y que sólo puede empeorar.</label><br>
                        </div>
    
                    </div>
                </div>
                <div class="modal-footer">
                  
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>                       
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggleD2" data-bs-toggle="modal" button type="button">Siguiente</button>
                </div>
              </div>
            </div>
          </div>


        <p class="modal-dialog mb-5" id="resultado"></p>
    </div>
    
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>