const list = document.querySelector('ul');

// Los equipos estaban mal escritos
const equipos = ['MAN : Manchester United',
    'RMD : Real Madrid',
    'LIV : Liverpool FC',
    'SEV : Sevilla FC',
    'BAR : Barcelona FC'
];

// Bucle forEach para recorrer la array y mostrarla por pantalla
equipos.forEach((equipo) => {
    var listItem = document.createElement('li');
    listItem.textContent = equipo;
    list.appendChild(listItem);
})
