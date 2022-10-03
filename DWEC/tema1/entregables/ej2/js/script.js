const url = "https://via.placeholder.com/"
const sizes = [150, 300, "728x90?text=Esto es una imagen de la ostia", "500x120.webp?text=Otra imagen boff", "225x127.png?text=Esto no para"]
const img = document.getElementById('img')

function changeImage() {
    img.src = url + sizes[index] // Cambiamos imagen
}

// Inicializamos imagen
let index = 0
changeImage()

img.onclick = () => {
    // Si el index se pasa del array, la inicializamos de nuevo
    index++
    if (!sizes[index]) { index = 0; }

    changeImage()
}