<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas Cookies</title>
</head>

<body>
    <?php
    if (isset($_POST['borrar'])) {
        setcookie('language', '', time() - 360);
    } else {
        if (isset($_POST["language"])) {
            echo "Post language: " . $_POST["language"] . "<br>";
            setcookie('language', $_POST['language'], time() + 3600 * 24);
        } else {
            echo "Cookie not set<br>";
        }
    }
    ?>

    <form action="indexCookies.php" method="post">
        <h3>Escoge un idioma</h3>
        <input type="radio" name="language" id="language" value="en">Inglés<br>
        <input type="radio" name="language" id="language" value="es">Español<br>

        <button>Enviar</button>
        <button value="borrar">Borrar cookie</button>
    </form>
</body>

</html>