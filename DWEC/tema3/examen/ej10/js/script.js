const result = document.getElementById('result')

// Crear cookies
document.getElementById('submit').onclick = () => {
    const nombre = document.getElementById('name').value
    const description = document.getElementById('description').value

    // Si los datos estan introducidos, añadir las cookies
    if (!nombre || !description) {
        result.innerHTML = "Faltan datos por rellenar"
    } else {
        setCookie("name", nombre)
        setCookie("description", description)
        alert("Cookies guardadas")
    }
}

// Borra todas las cookies
document.getElementById('delete').onclick = () => {
    document.cookie = "name=; max-age=0"
    document.cookie = "description=; max-age=0"
}

/**
 * Función para crear una cookie
 * 
 * @param {string} name Nombre de la cookie
 * @param {string} value Valor de la cookie
 * @param {int|float} expireDays Días de vida de la cookie
 */
function setCookie(name, value, expireDays = 1) {
    const date = new Date()
    date.setTime(date.getTime() + (expireDays * 24 * 60 * 60 * 1000))
    let expires = "expires=" + date.toUTCString()
    document.cookie = name + "=" + value + ";" + expires
}
