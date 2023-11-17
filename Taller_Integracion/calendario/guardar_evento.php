<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'));
    echo 'data'

    $title = $data->title;
    $start_date = $data->start;
    $end_date = $data->end;
    $start_time = $data->timeStart;
    $end_time = $data->timeEnd;
    $location = $data->location;

    include('conect.inc.php');

    $sql = "INSERT INTO eventos (title, start_date, end_date, start_time, end_time, location) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssss", $title, $start_date, $end_date, $start_time, $end_time, $location);

    if ($stmt->execute()) {
        $response = ['success' => true];
    } else {
        $response = ['success' => false, 'error' => $conexion->error];
    }

    $stmt->close();
    $conexion->close();

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    header("HTTP/1.0 405 Method Not Allowed");
}
?>
