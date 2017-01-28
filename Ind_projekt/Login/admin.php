<?php
include('session.php');
?>
<?php	
	//$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
	$db = mysqli_connect('localhost', 'root', '', 'release2');
	mysqli_query($db, "SET NAMES utf8");
?>

<?php 
$query = "SELECT * FROM jobs ORDER BY id ASC"; 
$result = mysqli_query($db, $query);

if ($result->num_rows > 0) {
     // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo
        "<form action='updateCV.php' method='post'>".
        "<div class='jobEdit'>
        	<div class='job'>
        		<textarea name='jobName'>".
        			$row["jobName"].
        		"</textarea>".
        		"<textarea name='timePeriod'>".
        			$row["timePeriod"].
        		"</textarea>".
        		"<textarea name='jobDetails'>".
        			$row["jobDetails"].
        		"</textarea>
        	</div>
        </div>".
        "<input type='hidden' name='id' value='{$row['id']}'>".
		"<input type='submit' value='Spara ändringar' name='savepage'>".
        "</form>";
    	}
	} else {
     echo "0 results";
	}
?>