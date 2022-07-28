<html>
<head>
<link rel="stylesheet" href="main.css">
<style>
table{
    width: 85%;
    border-collapse: collapse;
	border: 4px solid black;
    padding: 5px;
	font-size: 25px;
}

th{
border: 4px solid black;
	background-color: #4CAF50;
    color: white;
	text-align: left;
}
tr,td{
	border: 4px solid black;
	background-color: white;
    color: black;
}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head><?php include "dbconfig.php"; ?>
<body style="background-image:url(images/cancelback.jpg)">
<div class="wrapper">
			<nav class="navbar">
				<ul>
				<li style="float:left;border-right:none"><strong><?php session_start(); echo $_SESSION['email']; ?></strong></li>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="cancelbookingpatient.php">Services</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="feedback.html">Feedback</a></li>
				</ul>
			</nav>
			<div class="center">
</div>
<center>
<?php
	$email=$_SESSION['email'];
	$sql5 = "Select * from users where email ='".$email."'";
			$result5=mysqli_query($conn, $sql5);  
			echo "<table>
					<tr>
					<th>Address</th>
					<th>Pincode</th>
					<th>Housenumber</th>
					<th>Phonenumber</th>
					</tr>";
					while($row5= mysqli_fetch_array($result5))
				{
					$email = $_SESSION['email'];
					$sql5="SELECT *FROM users where email='$email'";
						$result5= mysqli_query($conn,$sql5);
						while($row5= mysqli_fetch_array($result5))
						{
								echo "<tr>";
								echo "<td>"  .$row5['address'] . "</td>";
								echo "<td>" . $row5['Pincode'] . "</td>";
								echo "<td>" . $row5['Housenumber'] . "</td>";
								echo "<td>" . $row5['Phonenumber'] . "</td>";
								echo "</tr>";
						}
		 		}
							
					?>
	<?php
	$email=$_SESSION['email'];
	$sql1 = "Select * from book where email ='".$email."' order by DOV desc";
			$result1=mysqli_query($conn, $sql1);  
			echo "<table>
					<tr>
					<th>Appointment-Date</th>
					<th>Name</th>
					<th>Center</th>
					<th>Collector</th>
					<th>Status</th>
					<th>Booked-On</th>
					</tr>";
			while($row1 = mysqli_fetch_array($result1))
			{
				$sql2="SELECT * from doctor where did=".$row1['DID'];
				$result2= mysqli_query($conn,$sql2);
				while($row2= mysqli_fetch_array($result2))
				{
					$sql3="SELECT * from clinic where CID=".$row1['CID'];
						$result3= mysqli_query($conn,$sql3);
						while($row3= mysqli_fetch_array($result3))
						{
								echo "<tr>";
								echo "<td>" . $row1['DOV'] . "</td>";
								echo "<td>" . $row1['Fname'] . "</td>";
								echo "<td>"  .$row3['town'] . "</td>";
								echo "<td>" . $row2['name'] . "</td>";
								echo "<td>" . $row1['Status'] . "</td>";
								echo "<td>" . $row1['Timestamp'] . "</td>";
								echo "</tr>";
						}
				}
				
			}
	?>
	

</center>
</body>
</html>