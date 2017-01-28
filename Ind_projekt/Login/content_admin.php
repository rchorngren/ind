<?php
include('session.php');
?>

<?php   
    //$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
    $db = mysqli_connect('localhost', 'root', '', 'release2');
    mysqli_query($db, "SET NAMES utf8");
?>

<?php 
$query = "SELECT * FROM pages ORDER BY id ASC"; 
$result = mysqli_query($db, $query);

if ($result->num_rows > 0) {
     // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo
        "<form action='update_content.php' method='post'>".
        "<div class='jobEdit'>
        	<div class='job'>
        		<textarea name='page_name'>".
        			$row["page_name"].
        		"</textarea>
        		<textarea name='content'>".
        			$row["content"].
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