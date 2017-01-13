<?php
include('session.php');
?>

<?php	
	//$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
	$db = mysqli_connect('localhost', 'root', '', 'release2');
	mysqli_query($db, "SET NAMES utf8");
if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
}

$sql = "INSERT INTO jobs (jobName, timePeriod, jobDetails)
VALUES ('Testjob', '2016-2017', 'FrontEnd Programmerare')";

if ($db->query($sql) === TRUE) {
	echo "Digitalt CV uppdaterat";
} else {
	echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();


?>