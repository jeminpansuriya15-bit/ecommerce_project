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







<?php

$conn = mysqli_connect("localhost","root","","php_ecom");

if(isset($_POST['submit'])){

    $u_name = $_POST['name'];

    $u_fed = $_POST['email'];

    $u_gen = $_POST['gender'];

    $u_mes = $_POST['skill'];

    $sql = "INSERT INTO views (name,email,gender,skill) VALUES ('$u_name','$u_fed','$u_gen','$u_mes')";

    $data = mysqli_query($conn,$sql);

    if($data)
    {
       echo  "data insert in database successfully ";
    }

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" type="text/css"  href="../style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <style>
body{
   background-color : blue;
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


    <div class="my_form">
        <h2>view form</h2>
        <form action="" method="POST">
            <div class="input_deg">
                <label><i class="fa-solid fa-user"></i> Name :</label>
                <input type="text" name="name">
            </div>

            <div class="input_deg">
                <label><i class="fa-solid fa-user"></i> email :</label>
                <input type="email" name="email">
            </div>


             <div class="input_deg">
                <input type="radio" name="gender" value="head" required>head
                <input type="radio" name="gender" value="leader" required>leader
                <input type="radio" name="gender" value="programer" required>programer
            </div>

            <div class="input_deg">
                <label> skill :</label>
                <select class="" name="skill" required>
                   <option value="" selected hidden>select skill</option>
                   <option value="php">php</option>
                   <option value="asp">asp</option>
                   <option value="jsp">jsp</option>
                   <option value="python">python</option>
                </select>
                
            </div>
            
            <div class="input_deg">
               
                <input type="submit" name="submit" value="submit">
            </div>
        </form>
    </div>

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