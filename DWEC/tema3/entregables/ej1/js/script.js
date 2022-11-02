const result = document.getElementById('result')
const buttonStartPause = document.getElementById('start-pause')

let cronoInterval
let isRunning
let hours, minutes, seconds, milliseconds

/**
 * Inicia las variables a su valor por defecto
 */
function initVariables() {
    isRunning = false
    hours = 0, minutes = 0, seconds = 0, milliseconds = 0
    showCrono()
}

/**
 * Funcion que muestra el estado actual del cronometro
 */
function showCrono() {
    result.innerHTML = `${hours > 9 ? hours : "0" + hours}`
        + `:${minutes > 9 ? minutes : "0" + minutes}`
        + `:${seconds > 9 ? seconds : "0" + seconds}`
        + `:${milliseconds > 9 ? milliseconds : "0" + milliseconds}`
}


function runChrono() {
    if (seconds == 60) {
        minutes++
        seconds = 0
    }

    if (minutes == 60) {
        hours++
        minutes = 0
    }

    const millisecondsLimit = 55
    seconds = milliseconds == millisecondsLimit ? seconds + 1 : seconds
    milliseconds = milliseconds < millisecondsLimit ? milliseconds + 1 : 0

    showCrono()
}

function pauseChrono() {
    clearInterval(cronoInterval)
    isRunning = false
}

function resetChrono() {
    clearInterval(cronoInterval)
    initVariables()
    buttonStartPause.innerHTML = "Iniciar cronómetro"
}

buttonStartPause.onclick = () => {
    if (!isRunning) {
        cronoInterval = setInterval(runChrono, 10)
        isRunning = true
        buttonStartPause.innerHTML = "Pausar cronómetro"
    } else {
        pauseChrono()
    }
}

document.getElementById('reset').onclick = () => { resetChrono() }

initVariables()

