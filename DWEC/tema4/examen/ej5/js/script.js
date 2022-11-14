// El siguiente código busca el texto "android" para reemplazarlo por el texto "Linux"
// En el regex se especifica que no distinga entre mayúsculas y minúsculas(//i),
// con lo cual funciona perfectamente.

const str = "El sistema operativo más seguro es Android";
const res = str.replace(/android/i, "Linux");

document.getElementById('result').innerHTML = `Resultado del código: <b>${res}</b>`
