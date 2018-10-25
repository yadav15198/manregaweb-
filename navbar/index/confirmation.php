<?php
error_reporting(0);
$userid = $_POST["Username"];
$passw =$_POST["password"] ;

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "manregaDB");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$query = "SELECT * FROM registration WHERE email = '$userid'AND password ='$passw'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
 $result = mysqli_fetch_assoc($data);
 // echo $result['sid']." ".$result['firstname']." ".$result['lastname']." ".$result['fathersname']." ".$result['dateofbirth']." ".$result['aadharnumber']." ".$result['state']." ".$result['district']." ".$result['postoffice']." ".$result['village']." ".$result['pincode']." ".$result['houseno'];

if($total != 0){
?>
<table>
	<tr>
		<td><b>sid</b></td>
		<td><b>FirstName</b></td>
		<td><b>LastName</b></td>
		<td><b>FathersName</b></td>
		<td><b>DateOfBirth</b></td>
		<td><b>AadharNumber</b></td>
		<td><b>HouseNo</b></td>
		<td><b>Village</b></td>	
		<td><b>PostOffice</b></td>
		<td><b>Pincode</b></td>
		<td><b>District</b></td>
		<td><b>State</b></td>	
	</tr>


<?php
// echo $result['sid']." ".$result['firstname']." ".$result['lastname']." ".$result['fathersname']." ".$result['dateofbirth']." ".$result['aadharnumber']." ".$result['state']." ".$result['district']." ".$result['postoffice']." ".$result['village']." ".$result['pincode']." ".$result['houseno'];
      echo  "<tr>
      <td>".$result['sid']."</td>
		<td>".$result['firstname']."</td>
		 <td>".$result['lastname']."</td>
		<td>".$result['fathersname']."</td>
		<td>".$result['dateofbirth']."</td>
		<td>".$result['aadharnumber']."</td>
		<td>".$result['houseno']."</td>
		<td>".$result['village']."</td>
		<td>".$result['postoffice']."</td>
		<td>".$result['pincode']."</td>
		<td>".$result['district']."</td>
		<td>".$result['state']."</td>
		</tr>";
		
	
}
else{
	echo "INVALID USERNAME OR PASSWORD";
}
?>
</table>