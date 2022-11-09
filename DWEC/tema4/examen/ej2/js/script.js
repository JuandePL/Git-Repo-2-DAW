const result = document.getElementById('result')

document.getElementById('submit').onclick = () => {
    // Recoger datos del formulario
    const name = document.getElementById('name').value,
        surname = document.getElementById('surname').value
    let error = ""

    // Comprobar si el nombre esta relleno
    if (!name || name.trim() === "") {
        error += "El nombre está vacío.<br>"
    }
    
    // Comprobar si los apellidos estan rellenos
    if (!surname || surname.trim() === "") {
        error += "Los apellidos están vacíos."
    }

    // Si hay error, mostrar los fallos. Sino mostrar nombre y apellidos
    if (error === "") {
        result.innerHTML = `Bienvenido al programa, ${name} ${surname}.`
    } else {
        result.innerHTML = `ERROR: No se han podido procesar los datos:<br>${error}`
    }
}