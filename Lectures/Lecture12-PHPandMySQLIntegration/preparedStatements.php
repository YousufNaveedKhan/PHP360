<?php  
$conn = new mysqli("localhost", "root", "", "test_db");  

if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}  

$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");  
$stmt->bind_param("ss", $name, $email);  

// Insert data  
$name = "TechTalksOfficial";  
$email = "techtalks@example.com";  
$stmt->execute();  

echo "Prepared statement executed successfully<br>";  

$stmt->close();  
$conn->close();  
?>  
