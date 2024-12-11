<?php
session_start();
require_once 'assets/php/config/connection.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Get user info from the database
$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT email, role FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="dashboard.php" class="logo">User Dashboard</a>
            <div class="navbar-links">
                <span>Welcome, <?php echo htmlspecialchars($user['email']); ?></span>
                <a href="assets/php/logout.php" class="logout-btn">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="user-info-card">
            <h2>User Info</h2>
            <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
            <p>Role: <?php echo htmlspecialchars($user['role']); ?></p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 User Authentication System | Powered by <a href="https://github.com/TechTalksOfficial" target="_blank">TechTalksOfficial</a></p>
        </div>
    </footer>

</body>

</html>