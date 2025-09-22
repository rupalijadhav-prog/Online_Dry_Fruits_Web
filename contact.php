<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "contactform"; 

// Create connection 
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement with placeholders
$sql = "INSERT INTO contact11 (Full_name, Email,Type_Your_Message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $Full_Name, $Email, $Type_Your_Message);

// Get values from POST
$Full_Name = filter_input(INPUT_POST, 'Full_Name');
$Email = filter_input(INPUT_POST, 'Email');
$Type_Your_Message = filter_input(INPUT_POST, 'Type_Your_Message');

// Execute the statement
if ($stmt->execute()) {
    echo "New record is inserted successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
