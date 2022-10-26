const result = document.getElementById('result')

const ciudades = ['28924;estepona', '41620;marchena', '41111;almensilla', '08080;barcelona', '41640;osuna']

// Mostrar array
document.getElementById('array').innerHTML = `Contenido del array: ${ciudades.toString()}`

// Click boton
document.getElementById('submit').onclick = () => {
    const ciudad = document.getElementById('city').value // Sacamos valor del input

    // Si la ciudad deseada se encuentra en la array, saca su codigo
    for (i in ciudades) {
        if (ciudades[i].includes(ciudad.toLowerCase())) {
            // Separa el string del array principal en una array externa y saca el codigo (primer valor de nueva array)
            result.innerHTML = `Código postal de ${ciudad}: ${ciudades[i].split(';')[0]}`
            return // Salir del bucle
        } else {
            result.innerHTML = `${ciudad} no se encuentra en la lista de ciudades.`
        }
    }
}
