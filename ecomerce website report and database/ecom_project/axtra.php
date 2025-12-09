<?php

if(isset($_POST['delete']))
{

$hostname="localhost";
$username="root";
$password="";
$databaseName="php_ecom";

$id = $_POST['id'];

$connect = mysqli_connect($hostname,$username,$password,$databaseName);

$query = "DELETE FROM jemin WHERE id = '$id'";

$result = mysqli_query($connect,$query);

if($result)
{
    echo 'data deleted';
}
else{
    echo 'data not deleted';
}

mysqli_close($connect);


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
        id to delete:<input type="text" name="id" required><br><br>
        <input type="submit" name="delete" value="Clear Data">
</body>
</html>