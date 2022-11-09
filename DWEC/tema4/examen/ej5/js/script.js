const str = "El sistema operativo más seguro es Android";
const res = str.replace(/android/i, "Linux");

document.getElementById('result').innerHTML = `Resultado del código: <b>${res}</b>`
