// Sumar los valores y mostrarlo en el HTML
function suma(num1, num2) {
    document.getElementById('suma').innerHTML = `${num1} + ${num2} = ${num1 + num2}`
}

// Restar los valores y mostrarlo en el HTML
function resta(num1, num2) {
    document.getElementById('resta').innerHTML = `${num1} - ${num2} = ${num1 - num2}`
}

// Multiplicar los valores y mostrarlo en el HTML
function multiplicacion(num1, num2) {
    document.getElementById('multiplicacion').innerHTML = `${num1} * ${num2} = ${num1 * num2}`
}

// Dividir los valores y mostrarlo en el HTML
function division(num1, num2) {
    document.getElementById('division').innerHTML = `${num1} / ${num2} = ${num1 / num2}`
}

// Devuelve un numero random entre 0 y 10:
function random() { return Math.floor(Math.random() * 11); }

// Llamar a las funciones para mostrar las operaciones en pantalla
suma(random(), random())
resta(random(), random())
multiplicacion(random(), random())
division(random(), random())
