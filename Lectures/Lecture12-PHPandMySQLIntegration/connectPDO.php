<?php  
// Connecting to MySQL using PDO  
try {  
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");  
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    echo "Connected successfully";  
} catch (PDOException $e) {  
    echo "Connection failed: " . $e->getMessage();  
}  
?>  
