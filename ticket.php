<?php

$con = $con = mysqli_connect("127.0.0.1","root","","railway");

mysqli_select_db($con,"railway");
$id=$_REQUEST['id'];
$sql="SELECT * FROM ticket WHERE name='$id'";

$records=mysqli_query($con,$sql);

?>

<html>
	<head>
		<title>Your Ticket</title>
		
	</head>
	
	<body background="night.png">
	<?php 
session_start();
include("header.php"); ?>
	<center>
	<br><br>
	<font color="white" size="7"><u>Ticket &nbsp Details</u></font>
	<pre>
		<table width="600" border="4" cellpadding="3" cellspacing="3" style="color:white" bgcolor="grey">
			<font color="white">
			<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Departure</th>
			<th>Destination</th>
			<th>Coach</th>
			<th>Berth</th>
			<th>Date</th>
			</th>


			</font>
		
		<?php
		while($rowvalue=mysqli_fetch_array($records))
		{
		echo "<tr>";		
		echo "<td>".$rowvalue['name']."</td>";
		echo "<td>".$rowvalue['age']."</td>";
		echo "<td>".$rowvalue['departure']."</td>";
		echo "<td>".$rowvalue['destination']."</td>";
		echo "<td>".$rowvalue['coach']."</td>";
		echo "<td>".$rowvalue['berth']."</td>";
		echo "<td>".$rowvalue['date']."</td>";
		}
		?>
	</table>
	</pre>
	<form action=select1.php>
	<input type=submit value="Back To Home Page">
	</form>
	</center>
	</body>
</html>