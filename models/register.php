<?php
session_start();
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["function-register"]) && $_POST["function-register"] == "register") {
        $username = $_POST['username'];
        $success = false;
        $errors = [];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $stmt = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
        $stmt->bind_param('ss', $username, $password);

        if ($stmt->execute()) {
            $success = true;
        } else {
            $errors[] = "Invalid Username.";
        }

        $response = [
            "success" => $success,
            "errors" => $errors,
            "message" => $success ? "Successfully Registered " : "Error Occured"
        ];
        echo json_encode($response);
    }
}
