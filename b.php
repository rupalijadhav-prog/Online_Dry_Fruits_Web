<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 20px;
        }

        .border-primary {
            border-color: #007bff !important;
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        .rounded {
            border-radius: 0.3rem !important;
        }

        .p-4 {
            padding: 1.5rem !important;
        }

        .my-5 {
            margin-top: 5rem !important;
            margin-bottom: 5rem !important;
        }

        .btn-primary {
            background-color: #007bff !important;
            border-color: #007bff !important;
        }

        .btn-primary:hover {
            background-color: #0056b3 !important;
            border-color: #0056b3 !important;
        }

        .form-control {
            border: 1px solid #ced4da;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-check-input {
            margin-top: 0.25rem !important;
        }

        .form-check-label {
            margin-left: 1.25rem !important;
        }
    </style>
</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                 <h3>Billing Form</h3>
            </div>

            
          
   
            </tbody>
            </table>    
          </div>

   






          <div class="col-lg-3">
               <div class="border bg-light rounded p-4">
                 <h4>Grand Total:</h4>
                 <h5 class="text-right" id="gtotal"></h5><br>
                  <?php
                     if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                     
                    {
                  ?>

                   
                   <?php 
                     }
                   ?>
    </div>
</div>
                    

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
        </div>
    </div>



    <!-- Your existing HTML content -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        // Your existing script
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
