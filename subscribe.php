<?php 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "contactform"; 

// Create connection 
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
mysqli_set_charset($conn, "utf8mb4");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement with placeholders
$sql = "INSERT INTO subscribe (Your_Email) VALUES (?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $Your_Email);

// Get values from POST

$Your_Email = filter_input(INPUT_POST, 'Your_Email');


// Execute the statement
if ($stmt->execute()) {
    echo "You are Subscribe Successfully.....";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();



// Assuming form submission via POST method



?>

