let perrillos = ["Rocket", "Flash", "Bella", "Slugger"]

// b) Pasar string ciudades a array y añadirlo a la array perrillos
const ciudades = "Manchester,London,Liverpool,Birmingham,Leeds,Carlisle"
perrillos = perrillos.concat(ciudades.split(',')) // Con concat podemos concatenar arrays
document.getElementById('apartado2').innerHTML = `Resultado del apartado b): ${perrillos.toString()}`

// c) 
perrillos.unshift('Estepona')
document.getElementById('apartado3').innerHTML = `Resultado del apartado c): ${perrillos.toString()}`
