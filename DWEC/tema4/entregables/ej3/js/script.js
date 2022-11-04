/**
 * Funcion que cambia la visibilidad del parrafo deseado
 * @param {int} numero - Numero del parrafo a mostrar/ocultar
 */
function ocultarParrafo(numero) {
    const element = document.getElementById(`parrafo${numero}`)

    // Cambia la clase CSS dependiendo de la clase actual de la que dispone el parrafo
    element.className = element.className == 'oculto' ? 'visible' : 'oculto'
}
