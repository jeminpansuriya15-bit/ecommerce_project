<?php

error_reporting(0);

$conn=mysqli_connect("localhost","root","","php_ecom");

session_start();

$my_email = $_SESSION['user_email'];

$user_email = $_GET['email'];

if($my_email){

$sql = "SELECT * from Orders where email='$my_email'";

$result = mysqli_query($conn,$sql);

}

else if($user_email){

$sql = "SELECT * from Orders where email='$user_email'";

$result = mysqli_query($conn,$sql);

}

else{
    header("location:home/login.php");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" type="text/css" href="style.css">
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

    <label class="my_logo">ShopSphere</label>

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
            <a href="home/login.php">Login</a>
        </li>

        <?php

        }

        
        ?>

       
    </ul>
</nav>

<table>
    <tr>
        <th>Product Title</th>
        <th>Price</th>
        <th>Image</th>
    </tr>

    <?php
    
    while($row=mysqli_fetch_assoc($result))
    {

    ?>

     <tr>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td>

             <img width="100" height="100" src="product_image/<?php echo $row['image'] ?>">

        </td>
    </tr>

    <?php

    }
    
    ?>

   
</table>

</body>
</html>