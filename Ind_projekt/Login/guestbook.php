<?php
include('session.php');
?>

<?php
$host="localhost"; //Add your SQL Server host here
$user="root"; //SQL Username
$pass=""; //SQL Password
$dbname="release2"; //SQL Database Name
$con=mysqli_connect($host,$user,$pass,$dbname);
if (mysqli_connect_errno($con))
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT name,email,message FROM guestbook");
while($row = mysqli_fetch_array($result))
{ ?>
<h3><?php echo $row['name']; ?></h3>
<p><?php echo $row['email']; ?><p>
<p><?php echo $row['message']; ?></p>
<?php }
mysqli_close($con);
?>