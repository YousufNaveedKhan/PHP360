<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication System | TechTalksOfficial</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the User Authentication System By TechTalksOfficial</h1>
        <nav>
            <a href="login.php">Login</a> | <a href="register.php">Register</a>
        </nav>
    </div>
</body>
</html>
