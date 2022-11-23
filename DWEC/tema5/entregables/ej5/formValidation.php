<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

echo ($usuario == "admin" && $password == 1234) ? "USUARIO VÁLIDO" : "USUARIO NO VALIDO";
