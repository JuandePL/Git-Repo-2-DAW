const result = document.getElementById('result')
let nombre

// Button submit: Elegir historia
document.getElementById('submit').onclick = () => {
    // Recoger nombre y quitar espacios en blanco
    nombre = document.getElementById('nombre').value.trim()
    result.innerHTML = ""

    // Comprobar si el nombre esta relleno
    if (nombre !== "") document.getElementById('betico').checked ? historiaBetis() : historiaSevilla()
    else result.innerHTML = "Tienes que introducir el nombre del protagonista"
}

function historiaBetis() {
    const frasesBetis = [
        "En Helióplis todo se ve mucho más bonito. ",
        `${nombre} era una persona más bética que Joaquín. `,
        `Cada semana ${nombre} va al Benito Villamarín a ver su equipo. `,
        `${nombre} no lloraba tanto desde que vio al Betis levantar la Copa del Rey. `,
        `Llovía fuerte aquella noche y ${nombre} no podía dejar de pensar en los deberes que tenía que hacer `
        + "para este domingo. ",
        `A ${nombre} no le gustaba la informática. `]

    // Rellenar historia con frases aleatorias
    // Escogemos una frase cualquiera y la sacamos de la array para no repetir
    while (frasesBetis.length > 0) {
        const index = Math.round(Math.random() * (frasesBetis.length - 1))
        result.innerHTML += frasesBetis[index]

        frasesBetis.splice(index, 1)
    }
}

function historiaSevilla() {
    const frasesSevilla = [
        `En Sevilla siempre ha habido mucho ruido, por eso Nervión es el lugar favorito de ${nombre}.`,
        "La ciudad se anima siempre en un derbi, aunque ya se sabe que el Sevilla va a ganar. ",
        `${nombre} visitaba a su abuela (muy sevillista), ella siempre le hacía buena comida. `,
        `La marcha de Koundé lo dejó deprimido y ahora ${nombre} solo tiene a su peluche. `,
        `No tenía ganas de ver al Sevilla así que ${nombre} jugó a videojuegos hasta el límite. `,
        "Lopetegui le dio falsas ilusiones. ",
        `${nombre} antes tenía pelo, pero se quedó calvo por su ídolo Monchi. `]

    // Rellenar historia con frases aleatorias
    // Escogemos una frase cualquiera y la sacamos de la array para no repetir
    while (frasesSevilla.length > 0) {
        const index = Math.round(Math.random() * (frasesSevilla.length - 1))
        result.innerHTML += frasesSevilla[index]

        frasesSevilla.splice(index, 1)
    }
}
