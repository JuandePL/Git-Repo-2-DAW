const button = document.getElementById('add-button');
const numberText = document.getElementById('number');
let number = 1;

button.onclick = () => {
    numberText.innerHTML = number++;
}