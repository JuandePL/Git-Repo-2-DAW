const correctButtons = document.getElementsByClassName('correctButton')
const wrongButtons = document.getElementsByClassName('wrongButton')

function changeColor(questionId, color) {
    document.getElementById(questionId).style.color = color
}

for (let i = 0; i < correctButtons.length; i++) {
    correctButtons[i].onclick = () => {
        changeColor(correctButtons[i].value, "green")
    }
}

for (let i = 0; i < wrongButtons.length; i++) {
    wrongButtons[i].onclick = () => {
        changeColor(correctButtons[i].value, "red")
    }
}