document.getElementById('submit').onclick = () => {
    // Recogemos los valores del formuulario
    const day = document.getElementById('day').value
    const month = document.getElementById('month').value
    const year = document.getElementById('year').value

    // Lo convertimos a una fecha
    const date = new Date(year, month, day)

    // Mostramos lo resultados
    let text = `La fecha es ${date.getDate()}/${date.getMonth()}/${date.getFullYear()}\n`
    text += `El mes es el ${date.getMonth()} y el año es ${date.getFullYear()}`
    alert(text)
}