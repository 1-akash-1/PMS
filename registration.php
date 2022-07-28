<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
function sendMail($email,$verification_code)
{
    require ("PHPMailer/Exception.php");
    require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'plasticmanagement5@gmail.com';                     //SMTP username
        $mail->Password   = 'az1234qwerty';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('plasticmanagement5@gmail.com', 'PMS');
        $mail->addAddress($email);     //Add a recipient
     
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email Verification From PMS';
        $mail->Body    = "Your verification code is $verification_code>Verify</a>";
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>




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
        $verification_code=bin2hex(random_bytes(16));
        $query    = "INSERT into `users` (username, password, email, address, Pincode,Housenumber,Phonenumber,create_datetime,verification_code,is_verified)
                     VALUES ('$username', '" . md5($password) . "', '$email','$address',$Pincode,$Housenumber,$Phonenumber,'$create_datetime','$verification_code','0')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        }
        else if ($result>0) {
                    echo "<div class='form'>
                          <h3>This account already exist.</h3><br/>
                          <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
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
        <input type="text" class="login-input" name="email" placeholder="Email" required />
        <input type="password" class="login-input" name="password" placeholder="Password" required />
        <input type="text" class="login-input" name="address" placeholder="Address" required />
        <input type="text" class="login-input" name="Pincode" placeholder="Pincode" required />
        <input type="text" class="login-input" name="Housenumber" placeholder="Housenumber" required />
        <input type="text" class="login-input" name="Phonenumber" placeholder="Phonenumber"required /   >
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php"style="text-decoration: none">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
