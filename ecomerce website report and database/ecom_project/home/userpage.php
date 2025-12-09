<?php

session_start();

if(!isset($_SESSION['user_email'])){

      header("location:login.php");

}

else if($_SESSION['usertype'] == "admin")
{
    header("location:login.php");
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .logout_btn{
    background: skyblue;
    color: white;
    padding: 10px;
    border-radius: 14px;
}

    </style>
</head>
<body>
    <h1>This is user Page</h1>
    <a href="../logout.php">Logout</a>
</body>
</html>