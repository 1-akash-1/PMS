<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $address    = stripslashes($_REQUEST['address']);
        $address  = mysqli_real_escape_string($con, $address);
        $Pincode    = stripslashes($_REQUEST['Pincode']);
        $Pincode  = mysqli_real_escape_string($con, $Pincode);
        $Housenumber    = stripslashes($_REQUEST['Housenumber']);
        $Housenumber  = mysqli_real_escape_string($con, $Housenumber);
        $Phonenumber    = stripslashes($_REQUEST['Phonenumber']);
        $Phonenumber = mysqli_real_escape_string($con, $Phonenumber);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, address, Pincode,Housenumber,Phonenumber,create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email','$address',$Pincode,$Housenumber,$Phonenumber,'$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Address">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="text" class="login-input" name="address" placeholder="address">
        <input type="text" class="login-input" name="Pincode" placeholder="Pincode">
        <input type="text" class="login-input" name="Housenumber" placeholder="Housenumber">
        <input type="text" class="login-input" name="Phonenumber" placeholder="Phonenumber">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
