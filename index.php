<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: /login_register/views/home_page.php');
} else {
    header('Location: /login_register/views/login_page.php');
}
exit;
