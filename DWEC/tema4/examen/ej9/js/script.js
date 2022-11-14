// Cuanto la ventana se redimensione, mostrara los nuevos valores
window.onresize = () => {
    document.getElementById('result').innerHTML = "VENTANA REDIMENSIONADA<br>"
    + `Tamaño de la ventana: anchura=${window.outerWidth}, altura=${window.outerHeight}`
}