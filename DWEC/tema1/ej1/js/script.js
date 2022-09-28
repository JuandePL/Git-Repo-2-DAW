const button = document.getElementById('add-button');
const numberText = document.getElementById('number');
let number = 1;

button.addEventListener('click', () => {
    numberText.innerHTML = number++;
})