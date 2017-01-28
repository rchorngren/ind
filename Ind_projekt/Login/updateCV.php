<?php
//$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
$db = mysqli_connect("localhost", "root", "", "release2");
mysqli_query($db, "SET NAMES utf8");
?>

Ditt CV är uppdaterat med följande information;
Jobbets namn: <?php echo $_POST["jobName"]; ?><br>
Arbetsperopd: <?php echo $_POST["timePeriod"]; ?><br>
Detaljer: <?php echo $_POST["jobDetails"]; ?><br><br>

<a href="loggedin.php?page=admin">Gå tillbaka till adminsidan för CV</a>

<?php
	if(isset($_POST["id"])) {
   		$new_jobName = mysqli_real_escape_string($db, $_POST['jobName']);
   		$new_timePeriod = mysqli_real_escape_string($db, $_POST['timePeriod']);
   		$new_jobDetails = mysqli_real_escape_string($db, $_POST['jobDetails']);
   		$id = mysqli_real_escape_string($db, $_POST['id']);
   		$query = "UPDATE jobs SET jobName = '$new_jobName', timePeriod = '$new_timePeriod', jobDetails = '$new_jobDetails' WHERE id = $id";
   		mysqli_query($db, $query);   
	}
?>