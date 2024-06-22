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

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="about.css">
</head>
<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" id="turbowash" href="#">Cafe Time</a>
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
        <a class="nav-link" href="Adminlogin.php">Admin</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="Profile.php" id="profile" data-toggle="dropdown">
        Profile
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="usersignin.php"><img src="user.png" alt="" width="14px"> User Sign Up</a>                 
        <a class="dropdown-item" href="userlogin.php"><img src="userlogo.png" alt="" width="14px"> User Login</a>
      </div>
    </li>    
    </ul>
  </div>  
</nav>
<br>

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
      <p> Coffee shops offer a uniquely calm atmosphere where people can gather with family and friends to catch up over a cup of something warm.</p>
    </div>
  </div>  
</div>    
</section>

<div class="container">
<section class="my-5">
<div class="container">
  <h2 class="text-center">Say Something About Cafe Time</h2>
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" name="user" autocomplete="off">
    </div>
    <div class="form-group">
      <label >Email Id</label>
      <input type="text" class="form-control" name="email" autocomplete="off">
    </div>
    <div class="form-group">
      <label >Mobile No</label>
      <input type="text" class="form-control" name="mobile" autocomplete="off">
    </div>
    <div class="form-group">
      <label >Comment</label>
      <input type="text" class="form-control" name="comment" autocomplete="off">
    </div>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
</div>


</div>



</section>
<footer>
    <p class="p-3 bg-dark text-white text-center">@CafeTime</p>
</footer>


</body>
</html>
<?php


?>