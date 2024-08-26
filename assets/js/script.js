// Variables globales
var indiceActual = 0;
var palabraAsociada = palabras[indiceActual];
var rutaAudio = rutasAudios[indiceActual];
var palabrasCorrectas = JSON.parse(sessionStorage.getItem('palabrasCorrectas')) || [];
var palabrasIncorrectas = JSON.parse(sessionStorage.getItem('palabrasIncorrectas')) || [];
var respuestaInput = document.getElementById('respuestaInput');
var botonNext = document.getElementById('botonNext');
var botonCheck = document.getElementById('botonCheck');
botonNext.disabled = true;
respuestaInput.disabled = false;

window.onload = function() {
    actualizarPalabra();
    actualizarListas();
};

function reproducirAudio() {
    var audio = document.getElementById("miAudio");
    audio.src = rutaAudio;
    audio.play();
}

function actualizarPalabra() {
    palabraAsociada = palabras[indiceActual];
    rutaAudio = rutasAudios[indiceActual];
}

function actualizarLista(lista, palabras) {
    lista.innerHTML = '';
    palabras.forEach(function(palabra) {
        var li = document.createElement('li');
        li.textContent = palabra;
        lista.appendChild(li);
    });
}

function actualizarListas() {
    var listaCorrectas = document.getElementById('listaCorrectas');
    var listaIncorrectas = document.getElementById('listaIncorrectas');
    actualizarLista(listaCorrectas, palabrasCorrectas);
    actualizarLista(listaIncorrectas, palabrasIncorrectas);
}

function verificarRespuesta() {
    var respuesta = respuestaInput.value.trim();
    var resultadoLabel = document.getElementById('resultadoLabel');
   
    if (respuesta.toLowerCase() === palabraAsociada.toLowerCase()) {
        resultadoLabel.textContent = 'Correct!';
        resultadoLabel.style.color = 'green';
        botonNext.disabled = false;
        respuestaInput.disabled = true;
        palabrasCorrectas.push(palabraAsociada);
        sessionStorage.setItem('palabrasCorrectas', JSON.stringify(palabrasCorrectas));
        actualizarLista(document.getElementById('listaCorrectas'), palabrasCorrectas);
        document.getElementById('botonNext').disabled = false;
        
    } else if (respuesta === '') {
        resultadoLabel.textContent = 'Please enter a word.';
        resultadoLabel.style.color = 'Purple';
        respuestaInput.disabled = false;

    } else {
        resultadoLabel.textContent = 'The correct answer is: ' + palabraAsociada;
        resultadoLabel.style.color = 'red';
        botonNext.disabled = false;
        respuestaInput.disabled = true;
        palabrasIncorrectas.push(palabraAsociada);
        sessionStorage.setItem('palabrasIncorrectas', JSON.stringify(palabrasIncorrectas));
        actualizarLista(document.getElementById('listaIncorrectas'), palabrasIncorrectas);
       
    }

    respuestaInput.value = ''; 
    console.log('Palabras correctas:', palabrasCorrectas);
    console.log('Palabras incorrectas:', palabrasIncorrectas);
}


function siguientePalabra() {
    var resultadoLabel = document.getElementById('resultadoLabel');
    indiceActual++;
    botonNext.disabled = true;
    respuestaInput.disabled = false;
    if (indiceActual < palabras.length) {
        actualizarPalabra();
        respuestaInput.value = '';
        respuestaInput.disabled = false; 
        resultadoLabel.textContent = '';
    } else {
        sessionStorage.setItem('palabrasCorrectas', JSON.stringify(palabrasCorrectas));
        sessionStorage.setItem('palabrasIncorrectas', JSON.stringify(palabrasIncorrectas));
        
        var cantidadCorrectas = palabrasCorrectas.length;
        var cantidadIncorrectas = palabrasIncorrectas.length;
        
        var url = 'resultado.php?correctas=' + cantidadCorrectas + '&incorrectas=' + cantidadIncorrectas;
        window.location.href = url;
    }
}


window.addEventListener('beforeunload', function() {
    sessionStorage.removeItem('palabrasCorrectas');
    sessionStorage.removeItem('palabrasIncorrectas');
});
