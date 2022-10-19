const encima = "Pon el ratón encima de mí"

const button = document.getElementById('mouseOver')
button.innerHTML = encima // Texto inicial

// Evento que se activa cuando el raton esta encima del elemento
button.onmouseover = () => { button.innerHTML = "El ratón está encima del botón" }

// Evento que se activa cuando el raton sale del elemento
button.onmouseout = () => { button.innerHTML = encima }

// Evento que se activa cuando el usuario hace click fuera del elemento
// tras haber pulsado en el previamente
button.onblur = () => { button.innerHTML = "Has hecho click fuera del botón" }