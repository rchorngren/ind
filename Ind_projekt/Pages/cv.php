<?php
//$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
$db = mysqli_connect("localhost", "root", "", "release2");
mysqli_query($db, "SET NAMES utf8");
?>
<div id="cvJobs">
<?php 

$query = "SELECT * FROM jobs ORDER BY id ASC"; 
$result = mysqli_query($db, $query);


if ($result->num_rows > 0) {
     // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo
        "<div class='job'><p>". $row["jobName"]. "</p></div>".
        "<div class='details'>".
        " </br><b>".$row["timePeriod"]."</b>".
        " </br>".$row["jobDetails"].
        " </br></br></div>";

    }
} else {
     echo "0 results";
}

?>



</div>
