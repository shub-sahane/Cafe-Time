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
body {
  font-family: Arial, Helvetica, sans-serif;
 
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}



/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.orderbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.orderbtn:hover {
  opacity: 1;
}



</style>
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





<form action="orderdetails.php" method="post">
  <div class="container">
    <h1>Order Now</h1>
    <p>Please fill in this form to Submit your order</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email"  required>

    <label for="menu"><b>Menu_list</b></label>
    <p><select name="menu" required class="form-control">
                <option value="">Menu_list</option>
                <option value="Coffee (Rs.50)">Coffee (Rs.50)</option>
                 <option value="Cold-Coffee (Rs.100)">Cold-Coffee (Rs.100)</option>
                  <option value="Black-Coffee (Rs.150)">Black-Coffee (Rs.150)</option>
                  <option value="Sandwich (Rs.175)">Sandwich (Rs.175)</option>
                 <option value="French Fries (Rs.325)">French Fries (Rs.325)</option>
                  <option value="Pasta (Rs.325)">Pasta (Rs.325)</option>
                  <option value="Momos (Rs.420)">Momos (Rs.420)</option>
                 <option value="Burgger (Rs.375)">Burgger (Rs.375)</option>
                  <option value="Pizza (Rs.450)">Pizza (Rs.450)</option>
              </select>
		</p>

    <label for="quantity"><b>Quantity</b></label>
    <p><select name="quantity" required class="form-control">
                <option value="">Quantity</option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                </select>
		</p>

    <label for="addr"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="addr"  required>

	 <label for="moblieno"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter Mobile no" name="mobileno"  required>

  	 <label for="moblieno"><b>Message if any</b></label>
    <input type="text" placeholder="Enter Message" name="msg"  required>
    
    <p>Only Cash On delivery Available.</p>

    <button type="submit" class="orderbtn">Order</button>
  </div>
  
  
</form>



<footer>
    <p class="p-3 bg-dark text-white text-center">@CafeTime</p>
    </footer>
</body>
</html>
