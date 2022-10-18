const aqui = document.getElementById("aqui")
const dias = ["lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo"];
let txt = "", txt2 = ""

dias.forEach((value, i, array) => {
    txt = `${txt} ${value}`
});
aqui.innerHTML += `${txt}<br>---------<br>Mi modificación:<br>`;

for (i = 0; i < dias.length; i++) {
    txt2 += `${i + 1}. ${dias[i]}`

    if (i != dias.length - 1) txt2 += " | "
}
aqui.innerHTML += txt2;