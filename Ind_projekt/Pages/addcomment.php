<?php
//$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
$db = mysqli_connect("localhost", "root", "", "release2");
mysqli_query($db, "SET NAMES utf8");

if (mysqli_connect_errno($db)) {
echo "<h1>Anslutning till MySQL misslyckades: " . mysqli_connect_error() ."</h1>";
}

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql="INSERT INTO 
	guestbook(name,email,message) 
	VALUES
	('$name','$email','$message')";
		if (!mysqli_query($db,$sql)) {
			die('Error: ' . mysqli_error($db));
		} else {
			header("Location: ../index.php?page=stuff");
			}
	mysqli_close($db);
?>