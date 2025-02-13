<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: /login_register/views/login_page.php');
    exit;
}

include '../config/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div>
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>This is my application.</p>

        <form method="post">
            <input type="submit" name="show_users" value="Show Registered Users">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['show_users'])) {
            $result = $conn->query('SELECT id, username FROM users');
            echo '<table border="1">';
            echo '<tr><th>id</th><th>username</th></tr>';
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['username']) . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="2">No users found</td></tr>';
            }
            echo '</table>';
        }
        ?>
    </div>
    <div>
        <a href="../logout.php">Logout</a>
    </div>

</body>

</html>