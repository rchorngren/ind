<?php
//$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
$db = mysqli_connect("localhost", "root", "", "release2");
mysqli_query($db, "SET NAMES utf8");
?>


<div id="centerDiv"><br />
    <p>
        <?php 
            $query = "SELECT * FROM pages WHERE id=1";
            $pages_result = mysqli_query($db, $query);
            $page = mysqli_fetch_assoc($pages_result);
        ?>
    </p>
    <p>
        <?php 
            echo $page['content']; 
        ?>
    </p>
</div>

<!--<div id="contactMe"></div>-->
<div id="gradCountdown"></div>
<div id="liaCountdown"></div>