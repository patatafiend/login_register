<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/login_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container" style="background-color: rgba(34, 139, 34, 0.5);">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../ajax/login_ajax.js"></script>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4 p-4 bg-light rounded shadow">
            <form id="register-form" method="post" class="form">
                <div class="text-center mb-3">
                    <h2>Register</h2>
                </div>
                <div class="mb-2">
                    <input type="hidden" name="function-register" value="register">
                    <label for="username">Username:</label>
                    <input class="form-control" type="text" id="username" name="username" required>
                </div>
                <div class="mb-2">
                    <label for="password">Password:</label>
                    <input class="form-control" type="password" id="password" name="password" required>
                </div>
                <div class="mb-2">
                    <input class="btn btn-success w-100" type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>

</body>

</html>