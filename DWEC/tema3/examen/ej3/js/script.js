// Este archivo es una solución alternativa al ejercicio.
// En vez de generar la array cada vez que se pulse el botón, la genero al principio
// y limito el número que el usuario pueda introducir para no romper el código

const result = document.getElementById('result')
const wordElement = document.getElementById('word')
const frase = 'En un lugar de la Mancha, de cuyo nombre no quiero acordarme, ' +
    'no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero ' +
    'adarga antigua, rocín flaco y galgo corredor.'

// Quitar puntos y separar frase en array reemplazando con un regex las comas con espacio y los espacios
const fraseArray = frase.replace('.', '').split(/, | /)

// Pulsacion boton
document.getElementById('submit').onclick = () => {
    const word = wordElement.value // Obtener palabra deseada por el usuario

    // Si la palabra se encuentra en la array, muestra su ultima letra
    if (fraseArray.indexOf(word) != -1) {
        result.innerHTML = `Última letra de la palabra ${word}: ${word.slice(-1)}`
    } else {
        result.innerHTML = `La palabra no existe en la frase`
    }
}
