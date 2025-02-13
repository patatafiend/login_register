<?php
session_start();
session_destroy();


header('Location: /login_register/views/login_page.php');
exit;
