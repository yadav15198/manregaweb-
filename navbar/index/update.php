<?php
error_reporting(0);
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "manregaDB");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  $_GET['sid'];
  $_GET['nod'];
 $_GET['inc'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="updatedata.php" method="GET">
		<input type="id" name="sid" value="<?php echo $_GET['sid']; ?>">
		Working_days <input type="text" name="No_Of_Working_days" value="<?php echo $_GET['nod']; ?>"><br><br>
		Income <input type="text" name="income" value="<?php echo $_GET['inc']; ?>"><br>
		<input type="submit" name="submit" value="update">
	</form>
	</body>
</html>
	


