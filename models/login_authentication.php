<?php
session_start();
include '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST["function"]) && $_POST["function"] == "login") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $success = false;
        $errors = [];

        $stmt = $conn->prepare('SELECT id, password FROM users WHERE username = ?');
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;
                $success = true;
            } else {
                $errors[] = "Invalid Password.";
            }
        } else {
            $errors[] = "Account doesn't exist.";
        }

        $response = [
            "success" => $success,
            "errors" => $errors,
            "message" => $success ? "Successfully Logged In" : "Error Occurred"
        ];
        echo json_encode($response);
    }
}
