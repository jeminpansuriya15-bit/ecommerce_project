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
    <link rel="icon" type="image/png" href="logo.png">
    <title>ShopSphere Website</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    
body{
        background : pink;
} 

/* navbar */

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

/* menu button side lines,font,text */

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

/*navbar end*/

/*abstract menu btn*/

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

/*abstract menu btn*/

/*product title*/

.p_title{
    text-align: center;
    font-size: 25px;
    padding: 20px;
}

/*end product title*/

/*sliders*/
  
.slider{
    width: 99vw;
    height: 600px;
    border-radius: 10px;
    overflow: hidden;
}

.slides{
    width: 500%;
    height: 500px;
    display: flex;
}

.slides input{
    display: none;
}

.slide{
    width: 20%;
    transition: 2s;
}

.slide img{
    width: 99vw;
    height: 600px;
}


#radio1:checked ~ .first{
    margin-left: 0;
}

#radio2:checked ~ .first{
    margin-left: -20%;
}

#radio3:checked ~ .first{
    margin-left: -40%;
}

#radio4:checked ~ .first{
    margin-left: -60%;
}

.navigation-auto{
    position: absolute;
    display: flex;
    width: 800px;
    justify-content: center;
    margin-top: 460px;

}

.navigation-auto div{
    border: 2px solid pink;
    padding: 5px;
    border-radius: 10px;
    transition: 1s
}

.navigation-auto div:not(:last-child){
    margin-right: 40px;
}

#radio1:checked ~ .navigation-auto .auto-btn1{
    background: pink;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
    background: pink;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
    background: pink;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
    background: pink;
}

/* end sliders*/

/*product cards*/

.card{
    max-width: 330px;
    text-align: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1.0);
    margin: 25px;
    padding: 25px;
}

.card:hover{
    box-shadow: 0 14px 18px 0 red;
    img{
        scale:1.1;
        transition:0.4s ease;
    }
   
}

.p_image{
    width: 100%;
    height: 250px;
}

.my_card{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.card h4{
    padding: 10px;
}

.card p{
    padding: 10px;
    margin: 10px;
}

/* buy now button */

.card a{
  padding: 10px 20px;
  border-radius: 50px;
  cursor: pointer;
  border: 0;
  background-color: rgb(253, 110, 129);
  box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  font-size: 11px;
  transition: all 0.5s ease;
}


.card a:hover{
  letter-spacing: 10px;
  background-color: rgba(250, 6, 6, 0.96);
  color: hsl(0, 0%, 100%);
  box-shadow: rgb(24, 191, 220) 0px 7px 29px 0px;
}

.card a:active {
  letter-spacing: 3px;
  background-color: hsl(24, 191, 220);
  color: hsl(0, 0%, 100%);
  box-shadow: rgb(24, 191, 220) 0px 0px 0px 0px;
  transform: translateY(10px);
  transition: 100ms;
}

/*end product cards*/

/* Featured Categories */

    .section-title {
      text-align: center;
      margin-bottom: 1rem;
      font-size: 25px;
      padding: 20px;
    }

    .categories {
      background-color: var(--light);
      padding: 4rem 5%;
    }
    
    .category-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .category-card {
      position: relative;
      height: 200px;
      border-radius: 8px;
      overflow: hidden;
    }
    
    .category-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: var(--transition);
    }
    
    .category-card:hover img {
      transform: scale(1.1);
    }
    
    .category-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
      padding: 1.5rem;
      color: white;
    }
    
    .category-overlay h3 {
      margin-bottom: 0.5rem;
    }
    
/*end Featured Categories */

/*footer part*/

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

/*end footer part*/

/*login form design go login page*/
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

/* end login form design go login page*/

/*logout button*/

.logout_btn{
    background: skyblue;
    color: white;
    padding: 10px;
    border-radius: 14px;
}

/*logout button*/

/*order button table*/

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

/*order button table*/

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

<div class="slider">
        <div class="slides">

           <input type="radio" name="radio-btn" id="radio1">
           <input type="radio" name="radio-btn" id="radio2">
           <input type="radio" name="radio-btn" id="radio3">
           <input type="radio" name="radio-btn" id="radio4">

           <div class="slide first">
             <img src="cover.png" alt="">
           </div>
           <div class="slide ">
             <img src="2.png" alt="">
           </div>
           <div class="slide ">
             <img src="3.png" alt="">
           </div>
           <div class="slide ">
             <img src="cover4.jpg" alt="">
           </div>

        </div>

     </div>

     <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 4){
            counter = 1;
          }
        }, 5000);
    </script>


    
<div>
<h3 class="p_title">Products</h3>
</div>

<div style="margin-left:600px; padding=100px;">
    <form action="" method="GET">

        <input type="text" name="my_search" placeholder="Search your products...">
        <input type="submit" name="search" value="Search">
    </form>
</div>



<div class="my_card">
   
    <?php
    
      while($row=mysqli_fetch_assoc($result))
      {
      
      ?>  

     <div class ="card">
     <img class="p_image" src="product_image/<?php echo $row['image'] ?>">
     <h4><?php echo $row['title'] ?></h4>
     <p><?php echo $row['description'] ?></p>
     <p>prize : <?php echo $row['price'] ?></p>
     
     <?php
     if($_SESSION['user_email'])
     {
        ?>
        
        <a href="my_order.php?id=<?php echo $row['id'] ?>&email=<?php echo $_SESSION['user_email'] ?>">add to cart</a>
        <?php
     }
     else
     {
        ?>
        <a href="home/login.php">Add To cart</a>
    <?php
    }

     ?>
     
     </div>


      <?php

      }
    
    ?>

</div>

<!-- Featured Categories -->
  <section class="categories">
    <div class="section-title">
      <h2>Shop By Category</h2>
      <p>Browse our popular collections</p>
    </div>
    <div class="category-grid">
      <!-- Category 1 -->
      <div class="category-card">
        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/71eb95a8-28dc-4319-89f8-1d17aeca484d.png" alt="Variety of men's formal shirts, polos and casual tees neatly arranged by color">
        <div class="category-overlay">
          <h3>Men's Clothing</h3>
          <p>Explore Collection</p>
        </div>
      </div>
      
      <!-- Category 2 -->
      <div class="category-card">
        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1de8aa3f-efee-480b-938d-53f7d27e5386.png" alt="Women's dresses ranging from casual sundresses to elegant evening gowns">
        <div class="category-overlay">
          <h3>Women's Wear</h3>
          <p>Explore Collection</p>
        </div>
      </div>
      
      <!-- Category 3 -->
      <div class="category-card">
        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/4abd9f0b-b3eb-46ba-a526-5b82ff58daa3.png" alt="Various accessory items including watches, belts and sunglasses">
        <div class="category-overlay">
          <h3>Accessories</h3>
          <p>Explore Collection</p>
        </div>
      </div>
      
      <!-- Category 4 -->
      <div class="category-card">
        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/10555989-bbb9-4b41-9648-2bed42fb9ce8.png" alt="Top-view of different shoe styles from formal to athletic arranged in a circle">
        <div class="category-overlay">
          <h3>Footwear</h3>
          <p>Explore Collection</p>
        </div>
      </div>
    </div>

    
  </section>

<div class="footer">

    <div class="footer_title">
        <h3> <i class="fa-solid fa-cart-shopping"></i> ShopSphere
        </h3>
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
            Email : apnastore@gmail.com
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