<?php
require_once 'assets/php/config/connection.php';

function loginUser($email, $password) {
    global $pdo;
    $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);

    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        return true;
    }
    return false;
}

function registerUser($email, $password) {
    global $pdo;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);
    if ($stmt->rowCount() > 0) {
        return false;
    }

    // Insert new user
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute(['email' => $email, 'password' => $hashedPassword]);
}
?>
