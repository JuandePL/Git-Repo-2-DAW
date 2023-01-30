<?php
require_once 'SessionController.php';

$isNew = isset($_POST['isNew']) ? (bool) $_POST['isNew'] : false;
$getWorkerData = isset($_GET['getWorkerData']) ? $_GET['getWorkerData'] : false;

// TODO: Terminar esto
if ($isNew == "true") {
    echo "isnew $isnew";
    print_r($_POST);
    return print_r($_POST);
} else {
    return print_r($_GET) . "\n\n" .  print_r($_POST);
}

if ($getWorkerData) {
    $worker = getUserFromSession();
    header('Content-Type: application/json');
    echo json_encode(['name' => $worker->name, 'surname' => $worker->surname, 'email' => $worker->email]);
}
