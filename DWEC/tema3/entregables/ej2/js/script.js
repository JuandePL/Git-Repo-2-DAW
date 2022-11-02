// Guardar cookie
document.getElementById('save').onclick = () => {
    const username = document.getElementById('username').value
    document.cookie = `usuario=${encodeURIComponent(username)}`
}

// Borrar cookie con max-age=0 para indicar que la cookie no existe
document.getElementById('delete').onclick = () => {
    document.cookie = 'usuario=; max-age=0'
}

// Mostrar cookies
document.getElementById('show').onclick = () => {
    alert(document.cookie)
}