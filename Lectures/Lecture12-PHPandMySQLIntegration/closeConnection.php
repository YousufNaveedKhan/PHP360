<?php  
$conn = new mysqli("localhost", "root", "", "test_db");  

if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}  

// Perform operations...  

$conn->close();  
echo "Connection closed successfully";  
?>  
