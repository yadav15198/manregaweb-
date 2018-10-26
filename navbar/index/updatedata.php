<?php
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "manregaDB");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	if($_GET['submit']){
	  $id =	  $_GET['sid'];
       $nod =  $_GET['No_Of_Working_days'];
       $income =  $_GET['income'];
		$query = "UPDATE registration SET Working_days='$nod',Income ='$income' WHERE sid='$id'";
		$data = mysqli_query($conn,$query);
		if($data){
			echo "record updated successfully";
		}
		else{
			echo "record not updated";
		}
	}
	else{
		echo  "<font color ='blue'>click on update button to save changes";
	}
?>