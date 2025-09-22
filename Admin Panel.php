<?php
require("Connection.php");
session_start();
session_regenerate_id(true);
if(!isset($_SESSION['AdminLoginId']))
{
   header("location: Admin Login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
        }
        div.header h1
        {
            color:white;
        }
        div.header {
            font-family: poppins;
            display: flex;
            justify-content: space-between;
            align-items: center; /* Corrected typo in align-items */
            padding: 0px 60px;
            background-color: #204969;
        }
        /* Corrected typo in the class name */
        div.header button {
            background-color: #f0f0f0;
            font-size: 16px;
            font-weight: 550; /* Corrected typo in font-weight */
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Corrected typo in the class attribute -->
    <div class="header">
        <h1>Welcome To Admin Panel - <?php echo $_SESSION['AdminLoginId'] ?></h1>
        <form method="POST">
        <button name="Logout">Log Out</button>
       </form>
    </div>
   
   <div class="container mt-5">
     <div class="row">
        <div class="col-lg-12">
        
        <table class="table text-center table-dark table-hover">
        
            <thead>
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Order Name</th>
                <th scope="col">Phone No</th>
                <th scope="col">Address</th>
                <th scope="col">Pay Mode</th>
                <th scope="col">Orders</th>
            </tr>
           </thead>
          <tbody>
          <?php
    $query = "SELECT * FROM `order_manager`";
    $user_result = mysqli_query($con, $query);

    while ($user_fetch = mysqli_fetch_assoc($user_result)) {
        echo "
            <tr>
                <td>{$user_fetch['Order_id']}</td>
                <td>{$user_fetch['Full_Name']}</td>
                <td>{$user_fetch['Phone_No']}</td>
                <td>{$user_fetch['Address']}</td>
                <td>{$user_fetch['Pay_Mod']}</td>
                <td>
                    <table class='table text-center table-dark table-hover'>
                        <thead>
                            <tr>
                                <th scope='col'>Item Name</th>
                                <th scope='col'>Price</th>
                                <th scope='col'>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>";

        $order_query = "SELECT * FROM `user_order` WHERE `Order_id` = '{$user_fetch['Order_id']}'";
        $order_result = mysqli_query($con, $order_query);

        while ($order_fetch = mysqli_fetch_assoc($order_result)) {
            echo "
                <tr>
                    <td>{$order_fetch['Item_Name']}</td>
                    <td>";

            // Check if 'Price' key exists in the array
            if (array_key_exists('Item_Price', $order_fetch)) {
                echo $order_fetch['Item_Price'];
            } else {
                echo "N/A"; // or handle the missing key as per your requirement
            }

            echo "</td>
                    <td>{$order_fetch['Quantity']}</td>
                </tr>";
        }

        echo "
                        </tbody>
                    </table>            
                </td>
            </tr>";
    }
?>

    
    
  </tbody>

        </table>
        



        </div>

      </div>
    </div>


   
   <?php
   if(isset($_POST['Logout']))
   {
    session_destroy();
    header("location: Admin Login.php");
   }
   ?>





</body>
</html>
