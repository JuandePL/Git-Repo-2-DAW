<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion DB</title>
</head>

<body>
    <?php
    include("../../DB.php");

    $db = new DB("test", "root", "");
    $db -> connect();
    $people = $db->query("SELECT * FROM users");

    foreach ($people as $person) {
        echo $person['id'] . " - " . $person['name'] . " " . $person['surname'] . " - " . $person['password'] . "<br>";
    }
    ?>
</body>

</html>