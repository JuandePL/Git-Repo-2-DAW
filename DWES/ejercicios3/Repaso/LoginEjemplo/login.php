<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
$password = $_POST['password'];

echo "Nombre: $name<br>";
echo "Apellidos: $surname<br>";
echo "Edad: $age<br>";
echo "Contraseña: $password<br>";

if ($name == 'usuario' && $password == '1234') {
    setcookie("login", true, time() + 6000);
} else {
    setcookie("login", false, time() + 6000);
}

header("Location: index.php");
?>