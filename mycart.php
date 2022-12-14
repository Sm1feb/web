<?php
 include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CART</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY Cart</h1>
            </div>
            <div class="lg-9">
            <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serail No.</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Size</th>
     <th scope="col">Color</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
        </tr>
  </thead>
  <tbody class="text-center">
    <?php
    
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart'] as $key=>$value)
     {
        $sr=$key+1;
       
        echo "
        <tr>
        <td>$sr</td>
        <td>$value[Item_Name]</td>
        <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
        <td><input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='1' max='10'></td>
        <td>$value[size]</td>
        <td>$value[color]</td>
        <td class='itotal'></td>
        <td>
        <form action='manage.php' method='POST'>
        <button name='Remove_Item' class='btn  btn-small btn-outline-danger'>REMOVE</button>
        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
        </form>
        </td>
        
        </tr>
        ";
     }
    }
    ?>
   
    
  </tbody>
</table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                <h4> Grand Total:</h3>
                <h5 class="text-center" id="gtotal"></h5>
                <br>
                <form action="">
                
    <div class="form-check">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
      <label class="form-check-label" for="flexRadioDefault2">
       Cash on delivery 
      </label>
</div>
                    <button class="btn btn-primary btn-block">Make Payment</button>
                </form>
</div>
            </div>
        </div>
    </div>

    <script>
      var gt=0;
       var iprice=document.getElementsByClassName('iprice');
       var iquantity=document.getElementsByClassName('iquantity');
       
       var itotal=document.getElementsByClassName('itotal');
       var gtotal=document.getElementById('gtotal');
      function subTotal()
      {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {

            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
      }
     subTotal();
        </script>
       
</body>
</html>