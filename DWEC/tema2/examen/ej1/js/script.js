const radio = 5 // Definimos radio
document.getElementById('radio').innerHTML = radio // Mostramos radio por pantalla

// Calculamos area y longitud
const areaCircunferencia = Math.PI * Math.pow(radio, 2) // π * radio^2
const longitudCircunferencia = Math.PI * radio * 2 // π * 2*radio

// Mostramos por pantalla
// (tofixed(2) para mostrar solo 2 decimales)
document.getElementById('result').innerHTML = `
La área de una circunferencia de radio ${radio} es ${areaCircunferencia.toFixed(2)}.<br>
La longitud de una circunferencia de radio ${radio} es ${longitudCircunferencia.toFixed(2)}.<br>
`