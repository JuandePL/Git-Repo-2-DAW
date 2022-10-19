const random = Math.random() // Numero random de 0 a 1

// Si el numero es mayor de 0.5 lo muestra
const message = random > 0.5 ? "Numero > 0.5" : "Numero < 0.5"

// Mostrar numero y resultado por pantalla
document.getElementById('result').innerHTML = `${random.toFixed(2)} <br><br><b>${message}</b>`