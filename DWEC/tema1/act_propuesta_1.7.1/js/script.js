const boton = document.getElementById('boton-1')
const texto = document.getElementById('prueba')

function changeContent() {
    texto.innerHTML = 'CAMBIANDO el contenido'
}

boton.addEventListener("click", changeContent)
// boton.addEventListener("click", () => {
//     texto.innerHTML = 'CAMBIANDO el contenido'
// })