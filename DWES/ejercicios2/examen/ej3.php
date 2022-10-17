<!-- Genere una función que genere matriculas de forma aleatorias de la forma (0000-AAA), no se podrán crear
matriculas que tengan AAA o ZZZ en su composición (2p) -->

<?php
$matriculaCompleta = "";

// NUMEROS RANDOM
$numeroMatricula = (string) rand(0000, 9999);

// Rellenar numero matrícula si su longitud es menor que 4
if (strlen($numeroMatricula) < 4) {
    $matricula = "";

    for ($i = 0; $i < (4 - strlen($numeroMatricula)); $i++) {
        $matricula .= "0";
    }
    $matriculaCompleta = $matricula . $numeroMatricula;
} else {
    $matriculaCompleta = $numeroMatricula; // Añadir numero a la matrícula
}

// LETRAS RANDOM
function letraRandom() {
    $letras = array(
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
        'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    );
    return $letras[rand(0, count($letras) - 1)];
}

// Bucle para generar las letras y comprobar que no sea ni AAA ni ZZZ
do {
    $letrasMatricula = letraRandom() . letraRandom() . letraRandom();
} while ($letrasMatricula == "AAA" || $letrasMatricula == "ZZZ");

// Matrícula completa
$matriculaCompleta .= "-" . $letrasMatricula;
echo "Matrícula completa: $matriculaCompleta";
?>