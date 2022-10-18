const num1 = new Number("9 9")
const num2 = new Number("dos")

// Los dos números darán NaN porque no son un numero como tal, sino un objeto
document.getElementById('result').innerHTML = `Number("9 9"): ${num1} <br> Number("dos"): ${num2}`