<?php
include('login_u.php'); 

if(isset($_SESSION['login_user2'])){
header("location: menulist.php"); 
}
?>

<!DOCTYPE html>
<html>

  <head>
   

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" href="style.css">
  </head>
  <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 30%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

  <body>


    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

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
        <a class="nav-link" href="Adminlogin.php">Admin</a>
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


   

    <div class="container">
        
        <div class="imgcontainer">
    <img src="user.png" alt="Avatar" class="avatar">
  </div>
        <h2>User Login</h2>
        
          
        <form action="menulist.php" method="POST">
          
        <div class="container">
  <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psws" required>

     <button type="submit" name="submit" value="Login">Login</button>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="customersignup.php">Create a new account.</a></label>

        </form>
  </div>   

  <footer>
    <p class="p-3 bg-dark text-white text-center">@CafeTime</p>
    </footer>

    </body>
</html>