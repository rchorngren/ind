<?php
//include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Digitalt CV Robert Horngren Front-End HTML CSS Javascript</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css.css">
</head>
<body>
	<nav style="background-color: red;">
		<a href="loggedin.php?page=admin">CV-admin</a>
		<a href="loggedin.php?page=content_admin">Innehållsadmin</a>
		<a href="loggedin.php?page=messages">Meddelanden</a>
		<b id="logout"><a href="logout.php">Logga ut</a></b>
	</nav>

<?php
    $currentPage = '';
    if (isset($_GET['page'])){
		$currentPage = $_GET["page"];
    }
            
    switch($currentPage) {
        case "admin";
          	include ("admin.php");
        break;
        case "content_admin";
        	include("content_admin.php");
        break;
        case "messages";
          	include ("messages.php");
        break;
        default:
          	include ("messages.php");
        break;
    }
?>



</body>
</html>