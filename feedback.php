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

// Get values from POST
$Full_Name = filter_input(INPUT_POST, 'Full_Name');
$Address = filter_input(INPUT_POST, 'Address');
$Phone = filter_input(INPUT_POST, 'Phone');
$Email = filter_input(INPUT_POST, 'Email');
$Type_Your_Feedback = filter_input(INPUT_POST, 'Type_Your_Feedback');

// Prepare and bind the SQL statement with placeholders
$sql = "INSERT INTO feedback (Full_Name,Address,Phone,  Email, Type_Your_Feedback) VALUES (?,  ?,?,?, ?)";
$stmt = $conn->prepare($sql);

// Check if the prepare was successful
if ($stmt === false) {
    die("Error in SQL query: " . $conn->error);
}

// Bind parameters with appropriate data types
$stmt->bind_param("sssss", $Full_Name,$Address,$Phone,  $Email, $Type_Your_Feedback);

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
