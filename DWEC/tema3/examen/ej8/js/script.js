let perrillos = ["Rocket", "Flash", "Bella", "Slugger"]

// a) Eliminar elementos de la array con una 'c' o 'C'
const perrillosA = [...perrillos] // Duplicar array
for (const key in perrillosA) {
    if (perrillosA[key].toLowerCase().includes('c')) perrillosA.splice(key, 1)
}
document.getElementById('apartado1').innerHTML = `Resultado del apartado a): ${perrillosA.toString()}` +
    "<br><b>Nota</b>: El array de este apartado es un duplicado del original y no afecta a los demás apartados del ejercicio."

// b) Pasar string ciudades a array y añadirlo a la array perrillos
const ciudades = "Manchester,London,Liverpool,Birmingham,Leeds,Carlisle"
perrillos = perrillos.concat(ciudades.split(',')) // Con concat podemos concatenar arrays
document.getElementById('apartado2').innerHTML = `Resultado del apartado b): ${perrillos.toString()}`

// c) Comprobar si funciona el siguiente codigo
perrillos.unshift('Estepona')
document.getElementById('apartado3').innerHTML = `Resultado del apartado c): ${perrillos.toString()}`
