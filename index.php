<?php include("header.php"); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

<h1 class="heading" >Our<span> Products</span></h1>
<style>
    .heading
{
    text-align: center;
    padding: 2rem 0;
    padding-bottom: 3rem;
    font-size: 2rem;
    color: black;
}
    
    
    .heading span
{
    background-color: green;
    color: #fff;
    display: inline-block;
    padding: .4rem 2rem;
    clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
    text-align:center;
}
</style>

<div class="container mt-5"> 
    <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/product 26.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dry Fig </h5>
                        <p class="card-text"> Price: 160/- kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Dry Fig">
                        <input type="hidden" name="Price" value="160 ">
                    </div>
                </div>
            </form>
        </div>

        <!-- Repeat the above structure for other columns as needed -->
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/product 3.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Saffron</h5>
                        <p class="card-text"> Price: 340/- gm </p>
                        <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Saffron">
                        <input type="hidden" name="Price" value="340">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/product 00.jfif" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Walnut</h5>
                        <p class="card-text"> Price: 640/- kg </p>
                        <button type="submit" name ="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Walnut">
                        <input type="hidden" name="Price" value="640">
                    </div>
                </div>
            </form>
        </div>


        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/product 5.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pistachio</h5>
                        <p class="card-text"> Price:  1055/- kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Pistachio">
                        <input type="hidden" name="Price" value="1055">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

</div><br>









<div class="container mt-5"> 
    <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/product 000.jfif" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kiwi</h5>
                        <p class="card-text"> Price: 600/- Kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Kiwi">
                        <input type="hidden" name="Price" value="600">
                    </div>
                </div>
            </form>
        </div>

        <!-- Repeat the above structure for other columns as needed -->
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/product 11.jfif" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Almond</h5>
                        <p class="card-text"> Price: 705/- kg </p>
                        <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Almond">
                        <input type="hidden" name="Price" value="705">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/product 111.jfif" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Groundnuts</h5>
                        <p class="card-text"> Price: 130/- kg </p>
                        <button type="submit" name ="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Groundnuts">
                        <input type="hidden" name="Price" value="130">
                    </div>
                </div>
            </form>
        </div>


        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/product 1.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cashew</h5>
                        <p class="card-text"> Price: 819/- kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Cashew">
                        <input type="hidden" name="Price" value="819">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

</div>
<br>




<div class="container mt-5"> 
    <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/product 23.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">BlueBerries</h5>
                        <p class="card-text"> Price: 340/- gm </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="BlueBerries">
                        <input type="hidden" name="Price" value="340">
                    </div>
                </div>
            </form>
        </div>

        <!-- Repeat the above structure for other columns as needed -->
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/product 24.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dry Coconut</h5>
                        <p class="card-text"> Price: 110/- kg </p>
                        <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Dry Coconut">
                        <input type="hidden" name="Price" value="110">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/product 25.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dates</h5>
                        <p class="card-text"> Price: 179/- kg </p>
                        <button type="submit" name ="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Dates">
                        <input type="hidden" name="Price" value="179">
                    </div>
                </div>
            </form>
        </div>


        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/product 0.jfif" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Raisins</h5>
                        <p class="card-text"> Price: 500/- kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Raisins">
                        <input type="hidden" name="Price" value="500">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
</div>
<br>
<h1 class="heading" >Product<span> Categories</span></h1>
<style>
    .heading
{
    text-align: center;
    padding: 2rem 0;
    padding-bottom: 3rem;
    font-size: 2rem;
    color: black;
}
    
    
    .heading span
{
    background-color: green;
    color: #fff;
    display: inline-block;
    padding: .4rem 2rem;
    clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
    text-align:center;
}
</style>

<h1 class="heading1" >Seeds<span> Categories</span></h1>
<style>
    .heading1
{
    text-align: center;
    padding: 2rem 0;
    padding-bottom: 3rem;
    font-size: 1.5rem;
    color: black;
}
    
    
    .heading1 span
{
    background-color:gray;
    color: #fff;
    display: inline-block;
    padding: .4rem 2rem;
    clip-path: polygon(100% 0, 93% 50%, 100% 99%, 0% 100%, 7% 50%, 0% 0%);
    text-align:center;
}
</style>




