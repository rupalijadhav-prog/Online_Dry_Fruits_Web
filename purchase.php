<?php
session_start();

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "contactform";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    echo "<script>
          alert('Cannot connect to database');
          window.location.href='mycart.php';
          </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['purchase'])) {
        $query1 = "INSERT INTO `order_manager`(`Full_name`, `Phone_No`, `Address`, `Pay_Mod`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";

        if (mysqli_query($conn, $query1)) {
            $Order_Id = mysqli_insert_id($conn); // Fix variable name here
            $query2 = "INSERT INTO `user_order`(`Order_id`, `Item_Name`, `Item_Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($conn, $query2); // Fix variable name here
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "isii", $Order_Id, $Item_Name, $Price, $Quantity);
                foreach ($_SESSION['cart'] as $key => $values) {
                    $Item_Name = $values['Item_Name']; // Fix variable name here
                    $Price = $values['Price']; // Fix variable name here
                    $Quantity = $values['Quantity']; // Fix variable name here
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo "<script>
                alert('Order Placed  Click OK to view your bill');
                window.location.href='nbill.php'; // Redirect to nbill.php after placing order
                </script>";
            } else {
                echo "<script>
                alert('SQL Query Prepared Error');
                window.location.href='mycart.php';
                </script>";
            }
        } else {
            echo "<script>
            alert('SQL Error');
            window.location.href='mycart.php';
            </script>";
        }
    }
}

$conn->close();
?>
