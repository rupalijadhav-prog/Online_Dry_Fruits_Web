<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Add_To_Cart'])) {
        if (isset($_SESSION['cart'])) {
            $myitems = array_column($_SESSION['cart'], 'Item_Name'); // Use 'Item_Name' instead of 'item_Name'
            if (in_array($_POST['Item_Name'], $myitems)) { 
                echo "<script>
                      alert('Item already added');
                      window.location.href='index.php'; // Fix the typo in window.location
                      </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
                echo "<script>
                alert('Item added');
                window.location='index.php'; // Fix the typo in window.location
                </script>";
            }
        } else {
            $_SESSION['cart'][0] = array('Item_Name' => $_POST['Item_Name'], 'Price' =>$_POST['Price'], 'Quantity' => 1);
            print_r($_SESSION['cart']);
            echo "<script>
            alert('Item added');
            window.location='index.php'; // Fix the typo in window.location
            </script>";
        }
    }
}
?>
