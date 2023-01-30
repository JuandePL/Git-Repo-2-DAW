<?php
require_once 'SessionController.php';

$isNew = isset($_GET['isNew']) ? $_GET['isNew'] : false;
$getWorkerData = isset($_GET['getWorkerData']) ? $_GET['getWorkerData'] : false;

if ($isNew) {
    $description = $_POST['description'];
    $curriculumJson = json_encode($_POST['curriculumJson'], JSON_UNESCAPED_UNICODE);

    try {
        $query = DB::prepare(
            "INSERT INTO cvs (user_id, description, json_data) VALUES (?, ?, ?)",
            array(getUserFromSession()->id, $description, $curriculumJson)
        );
        echo "true";
    } catch (Throwable $th) {
        //throw $th;
        echo "false";
    }
}

if ($getWorkerData) {
    $worker = getUserFromSession();
    header('Content-Type: application/json');
    echo json_encode(['name' => $worker->name, 'surname' => $worker->surname, 'email' => $worker->email]);
}
