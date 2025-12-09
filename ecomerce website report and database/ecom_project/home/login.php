<?php

session_start();

error_reporting(0);

$conn = mysqli_connect("localhost","root","","php_ecom");

if(isset($_POST['login'])){
   
    $u_email = $_POST['email'];

    $u_pass = $_POST['password'];

    $sql = "SELECT * from users where email ='".$u_email."' AND password ='".$u_pass."' ";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);

    if($row['usertype']=="user"){

        $_SESSION['user_email']=$u_email;

        $_SESSION['usertype']="user";

        header("location:../index.php");
    }

    else if($row['usertype']=="admin"){
       
        $_SESSION['user_email']=$u_email;

        $_SESSION['usertype']="admin";


        header("location:../admin/adminpage.php");
    }

    else{

        $_SESSION['message']="Username or Password is wrong";

       
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
    </style>
</head>
<body>
    <div class="my_form">

       <h2>

          <?php
            echo $_SESSION['message'];
          ?>

       </h2>

    <h2>Login Form</h2>

       <form action="" method="POST">

        <div class="input_deg">
            <label><i class="fa-solid fa-envelope"></i> Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="input_deg">
            <label><i class="fa-solid fa-lock"></i> Password</label>
            <input type="password" name="password" required>
        </div>

        <div class="input_deg">
         
            <input type="submit" name="login" value="Login">
        </div>
       </form>

    </div>
</body>
</html>