<?php

session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT id, password FROM users WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

       

        if (password_verify($password, $hashed_password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header('Location: home_page.php');
            exit;
        } else {
            echo 'Invalid username or password 1';
        }
    } else {
        echo 'Invalid username or password';
    }

    $stmt->close();
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    header('Location: register.php');
}
?>