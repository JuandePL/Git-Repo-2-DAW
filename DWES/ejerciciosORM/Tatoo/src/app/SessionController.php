<?php
require_once __DIR__ . '/../../bootstrap.php';
require_once __DIR__ . '/image.php';


// Variables
$isLogin = isset($_GET['isLogin']) ? $_GET['isLogin'] : false;
$isRegister = isset($_GET['isRegister']) ? $_GET['isRegister'] : false;
$isLogout = isset($_GET['isLogout']) ? $_GET['isLogout'] : false;
$user = getUserFromSession($personRepo);

function getSessionValue() {
    return "userId";
}

function getUserFromSession($personRepo) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    return isset($_SESSION[getSessionValue()]) ? $personRepo->find($_SESSION[getSessionValue()]) : null;
}

// Comprobar si el usuario quiere iniciar sesión
if ($isLogin) {
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ?  hash("sha256", $_POST['password']) : null;

    // Comprobar si es email o usuario
    initSession($email, $password, $personRepo);
}

// Comprobar si el usuario ha cerrado sesión
if ($isLogout) {
    session_start();
    $_SESSION[getSessionValue()] = null;
    session_destroy();
    header("Location:../../");
}

// Comprobar si el usuario quiere registrarse
if ($isRegister) {
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $name = isset($_POST['name']) ? $_POST['name'] : false;
    $password = isset($_POST['password']) ?  hash("sha256", $_POST['password']) : false;
    $confirmPassword = isset($_POST['confirmPassword']) ?  hash("sha256", $_POST['confirmPassword']) : false;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : false;
    $address = isset($_POST['address']) ? $_POST['address'] : false;
    $city = isset($_POST['city']) ? $_POST['city'] : false;
    $isTatooer = isset($_POST[PersonRoles::Tatooer->name]);
    $role = $isTatooer ? PersonRoles::Tatooer->name : PersonRoles::Client->name;

    if ($password !== $confirmPassword) {
        header('Location:../view/register.php?error=Las contraseñas no coinciden');
        return;
    }

    $registerResult = $personRepo->register($email, $name, $password, $phone, $address, $city, $isTatooer, $role);

    // Si el registro falla, muestra el fallo
    if (is_null($registerResult)) {
        header('Location:../view/register.php?error=No se pudo registrar al usuario');
        return;
    }

    initSession($email, $password, $personRepo);
}

function initSession($email, $password, $personRepo) {
    $user = $personRepo->login($email, $password);
    
    if ($user) {
        $_SESSION[getSessionValue()] = $user->getId();
        getUserFromSession($personRepo);
        header("Location:../../");
    } else {
        header('Location:../view/login.php?error=Las credenciales son incorrectas');
    }
}
