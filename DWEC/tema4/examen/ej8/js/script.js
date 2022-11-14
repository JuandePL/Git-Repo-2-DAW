// Inicializamos variables
const textElement = document.getElementById('text')
const text = 'Cum unde blanditiis qui labore. ' +
    'Dignissimos sit quia ipsam earum. Iusto nisi soluta laboriosam ea maxime itaque.'

// Funcion para cambiar el texto del elemento
function changeText(text) { textElement.innerHTML = text }

// Inicializar texto
changeText(text)

// Si el raton entra en el texto, se pone en mayusculas
textElement.onmouseover = () => { changeText(text.toUpperCase()) }

// Si el raton sale del texto, vuelve a su estado original
textElement.onmouseleave = () => { changeText(text) }
