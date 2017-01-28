<?php
//$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
$db = mysqli_connect("localhost", "root", "", "release2");
mysqli_query($db, "SET NAMES utf8");

if (mysqli_connect_errno($db)) {
echo "<h1>Anslutning till MySQL misslyckades: " . mysqli_connect_error() ."</h1>";
}

$new_name = $_POST['name'];
$new_name = mysqli_real_escape_string($db, $_POST['name']);
$new_email = $_POST['email'];
$new_email = mysqli_real_escape_string($db, $_POST['email']);
$new_message = $_POST['message'];
$new_message = mysqli_real_escape_string($db, $_POST['message']);

$sql="INSERT INTO 
	guestbook(name,email,message) 
	VALUES
	('$new_name','$new_email','$new_message')";
		if (!mysqli_query($db,$sql)) {
			die('Error: ' . mysqli_error($db));
		} else {
			header("Location: ../index.php?page=stuff");
			}
	mysqli_close($db);
?>