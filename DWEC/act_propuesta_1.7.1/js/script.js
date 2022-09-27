function changeContent() {
    document.getElementById('prueba').innerHTML = 'CAMBIANDO el contenido'
}

document.getElementById('boton-1').addEventListener("click", changeContent)