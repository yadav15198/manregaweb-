<style>
td{
	padding: 5px;
}
</style>
<?php
error_reporting(0);
$name = $_POST["name"];
$userid = $_POST["Username"];
$passw =$_POST["pass"] ;



$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "manregaDB");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = "SELECT * FROM admindb WHERE email = '$userid' AND password ='$passw'";
$query1 ="SELECT * FROM registration ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$data1= mysqli_query($conn, $query1);

 if($total != 0){
 	?>

   <table border="1">
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
		<td><b>working_days</b></td>
		<td><b>Income</b></td>
		<td><b>operation</b></td>
   	</tr>
   

 	<?php

    while ($result = mysqli_fetch_assoc($data1)) {
    	# code...
    
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
		<td>".$result['Working_days']."</td>
		<td>".$result['Income']."</td>
		<td><a href='update.php?sid=$result[sid] & nod=$result[Working_days] & inc=$result[Income]'>update</a></td>

		</tr> " ;
	}
 }
 else{
	echo "INVALID USERNAME OR PASSWORD";
}
?>
</table>
