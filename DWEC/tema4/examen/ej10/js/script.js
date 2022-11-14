const resultClick = document.getElementById('resultClick')
const resultMouseover = document.getElementById('resultMouseover')
const resultMouseout = document.getElementById('resultMouseout')

const buttonClick = document.getElementById('click')
const buttonMouseover = document.getElementById('mouseover')
const buttonMouseout = document.getElementById('mouseout')

let clickCount = 0, mouseOverCount = 0, mouseOutCount = 0

/**
 * Para eliminar todos los listeners de los botones usaremos removeEventListener(),
 * ya que el ejercicio lo pide así.
 * 
 * También se puede remover un listener asignandolo a una funcion vacia,
 * aunque no puedes combinar el 'onclick' con un '(add|remove)EventListener' y viceversa.
 * 
 * buttonClick.onclick = {}
 */


// ---------------------------- 1. Click ----------------------------
function clickListener() {
    clickCount++
    resultClick.innerHTML = `Has pulsado el botón ${clickCount} ${clickCount == 1 ? 'vez' : 'veces'}`
}

buttonClick.addEventListener('click', clickListener)

document.getElementById('listenerClick').onclick = () => {
    // Remover listener con el metodo correspondiente
    buttonClick.removeEventListener('click', clickListener)
    resultClick.innerHTML = 'Has removido el listener click del botón.'
}


// ---------------------------- 2. Mouseover ----------------------------
function mouseOverListener() {
    mouseOverCount++
    resultMouseover.innerHTML = `Has pasado el ratón por encima ${mouseOverCount} ${mouseOverCount == 1 ? 'vez' : 'veces'}`
}

buttonMouseover.addEventListener('mouseover', mouseOverListener)

document.getElementById('listenerMouseover').onclick = () => {
    // Remover listener con el metodo correspondiente
    buttonMouseover.removeEventListener('mouseover', mouseOverListener)
    resultMouseover.innerHTML = 'Has removido el listener mouseover del botón.'
}


// ---------------------------- 3. Mouseout ----------------------------
function mouseOutListener() {
    mouseOutCount++
    resultMouseout.innerHTML = `Has quitado el ratón ${mouseOutCount} ${mouseOutCount == 1 ? 'vez' : 'veces'}`
}

buttonMouseout.addEventListener('mouseout', mouseOutListener)

document.getElementById('listenerMouseout').onclick = () => {
    // Remover listener con el metodo correspondiente
    buttonMouseout.removeEventListener('mouseout', mouseOutListener)
    resultMouseout.innerHTML = 'Has removido el listener mouseout del botón.'
}

