<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" id="cafetime" href="#">Cafe Time</a>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item" id="home"> 
        <a class="nav-link" href="Home.php"><img src="homelogo.png" alt="" width="14px"> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminlogin.php">Admin</a>
      </li>
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="Profile.php" id="profile" data-toggle="dropdown">             
        Profile
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="usersignin.php"><img src="user.png" alt="" width="14px"> Customer Sign Up</a>                 
        <a class="dropdown-item" href="userlogin.php"><img src="userlogo.png" alt="" width="14px"> Customer Login</a>
      </div>
    </li> 
    </ul>
  </div>  
</nav>
<br>
<section>

         <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="coffeee.jpg" alt="Turbo Washer" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Cafe Time</h3>
              <h5>Welcome!!</h5>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="pizza.jpg" alt="Hurry Hp" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Hurry Up!</h3>
              <h5>Don't Miss The Delicious Food</h5>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="penne-pasta-tomato-sauce-with-chicken-tomatoes-wooden-table.jpg" alt="Thank you" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Yummm!</h3>
              <h5>Test it Feel it</h5>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="burger.jpg" alt="Thank you" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Thank You !</h3>
              <h5>We Glad On Your Vist</h5>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"> About Us </h2>
  </div>
  <div class="container-fluid">  
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="aboutimg.jpg" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2> Welcome To Cafe Time </h2>
      <p> Coffee shops offer a uniquely calm atmosphere where people can gather with family and friends to catch up over a cup of something warm.</p>
    </div>
  </div>  
</div>    
</section>




<footer>
    <p class="p-3 bg-dark text-white text-center" >@CafeTime</p>
</footer>
</body>
</html>


<?php

?>