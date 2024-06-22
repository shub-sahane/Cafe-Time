<?php
$conn = mysqli_connect('localhost','root');

if($conn){
    echo "Thanks For Submitting Your Review 😉";
}else{
    echo "not Connect";
}

mysqli_select_db($conn,'CafeTime');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `comment`) VALUES ('$user','$email','$mobile','$comment')";

mysqli_query($conn,$query);
?>