<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

 
<style>
* {
  box-sizing: border-box;
  text-align: center;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 33.33%;
  padding: 20px;
  height: 460px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.button {
    border: none;
  outline: 0;
  display: inline-block;
  padding: 4px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
button:hover, a:hover {
  opacity: 0.7;
}
a:link {
  color: whitesmoke;
  background-color: transparent;
  text-decoration: none;
}

</style>
</head>
<body>



<h2>The FOOD That We Sreve</h2>

<div class="row">
  <div class="column" style="background-color:white;">
<div class="card">
  <img src="cupcoffee.jpg" alt="" style="width:90%">
  <h1 >Coffee</h1>
  <p class="title"> Coffee</p>
  <p><button class="button"><a href="foodorder.php" class="button" data-toggle="foodorder.php" >Rs.50</a></button></p>

</div>
</div>


  <div class="column" style="background-color:white;">
 <div class="card">
 <img src="cold-coffee.jpg" alt="" style="width:100%">
  <h1 >Cold-Coffee</h1>
  <p class="title"> Cold-Coffee</p>
  <p><button class="button"><a href="foodorder.php" class="button" data-toggle="foodorder.php" >Rs.100</a></button></p>


</div>
  </div>
<div class="card">
<div class="column" style="background-color:white;">
<img src="menu black-coffee.jpg" alt="" style="width:100%">
  <h1 >Black-Coffee</h1>
  <p class="title">Black-Coffee</p>
  <p><button class="button"><a href="foodorder.php" class="button" data-toggle="foodorder.php" >Rs.150</a></button></p>
 

</div>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="column" style="background-color:white;">
<div class="card">
<img src="sandwich.jpg" alt="" style="width:100%">
  <h1>Sandwich</h1>
  <p class="title">Sandwich</p>
  <p><button class="button"><a href="foodorder.php" class="button" data-toggle="foodorder.php" >Rs.175</a></button></p>


</div>
  </div>
  <div class="column" style="background-color:white;">
 <div class="card">
 <img src="french-fries.jpg" alt="" style="width:100%">
  <h1 >French Fries</h1>
  <p class="title">French Fries</p>
  <p><button class="button"><a href="foodorder.php" class="button" data-toggle="foodorder.php" >Rs.325</a></button></p>


</div>
  </div>
<div class="card">
<div class="column" style="background-color:white;">
<img src="penne-pasta-tomato-sauce-with-chicken-tomatoes-wooden-table.jpg" alt="" style="width:100%">
  <h1 >Pasta</h1>
  <p class="title"> Pasta</p>
  <p><button class="button"><a href="foodorder.php" class="button" data-toggle="foodorder.php" >Rs.325</a></button></p>

</div>
  </div>
</div>

<br>
<br>
<div class="row">
  <div class="column" style="background-color:white;">
<div class="card">
<img src="momos.jpg" alt="" style="width:100%">
  <h1 >Momos</h1>
  <p class="title">Momos</p>
  <p><button class="button"><a href="foodorder.php" class="button" data-toggle="foodorder.php" >Rs.420</a></button></p>


</div>
  </div>
  <div class="column" style="background-color:white;">
 <div class="card">
 <img src="menuburgger.jpg" alt="" style="width:100%">
  <h1 >Burgger</h1>
  <p class="title">Burgger</p>
  <p><button class="button"><a href="foodorder.php" class="button" data-toggle="foodorder.php" >Rs.375</a></button></p>


</div>
  </div>
<div class="card">
<div class="column" style="background-color:white;">
<img src="menupizza.jpg" alt="" style="width:100%">
  <h1 >Pizza</h1>
  <p class="title"> Pizza</p>
  <p><button class="button"><a href="foodorder.php" class="button" data-toggle="foodorder.php" >Rs.450</a></button></p>

</div>
  </div>
</div>






<footer>
    <p class="p-3 bg-dark text-white text-center">@CafeTime</p>
    </footer>
</body>
</html>
