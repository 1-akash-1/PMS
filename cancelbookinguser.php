<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');
?>


<html>
<head>
<link rel="stylesheet" href="main.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head><?php include "dbconfig.php"; ?>
<body style="background-image:url(images/cancelback.jpg)">
	<div class="header">
		<ul>
			<li style="float:left;border-right:none"><a href="user-menu.php" class="logo"><img src="images/cal.png" width="30px" height="30px"><strong> Skylabs </strong>Appointment Booking System</a></li>
			<li><a href="user-menu.php">Home</a></li>
		</ul>
	</div>
	<form action="cancelbookinguser.php" method="post">
	<div class="sucontainer">
		<label style="font-size:20px" >Select Appointment to Cancel:</label><br>
		<select name="appointment" id="appointment-list" class="demoInputBox"  style="width:100%;height:35px;border-radius:9px">
		<option value="">Select Appointment</option>
		<?php
		session_start();
		$email=$_SESSION['email'];
		$date= date('Y-m-d');
		$sql1="SELECT * from book where email='".$email."'and status not like 'Cancelled' and DOV >='$date'";
         $results=$conn->query($sql1); 
		while($rs=$results->fetch_assoc()) {
			$sql2="select * from collector where did=".$rs["DID"];
			$results2=$conn->query($sql2);
				while($rs2=$results2->fetch_assoc()) {
					$sql3="select * from center where cid=".$rs["CID"];
					$results3=$conn->query($sql3);
		while($rs3=$results3->fetch_assoc()) {
			
		?>
		<option value="<?php echo $rs["Timestamp"]; ?>"><?php echo "user: ".$rs["Fname"]." Date: ".$rs["DOV"]." -Dr.".$rs2["name"]." -center: ".$rs3["name"]." -Town: ".$rs3["town"]." - Booked on:".$rs["Timestamp"]; ?></option>
		<?php
		}
		}
		}
		?>
		</select>
		

			<button type="submit" style="position:center" name="submit" value="Submit">Submit</button>
	</form>
	<?php
if(isset($_POST['submit']))
{
		$email=$_SESSION['email'];
		$timestamp=$_POST['appointment'];
		$updatequery="update book set Status='Cancelled' where email='$email' and timestamp= '$timestamp'";
				if (mysqli_query($conn, $updatequery)) 
				{
							echo "Appointment Cancelled successfully..!!";
							header( "Refresh:2; url=user-menu.php");

				} 
				else
				{
					echo "Error: " . $updatequery . "<br>" . mysqli_error($conn);
				}

}
?>
</body>
</html>