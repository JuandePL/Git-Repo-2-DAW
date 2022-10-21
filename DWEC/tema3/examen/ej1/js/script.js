const num = Math.random() // Generar número entre 0 y 1

// Si el número aleatorio es menor de 0.5, se mostrará un enlace a Myfpschool.com para abrirlo en otra pestaña.
// Si es mayor, se hará otra comprobación dependiendo de la hora del día a la que se abra la página:
// Si la hora es menor de 15, nos dará los buenos días, en caso contrario nos dará las buenas tardes.
// 
// He concatenado operadores ternarios porque es más conciso de escribir que un bloque if-else tradicional.
document.getElementById('result').innerHTML = `Número resultante: ${num.toFixed(2)}<br>
<b>${num < 0.5 ? `<a href ="http://myfpschool.com/" target="_blank">Enlace a Myfpschool.com</a>` : (new Date().getHours() < 15 ? "Buenos días" : "Buenas tardes")}</b>`