<?php
$conn = mysqli_connect('localhost','root');

mysqli_select_db($conn,'cafetime');



$query = " SELECT * FROM `orderdetails1`";

$result =mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Explore | Cafe Time </title>
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

.table_th {

    background-color: black;
    color: white;
    padding: 10px;
    font-size: 16px;
}
.table_td {
background-color: wheat;
padding: 10px;
font-size: 16px;
}

</style>   
<body>
<h1>All Orders</h1>

<table border="1px">
    <tr>
       
        <th class="table_th">Email</th>
        <th class="table_th">menu</th>
        <th class="table_th">quantity</th>
        <th class="table_th">address</th>
        <th class="table_th">mobile NO</th>
        <th class="table_th">message</th>
      
</tr>  

<?php
while ($info=$result->fetch_assoc())
 {
?>


<tr>
       
        <th class="table_td">
            <?php echo "{$info['email']}";  ?>
        </th>
        <th class="table_td">
        <?php echo "{$info['menu']}";  ?>
        </th>
        <th class="table_td">
             <?php echo "{$info['quantity']}";  ?>
            </th>
        <th class="table_td">
        <?php echo "{$info['addr']}";  ?>
        </th>
        <th class="table_td">
        <?php echo "{$info['mobileno']}";  ?>
        </th>
        <th class="table_td">
        <?php echo "{$info['msg']}";  ?>
        </th>
      
</tr>
<?php
}
?>

</table>
</body>
</html>