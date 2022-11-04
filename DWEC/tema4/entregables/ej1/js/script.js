// Funcion para mostrar fecha
function muestraFecha() {
    document.getElementById('result').innerHTML = Date()
}

// Asignar funcion a onclick
document.getElementById('button').onclick = muestraFecha
