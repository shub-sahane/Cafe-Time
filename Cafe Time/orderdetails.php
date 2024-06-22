<?php
$conn = mysqli_connect('localhost','root');

if($conn){
    echo "Thanks For Submitting Your Order";
}else{
    echo "not Connect";
}

mysqli_select_db($conn,'CafeTime');

$email = $_POST['email'];
$menu = $_POST['menu'];
$quantity = $_POST['quantity'];
$addr = $_POST['addr'];
$mobileno = $_POST['mobileno'];
$msg = $_POST['msg'];

$query = "INSERT INTO `orderdetails1`(`email`, `menu`, `quantity`, `addr`, `mobileno`, `msg`) VALUES ('$email','$menu','$quantity','$addr','$mobileno','$msg')";

mysqli_query($conn,$query);
?>