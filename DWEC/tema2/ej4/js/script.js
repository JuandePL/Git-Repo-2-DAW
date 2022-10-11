const aqui = document.getElementById("aqui")
const dias = ["lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo"];
let txt = txt2 = ""

dias.forEach((value, i, array) => {
    txt = `${txt} ${value}`
});

aqui.innerHTML += `${txt}<br>---------<br>`;
for (i = 0; i < dias.length; i++) {
    txt2 = `${txt2} ${dias[i]}`
}
aqui.innerHTML += txt2;