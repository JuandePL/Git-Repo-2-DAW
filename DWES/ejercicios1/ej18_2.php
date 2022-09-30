<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>

<body>
    <h1>Ejercicio 18</h1>
    <p>18. Genere un primer archivo php que contenga dos variables (cadenas de texto) importe ese archivo en un segundo
        .php y pinte mediante un echo las variabes del primer archivo en el segundo.</p>

    <?php
    include('ej18_1.php');

    echo "Variable a: $a<br> Variable b: $b";
    ?>
</body>

</html>