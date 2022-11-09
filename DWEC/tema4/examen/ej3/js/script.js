const result = document.getElementById('result')

document.getElementById('submit').onclick = () => {
    // Recoger datos del formulario
    const name = document.getElementById('name').value,
        surname = document.getElementById('surname').value,
        email = document.getElementById('email').value
    let error = ""

    // Comprobar si el nombre esta relleno
    if (!name || name.trim() === "") {
        error += "El nombre está vacío.<br>"
    }

    // Comprobar si los apellidos estan rellenos
    if (!surname || surname.trim() === "") {
        error += "Los apellidos están vacíos."
    }

    // Comprobar si el email es valido con un regex
    if (!email.match(/^\w.+@[a-zA-Z_]+?\.[a-zA-Z]{2,20}$/)) {
        error += "El email no es válido."
    }

    // Si hay error, mostrar los fallos. Sino mostrar nombre y apellidos
    if (error === "") {
        result.innerHTML = `Bienvenido al programa, ${name} ${surname}.<br>`
            + `Tu correo es ${email}`
    } else {
        result.innerHTML = `ERROR: No se han podido procesar los datos:<br>${error}`
    }
}