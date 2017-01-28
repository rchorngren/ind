<?php
//$db = mysqli_connect('gg-219291.mysql.binero.se', '219291_ow20538', 'Sommar16', '219291-gg');
$db = mysqli_connect("localhost", "root", "", "release2");
mysqli_query($db, "SET NAMES utf8");
?>

Sidan <b><?php echo $_POST["page_name"];?></b> är uppdaterat med enligt nedan; <br><br>
<?php echo $_POST["content"]; ?><br><br>


<a href="loggedin.php?page=content_admin">Gå tillbaka till adminsidan för undersidor</a>

<?php
	if(isset($_POST["id"])) {
   		$new_page_name = mysqli_real_escape_string($db, $_POST['page_name']);
   		$new_content = mysqli_real_escape_string($db, $_POST['content']);
   		$id = mysqli_real_escape_string($db, $_POST['id']);
   		$query = "UPDATE pages SET page_name = '$new_page_name', content = '$new_content' WHERE id = $id";
   		mysqli_query($db, $query);   
	}
?>