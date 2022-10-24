const list = document.querySelector('ul');

const saludos = ['¡Feliz cumpleaños!', 'Feliz navidades a todos',
    'Te deseo una feliz navidad', 'En Navidades nos vamos de fiesta',
    'Pasa un buen fin de semana'];

// Bucle forEach para recorrer la array con una 'funcion flecha'
saludos.forEach((saludo) => {
    // Si el saludo NO incluye 'fiesta', la añade a la lista
    if (!saludo.toLowerCase().includes('fiesta')) {
        const listItem = document.createElement('li');
        listItem.innerHTML = saludo;
        list.appendChild(listItem);
    }
})
