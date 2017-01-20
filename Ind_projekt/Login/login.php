<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Användarnamnet eller lösenordet är felaktigt";
}
else
{
// SQL query to fetch information of registerd users and finds user match.
$connection = mysqli_connect("localhost", "root", "", "release2");
//$connection = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');

// Define $username and $password
$username=$_POST['username'];
$username= mysqli_real_escape_string($connection, $_POST['username']);
$password=$_POST['password'];
$password= mysqli_real_escape_string($connection, $_POST['password']);



$query = "select * from login where password='$password' AND username='$username'";
$rows = mysqli_query($connection, $query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: loggedin.php"); // Redirecting To Other Page
} else {
$error = "Användarnamnet eller lösenordet är felaktigt";
}
mysqli_close($connection); // Closing Connection
}
}
?>