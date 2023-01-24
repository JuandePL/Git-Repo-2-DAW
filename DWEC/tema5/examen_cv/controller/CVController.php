<?php
require_once 'SessionController.php';

$isNew = isset($_POST['isNew']) ? $_POST['isNew'] : false;
$getWorkerData = isset($_GET['getWorkerData']) ? $_GET['getWorkerData'] : false;

if ($isNew) {
    echo "isnew";
    print_r($_POST);
}

if ($getWorkerData) {
    $worker = getUserFromSession();
    header('Content-Type: application/json');
    echo json_encode(['name' => $worker->name, 'surname' => $worker->surname]);
}

