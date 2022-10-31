// Mostrar numero de fibonacci segun su numero de secuencia
function fibonacci(num) {
    // Si la secuencia es menor de 2, devuelve el numero resultante
    // Sino ejecuta de nuevo la funcion para calcular la sucesion de los dos numeros anteriores
    return num < 2 ? num : fibonacci(num - 1) + fibonacci(num - 2)
}

// Recoger valor solicitado por el usuario y devolver resultado
document.getElementById('submit').onclick = () => {
    const value = document.getElementById('secuencias').value

    document.getElementById('result').innerHTML = `La secuencia de Fibonacci ${value} es ${fibonacci(value)}`
}