<div class="container mt-5"> 
    <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/pumpkinc.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pumpking Seeds</h5>
                        <p class="card-text"> Price: 665/- Kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Pumpking Seeds">
                        <input type="hidden" name="Price" value="655">
                    </div>
                </div>
            </form>
        </div>

        <!-- Repeat the above structure for other columns as needed -->
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/lotus.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lotus Seeds</h5>
                        <p class="card-text"> Price: 739/- kg </p>
                        <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Lotus Seeds">
                        <input type="hidden" name="Price" value="739">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/sunflower.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sunflower Seeds</h5>
                        <p class="card-text"> Price: 390/- kg </p>
                        <button type="submit" name ="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Sunflower Seeds">
                        <input type="hidden" name="Price" value="390">
                    </div>
                </div>
            </form>
        </div>


        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/kharabuj.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kharabuj Seeds</h5>
                        <p class="card-text"> Price: 400/- kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Kharabuj Seeds">
                        <input type="hidden" name="Price" value="400">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

</div>
<br><br>


<h1 class="heading1" >Dates<span> Categories</span></h1>

<div class="container mt-5"> 
    <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/zahidi dates.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Zahedi Dates</h5>
                        <p class="card-text"> Price: 245/- Kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Zahedi Dates">
                        <input type="hidden" name="Price" value="245">
                    </div>
                </div>
            </form>
        </div>

        <!-- Repeat the above structure for other columns as needed -->
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/plarom Dates.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Plarom Dates</h5>
                        <p class="card-text"> Price: 349/-kg </p>
                        <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Plarom Dates">
                        <input type="hidden" name="Price" value="349">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/cat 11.jfif" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mozafati Dates</h5>
                        <p class="card-text"> Price: 400/- kg </p>
                        <button type="submit" name ="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Mozafati Dates">
                        <input type="hidden" name="Price" value="400">
                    </div>
                </div>
            </form>
        </div>


        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/shahabi dates.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Shahabi Dates</h5>
                        <p class="card-text"> Price: 220/- kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Shahabi Dates">
                        <input type="hidden" name="Price" value="220">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

</div>
<br><br>



<h1 class="heading1" >Almond<span> Categories</span></h1>
<div class="container mt-5"> 
    <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/cat 22.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mamra Badam</h5>
                        <p class="card-text"> Price: 980/- Kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Mamra Badam">
                        <input type="hidden" name="Price" value="980">
                    </div>
                </div>
            </form>
        </div>

        <!-- Repeat the above structure for other columns as needed -->
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/cat 33.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kagazi Badam</h5>
                        <p class="card-text"> Price: 1110/- kg </p>
                        <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Kagazi Badam">
                        <input type="hidden" name="Price" value="1110">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/cat 55.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Australian Badam</h5>
                        <p class="card-text"> Price: 850/- kg </p>
                        <button type="submit" name ="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Australian Badam">
                        <input type="hidden" name="Price" value="850">
                    </div>
                </div>
            </form>
        </div>


        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/americ almond.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">American Badam</h5>
                        <p class="card-text"> Price: 1290/- kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="American Badam">
                        <input type="hidden" name="Price" value="1290">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

</div>
<br><br>





<h1 class="heading1" >Raisins<span> Categories</span></h1>


<div class="container mt-5"> 
    <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/green-raisins" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Green Raisins</h5>
                        <p class="card-text"> Price: 750/- Kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Green Raisins">
                        <input type="hidden" name="Price" value="750">
                    </div>
                </div>
            </form>
        </div>

        <!-- Repeat the above structure for other columns as needed -->
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/black raisins.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Black Raisins</h5>
                        <p class="card-text"> Price: 980/- kg</p>
                        <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Black Raisins">
                        <input type="hidden" name="Price" value="980">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/red rainsis.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Red Raisins</h5>
                        <p class="card-text"> Price: 650/- kg </p>
                        <button type="submit" name ="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Red Raisins">
                        <input type="hidden" name="Price" value="650">
                    </div>
                </div>
            </form>
        </div>


        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/cat 00.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sultanas</h5>
                        <p class="card-text"> Price: 500/- kg </p>
                        <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Sultanas">
                        <input type="hidden" name="Price" value="500">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

</div>
<br><br>








</body>
</html>