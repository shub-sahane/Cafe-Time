<?php
session_start();
include "connection.php"; 
$error=''; 

if (isset($_POST['Login'])) {
if (empty($_POST['users']) || empty($_POST['psws'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['users'];
$password=$_POST['psws'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connection.php';
$conn = Connect();

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT users, psws FROM usersignupdata WHERE users=? AND psws=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $username, $password);
$stmt -> execute();
$stmt -> bind_result($username, $password);
$stmt -> store_result();

if ($stmt->fetch())  
{
	$_SESSION['login_user2']=$username; // Initializing Session
	header("location: menulist.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>