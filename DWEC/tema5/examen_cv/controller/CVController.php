<?php
require_once 'SessionController.php';

$isNew = isset($_GET['isNew']) ? $_GET['isNew'] : false;
$getWorkerData = isset($_GET['getWorkerData']) ? $_GET['getWorkerData'] : false;
$getCVDescriptionsAndDates = isset($_GET['getCVDescriptionsAndDates']) ? $_GET['getCVDescriptionsAndDates'] : false;
$getCurriculumById = isset($_GET['getCurriculumById']) ? $_GET['getCurriculumById'] : false;

// Para crear curriculums nuevos
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

// Para obtener nombre, apellidos y correo del usuario
if ($getWorkerData) {
    $worker = getUserFromSession();
    header('Content-Type: application/json');
    echo json_encode(['name' => $worker->name, 'surname' => $worker->surname, 'email' => $worker->email]);
}

// Para obtener la id de un curriculum, su descripcion y su fecha de creacion
if ($getCVDescriptionsAndDates) {
    try {
        $query = DB::prepare(
            "SELECT cv_id, description, created_at FROM cvs WHERE user_id = ?",
            array(getUserFromSession()->id)
        );
        echo $query ? json_encode($query) : "false";
    } catch (Throwable $th) {
        //throw $th;
        echo "false";
    }
}

// Para obtener los datos en json de un curriculum
if ($getCurriculumById) {
    try {
        $query = DB::prepare("SELECT json_data FROM cvs WHERE cv_id = ?", array($_GET['id']));
        echo $query ? json_encode($query[0]) : "false";
    } catch (Throwable $th) {
        //throw $th;
        echo "false";
    }
}
