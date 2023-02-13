<?php
require_once __DIR__ . '/../../bootstrap.php';
require_once __DIR__ . '/image.php';


// Variables
$isLogin = isset($_GET['isLogin']) ? $_GET['isLogin'] : false;
$isRegister = isset($_GET['isRegister']) ? $_GET['isRegister'] : false;
$isLogout = isset($_GET['isLogout']) ? $_GET['isLogout'] : false;
$user = getUserFromSession(getSessionValue());

function getSessionValue() {
    return "userId";
}

function getUserFromSession() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    return isset($_SESSION[getSessionValue()]) ? $personRepo->findById($_SESSION[getSessionValue()]) : null;
}

// Comprobar si el usuario quiere iniciar sesión
if ($isLogin) {
    $isEmail = isset($_GET['isEmail']) ? (bool) $_GET['isEmail'] : false;
    $password = isset($_POST['password']) ?  hash("sha256", $_POST['password']) : false;

    // Comprobar si es email o usuario
    $username = isset($_POST['username']) ? $_POST['username'] : false;
    initSessionWithUsername($username, $password);
}

// Comprobar si el usuario ha cerrado sesión
if ($isLogout) {
    session_start();
    $_SESSION[getSessionValue()] = null;
    session_destroy();
    header("Location:./");
}

// Comprobar si el usuario quiere registrarse
if ($isRegister) {
    $username = isset($_POST['username']) ? $_POST['username'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ?  hash("sha256", $_POST['password']) : false;
    $confirmPassword = isset($_POST['confirmPassword']) ?  hash("sha256", $_POST['confirmPassword']) : false;

    if ($password !== $confirmPassword) {
        header('Location:../view/register.php?error=Las contraseñas no coinciden');
        return;
    }

    $registerResult = $personRepo->registerPerson($email, $username, $name, $surname, $password);

    // Si el registro falla, muestra el fallo
    if (is_string($registerResult)) {
        header('Location:../view/login.php?error=' . $registerResult);
        return;
    }

    initSession($username);
}

/**
 * Funcion para iniciar sesion en la pagina web.
 * @param string $username Username.
 * @param string $password Password.
 */
function initSessionWithUsername($username, $password) {
    $logged = tryUserLogin($username, $password);

    if ($logged === true) {
        initSession($username);
    } else {
        header('Location:../view/login.php?error=' . $logged);
    }
}

function initSession($username) {
    session_start();
    $_SESSION[getSessionValue()] = PersonRepository::fetchUserByUsername($username)->id;
    header("Location:../");
}

/**
 * Try to log an user, given username and password.
 * This will return true if username exist and password is correct, false otherwise.
 * @param string $username Username.
 * @param string $pass Password.
 * @return mixed True if succesfully logged, Error string if error
 */
function tryUserLogin(string $username, string $pass) {
    $user = PersonRepository::fetchUserByUsername($username);

    if (!$user) {
        return "El usuario <b>$username</b> no existe.";
    }
    if ($pass !== $user->password) {
        return "La contraseña es incorrecta.";
    }

    return true;
}
