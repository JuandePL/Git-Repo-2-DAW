const persona = {
    name: ['Rafa', 'Nadal'],
    age: 30,
    gender: 'masculino',
    interests: ['tenis', 'futbol'],
    bio: () => {
        alert(`${this.name[0]} ${this.name[1]} tiene ${this.age} años ` +
            `y le gusta el ${this.interests[0]} y el ${this.interests[1]}`)
    },
    saluda: () => {
        alert(`Hola, me llamo ${this.name[0]}.`)
    }
}

document.getElementById('biografia').onclick = () => { persona.bio() }
document.getElementById('saluda').onclick = () => { persona.saluda() }
