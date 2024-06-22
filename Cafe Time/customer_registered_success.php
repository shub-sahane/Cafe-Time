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
  <link rel="stylesheet" href="style.css">
  </head>
  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
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


<?php

require 'connection.php';
$conn = Connect();

$username = $conn->real_escape_string($_POST['users']);
$email = $conn->real_escape_string($_POST['emails']);
$password = $conn->real_escape_string($_POST['psws']);

$query = "INSERT INTO `usersignupdata`(`users`,`emails`,`psws`) VALUES('" . $username . "','" . $email . "','" . $password ."')";
$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>


<div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h2> <?php echo "Welcome $username!" ?> </h2>
		<h1>Your account has been created.</h1>
		<p>Login Now from <a href="userlogin.php">HERE</a></p>
	</div>
</div>

    </body>
</html>