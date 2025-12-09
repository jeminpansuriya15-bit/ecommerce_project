<!-- connect file -->
<?php
include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce website using php and mysql</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
     <!-- font awesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- css file -->  
     <link rel="stylesheet" href="style.css">
    </head>
<body>
    <!-- navbar -->
     <div class="container-fluid p-0">
   <!-- first child -->
     <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
         <img src="./images/logo.png.png" alt="" class="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
       <li class="nav-item ">
         <a class="nav-link active" aria-current="page" href="/">Home</a>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Total price:100/-</a>
      </li>
    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>

<!-- second child -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link" href="#">Welcome Auest</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
    </ul>
 </nav>

 <!-- third child -->
  <div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">communication is at the heart of e-commerce and community</p>
  </div>
 
<!-- fourth child -->

<div class="row">
  <div class="col-md-10">
    <!-- product -->
     <div class="row">
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/dariymilk1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">DARIYMILK</h5>
    <p class="card-text">milk is a nutrient-rich liquid food producted bt the mammary glands of mammals.</p>
    <P>Prize :- 100</P>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2"> 
        <div class="card">
  <img src="./images/apple.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">APPLE</h5>
    <p class="card-text">an apple a day keeps docter away-please try it.</p>
    <p>Prize :- 50</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/capsicum.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CAPSICUM</h5>
    <p class="card-text">capsicum is very good for health,we serve best of that and you have to try it.</p>
    <P>Prize :- 50</P>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/mango.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">mango</h5>
    <p class="card-text">mangoes are always tasty-eat once you willl ask for more.</p>
    <p>prize-200</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/capsicum.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">SHOES</h5>
    <p class="card-text">shoes online - shop shoes online for men,women & kids at 70% discount in EORS</p>
    <p>Prize :-300</p>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
<div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/capsicum.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">SHERTS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <P>Prize :- 150</P>
    <a href="#" class="btn btn-info">Add To Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
</div>
     </div>
  </div>

  
  <div class="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
      </li>
      <?php
      $select_brands="Select * from `brands`";
      $result_brands=mysqli_query($con,$select_brands);
     // $row_data=mysqli_fetch_assoc($result_brands);
     // echo $row_data['brand_title'];
     while($row_data=mysqli_fetch_assoc($result_brands)){
      $brand_title=$row_data['brand_title'];
      $brand_id=$row_data['brand_id'];
      echo "<li class='nav-item'>
        <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
      </li>";
     }
     ?>
     
    </ul>
    <!-- categories displayed -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
      </li>
      <?php
      $select_categories="Select * from `categories`";
      $result_categories=mysqli_query($con,$select_categories);
     // $row_data=mysqli_fetch_assoc($result_brands);
     // echo $row_data['brand_title'];
     while($row_data=mysqli_fetch_assoc($result_categories)){
      $category_title=$row_data['category_title'];
      $category_id=$row_data['category_id'];
      echo "<li class='nav-item'>
        <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
      </li>";
     }
     ?>
    </ul> 
  </div>
</div>


<!-- last child -->
 <div class="bg-info p-3 text-center">
    <P> Designed By : Jemin Pnsuriya.</p>
 </div>
     </div> 


<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>