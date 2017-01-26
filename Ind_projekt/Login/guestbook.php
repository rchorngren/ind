<?php
include('session.php');
?>

<?php

//$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
$db = mysqli_connect("localhost", "root", "", "release2");
mysqli_query($db, "SET NAMES utf8");

if (mysqli_connect_errno($db)) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($db,"SELECT name,email,message FROM guestbook");
while($row = mysqli_fetch_array($result)) { ?>
	<h3><?php echo $row['name']; ?></h3>
	<p><?php echo $row['email']; ?><p>
	<p><?php echo $row['message']; ?></p>
	<?php }
	mysqli_close($db);
?>