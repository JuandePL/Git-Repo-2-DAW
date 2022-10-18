const button = document.getElementById('button')

let a = 5

button.onclick = () => {
    let a = 10 // Variable distinta de la anterior
    mostrar() // 5
}

button.onmouseout = () => {
    a = 17 // Variable definida en la línea 3
    mostrar() // 17
}

function mostrar() { alert(a) }