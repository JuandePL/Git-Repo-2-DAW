<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <h1>Ejercicio 4</h1>
    <p>4. Si introducimos 1, 2, 3 o 4 devuelva "UNO", "DOS", "TRES", "CUATRO" en caso contrario "VALOR NO ENCONTRADO".</p>
    <p>--------------------------------------------</p>

    <?php
    $num =  rand(1, 4);
    echo "El número es ";

    switch ($num) {
        case 1:
            echo "UNO";
            break;
        case 2:
            echo "DOS";
            break;
        case 3:
            echo "TRES";
            break;
        case 4:
            echo "CUATRO";
            break;
        default:
            echo "VALOR NO ENCONTRADO";
            break;
    }
    ?>
</body>

</html>