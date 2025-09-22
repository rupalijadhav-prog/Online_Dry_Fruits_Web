<?php
$host ="localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="contactform"; 

// Create connection 
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get values from POST
$Name = filter_input(INPUT_POST, 'Name');
$Address = filter_input(INPUT_POST, 'Address');
$Contact = filter_input(INPUT_POST, 'Contact_No');
$Email = filter_input(INPUT_POST, 'Email');
$Product = filter_input(INPUT_POST, 'Product');
$Quantity = filter_input(INPUT_POST, 'Quantity');

// Prepare and bind the SQL statement with placeholders
$sql="INSERT INTO order(Name,Address,Contact_No,Email,Product,Quantity) VALUES (?,?,?,?,?,?)";
$stmt=$conn->prepare($sql);

// Check if the prepare was successful
if ($stmt === false) {
    die("Error in SQL query: " . $conn->error);
}

// Bind parameters with appropriate data types
$stmt->bind_param("ssssss", $Name, $Address, $Contact_No, $Email, $Product,$Quantity);

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
