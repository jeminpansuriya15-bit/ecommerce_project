<?php


if(isset($_POST['update']))
{

try{
    $pdoConnect = new pdo("mysql:host=localhost;dbname=php_ecom","root","");
}
catch(PDOException $exc)
{
    echo $exc->getMessage();
    exit();
}

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];

$query = "UPDATE `uppp` SET `id`=:id,`fname`=:fname,`lname`=:lname,`age`=:age WHERE `id`= :id";

$pdoResult = $pdoConnect->prepare($query);

$pdoExec = $pdoResult->execute(array(":fname"=>$fname,":lname"=>$lname,":age"=>$age,":id"=>$id));

if($pdoExec)
{
    echo 'data updated';
}
else{
    echo 'error';
}
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="id" required placeholder="id"><br><br>
        <input type="text" name="fname" required placeholder="first name"><br><br>
        <input type="text" name="lname" required placeholder="last name"><br><br>
        <input type="number" name="age" required placeholder="age" min="10" max="100"><br><br>
        <input type="submit" name="update" required placeholder="update data">
</body>
</html>