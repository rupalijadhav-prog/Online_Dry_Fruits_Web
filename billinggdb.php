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
$Email_Id = filter_input(INPUT_POST, 'Email_Id');
$Phone_Number = filter_input(INPUT_POST, 'Phone_Number');
$State = filter_input(INPUT_POST, 'State');
$District = filter_input(INPUT_POST, 'District');
$City = filter_input(INPUT_POST, 'City');
$Pin_Code = filter_input(INPUT_POST, 'Pin_Code');
$Pay_Mode = filter_input(INPUT_POST, 'Pay_Mode');

// Prepare and bind the SQL statement with placeholders
$sql = "INSERT INTO billing (Full_Name,Email_Id,Phone_Number,State,District,City,Pin_Code,Pay_Mode) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);

// Check if the prepare was successful
if ($stmt === false) {
    die("Error in SQL query: " . $conn->error);
}

// Bind parameters with appropriate data types
$stmt->bind_param("ssssssss", $Full_Name,$Email_Id,$Phone_Number,$State,$District,$City,$Pin_Code,$Pay_Mode);


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
