// Ejecuta las siguientes dos líneas de código
// y comprueba el contenido de la variable var.
// Interpreta y explica los resultados:

// dato = "Ronaldo 55"
// Sale 55 porque primero creamos un string
// y luego concatenamos los dos 5
var dato = "Ronaldo " + 5 + 5
document.getElementById('dato1').innerHTML = dato

// dato = "10 Ronaldo"
// Sale 10 porque primero se suman los numeros
// y luego se pasan a un string junto a 'Ronaldo'
var dato = 5 + 5 + " Ronaldo"
document.getElementById('dato2').innerHTML = dato