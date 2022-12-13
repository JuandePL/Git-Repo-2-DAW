<?php
require_once __DIR__ . '/../model/DB.php';
require_once __DIR__ . '/UserController.php';

$userObject = getUserFromSession();

function getUserFromSession() {
    session_start();

    return isset($_SESSION["userId"]) ? UserController::fetchUserById($_SESSION["userId"]) : null;
}



// TODO: Revisar estas cosas

/**
 * Funcion para iniciar sesion en la pagina web.
 * @param string $username Username.
 * @param string $password Password.
 */
function initSession($username, $password) {
    $logged = tryUserLogin($username, hash("sha256", $password));

    if ($logged === true) {
        session_start();
        $_SESSION['userId'] = UserController::fetchUserById($username)->id;

        header("Location:../index.php");
    } else {
        setcookie("errorMessage", $logged, 0, "/");
        header("Location:/error.php");
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
        return "'$username' NO EXISTE";
    }
    if ($pass !== $userObject['passwd']) {
        return "CONTRASENA INCORRECTA";
    }

    return true;
}
