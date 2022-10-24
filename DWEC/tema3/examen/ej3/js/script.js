const result = document.getElementById('result')
const wordElement = document.getElementById('word')

const frase = 'En un lugar de la Mancha, de cuyo nombre no quiero acordarme, ' +
    'no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero ' +
    'adarga antigua, rocín flaco y galgo corredor.'

// Quitar puntos y separar frase en array reemplazando con un regex las comas con espacio y los espacios
// También lo he pasado todo a minúsculas para no distinguir entre mayus y minus a la hora de comprobar los caracteres
const fraseArray = frase.toLowerCase().replace('.', '').split(/, | /)

// Pulsacion boton
document.getElementById('submit').onclick = () => {
    const word = wordElement.value // Obtener palabra deseada por el usuario

    // Si la palabra en minusculas se encuentra en la array, muestra su ultima letra
    if (fraseArray.indexOf(word.toLowerCase()) !== -1) {
        result.innerHTML = `Última letra de la palabra "${word}": ${word.slice(-1)}`
    } else {
        result.innerHTML = `La palabra no existe en la frase`
    }
}
