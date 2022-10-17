// Obtener la fecha actual
const fecha = new Date()

// Mostrar fecha por pantalla
// (pongo un +1 en el mes porque los meses en la clase Date() van de 0 a 11
document.getElementById('fecha').innerHTML =
    `Fecha de hoy: <b>${fecha.getDate()}/${fecha.getMonth() + 1}/${fecha.getFullYear()}</b>`