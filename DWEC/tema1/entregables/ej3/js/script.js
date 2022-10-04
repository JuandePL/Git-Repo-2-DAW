const correctButtons = document.getElementsByClassName('correctButton')
const wrongButtons = document.getElementsByClassName('wrongButton')

// Cambiar color de la pregunta
function changeColor(questionId, color) {
    document.getElementById(questionId).style.color = color
}

// Listener de botones con la opcion correcta
for (let i = 0; i < correctButtons.length; i++) {
    correctButtons[i].onclick = () => {
        changeColor(correctButtons[i].value, "green")
    }
}

// Listener de botones con la opcion incorrecta
for (let i = 0; i < wrongButtons.length; i++) {
    wrongButtons[i].onclick = () => {
        changeColor(correctButtons[i].value, "red")
    }
}