const original = [
    2, 1, 5, 9, 3, 8, 4, 6, 7,
    7, 8, 6, 1, 2, 4, 3, 5, 9,
    9, 3, 4, 6, 5, 7, 2, 8, 1,
    8, 6, 9, 5, 4, 2, 1, 7, 3,
    1, 4, 3, 7, 8, 6, 5, 9, 2,
    5, 2, 7, 3, 9, 1, 8, 4, 6,
    6, 7, 2, 4, 1, 5, 9, 3, 8,
    4, 9, 8, 2, 6, 3, 7, 1, 5,
    3, 5, 1, 8, 7, 9, 6, 2, 4]

// En modificado en principio se va a colocar el sudoku original pero este
// array es el que va a ir modificándose para generar el sudoku aleatorio.
const modificado = [...original]
const sudokuSize = 9

// La función generaSudoku realiza todo el trabajo de generación del sudoku
function generaSudoku() {
    //En este primer bucle se muestra en la página web el sudoku original
    //Se va recorriendo el array de 9 en 9 posiciones para ir presentando el sudoku en la web
    //dentro del párrafo con id="sudokuOrig"
    for (let i = 0; i < sudokuSize; i++) {
        let salida = "";
        for (let j = 0; j < sudokuSize; j++) {
            const pos = sudokuSize * i + j;
            salida += original[pos] + " ";
        }
        const sudokuOrig = document.getElementById("sudokuOrig")
        sudokuOrig.innerHTML = sudokuOrig.innerHTML + salida + "<br>"
    }

    // En las siguientes 4 líneas es donde se van cambiando las
    // filas y columnas para hacer el sudoku lo más aleatorio posible.
    cambiaColumnas();
    cambiaFilas();
    cambiaColumnas();
    cambiaFilas();

    //Cuantas más llamadas se hagan a las funciones cambiaColumnas() y cambiaFilas(), más aleatorio será el sudoku.
    //Se pueden invocar estas funciones cuantas veces se quiera.

    //En este primer bucle se muestra en la página web el sudoku generado
    //Se va recorriendo el array de 9 en 9 posiciones para ir presentando el sudoku en la web
    //dentro del párrafo con id="sudokuAleat"
    for (let i = 0; i < sudokuSize; i++) {
        let salida = "";
        for (j = 0; j < sudokuSize; j++) {
            const pos = sudokuSize * i + j;
            salida += modificado[pos] + " ";
        }
        const sudokuAleat = document.getElementById("sudokuAleat")
        sudokuAleat.innerHTML = sudokuAleat.innerHTML + salida + "<br>";
    }
}

// La función aleatorio genera un número aleatorio entre min y max
function aleatorio(min, max) {
    let horquilla = max - min;
    let aleatorio = Math.round(Math.random() * horquilla) + min;
    return aleatorio;
}

//La función cambiaColumnas() intercambia columnas de cada grupo de manera aleatoria.
function cambiaColumnas() {
    let columnaA, columnaB;

    for (let pos = 0; pos <= 9; pos += 3) {
        // Aqui nos aseguramos que las columnas a intercambiar no sean las mismas
        do {
            columnaA = aleatorio(0, 2) + pos;
            columnaB = aleatorio(0, 2) + pos;
        } while (columnaA === columnaB)
        // columnaA y columnaB contienen el valor de las columnas a intercambiar.
        // Ambas variables contendrán un valor aleatorio entre 0 y 2.
        for (let i = 0; i < sudokuSize; i++) {
            const aux = modificado[columnaA];
            modificado[columnaA] = modificado[columnaB];
            modificado[columnaB] = aux;
            //En las tres líneas anteriores se intercambian los valores
            columnaA += sudokuSize;
            columnaB += sudokuSize;
            // hay que saltar 9 porque el siguiente elemento de la columna
            // está 9 posiciones más adelante en el array
        }
    }
}

//La función cambiaFilas() intercambia filas de cada grupo de manera aleatoria.
function cambiaFilas() {
    let aux, filaA, filaB;

    for (let pos = 0; pos <= 54; pos += sudokuSize * 3) {
        // Aqui nos aseguramos que las filas a intercambiar no sean las mismas
        do {
            filaA = sudokuSize * aleatorio(0, 2) + pos;
            filaB = sudokuSize * aleatorio(0, 2) + pos;
        } while (filaA === filaB);
        //En filaA y filaB se almacenan los primeros elementos de cada fila a intercambiar.
        //En este caso las filas a intercambiar serán de la 0 a la 2.
        for (let i = 0; i < sudokuSize; i++) {
            aux = modificado[filaA];
            modificado[filaA] = modificado[filaB];
            modificado[filaB] = aux;
            filaA += 1;
            filaB += 1;
            // como los elementos de una fila están consecutivos solamente
            // hay que incrementar en una unidad la posición.
        }
    }
}

// Por último se llama a la función generaSudoku() para que se ejecute el script y se generen los sudokus.
generaSudoku();