var txt = "", txt2 = ""
var dias = ["lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo"];

dias.forEach((valor, index, array) => {
    txt = `${txt} ${valor} `
});
document.getElementById("aqui").innerHTML = txt;

document.getElementById("aqui").innerHTML += "<br>---------<br>";
for (i = 0; i < dias.length; i++) {
    txt2 = `${txt2} ${dias[i]}`
}

document.getElementById("aqui").innerHTML += txt2;