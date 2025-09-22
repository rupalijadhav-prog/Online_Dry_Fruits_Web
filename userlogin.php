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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        // Login process
        $loginEmail = $_POST['Email'];
        $loginPassword = $_POST['Password'];

        $loginSql = "SELECT * FROM userlogin WHERE Email = ? AND Password = ?";
        $loginStmt = $conn->prepare($loginSql);
        $loginStmt->bind_param("ss", $loginEmail, $loginPassword);
        $loginStmt->execute();
        $loginResult = $loginStmt->get_result();

        if ($loginResult->num_rows > 0) {
            // Redirect to the project page after successful login
            header("Location: index1.html");
            exit();
        } else {
            echo "Login failed. Please check your email and password.";
        }

        $loginStmt->close();
    } elseif (isset($_POST['signup'])) {
        // Signup process
        $signupEmail = $_POST['Email'];
        $signupPassword = $_POST['Password'];

        $signupSql = "INSERT INTO userlogin (Email, Password) VALUES (?, ?)";
        $signupStmt = $conn->prepare($signupSql);
        $signupStmt->bind_param("ss", $signupEmail, $signupPassword);

        if ($signupStmt->execute()) {
            // Redirect to the previous page after successful signup
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            // Registration unsuccessful
            echo "<script>alert('Registration unsuccessful. Please try again.');</script>";
        }

        $signupStmt->close();
    }
}

$conn->close();
?>
