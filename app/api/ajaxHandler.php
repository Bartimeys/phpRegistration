<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST["email"];
    $birthday = $_POST["birthday"];
    $password = $_POST["password"];
    $password_again = $_POST["password_again"];

    $response = new stdClass;
    $response->message = "Welcome " . $email;

    header('Content-type:application/json;charset=utf-8');
    echo json_encode($response);
}
?>
