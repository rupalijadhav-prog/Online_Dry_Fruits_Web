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
$sql = "INSERT INTO login (Email,Password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $Email, $Password);

// Get values from POST

$Email = filter_input(INPUT_POST, 'Email');
$Password = filter_input(INPUT_POST, 'Password');

// Execute the statement
if ($stmt->execute()) {
    echo "Password Accepted.
           Your are Login.....";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();



// Assuming form submission via POST method



?>

