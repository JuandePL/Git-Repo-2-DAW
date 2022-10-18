const caja = document.getElementById('caja')
const limite = 4

// Cambiar margen en pantalla cada vez que sea modificado por el usuario
document.getElementById('leftMargin').onchange = () => {
    const leftMargin = document.getElementById('leftMargin').value
    pintarRomboCompleto(leftMargin);
}

/**
 * Pintar rombo completo
 * @param {int} limit - Longitud del rombo
 */
function pintarRomboCompleto(leftMargin) {
    let text = ""

    //Creciente
    for (let i = 0; i < limite; i++) {
        text += pintarLineaRombo(i, leftMargin);
    }

    //Decreciente
    for (let i = limite - 2; i >= 0; i--) {
        text += pintarLineaRombo(i, leftMargin);
    }

    caja.innerHTML = text

    /**
     * Pinta la línea del rombo correspondiente
     * @param {int} i - Número de línea a pintar
     * @param {int} leftMargin - Margen izquierdo
     */
    function pintarLineaRombo(i, leftMargin) {
        const espacio = "&nbsp&nbsp"
        let asterisco = "";
        let espacioHTML = "";

        // Añadir margen izquierdo
        espacioHTML += espacio.repeat(leftMargin);

        // Añadir espacios
        for (let k = 0; k < limite - i - 1; k++) {
            espacioHTML += espacio;
        }

        // Añadir relleno
        for (let j = 1; j <= 2 * i + 1; j++) {
            asterisco += "*";
        }

        return espacioHTML + asterisco + "<br>";
    }
}
