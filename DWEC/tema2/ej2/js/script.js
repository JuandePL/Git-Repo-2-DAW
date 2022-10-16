// Crear objeto con los datos correspondientes
const usuario = {
    nombre: 'Dimas',
    edad: 28,
    altura: 185
}

// Mostrar los datos del usuario por pantalla
document.getElementById('usuario').innerHTML = `El usuario ${usuario.nombre}
tiene ${usuario.edad} años y mide ${usuario.altura} centímetros.`