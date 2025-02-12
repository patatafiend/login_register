<?php
session_start();
$_SESSION["loggedin"] = false;
session_unset();
session_destroy();

header("Cache-Control: no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat, 1 Jan 2000 00:00:00 GMT");


header('Location: /login_register/views/login_page.php');
exit;
