const express = require('express');

// Se invoca la función (de la variable express) y se almacena en la variable aplicacion.
const app = express();

// Define el home de la página y que función se va a ejecutar.
// La función tiene como parámetro el request y el response.
app.get('/', (peticion, respuesta) => {
    respuesta.send(`<h1>Practicum 1</h1>
    <h3>Realizado por Juan de Dios Pruna López</h3>`);
    console.log("Pagina de inicio...")
})

app.get('/2DAW', (peticion, respuesta) => {
    respuesta.send(`<h1>Directorio 2DAW</h1>
    <h3>Realizado por Juan de Dios Pruna López</h3>`);
    console.log("Practica 1 de Despliegue Web");
})

// 1) Montar un servidor nodejs en el puerto '4444' y mandar captura con el resultado.
app.listen(4444);