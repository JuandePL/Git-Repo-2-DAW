// Inicializar variables e iniciar array para almacenar los valores de cada parrafo
const originalSize = 1, action = document.getElementById('action')
const sizes = [originalSize, originalSize, originalSize]

// Mostramos tamaño inicial
action.innerHTML = "Selecciona un parrafo y modifica su tamaño con los botones"

/**
 * Funcion para modificar el tamaño del texto en em
 * @param {string} evento - El evento a realizar
 * @param {int} pixeles - Los pixeles a modificar
 */
function modificarTexto(evento, pixeles) {
    const idParrafo = document.getElementById('parrafo').value
    const parrafo = document.getElementById(`parrafo${idParrafo}`)
    let size = sizes[idParrafo - 1]

    // Si el parrafo existe, modifica el tamaño
    if (parrafo !== null && idParrafo.trim() !== "") {
        switch (evento) {
            case 'aumentar':
                size += pixeles
                action.innerHTML = `Has aumentado el texto del párrafo ${idParrafo}`
                break;
            case 'reducir':
                size -= pixeles
                action.innerHTML = `Has reducido el texto del párrafo ${idParrafo}`
                break
            case 'original':
                size = originalSize
                action.innerHTML = `Has resetado el texto del párrafo ${idParrafo} a su tamaño original`
                break
            default:
                action.innerHTML = "No se reconoce la acción"
                break
        }

        // Guardar nuevo tamaño del parrafo en el array redondeando decimales
        sizes[idParrafo - 1] = Math.round(size * 100) / 100

        // Mostrar tamaño del parrafo por pantalla
        const fontSizeString = `${sizes[idParrafo - 1]}em`
        parrafo.style.fontSize = fontSizeString
        document.getElementById(`tamano${idParrafo}`).innerHTML = fontSizeString
        action.innerHTML += `<br>El tamaño actual es de ${fontSizeString}`
    } else {
        action.innerHTML = `El párrafo ${idParrafo} no existe.`
    }

}
