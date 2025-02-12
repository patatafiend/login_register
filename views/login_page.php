<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login_style.css">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../ajax/login_ajax.js"></script>

    <div>
        <h2>Login</h2>
        <form id="login-form" method="POST" class="form">
            <div>
                <input type="hidden" name="function" value="login">
                <label>Username</label>
                <input type="text" name="username" id="username" placeholder="Name" required>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div id="response">
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
            <div>
                <input type="button" value="Register" onclick="window.location.href='register_page.php'">
            </div>
        </form>
    </div>


</body>

</html>