const poblacion = prompt("Por favor introduzca una población")
const codigopostal = prompt(`Ahora introduzca el código postal de ${poblacion}`)

// Comprobamos si los datos estan rellenados correctamente.
// Si alguno falla, se lo hacemos saber al usuariro
document.getElementById('result').innerHTML = poblacion.trim() != "" || codigopostal.trim() != ""
    ? `El código postal de ${poblacion} es: ${codigopostal}`
    : "Los datos no han sido rellenados correctamente."
