<?php
 // **variables**
error_reporting(0);
//print_r($_POST);
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$userid = $_POST["email"];
$passw =$_POST["pass"] ;
$cpassword=$_POST["conpassword"];
$dname = $_POST["displayname"];
$fathername= $_POST["fathersname"];
$gender =$_POST["gender"];
$dob =$_POST["dateofbirth"];
$aadhar=$_POST["aadharnumber"];
$state =$_POST["state"];
$district=$_POST["district"];
$po = $_POST["postoffice"];
$vill =$_POST["village"];
$pin =$_POST["pincode"];
$houseno=$_POST["houseno"];



$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "manregaDB");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO registration( `firstname`, `lastname`, `email`, `password`, `conpassword`, `displayname`, `fathersname`, `gender`, `dateofbirth`, `aadharnumber`, `state`, `district`, `postoffice`, `village`, `pincode`, `houseno`) VALUES ('$fname','$lname','$userid','$passw','$cpassword','$dname','$fathername','$gender','$dob','$aadhar','$state','$district','$po','$vill','$pin','$houseno')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	
$conn->close();

?>