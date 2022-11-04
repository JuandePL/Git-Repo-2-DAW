const poblacion = prompt("Por favor introduzca una población")
const codigopostal = prompt(`Ahora introduzca el código postal de ${poblacion}`)

document.getElementById('result').innerHTML = poblacion.trim() != "" || codigopostal.trim() != ""
    ? `El código postal de ${poblacion} es: ${codigopostal}`
    : "Los datos no han sido rellenados correctamente."
