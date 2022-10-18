const result = document.getElementById('result')
const limitElement = document.getElementById('limit')

// Cambiar rombo al pulsar el boton
// document.getElementById('submit').onclick = () => {
//     pintarRombo(limiteElement.value);
// }

// Cambiar rombo al cambiar el valor del input
limitElement.onchange = () => {
    pintarRombo(limitElement.value)
}

/**
 * Pintar rombo completo
 * @param {int} limit - Longitud del rombo
 */
function pintarRombo(limit) {
    let text = ""

    //Creciente
    for (let i = 0; i < limit; i++) {
        text += pintarLineaRombo(i)
    }

    //Decreciente
    for (let i = limit - 2; i >= 0; i--) {
        text += pintarLineaRombo(i)
    }

    result.innerHTML = text

    /**
     * Pinta la línea del rombo correspondiente
     * @param {int} i - Número de línea a pintar
     */
    function pintarLineaRombo(i) {
        const espacio = "&nbsp&nbsp"
        let asterisco = ""
        let espacioHTML = ""

        // Pintamos primero los espacios
        for (let k = 0; k < limit - i - 1; k++) {
            espacioHTML += espacio
        }

        // Luego pintamos el interior del rombo
        for (let j = 1; j <= 2 * i + 1; j++) {
            // Si son los bordes, pintamos asteriscos. Sino pintamos un espacio
            if (j == 1 || j == 2 * i + 1)
                asterisco += "*"
            else
                asterisco += espacio
        }

        return espacioHTML + asterisco + "<br>"
    }
}
