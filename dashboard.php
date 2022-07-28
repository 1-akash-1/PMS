<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Custom Website</title>
	<link rel="stylesheet" href="style1.css">
</head>
<body vlink="#ffb3b3">
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
			<h1>Welcome <?php
                            $email = $_SESSION['email'];
$sql = "SELECT username FROM users where email='$email'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<td><td>" . $row["username"] ."</td></td>";
}
}
?></h1>
			<h2>Select Your Choice</h2>
			<div class="buttons">
				<center>
			<br><button><a href="book.php" style="text-decoration: none">Request Appointment</a></button><br>
		    </center>
            <center>
			<br><button class="btn2"><a href="viewpatientappointments.php" style="text-decoration: none">Check Status</a></button><br>
			<br><p><button><a href="logout.php" style="text-decoration: none">Logout</a></button></p><br>
		</center>
		</div>
		</div>
</body>
</html>