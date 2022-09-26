<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <h1>Ejercicio 8</h1>
    <p>8. Opera con dos variables ($a, $b) sumandolos, restandolos, multiplicandolos o dividiendolos en función del valor de $c.</p>

    <?php
    $a = 7;
    $b = 5;
    $c = '/';
    echo "Variable A: $a <br>";
    echo "Variable B: $b <br>";
    echo "Variable C: $c <br><br>";

    echo "$a $c $b = ";
    switch ($c) {
        case '+':
            echo $a + $b;
            break;
        case '-':
            echo $a - $b;
            break;
        case '*':
            echo $a * $b;
            break;
        case '/':
            echo $a / $b;
            break;
        default:
            echo "No se reconoce el carácter solicitado";
            break;
    }
    ?>
</body>

</html>