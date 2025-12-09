<?php 

session_start();

error_reporting(0);

$conn = mysqli_connect("localhost","root","","php_ecom");

if(isset($_GET['search']))
{
    $search_value = $_GET['my_search'];

    $sql = "SELECT * from products where concat(title,description) LIKE '%$search_value%'";

    $result = mysqli_query($conn,$sql);
}

else{

$sql = "SELECT * from products";

$result = mysqli_query($conn,$sql);

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

      <nav>

     <input type="checkbox" id="check">

     <label for="check" class="checkbtn">
          <i class="fa fa-bars"></i>
     </label>

    <label class="my_logo">
        <a style="color:white;" href="index.php"><i class="fa-solid fa-cart-shopping"></i> APNA STORE</a>
    </label>

    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="product.php">Products</a>
        </li>
        <li>
            <a href="contact.php">Contact</a>
        </li>

        <?php
        
        if($_SESSION['user_email'])
        {

        ?>

        <a class="logout_btn" href="user_order.php?email=<?php echo $_SESSION['user_email'] ?>">Orders</a>

        <a class="logout_btn" href="logout.php">Logout</a>

        <?php

        }

        else
        {

        ?>   
         
        <li>
            <a href="home/register.php">Register</a>
        </li>
        <li>
            <a href="home/login.php">Login</a>
        </li>

        <?php

        }

        
        ?>

       
    </ul>
</nav>


    <div class="footer">

    <div class="footer_title">
        <h3><i class="fa-solid fa-cart-shopping"></i> APNA STORE</h3>
    </div>

    <div class="footer_content">

     <div>
        <h4>Services</h4>
        <p>
            <a href="https://web.dev/learn"><i class="fa-solid fa-star"></i> Web Development</a>
        </p>
        <p>
            <a href="https://www.coursera.org/courses?query=mobile%20app%20development"><i class="fa-solid fa-star"></i> App Development</a>
        </p>
        <p>
            <a href="https://www.investopedia.com/terms/d/digital-marketing.asp"><i class="fa-solid fa-star"></i> Digital Marketing</a>
        </p>
    </div>

    <div>
        <h4>Social links</h4>
        <p>
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i> Facebook</a>
        </p>
        <p>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-square-instagram"></i> Instagrame</a>
        </p>
        <p>
            <a href="https://www.twitter.com/"><i class="fa-brands fa-square-twitter"></i> Twitter</a>
        </p>
    </div>

    <div>
        <h4>Quick Links</h4>
        <p>
            <a href="index.php"><i class="fa-solid fa-house-user"></i> Home</a>
        </p>
        <p>
            <a href="product.php"><i class="fa-brands fa-product-hunt"></i> Products</a>
        </p>
        <p>
            <a href="contact.php"><i class="fa-solid fa-location-dot"></i> Contact</a>
        </p>
        <p>
            <a href="home/register.php"><i class="fa-solid fa-registered"></i> Register</a>
        </p>
        <p>
            <a href="home/login.php"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
        </p>
    </div>
   
  

    <div>
        <h4>Location</h4>
        <p>
            Wester union steet , house 27
        </p>
        <p>
            Email : myecom@gmail.com
        </p>
        <p>
           Phone : 7984831584
        </p>
    </div>


    </div>
    <footer>
        <hr/>
        <h3>Copyright @jemin pansuriya 2030</h3>
    </footer>
</div>

</body>
</html>