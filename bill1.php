<?php include("header1.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8 text-center border rounded bg-light my-5">
                <h3>Billing Form</h3>
            </div>
        </div>

        <div class="row justify-content-md-center">
            <div class="col-lg-6">
                <table class="table">
                    <tbody class="text-center">
                        <?php
                        if(isset($_SESSION['cart'])) {
                            foreach($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;
                                echo "<tr>
                                        <td>Product Name</td>
                                        <td>Price</td>
                                      </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Grand Total:</h4>
                    <h5 class="text-center" id="gtotal"></h5><br>
                </div>
            </div>
        </div>

        <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { ?>
            <div class="row mt-4 justify-content-md-center">
                <div class="col-lg-8 border border-primary p-4">
                    <form action="purchase.php" method="POST">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="full_name" class="form-control border border-dark" required>
                        </div><br>

                        <div class="form-group">
                            <label>Email Id</label>
                            <input type="text" name="Email_Id" class="form-control border border-dark" required>
                        </div><br>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="phone_no" class="form-control border border-dark" required>
                        </div><br>

                        <div class="form-group">
                            <label>State</label>
                            <input type="text" name="State" class="form-control border border-dark" required>
                        </div><br>

                        <div class="form-group">
                            <label>District</label>
                            <input type="text" name="District" class="form-control border border-dark" required>
                        </div><br>

                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="City" class="form-control border border-dark" required>
                        </div><br>

                        <div class="form-group">
                            <label>Pin Code</label>
                            <input type="text" name="Pin_Code" class="form-control border border-dark" required>
                        </div><br>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Delivery
                            </label>
                        </div>
                        <br>

                        <button class="btn btn-primary btn-block" name="purchase">Make Payment</button>
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal() {
            gt = 0;
            for (i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;
        }

        subTotal();
    </script>
</body>
</html>
