let counter = 0;

// Incrementamos el contador y enviamos mensaje de vuelta al Worker
function incrementCounter() {
    postMessage(counter); // Mensaje
    counter += 2; // Incremento
    setTimeout(() => { incrementCounter() }, 1000); // Ejecución cada segundo
}

incrementCounter();