<?php  
// Connecting to MySQL using MySQLi  
$conn = new mysqli("localhost", "root", "", "test_db");  

// Check connection  
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}  
echo "Connected successfully";  
?>  
