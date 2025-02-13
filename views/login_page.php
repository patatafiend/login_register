<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container" style="background-color: rgba(34, 139, 34, 0.5);">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../ajax/login_ajax.js"></script>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4 p-4 bg-light rounded shadow">
            <form id="login-form" method="POST">
                <div class="text-center mb-3">
                    <h2>Login</h2>
                </div>
                <div class="mb-2">
                    <input type="hidden" name="function" value="login">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="Name" required>
                </div>
                <div class="mb-2">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div id="response"></div>
                <div class="mb-2">
                    <input class="btn btn-success w-100" type="submit" value="Login">
                </div>
                <div>
                    <input class="btn btn-secondary w-100" type="button" value="Register" onclick="window.location.href='register_page.php'">
                </div>
            </form>
        </div>
    </div>



</body>

</html>