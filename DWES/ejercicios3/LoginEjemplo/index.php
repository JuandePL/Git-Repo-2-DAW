<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Inicio de sesión</h1>

    <?php
    if (!isset($_COOKIE['login'])) {
        setcookie('login', '', time() + 360);
    }

    if ($_COOKIE['login'] == true) {
        echo "<h1> Bienvenido al programa";
    } else {
    ?>
        <form action="login.php" method="post">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name">
            <br>

            <label for="surname">Apellidos</label>
            <input type="text" name="surname" id="surname">
            <br>

            <label for="age">Edad</label>
            <input type="number" name="age" id="age">
            <br>

            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <br>

            <button type="submit">Enviar</button>
        </form>
    <?php
    }
    ?>

</body>

</html>