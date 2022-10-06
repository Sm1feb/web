<?php 
include('header.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECommere Website Design</title>
    <link rel="stylesheet" href="https://fontawesome.com/v4/icon/star">
    <link rel="stylesheet" href="style.css">
   <link href="https://fonts.google.com/share?selection.family=Inter%7CPoppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,100">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="header">
    <div class="container">
    <div class="navbar">
        <div class="logo">
        
            <img src="images/logo.png" width="125px">
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </nav>
      
    </div>
    <div class="row">
        <div class="col-2">
            <h1>Give Your WorkOut<br> A New Style!</h1>
            <p>Success Is Not always about greatness. Its About consistency.Consistent<br>
            hard work gains success.Greatness will come. </p>
            <a href="home.php" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
          <img src="images/image1.png">
        </div>
    </div>
</div>
</div>
<!----- Categories Section-->
<div class="categories">
    <div class="small-container">
    <h2 class="title">Sample Products</h2>
    <div class="row">
    <div class="col-3">
   

        <img src="images/category-1.jpg">
       
       
        
    </div>
    <div class="col-3">
        <img src="images/category-2.jpg">
        
       
    </div>
    <div class="col-3">
        <img src="images/category-3.jpg">
       
       
    </div>
</div>
</div>
</div>
<!-----featured products-->
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
</select>
<label>Color:</label>
  <select id="color" name="color">
       <option value="black">Black</option>
       <option value="blue">Blue</optiom>
       <option value="red">Red</option>
</select>
<input type="hidden" name="Item_Name" value="black T-shirt">
       <input type="hidden" name="Item_Price" value="16000">
        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
  
  
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
<!--testimonial-->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
                <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa-solid fa-star-half"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <img src="images/user-1.png">
                    <h3>Sean Parker</h3>
            </div>
      
        <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
            <div class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa-solid fa-star-half"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <img src="images/user-2.png">
                <h3>Mike Smith</h3>
        </div>
   
    <div class="col-3">
        <i class="fa fa-quote-left"></i>
        <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
        <div class="rating">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa-solid fa-star-half"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <img src="images/user-3.png">
            <h3>Mabel Joe</h3>
    </div>
</div>
    </div>
</div>
</div>
</div>
<!--Brands-->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                
            </div>
        </div>
    </div>
</div>
</body>
</html>