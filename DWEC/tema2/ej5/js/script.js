const caja = document.getElementById('caja')
const limite = 4

//Creciente
for (let i = 0; i < limite; i++) {

    let asterisco = ""
    let espacioHTML = ""

    for (let k = 0; k < limite - i - 1; k++) {
        espacioHTML += "&nbsp&nbsp";
    }

    for (let j = 1; j <= 2 * i + 1; j++) {
        asterisco += "*"
    }

    caja.innerHTML += espacioHTML + asterisco + "<br>";
}

//Decreciente
for (let i = limite - 2; i >= 0; i--) {

    let asterisco = ""
    let espacioHTML = ""

    for (let k = 0; k < limite - i - 1; k++) {
        espacioHTML += "&nbsp&nbsp";
    }

    for (let j = 1; j <= 2 * i + 1; j++) {
        asterisco += "*"
    }

    caja.innerHTML += espacioHTML + asterisco + "<br>";
}