<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="profile.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>Profile</h1>
        </div>

        <!-- Navbar -->
        <ul>
            <li>
                <a href="dashboard.php">
                    <i class="fa fa-sign-out-alt fa-2x"></i>
                </a>
            </li>
        </ul>
        <!-- End -->
    </div>
    <!-- End -->

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
            <img src="https://imdezcode.files.wordpress.com/2020/02/imdezcode-logo.png" alt="" width="100" height="100">

            <div class="name">
                PMS
            </div>
            <div class="job">
            
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="#profile" class="active">Profile</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="#settings">Settings</a>
                <hr align="center">
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php
                            $email = $_SESSION['email'];
$sql = "SELECT username FROM users where email='$email'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<td><td>" . $row["username"] ."</td></td>";
}
}
?></td>
 <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php
                            $username = $_SESSION['email'];
$sql = "SELECT email FROM users where email='$email'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<td><td>" . $row["email"] ."</td></td>";
}
}
?></td>
                        </tr>
                        <td>Contact Number</td>
                            <td>:</td>
                            <td><?php
                            $email = $_SESSION['email'];
$sql = "SELECT Phonenumber FROM users where email='$email'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<td><td>" . $row["Phonenumber"] ."</td></td>";
}
}
?></td>
                        </tr>
                        <td>House Number</td>
                            <td>:</td>
                            <td><?php
                            $email = $_SESSION['email'];
$sql = "SELECT Housenumber FROM users where email='$email'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<td><td>" . $row["Housenumber"] ."</td></td>";
}
}
?></td>
                        </tr>
                        <tr>
                        <td>Address</td>
                            <td>:</td>
                            <td><?php
                            $email = $_SESSION['email'];
$sql = "SELECT address FROM users where email='$email'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<td><td>" . $row["address"] ."</td></td>";
}
}
?>
</tr>
<tr>
                        <td>PIN code</td>
                            <td>:</td>
                            <td><?php
                            $email = $_SESSION['email'];
$sql = "SELECT Pincode FROM users where email='$email'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<td><td>" . $row["Pincode"] ."</td></td>";
}
}
?>
</tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        
               
            </div>
        </div>
    </div>
    <!-- End -->
</body>
</html>
