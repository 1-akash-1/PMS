<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Custom Website</title>
	<link rel="stylesheet" href="style1.css">
</head>
<body>
	<div class="wrapper">
			<nav class="navbar">
				<ul>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="feedback.html">Feedback</a></li>
				</ul>
			</nav>
			<div class="center">
			<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
			<h2>Select Your Choice</h2>
			<div class="buttons">
				<center>
			<br><button>Request Appointment</button><br>
		    </center>
            <center>
			<br><button class="btn2">Check Status</button><br>
			<br><p><button><a href="logout.php">Logout</a></button></p><br>
		</center>
		</div>
		</div>
</body>
</html>