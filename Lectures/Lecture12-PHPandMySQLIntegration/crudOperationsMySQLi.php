<?php  
$conn = new mysqli("localhost", "root", "", "test_db");  

if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}  

// Create  
$sql = "INSERT INTO users (name, email) VALUES ('TechTalks', 'techtalksofficial@example.com')";  
if ($conn->query($sql) === TRUE) {  
    echo "New record created successfully";  
} else {  
    echo "Error: " . $sql . "<br>" . $conn->error;  
}  

// Read  
$sql = "SELECT * FROM users";  
$result = $conn->query($sql);  
if ($result->num_rows > 0) {  
    while ($row = $result->fetch_assoc()) {  
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";  
    }  
} else {  
    echo "0 results";  
}  

// Update  
$sql = "UPDATE users SET email='updated@example.com' WHERE id=1";  
if ($conn->query($sql) === TRUE) {  
    echo "Record updated successfully";  
} else {  
    echo "Error updating record: " . $conn->error;  
}  

// Delete  
$sql = "DELETE FROM users WHERE id=1";  
if ($conn->query($sql) === TRUE) {  
    echo "Record deleted successfully";  
} else {  
    echo "Error deleting record: " . $conn->error;  
}  

$conn->close();  
?>  
