<?php

session_start();

$conn = mysqli_connect("localhost","root","","php_ecom");

if(!isset($_SESSION['user_email'])){

    header("location:../home/login.php");

}

else if($_SESSION['usertype'] == "user")
{
    header("location:../home/login.php");
}


$user_sql = "Select * from users";

$u_result = mysqli_query($conn,$user_sql);

$total_user = mysqli_num_rows($u_result);

/*total products*/ 

$product_sql = "Select * from products";

$p_result = mysqli_query($conn,$product_sql);

$total_product = mysqli_num_rows($p_result);


/*total orders*/ 

$order_sql = "Select * from orders";

$o_result = mysqli_query($conn,$order_sql);

$total_order = mysqli_num_rows($o_result);


/*total delivered*/ 

$deliver_sql = "Select * from orders where status = 'Delivered'";

$d_result = mysqli_query($conn,$deliver_sql);

$total_delivered = mysqli_num_rows($d_result);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" type="text/css" href="admin_style.css">

</head>
<body>
    <div class="wrapper">

       <div class="sidebar">
         
          <h2>Ecom Admin</h2>

          <ul>
            <li>
             <a href="adminpage.php">Dashboard</a>
            </li>
             
            <li>
             <a href="users.php">Users</a>
            </li>
           
           <li> 
            <a href="add_product.php">Add products</a>
           </li>
          
            <li>
             <a href="display_product.php">View Products</a>
            </li>

            <li>
              <a href="all_orders.php">Orders</a>
            </li>
          </ul>

       </div>

       <div class="header">

       <div class="admin_header">
        <a href="../logout.php">Logout</a>
       </div>

       <div class="info">
         <div class="card">

          <div class="my_card">
            <h3>Total Users</h3>
            <hr>
            <p><?php echo $total_user ?></p>
          </div>

          <div class="my_card1">
            <h3>Total Products</h3>
            <hr>
            <p><?php echo $total_product ?></p>
          </div>

          <div class="my_card2">
            <h3>Total Orders</h3>
            <hr>
            <p><?php echo $total_order ?></p>
          </div>

          <div class="my_card3">
            <h3>Total Delivered</h3>
            <hr>
            <p><?php echo $total_delivered ?></p>
          </div>

         </div>
       </div>

       </div>

    </div>
</body>
</html>