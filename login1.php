<?php
$Email = $_POST['Email'];
$Password = $_POST['Password'];

// Database connection here
$con = new mysqli("localhost","root","","contactform");
if($con_>connect_error){
    die("failed to connect:"$con->connect_error");
}else{
    $stmt =$con->prepare("select* from login where email =?");
    $stmt->bind_param("ss",$Email,$Password);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows > 0)
    else{
        echo "<h2>invalid Email or Password<h2>";
    }
} 

