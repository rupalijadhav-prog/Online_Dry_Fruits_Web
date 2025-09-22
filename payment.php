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
$Name = filter_input(INPUT_POST, 'Name');
$Email = filter_input(INPUT_POST, 'Email');
$City = filter_input(INPUT_POST, 'City');
$State = filter_input(INPUT_POST, 'State');
$zip_code= filter_input(INPUT_POST, 'zip_code');
$Name_of_card= filter_input(INPUT_POST, 'Name_of_card');
$credit_card_number= filter_input(INPUT_POST, 'credit_card_number');
$Exp_month= filter_input(INPUT_POST, 'Exp_month');
$Exp_year= filter_input(INPUT_POST, 'Exp_year');



// Prepare and bind the SQL statement with placeholders
$sql = "INSERT INTO payment (Name,Email,City,State,Zip_code,Name_of_card,credit_card_number,Exp_month,Exp_year) VALUES (?, ?, ?, ?, ?,?,?,?,?)";
$stmt = $conn->prepare($sql);

// Check if the prepare was successful
if ($stmt === false) {
    die("Error in SQL query: " . $conn->error);
}

// Bind parameters with appropriate data types
$stmt->bind_param("sssssssss", $Name,$Email,$City,$State,$Zip_code,$Name_of_card,$Credit_card_number,$Exp_month,$Exp_year);

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
