<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
	 <link rel="stylesheet" type="text/css" href="../css.css">
</head>
<body>


<?php	
	//$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
	$db = mysqli_connect('localhost', 'root', '', 'release2');
	mysqli_query($db, "SET NAMES utf8");

	if ( isset ($_POST['boka']) ) {
		$jobName = $_POST['jobName'];
		$timePeriod = $_POST['timePeriod'];
		$jobDetails = $_POST['jobDetails'];

		if (empty ($_POST['activity'])) {
			$activity_string = "";
		} else {
			$activity_string = implode (", ", $_POST['activity']);
		}

	echo "
		<form class='booking' method='post' action='' >
			<p>
				Namn: $jobName
				<input type='hidden' name='jobName' value='$jobName' >
			</p>
			<p>
				Efternamn: $timePeriod
				<input type='hidden' name='timePeriod' value='$timePeriod' >
			</p>
			<p>
				Epost: $jobDetails
				<input type='hidden' name='jobDetails' value='$jobDetails' >
			</p>
			<p class='field-block-btn field-block-full'>
				<input name = 'confirm' id='form-btn' class='form-btn' type='submit' value='Bekräfta' />
			</p>
		</form>
		";		
	}
	else if (isset ($_POST['confirm']) ) {
		$jobName = mysqli_real_escape_string($db, $_POST['jobName'] );
		$timePeriod = mysqli_real_escape_string($db, $_POST['timePeriod']);
		$jobDetails = mysqli_real_escape_string($db, $_POST['jobDetails']);
		
		
		// Skickar /sparar i DB.
		$query = "INSERT INTO  jobs (jobName, timePeriod, jobDetails)
			VALUES ('$jobName', '$timePeriod', '$jobDetails')";
					

		if (mysqli_query($db, $query)) {
				echo "
					<h1>Digitalt CV uppdaterat</h1>";
		}
		else {
			echo "Något gick fel! '$jobName', '$timePeriod','$jobDetails'";
		}	
	} 
?>

	<div class='site-wrapper'>
			<div class='form-container'>
				<form class='booking' method='post' action=''>

					<p class='field-block'>
						<label for='jobName'>Arbetsgivare</label>
						<input class='text-field' id='jobName' name='jobName' value='' placeholder='Arbetsgivare' type='text' required>
					</p>
					<p class='field-block'>
						<label for='lastName'>Tidsperiod</label>
						<input class='text-field' id='timePeriod' name='timePeriod' value='' placeholder='Tid för anställning' type='text' required>
					</p>
					<p class='field-block'>
						<label for='jobDetails'>Arbetsbeskrivning</label>
						<input class='text-field' id='jobDetails' name='jobDetails' value='' placeholder='Arbetsbeskrivning' type='text'>
					</p>
							</div>
							<p class='field-block-btn field-block-full'>
								<input name = 'boka' id='form-btn' class='form-btn' type='submit' value='Skapa' />
							</p>
						</form>
					</div>
				</div>
			
			<?php 

$query = "SELECT * FROM jobs ORDER BY id ASC"; 
$result = mysqli_query($db, $query);



if ($result->num_rows > 0) {
     // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo
        "<form action='' method='post'>".
        "<div class='jobEdit'>
        	<div class='job'>
        		<textarea>
        			<p>". $row["jobName"]. "</p>
        		</textarea>".
        		"<textarea>
        			</br><b>".$row["timePeriod"]."</b>
        		</textarea></br>".
        		"<textarea>"
        			.$row["jobDetails"].
        		"</textarea>
        	</div>
        </div>".
        "<input type='hidden' name='id' value='{$row['id']}'>
		<input type='submit' value='Spara ändringar' name='savepage'>".
        "</form>";

    }
} else {
     echo "0 results";
}





?>

<script src="js.js"></script>

</body>
</html>