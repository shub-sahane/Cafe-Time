  <!DOCTYPE HTML>
  <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

 
<style>


/* Create three equal columns that floats next to each other */
.column {
  float: left;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 22.33%;
  padding: 20px;
  height: 250px; /* Should be removed. Only for demonstration */
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



<body>
    
<div class="row">
  <div class="column" style="background-color:white;">
<div class="card">
  <img src="order.png" alt="" style="width:90%">
  <p class="title"> </p>
  <p><button class="button"><a href="allorders.php" class="button" data-toggle="allorders.php" >All Orders</a></button></p>

</div>
    


</body>
</html>    