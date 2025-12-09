<?php

$conn = mysqli_connect("localhost","root","","php_ecom");

if(isset($_POST['register'])){

    $u_name = $_POST['name'];

    $u_email = $_POST['email'];

    $u_address = $_POST['address'];

    $u_phone = $_POST['phone'];

    $u_pass = $_POST['password'];

    $usertype = "user";

    $u_gen = $_POST['gender'];

    $sql = "INSERT INTO users (name,email,password,phone,address,usertype,gender) VALUES ('$u_name','$u_email','$u_pass','$u_phone','$u_address','$usertype','$u_gen')";

    $data = mysqli_query($conn,$sql);

    if($data)
    {
       echo  "Register success";
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
        <h2>Register Form</h2>
        <form action="" method="POST">
            <div class="input_deg">
                <label><i class="fa-solid fa-user"></i> Name :</label>
                <input type="text" name="name">
            </div>

            <div class="input_deg">
                <label><i class="fa-solid fa-envelope"></i> email :</label>
                <input type="email" name="email">
            </div>

            <div class="input_deg">
                <label><i class="fa-solid fa-phone"></i> phone :</label>
                <input type="number" name="phone">
            </div>

            <div class="input_deg">
                <label><i class="fa-solid fa-location-dot"></i> Address :</label>
                <input type="text" name="address">
            </div>

            <div class="input_deg">
                 <label><i class="fa-solid fa-lock"></i> Password</label>
                <input type="password" name="password">
            </div>

            <div class="input_deg">
                 <label><i class="fa-solid fa-lock"></i> gender</label>
                <input type="radio" name="gender" value="m" required>male
                <input type="radio" name="gender" value="f" required>female
            </div>

            <div class="input_deg">
               
                <input type="submit" name="register" value="register">
            </div>
        </form>
    </div>
</body>
</html>