<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Appointment</title>
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
    <div class="h2 font-weight-bold">Appointmentn Requests</div>

      <br>
    <div class="table-responsive">
    <?php
	$sql5 = "Select * from users";
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
					$sql5="SELECT *FROM users ";
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
	$sql1 = "Select * from book";
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
				$sql2="SELECT * from collector where did=".$row1['DID'];
				$result2= mysqli_query($conn,$sql2);
				while($row2= mysqli_fetch_array($result2))
				{
					$sql3="SELECT * from center where CID=".$row1['CID'];
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
     
     
     
     <!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Appointment</title>
    <link rel="stylesheet" href="">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>

<body>
    <div>
      <center>
        <div class="center">

           <h2>Appointment Requests</h2>




           


<div class="container my-5"> 
  <form action="controller" method="get" class="d-md-flex d-sm-block justify-content-between">
     <input type="hidden" name="command" value="select-orders"> 
     <h1 class="h5 align-self-center col-3">Search Order</h1> 
     <div class="btn-group align-self-center col-12 col-sm-12 col-md-8 col-lg-6"> 
      <select name="searchType" class="btn btn-outline-dark col-3 col-sm-3"> 
        <option value="orderId">Order ID</option> 
        <option value="created">Created</option> 
        <option value="customer">Customer</option>
         <option value="status">Status</option> 
        </select> <input type="search" name="searchBy" class="col-6 col-sm-6"> 
        <input type="submit" value="Search" class="btn btn-outline-dark col-3 col-sm-3"> 
      </div> 
      </form> 
      <div class="d-md-flex d-none justify-content-md-between justify-content-sm-center align-content-center border-bottom border-2 my-2 bg-dark text-light p-3 rounded-3">
         <div class="col-2 text-sm-center text-md-start align-self-center"> 
          <h1 class="h5 fw-bold">Order ID</h1> 
        </div> <div class="col-2 align-self-center"> 
          <h1 class="h5 fw-bold">Created</h1>
         </div> 
          <div class="col-3 align-self-center"> 
            <h1 class="h5 fw-bold">Customer</h1> 
          </div> 


          <div class="col-2 align-self-center"> 
            <h1 class="h5 fw-bold">Show details</h1> 
          </div> 
          <div class="col-2 align-self-center"> 
            <h1 class="h5 fw-bold">Status</h1> 
          </div> 
        </div>
         <div class="d-md-flex d-sm-block justify-content-md-between justify-content-sm-center text-center border-bottom border-2 my-2 bg-light p-2 rounded-3"> 
          <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
            <h1 class="h6">2F456DA</h1> </div> 
            <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
              <h1 class="h6">04/12/2021 3:15:24:299</h1>
             </div> <div class="col-md-3 text-sm-center text-md-start align-self-center my-2"> 
              <h1 class="h6">Robert Tailor Hamonovych</h1> 
            </div>
             <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
              <a class="btn btn-outline-dark w-100" href="#">Details</a>
             </div> <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
              <form method="get" action="controller" class="d-flex btn-group"> 
                <input type="hidden" name="command" value="refresh-order-status">
                 <select name="status" class="btn btn-outline-dark"> 
                  <option value="REGISTERED" class="form-select-button">REGISTERED</option> 
                  <option value="PAID" class="form-select-button">PAID</option> 
                  <option value="CANCELED" class="form-select-button">CANCELED</option>
                 </select> <input type="submit" class="btn btn-outline-dark" value="OK">
                 </form> </div> 
                </div>
                 <div class="d-md-flex d-sm-block justify-content-md-between justify-content-sm-center text-center border-bottom border-2 my-2 bg-light p-2 rounded-3"> 
                  <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
                    <h1 class="h6">D2903WE</h1>
                   </div> 
                   <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
                    <h1 class="h6">03/09/2021 3:15:24:299</h1> 
                  </div> 
                  <div class="col-md-3 text-sm-center text-md-start align-self-center my-2">
                     <h1 class="h6">Jason Tailor Hamonovych</h1> 
                    </div>
                     <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
                      <a class="btn btn-outline-dark w-100" href="#">Details</a> 
                    </div> 
                    <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
                      <form method="get" action="controller" class="d-flex btn-group">
                         <input type="hidden" name="command" value="refresh-order-status"> 
                         <select name="status" class="btn btn-outline-dark"> 
                          <option value="REGISTERED" class="form-select-button">REGISTERED</option> 
                          <option value="PAID" class="form-select-button">PAID</option> 
                          <option value="CANCELED" class="form-select-button">CANCELED</option> 
                        </select> 
                        <input type="submit" class="btn btn-outline-dark" value="OK"> </form> 
                      </div> </div> 
                      <div class="d-md-flex d-sm-block justify-content-md-between justify-content-sm-center text-center border-bottom border-2 my-2 bg-light p-2 rounded-3"> 
                        <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
                          <h1 class="h6">5463783D</h1> </div> 
                          <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
                            <h1 class="h6">19/10/2021 3:34:24:299</h1> </div> 
                            <div class="col-md-3 text-sm-center text-md-start align-self-center my-2"> 
                              <h1 class="h6">Mike Orley Hemington</h1> </div>
                               <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
                                <a class="btn btn-outline-dark w-100" href="#">Details</a> </div> 
                                <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
                                  <form method="get" action="controller" class="d-flex btn-group">
                                     <input type="hidden" name="command" value="refresh-order-status"> 
                                     <select name="status" class="btn btn-outline-dark"> 
                                      <option value="REGISTERED" class="form-select-button">REGISTERED</option> 
                                      <option value="PAID" class="form-select-button">PAID</option> 
                                      <option value="CANCELED" class="form-select-button">CANCELED</option>
                                     </select> <input type="submit" class="btn btn-outline-dark" value="OK"> </form> 
                                    </div> </div> <div class="d-md-flex d-sm-block justify-content-md-between justify-content-sm-center text-center border-bottom border-2 my-2 bg-light p-2 rounded-3"> 
                                      <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
                                        <h1 class="h6">324516AD</h1> </div> 
                                        <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> <h1 class="h6">03/02/2021 22:45:44:999</h1> 
                                        </div> <div class="col-md-3 text-sm-center text-md-start align-self-center my-2"> 
                                          <h1 class="h6">Jessy Koper Fauer</h1> </div>
                                           <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
                                            <a class="btn btn-outline-dark w-100" href="#">Details</a> 
                                          </div> <div class="col-md-2 text-sm-center text-md-start align-self-center my-2"> 
                                            <form method="get" action="controller" class="d-flex btn-group"> 
                                              <input type="hidden" name="command" value="refresh-order-status"> 
                                              <select name="status" class="btn btn-outline-dark">
                                                 <option value="REGISTERED" class="form-select-button">REGISTERED</option> 
                                                 <option value="PAID" class="form-select-button">PAID</option> 
                                            <option value="CANCELED" class="form-select-button">CANCELED</option> </select>
                                   <input type="submit" class="btn btn-outline-dark" value="OK"> </form> </div> </div>
</div>
             
            <div class="table">

                    <table class="appointmentTable">
                    <tr >
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                        <th>House Number</th>
                        <th>PIN CODE</th>
                      <th>Schedule Date</th>
                      <th>Schedule Day</th>
                      <th>Schedule time</th>
                      <th>Action</th>
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

</html>-->