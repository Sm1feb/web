<?php 
include('header.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
</head>
<body>
<div class="header">
    <div class="container">
    <div class="categories">
<div class="small-container">
<h2 class="title">Featured Products</h2>
<div class="row">
    <form action="manage.php" method="POST">
    <div class="col-4">
        <img src="images/product-1.jpg">
        <h4>Black Printed T-Shirt</h4>
        <label>Size:</label>
       <select id="size" name="size">
        <option value="30">30</option>
        <option value="34">34</option>
        <option value="40">40</option>
        <option value="50"> 50</option>
</select><br/><br/>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
<input type="hidden" name="Item_Name" value="black T-shirt">
       <input type="hidden" name="Item_Price" value="16000">
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button><br/><br/>
  
  
    <div class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <i class="fa-regular fa-star"></i>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
    </div>
   
</form>
    </div>
    <div class="col-4">
        <form action="manage.php" method="POST">
        <img src="images/product-2.jpg">
        <h4>Shoes</h4>
        <label>Size:</label>
       <select id="size" name="size">
        <option value="30">30</option>
        <option value="34">34</option>
        <option value="40">40</option>
        <option value="50"> 50</option>
</select><br/><br/>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
<input type="hidden" name="Item_Name" value="Black Shoes">
       <input type="hidden" name="Item_Price" value="8000">
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button><br/><br/>
       
  
    <div class="rating">
        <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
    </div>
 
    </form>
    </div>
    <div class="col-4">
        <form action="manage.php" method="POST">
        <img src="images/product-3.jpg">
        <h4>Pants</h4>
        <label>Size:</label>
       <select id="size" name="size">
        <option value="30">30</option>
        <option value="34">34</option>
        <option value="40">40</option>
        <option value="50"> 50</option>
</select><br/><br/>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
<input type="hidden" name="Item_Name" value="Black Pants">
       <input type="hidden" name="Item_Price" value="6000">
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button><br/><br/>
       
  
    <div class="rating">
        <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa-regular fa-star"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
    </div>
   
    </form>
    </div>
    <div class="col-4">
        <form action="manage.php" method="POST">
        <img src="images/product-4.jpg">
        <h4> T-Shirt</h4>
        <label>Size:</label>
       <select id="size" name="size">
        <option value="30">30</option>
        <option value="34">34</option>
        <option value="40">40</option>
        <option value="50"> 50</option>
</select><br/><br/>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
<input type="hidden" name="Item_Name" value="Black T-shirt">
       <input type="hidden" name="Item_Price" value="1000">
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button><br/><br/>
       
  
    <div class="rating">
        <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa-regular fa-star"></i>
    </div>
   
    </form>
    </div>
</div>
<!--Latest products -->
<h2 class="title">Latest Products</h2>
<div class="row">
    <div class="col-4">
        <form action="manage.php" method="POST">
        <img src="images/product-5.jpg">
        <h4>Shoes</h4>
        <label>Size:</label>
       <select id="size" name="size">
        <option value="30">30</option>
        <option value="34">34</option>
        <option value="40">40</option>
        <option value="50"> 50</option>
</select><br/><br/>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
<input type="hidden" name="Item_Name" value="White Shoes">
       <input type="hidden" name="Item_Price" value="6000">
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button><br/><br/>
       
  
    <div class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <i class="fa-solid fa-star-half"></i>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
    </div>
  
    </form>
    </div>
    <div class="col-4">
        <form action="manage.php" method="POST">
        <img src="images/product-6.jpg">
        <h4>Shoes</h4>
        <label>Size:</label>
       <select id="size" name="size">
        <option value="30">30</option>
        <option value="34">34</option>
        <option value="40">40</option>
        <option value="50"> 50</option>
</select><br/><br/>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
<input type="hidden" name="Item_Name" value="Deep Black">
       <input type="hidden" name="Item_Price" value="6000">
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button><br/><br/>
       
  
    <div class="rating">
        <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa-regular fa-star"></i>
    </div>
   
    </form>
    </div>
    
    <div class="col-4">
        <form action="manage.php" method="POST">
        <img src="images/product-7.jpg">
        <h4>Socks</h4>
        <label>Size:</label>
       <select id="size" name="size">
        <option value="30">30</option>
        <option value="34">34</option>
        <option value="40">40</option>
        <option value="50"> 50</option>
</select><br/><br/>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
<input type="hidden" name="Item_Name" value="Pair of Socks">
       <input type="hidden" name="Item_Price" value="1000">
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button><br/><br/>
       
  
    <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa-solid fa-star-half"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
    </div>
  
    </form>
    </div>
</div>


<div class="row">
    <div class="col-4">
        <form action="manage.php" method="POST">
        <img src="images/product-8.jpg">
        <h4>Watch</h4>
        <label>Size:</label>
       <select id="size" name="size">
        <option value="30">30</option>
        <option value="34">34</option>
        <option value="40">40</option>
        <option value="50"> 50</option>
</select><br/><br/>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
<input type="hidden" name="Item_Name" value="Fossil Watch">
       <input type="hidden" name="Item_Price" value="6000">
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button><br/><br/>
       
  
    <div class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <i class="fa-solid fa-star-half"></i>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
    </div>
    
    </form>
    </div>
    <div class="col-4">
        <form action="manage.php" method="POST">
        <img src="images/product-9.jpg">
        <h4>Watch</h4>
        <label>Size:</label>
       <select id="size" name="size">
        <option value="30">30</option>
        <option value="34">34</option>
        <option value="40">40</option>
        <option value="50"> 50</option>
</select><br/><br/>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
<input type="hidden" name="Item_Name" value="Black Watch">
       <input type="hidden" name="Item_Price" value="8000">
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button><br/><br/>
       
  
    <div class="rating">
        <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa-regular fa-star"></i>
    </div>
  
    </form>
    </div>
    <div class="col-4">
        <form action="manage.php" method="POST">
        <img src="images/product-10.jpg">
        <h4>Shoes</h4>
        <label>Size:</label>
       <select id="size" name="size">
        <option value="30">30</option>
        <option value="34">34</option>
        <option value="40">40</option>
        <option value="50"> 50</option>
</select><br/><br/>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
<input type="hidden" name="Item_Name" value="Black-red shoes">
       <input type="hidden" name="Item_Price" value="6000">
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button><br/><br/>
       
  
    <div class="rating">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa-solid fa-star-half"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
    </div>
  
    </form>
    </div>
    <div class="col-4">
        <form action="manage.php" method="POST">
        <img src="images/product-12.jpg">
        <h4>Pants</h4>
        <label>Size:</label>
       <select id="size" name="size">
        <option value="30">30</option>
        <option value="34">34</option>
        <option value="40">40</option>
        <option value="50"> 50</option>
</select><br/><br/>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
<input type="hidden" name="Item_Name" value="Black Pant">
       <input type="hidden" name="Item_Price" value="800">
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button><br/><br/>
       
  
    <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa-solid fa-star-half"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
    </div>
  
    </form>
    </div>
</div>

</div>
</div>
<!--OFFER-->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <form action="manage.php" method="POST">
                <img src="images/exclusive.png" class="offer-img">
            </div>
            <div class="col-2">
            <p>Exclusively Available on Red Store</p>
            <h1>Smart Band 4</h1>
            <small>Mi Smart Band 4 will track your heart rate, calories burned and more. Maintain a safe workout, whether you're running short or long distance. as you climb mountain roads or dash around the city.
            </small>
            <br>
            <label>Size:</label>
       <select id="size" name="size">
        <option value="30">30</option>
        <option value="34">34</option>
        <option value="40">40</option>
        <option value="50"> 50</option>
</select><br/><br/>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
            <input type="hidden" name="Item_Name" value="Smart Watch">
       <input type="hidden" name="Item_Price" value="16000">
            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button><br/><br/>
        </form>
                </a>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>