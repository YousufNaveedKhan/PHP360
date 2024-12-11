<?php
// Database connection settings
$host = 'localhost'; // Replace with your DB host
$dbname = 'lecture_14'; // Replace with your DB Name
$username = 'root'; // Replace with your DB username
$password = ''; // Replace with your DB password

// Establishing the PDO connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Setting the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate if 'username' is set in the POST request
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username'];
        
        // Prepare the SQL query to prevent SQL injection
        $stmt = $pdo->prepare("SELECT * FROM users WHERE Name = :username"); // Query based on 'Name' column
        $stmt->execute(['username' => $username]);

        // Fetch the results
        $user = $stmt->fetch();
        if ($user) {
            echo "User found: " . $user['name'] . "<br>";
            echo "Email: " . $user['email']; // Display email of the found user
        } else {
            echo "No user found.";
        }
    } else {
        echo "Username is required.";
    }
}
?>
<form method="post" action="sqlInjectionProtection.php">
    <input type="text" name="username" placeholder="Enter username" required>
    <button type="submit">Submit</button>
</form>
