<?php
  require("Connection.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="U-VA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device=width, initial-1">
        <title> login panel </title>
        <link rel="stylesheet" href="login.css">
        </head>
    <body>
        
        <div class="container">
            <div class="myform">
                <form method="POST">
                    <h2>ADMIN LOGIN</h2>
                    <input type="text" placeholder="Admin Name" name="AdminName"><br>
                    <input type="password" placeholder="Password" name="AdminPassword"><br>
                    <button type="submit" name="Signin">LOGIN</button>
                    </form>
                    </div>
                    <div class="image">
                        <img src="images/IMAGE7.jpg">
                    </div>
                    </div>
                    <?php
                       if (isset($_POST['Signin'])) {
                        $query = "SELECT * FROM `admin_login` WHERE `Admin_Name` = '$_POST[AdminName]' AND `Admin_Password` = '$_POST[AdminPassword]'";
                           $result = mysqli_query($con, $query);

                          if ($result) {
                       if (mysqli_num_rows($result) == 1) {
                               session_start();
                               $_SESSION['AdminLoginId']=$_POST['AdminName'];
                               header("location: Admin Panel.php");
                        } else {
                            echo "<script>alert('Incorrect Password')</script>";
                        }
                      } 
                     }
                    ?>





                    </body>
                    </html>

                
                    