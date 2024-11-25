let totalSuma = 0; // Variable global para la suma total de todas las preguntas
const usuario = "Raulez";
const password = "9514697";

const loginForm = document.getElementById("loginform");
const errorMessage = document.getElementById("error-message");

loginForm.addEventListener('submit', function (event) {
    event.preventDefault();

    const ingresarUser = document.getElementById("username").value;
    const ingresarPassword = document.getElementById("password").value;

    if (ingresarUser == usuario && ingresarPassword == password) {
        errorMessage.textContent = "";
        window.location.href = "Well_Mind.php";
    } else {
        errorMessage.textContent = "Usuario o contraseña incorrectos";
    }
});

function calcularResultados() {
    let suma = 0;

    // Obtener los valores seleccionados
    const p1 = document.querySelector('input[name="p1"]:checked');
    const p2 = document.querySelector('input[name="p2"]:checked');
    const p3 = document.querySelector('input[name="p3"]:checked');

    // Verificar si las primeras 3 preguntas están respondidas
    if (p1 && p2 && p3) {
        // Sumar los valores de las respuestas
        suma = parseInt(p1.value) + parseInt(p2.value) + parseInt(p3.value);
        totalSuma = suma;

        evaluarResultados(suma);
    } else {
        alert("Por favor, responde todas las preguntas");
    }
}

function evaluarResultados(suma) {
    if (suma === 3) {
        ResultadosAdicionales(); 
        $('#exampleModalToggle4').modal('show');
    } else{
        $('#exampleModalToggleRes').modal('show'); // Muestra Resultado
        ResultadoFinal(totalSuma); // Mostrar resultados finales
    }
}

function ResultadosAdicionales() {
    let suma = 0;
    const p4 = document.querySelector('input[name="p4"]:checked');
    const p5 = document.querySelector('input[name="p5"]:checked');
    const p6 = document.querySelector('input[name="p6"]:checked');
    const p7 = document.querySelector('input[name="p7"]:checked');
    const p8 = document.querySelector('input[name="p8"]:checked');
    const p9 = document.querySelector('input[name="p9"]:checked');

    // Verificar que todas las preguntas estén respondidas
    if (p4 && p5 && p6 && p7 && p8 && p9) {
        // Sumar los valores de las respuestas
        suma = parseInt(p4.value) + parseInt(p5.value) + parseInt(p6.value) +
               parseInt(p7.value) + parseInt(p8.value) + parseInt(p9.value);

        totalSuma += suma; // Acumular la suma total
        ResultadoFinal(totalSuma); // Mostrar resultados finales
    } 
}

function ResultadoFinal(totalSuma) {
    let resultadoTexto = "";
    if (totalSuma > 6) {
        resultadoTexto = "Tu estado emocional es preocupante. Contacta a un Profesional.";
    } else if (totalSuma > 3) {
        resultadoTexto = "Tu estado emocional es moderado, puedes ir a Recursos.";
    } else {
        resultadoTexto = "Tu estado emocional es bueno, puedes ir a Recursos o salir.";
    }
    document.getElementById('resultado').innerText = resultadoTexto;
}

// Evento para el botón de siguiente en el modal 4

