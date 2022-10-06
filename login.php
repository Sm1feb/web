
<?php

$connect=mysqli_connect("localhost","root","","chat") or die("connection failed");
if(!empty($_REQUEST['Save']))
{
    $getname=$_REQUEST['email'];
    $getclass=$_REQUEST['password'];
    

    if(!empty($_REQUEST['editID']))
    {
        $ID=$_REQUEST['editID'];
        $query="update loginp set email='$getname',password='$getclass' where ID=$ID";
    }
    else{
    $query="insert into loginp(email,password)values('$getname','$getclass')";
    }
    if(mysqli_query($connect,$query))
    {
        echo "
        <script>
        alert ('You Login successfully');
        window.location.href='index.php';
        </script>
        ";

    }
    else
    {
   echo "Record not inserted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://fontawesome.com/v4/icon">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style3.css">
  
    <link rel="stylesheet" href="https://fontawesome.com/icons/link?s=solid&f=classic"/>
</head>
<body>
<a href="index.php"> <button style="cursor:pointer;">Back</button></a>
    <div class="wrapper">
        <section class="form login">
            <header>Login Page</header>
            <form action="#">
                
              
                        
                            <div class="field input">
                                <label>Email Address</label>
                                <input type="text" placeholder="Enter your email" name="email">
                            </div>
                           
                                <div class="field input">
                                    <label>Password</label>
                                    <input type="password" placeholder="Enter your password" name="password">
                                    <i class="fa-solid fa-eye" style=" margin-left: 361px;margin-top: -26px;"></i>
                                </div>
                                <div class="field button">
                                            
                                            <input type="submit" value="Submit" name="Save">
                                        </div>
                                  
               
            </form>
          
        </section>
    </div>
  
</body>
</html>