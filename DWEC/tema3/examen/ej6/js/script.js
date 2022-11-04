const list = document.querySelector('ul');

// Los equipos estaban mal escritos
const equipos = ['MAN675847583748sjt567654;Manchester United',
    'RMD576746573fhdg4737dh4;Real Madrid',
    'LIV5hg65hd737456236dch46dg4;Liverpool FC',
    'SEV4f65hf75f736463;Sevilla FC',
    'BAR5767ghtyfyr4536dh45dg45dg3;Barcelona FC'
];

// Bucle forEach para recorrer la array y mostrarla por pantalla
equipos.forEach((equipo) => {
    // Sacamos tag y nombre del equipo ignorando todo lo demas
    const tag = equipo.substring(0, 3)
    const nombre = equipo.substring(equipo.indexOf(';') + 1)

    // Mostramos en lista
    const listItem = document.createElement('li');
    listItem.textContent = `${tag} : ${nombre}`;
    list.appendChild(listItem);
})
