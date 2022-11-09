const result = document.getElementById('result')

document.getElementById('submit').onclick = () => {
    // Recoger datos del formulario
    const name = document.getElementById('name').value,
        surname = document.getElementById('surname').value,
        email = document.getElementById('email').value,
        phone = document.getElementById('tlf').value
    let error = ""

    // Comprobar si el nombre esta relleno
    if (!name || name.trim() === "") {
        error += "El nombre está vacío.<br>"
    }

    // Comprobar si los apellidos estan rellenos
    if (!surname || surname.trim() === "") {
        error += "Los apellidos están vacíos.<br>"
    }

    // Comprobar si el email es valido con un regex
    if (!email.match(/^\w.+@[a-zA-Z.]+?\.[a-zA-Z]{2,20}$/)) {
        error += "El email no es válido.<br>"
    }

    // Comprobar si el telefono es valido con un regex
    if (!phone.match(/[0-9]{9}/)) {
        error += "El teléfono no es válido."
    }

    // Si hay error, mostrar los fallos. Sino mostrar nombre y apellidos
    if (error === "") {
        result.innerHTML = `Bienvenido al programa, ${name} ${surname}.<br>`
            + `Tu correo es ${email} <br> Tu teléfono es el ${phone}`
    } else {
        result.innerHTML = `ERROR: No se han podido procesar los datos:<br>${error}`
    }
}