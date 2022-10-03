function changeText(text, color) {
    const tag = document.getElementById('text')
    tag.innerHTML = text
    tag.style.color = color
}

document.getElementById('buttonES').onclick = () => { changeText("Bienvenido al programa", "red") }
document.getElementById('buttonUK').onclick = () => { changeText("Welcome to the program", "blue") }
document.getElementById('buttonRU').onclick = () => { changeText("Добро пожаловать в программу", "green") }