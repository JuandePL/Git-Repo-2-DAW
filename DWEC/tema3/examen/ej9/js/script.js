const result = document.getElementById('result')

const ciudades = ['28924;Estepona', '41620;Marchena', '41111;Almensilla', '08080;Barcelona', '41640;Osuna']

// Mostrar array
document.getElementById('array').innerHTML = `Contenido del array: ${ciudades.toString()}`

// Click boton
document.getElementById('submit').onclick = () => {
    const ciudad = document.getElementById('city').value // Sacamos valor del input

    // Si la ciudad deseada se encuentra en la array, saca su codigo
    for (i in ciudades) {
        if (ciudades[i].toLowerCase().includes(ciudad.toLowerCase())) {
            // Separa el string del array principal en una array externa y saca el codigo (primer valor de nueva array)
            result.innerHTML = `Código postal de ${ciudad}: ${ciudades[i].split(';')[0]}`
            return // Salir del bucle
        } else {
            result.innerHTML = `${ciudad} no se encuentra en la lista de ciudades.`
        }
    }
}
