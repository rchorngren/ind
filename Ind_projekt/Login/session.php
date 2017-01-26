
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
$db = mysqli_connect("localhost", "root", "", "release2");
mysqli_query($db, "SET NAMES utf8");

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// Query To Fetch Complete Information Of User
$query = "select username from login where username='$user_check'";
$ses_sql=mysqli_query($db, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($db); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>