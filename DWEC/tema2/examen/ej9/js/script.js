const result = document.getElementById('result')
let miLista = ['panadero', 456, [0, 1, 2]]

// Recorrer array y mostrarlo en pantalla
let text = "Array resultante: ["
miLista.forEach((value, index) => {
    text += `${value}`
    if (index != miLista.length - 1) text += " - "
})

text += `]<br><br>Resultado de miLista[2][2] = ${miLista[2][2]}`
result.innerHTML = text