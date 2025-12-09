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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        nav{
    background: rgb(248, 184, 193);
    height: 80px;
}

.my_logo{
    color: white;
    font-size: 25px;
    font-weight: bold;
    line-height: 80px;
    padding: 0 100px;  
}

nav ul{
    float: right;
    margin-right: 80px;
}

nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
}

nav ul li a{
    position:relative;
    color: white;
    font-size: 17px;
    padding:5px 0;
    text-transform: uppercase;
}

nav ul li a:before{
    position: absolute;
    content:'';
    left:0;
    bottom:0;
    height:3px;
    width: 100%;
    background:rgb(250, 19, 115);
    transform:scaleX(0);
    transform-origin:right;
    transition:transform .4s linear;

}

nav ul li a:hover:before{
    transform:scaleX(1);
    transform-origin:left;
}
.checkbtn{
    float: right;
    color: white;
    line-height: 80px;
    font-size: 30px;
    margin-right: 40px;
    display: none;
}

#check{
    display: none;
}

@media(max-width:750px){
    
    .checkbtn{
        display: block;
    }
    ul{
        position: fixed;
        background-color: darkblue;
        width: 100%;
        height: 100vh;
        top: 60px;
        text-align: center;
        left: -100%;
        transition: all 0.5s;

    }
   
    nav ul li{
        display: block;
    }

    #check:checked~ul{
        left: 0px;
    }
}


.p_title{
    text-align: center;
    font-size: 25px;
    padding: 20px;
}

.footer{
    background: rgb(252, 132, 148);
    width: 100%;
}

.footer_title h3{
    color: white;
    font-size: 32px;
    padding: 10px;
    margin: 10px;
    font-weight: bold;
    text-align: center;
}

.footer_content h4{
    color: white;
    font-size: 20px;
    padding: 10px;
    margin: 10px;
    font-weight: bold;
}

.footer_content p{
    color: white;
    padding: 10px;
}

.footer_content a{
    color: white;
}
.footer_content a:hover{
    color: red;
   
}

.footer .footer_content{
    display: flex;
    justify-content: space-evenly;
}

@media(max-width:650px){
    .footer .footer_content{
        display: flex;
        flex-direction: column;
        text-align: center;
    }
    
}

.footer h3{
    color: white;
    padding: 10px;
    margin: 10px;
    text-align: center;
    font-size: 22px;
}

.input_deg{
    padding: 15px;
}

.my_form{
   
    background: skyblue;
    width: 25%;
    margin: auto;
    box-shadow: 10px 10px 5px rgb(25, 9, 85);
    border-radius: 6px;
    text-align: center;
    margin-top: 200px;
    
    
}

.my_form h2{
    background: black;
    color: white;
    padding: 10px;
    
}
.input_deg label{
    width: 100px;
    display: inline-block;
    font-size: 16px;

}

input[type='text'],[type='email'],[type='number'],[type='password']{
    width: 40%;
    padding: 12px;
    resize: vertical;
    box-sizing: border-box;
}

input[type='submit']{
    background: rgb(34, 34, 247);
    color: white;
    padding: 10px;
    border-radius: 10%;

}
.logout_btn{
    background: skyblue;
    color: white;
    padding: 10px;
    border-radius: 14px;
}


table{
    border: 2px solid skyblue;
    margin-top: 50px;
    margin-left: 10%;
    width: 60%;
}

th{
    background-color: black;
    color: white;
    font-size: 25px;
    text-align:center;
}

td{
    text-align: center;
    margin: 10px;
    padding: 10px;
}
</style>
</head>
<body>

<nav>

     <input type="checkbox" id="check">

     <label for="check" class="checkbtn">
          <i class="fa fa-bars"></i>
     </label>

    <label class="my_logo">
        <a style="color:white;" href="index.php"><i class="fa-solid fa-cart-shopping"></i> ShopSphere</a>
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

        <a class="logout_btn" href="user_order.php?email=<?php echo $_SESSION['user_email'] ?>">Check Out</a>

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
            <a href="home/login.php"><i class="fa-solid fa-user"></i> Login</a>
        </li>

        <?php

        }

        
        ?>

       
    </ul>
</nav>


<p>
    <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118765.21183623867!2d70.35520727676754!3d21.53070571377237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3958018c6a277f53%3A0x13b52f8520a86e48!2sJunagadh%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1748404150258!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</p>

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
            Wester union steet , house 2 , rajkot.
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