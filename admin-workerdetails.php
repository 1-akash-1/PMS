<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Worker Details</title>
    <link rel="stylesheet" href="">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<?php include "dbconfig.php"; ?>
<?php include "db.php"; ?>

<body>
  <div class="container rounded mt-5 bg-white p-md-5">
    <div class="h2 font-weight-bold">Worker Details</div>

      <br>
    <div class="table-responsive">

    <?php
	$sql5 = "Select * from users";
			$result5=mysqli_query($conn, $sql5);  
			echo "<table>
					<tr>
					<th>Name</th>
					<th>Gender</th>
					<th>Contact</th>
					<th>Address</th>
                    <th>Region</th>
					</tr>";
					while($row5= mysqli_fetch_array($result5))
				{
					$sql5="SELECT *FROM collector ";
						$result5= mysqli_query($conn,$sql5);
						while($row5= mysqli_fetch_array($result5))
						{
								echo "<tr>";
								echo "<td>"  .$row5['name'] . "</td>";
								echo "<td>" . $row5['gender'] . "</td>";
								echo "<td>" . $row5['contact'] . "</td>";
								echo "<td>" . $row5['address'] . "</td>";
                                echo "<td>" . $row5['region'] . "</td>";
								echo "</tr>";
						}
		 		}
							
					?>


                
              <!---- <tr id="spacing-row">
                    <td></td>
                </tr>
                <tr class="bg-blue">
                    <td class="pt-2">
 
                        <div class="pl-lg-5 pl-md-3 pl-1 name">Anny Adams</div>
                    </td>
                    <td class="pt-3">26 Sep 2020</td>
                    <td class="pt-3">11:00 AM</td>
                    <td class="pt-3"><span class="fa fa-check pl-3"></span></td>
                    <td class="pt-3"><span class="fa fa-ellipsis-v btn"></span></td>
                </tr>
                <tr id="spacing-row">
                    <td></td>
                </tr>
                <tr class="bg-blue">
                    <td class="pt-2">
                        <div class="pl-lg-5 pl-md-3 pl-1 name">Arnold Linn</div>
                    </td>
                    <td class="pt-3">26 Sep 2020</td>
                    <td class="pt-3">02:00 PM</td>
                    <td class="pt-3"><span class="fa fa-check pl-3"></span></td>
                    <td class="pt-3"><span class="fa fa-ellipsis-v btn"></span></td>
                </tr>
                <tr id="spacing-row">
                    <td></td>
                </tr>
                <tr class="bg-blue">
                    <td class="pt-2">
                        <div class="pl-lg-5 pl-md-3 pl-1 name">Josh Limosel</div>
                    </td>
                    <td class="pt-3">26 Sep 2020</td>
                    <td class="pt-3">04:00 PM</td>
                    <td class="pt-3"><span class="fa fa-minus pl-3"></span></td>
                    <td class="pt-3"><span class="fa fa-ellipsis-v btn"></span></td> 
                </tr>-->
            </tbody>
        </table>
    </div>
</div>
</body>

</html>



<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Worker Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <center>
        <div class="center">

            <h2>Worker Details</h2>
           
            <div class="table">

                    <table class="appointmentTable">
                    <tr >
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                        <th>House Number</th>
                        <th>PIN CODE</th>
                        <th>Status</th>
                        <th>Assign Work</th>
                      
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                     
                     
                    </tr>

                  </table>
                  
                </center>
            </div>
        </div>
</body>

</html>