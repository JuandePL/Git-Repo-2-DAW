const result = document.getElementById('result')

function Coche(modelo, color, kms, combustible) {
    this.modelo = modelo
    this.color = color
    this.kms = kms
    this.combustible = combustible
}

let elmio = new Coche('Mercedes E330', 'negro', 120000, 'diesel')
let eltuyo = new Coche('BMV 318', 'blanco', 210000, 'gasolina')

result.innerHTML = `Resultado de la eliminación: ${delete elmio.matricula}`
