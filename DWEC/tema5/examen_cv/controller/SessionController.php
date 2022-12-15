<?php
require_once __DIR__ . '/../model/DB.php';
require_once __DIR__ . '/UserController.php';


// Variables
$isLogin = isset($_GET['isLogin']) ? $_GET['isLogin'] : false;
$isRegister = isset($_GET['isRegister']) ? $_GET['isRegister'] : false;
$isLogout = isset($_GET['isLogout']) ? $_GET['isLogout'] : false;
$sessionValue = "userId";
$userObject = getUserFromSession($sessionValue);

function getUserFromSession($sessionValue) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    return isset($_SESSION[$sessionValue]) ? UserController::fetchUserById($_SESSION[$sessionValue]) : null;
}

// Comprobar si el usuario quiere iniciar sesión
if ($isLogin) {
    // TODO: FIX DISTINCION CORREO Y USUARIO
    $isEmail = isset($_GET['isEmail']) ? (boolean) $_GET['isEmail'] : false;

    echo "isset isEmail: " . $isEmail . "<br>";
    echo "get: ";
    print_r($_GET);
    echo "<br>post: ";
    print_r($_POST);
    echo "<br>isEmail: $isEmail<br>";
    $password = isset($_POST['password']) ? hash("sha256", $_POST['password']) : false;

    // Comprobar si es email o usuario
    if ($isEmail == "true") {
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        echo "email: $email<br>";
        echo "password: $password<br>";
        initSessionWithEmail($sessionValue, $email, $password);
    } else {
        $username = isset($_POST['username']) ? $_POST['username'] : false;
        echo "username: $username<br>";
        echo "password: $password<br>";
        // initSessionWithUsername($sessionValue, $username, $password);
    }
}

// Comprobar si el usuario ha cerrado sesión
if ($isLogout) {
    session_start();
    $_SESSION[$sessionValue] = null;
    session_destroy();
    header("Location:/../index.php");
}

// TODO: Revisar estas cosas

/**
 * Funcion para iniciar sesion en la pagina web.
 * @param string $email Email.
 * @param string $password Password.
 */
function initSessionWithEmail($sessionValue, string $email, string $password) {
    return initSessionWithUsername($sessionValue, UserController::fetchUserByEmail($email)->username, $password);
}

/**
 * Funcion para iniciar sesion en la pagina web.
 * @param string $username Username.
 * @param string $password Password.
 */
function initSessionWithUsername($sessionValue, $username, $password) {
    $logged = tryUserLogin($username, hash("sha256", $password));

    if ($logged === true) {
        session_start();
        $_SESSION[$sessionValue] = UserController::fetchUserByUsername($username)->id;
        echo "<br>Inicio de sesion correcto.";
        header("Location:../index.php");
    } else {
        echo "<br>Inicio de sesion incorrecto.";
        header('Location:../view/login.php?error=' . $logged);
    }
}

/**
 * Try to log an user, given username and password.
 * This will return true if username exist and password is correct, false otherwise.
 * @param string $username Username.
 * @param string $pass Password.
 * @return mixed True if succesfully logged, Error string if error
 */
function tryUserLogin(string $username, string $pass) {
    $userObject = UserController::fetchUserByUsername($username);

    if (!$userObject) {
        return "El usuario <b>'$username'</b> no existe.";
    }
    // if ($pass !== $userObject->password) {
    //     return "La contraseña es incorrecta.";
    // }

    return true;
}
