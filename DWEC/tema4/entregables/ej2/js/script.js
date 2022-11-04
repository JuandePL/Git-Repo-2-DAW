// Inicializar variables
const originalSize = 1, action = document.getElementById('action')
let size = originalSize

// Mostramos tamaño inicial
action.innerHTML = `El tamaño actual es de ${originalSize}`

/**
 * Funcion para modificar el tamaño del texto en em
 * @param {string} evento - El evento a realizar
 * @param {int} pixeles - Los pixeles a modificar
 */
function modificarTexto(evento, pixeles) {
    switch (evento) {
        case 'aumentar':
            size += pixeles
            action.innerHTML = "Has aumentado el texto"
            break;
        case 'reducir':
            size -= pixeles
            action.innerHTML = "Has reducido el texto"
            break
        case 'original':
            size = originalSize
            action.innerHTML = "Has resetado el texto a su tamaño original"
            break
        default:
            action.innerHTML = "No se reconoce la acción"
            break
    }

    // Aplicar nuevo tamaño de fuente al parrafo y mostrarlo por pantalla
    const fontSize = `${size}em`
    document.getElementById('result').style.fontSize = fontSize
    action.innerHTML += `<br><br>El tamaño actual es de ${fontSize}`
}
