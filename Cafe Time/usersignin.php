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
<style> 
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.imgcontainer {
 text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 30%;
}

span.psw {
  float: right;
  padding-top: 16px;
}


/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>

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
      <img src="userlogo.png" alt="Avatar" class="avatar">
      </div>      
    <h1>Sign Up</h1>
    <hr>
        <form role="form" action="customer_registered_success.php" method="POST">

    <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="users" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="emails" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psws" required>

        

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" type="submit">Submit</button>
          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="userlogin.php">Have an account? Login.</a></label>

        </form>

        </div>
        
      </div>
      
    </div>
    </div>

    <footer>
    <p class="p-3 bg-dark text-white text-center">@CafeTime</p>
    </footer>

    </body>
</html>