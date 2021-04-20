<?php

include 'db.php';
session_start();

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail_sent = false;


//boolean for proper Password validation 
$upper_pwd_check = true;
$lower_pwd_check = true;
$number_pwd_check = true;
$length_check = true;
$password_match = true;

if (isset($_POST['signup'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);


    $query = "SELECT * FROM users WHERE emailid ='$email' ";
    $result = mysqli_query($conn, $query);
    $emailcount = mysqli_num_rows($result);

    if ($emailcount > 0) {
        echo '<script>alert("email already exists")</script>';
    }
    $upper_pwd = preg_match('@[A-Z]@', $password);
    if (!$upper_pwd)
        $upper_pwd_check = false;

    $lower_pwd = preg_match('@[a-z]@', $password);
    if (!$lower_pwd)
        $lower_pwd_check = false;

    $number_check = preg_match('@[0-9]@', $password);
    if (!$number_check)
        $number_pwd_check = false;

    if ($password != $cpassword) {
        $password_match = false;
    }

    if (strlen($fname) < 3 && strlen($lname)) {
        $error = "<p>your firstname and lastname must be at-least 3 character <p>";
    } else {
        if ($emailcount == 0 && $password_match && $upper_pwd_check && $lower_pwd_check && $number_pwd_check) {

            $insertquery = "INSERT INTO users(roleid,firstname,lastname,emailid,password,isemailverified,createddate,isactive)VALUES(1,'$fname','$lname','$email','$password',0,now(),1)";
            $iquery = mysqli_query($conn, $insertquery);

            //userid getter
            $id = mysqli_insert_id($conn);

            //mail function
            require 'PHPMailer/Exception.php';
            require 'PHPMailer/PHPMailer.php';
            require 'PHPMailer/SMTP.php';

            $mail = new PHPMailer(true);
            $alert = '';

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->Username = "hanividhrani265@gmail.com";
                $mail->Password = 'Hani265';

                // Sender and recipient settings
                $mail->setFrom("hanividhrani265@gmail.com", 'NotesMarketPlace');
                $mail->addAddress($email, $fname . $lname);
                $mail->addReplyTo("hanividhrani265@gmail.com", 'NotesMarketPlace');
                $mail->IsHTML(true);
                $mail->Subject = "Email verification";
                $mail->AddEmbeddedImage('images/Logo/dark-logo.png', 'logo');

                $mail->Body = "<table>
                    <tr>
                        <td style='height: 75px;'><img src='cid:logo' alt='NMP-logo'></td>
                    </tr>
                    <tr>
                        <td
                            style='color: #6255a5; font-size: 26px; font-weight: 600; line-height: 30px; height: 50px;'>
                            Email Verification</td>
                    </tr>
                    <tr>
                        <td style='height: 30px; font-size: 18px; color: #333333;font-weight: 400;'>
                        <php
                        <b>Dear $fname  $lname,</b>
                        </td>
                    </tr>
                    <tr>
                        <td style='font-size: 16px;font-weight: 400; height: 25px; color: #333333;'>
                            Thanks for signing up</td>
                    </tr>
                    <tr>
                        <td style='font-size: 16px;font-weight: 400; height: 25px; color: #333333;'>
                            Simply click below for email verification.</td>
                    </tr>
                    <tr>
                        <td style='height: 50px;'><a href='http://localhost/NoteMarketPlace/front/email-checker.php?ID=$id'>
                        <button style='width: 300px;background-color: #6255a5;height: 35px;border-radius: 3px;font-size: 18px; border:transparent;text-transform: uppercase;color: #fff;'>verify
                        email address</button></a></td>
                    </tr>
                </table>";
                $mail->AltBody = '';

                $mail->send();
                $mail_sent = true;
            } catch (Exception $e) {
                $alert = '<div class = "alert-sucess">
                        <span>' . $e->getMessage() . '</span>
                        </div>';
            }
        }
        if ($emailcount > 0) {
            $mail_exist = true;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>

    <!-- Sign up -->

    <!-- Background image -->
    <img class="back-image" src="images/Login/banner-with-overlay.jpg" alt="backimage">
    <!-- Background image ends -->


    <section id="sign-up">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="top-logo">
                        <a href="#">
                            <img class="image-fluid" src="images/Login/top-logo.png" alt="Notes Marketplace">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="login-box">
                        <h2 class="text-center">Create an Account</h2>
                        <p class="user-guide">Enter your details to signup</p>
                        <div class="msg">
                            <?php
                            if ($mail_sent)
                                echo " <center><p style='color:green';><span><i class='fa fa-check-circle'></i></span> Your account has been successfully created.</p></center>";
                            ?>
                        </div>

                        <!-- form -->
                        <form action="sign-up.php" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="email-field">First Name *</label>
                                <input type="text" name="fname" class="form-control input-box" id="email-field" aria-describedby="emailHelp" placeholder="Enter your first name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email-field">Last Name *</label>
                                <input type="text" name="lname" class="form-control input-box" id="email-field" aria-describedby="emailHelp" placeholder="Enter your last name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email-field">Email *</label>
                                <input type="email" class="form-control input-box" id="email-field" aria-describedby="emailHelp" placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password-field">Password</label>
                                <input type="password" class="form-control input-box" id="password-field" placeholder="Enter your password" autocomplete="on">
                                <div class="eye"><img class="eye-image" src="images/Login/eye.png" alt="eye"></div>
                                <div class="incorrect-password">
                                    <?php
                                    if (!$length_check)
                                        echo "<p style='color:red;'>The Password Length Should be more then 6 characters</p>";
                                    else if (!$upper_pwd_check)
                                        echo "<p style='color:red;'>Please enter at least one uppercase letter </p>";
                                    else if (!$lower_pwd_check)
                                        echo "<p style='color:red;'>Please enter at least one lowercase letter </p>";
                                    else if (!$number_pwd_check)
                                        echo "<p style='color:red;'>Please enter at least one numeric letter </p>";
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password-field">Confirm Password</label>
                                <input type="password" class="form-control input-box" id="password-field" placeholder="Re-enter your password" autocomplete="on">
                                <div class="eye"><img class="eye-image" src="images/Login/eye.png" alt="eye"></div>
                            </div>
                            <div class="form-btn">
                                <button type="submit" name="signup" class="btn btn-general btn-purple">SIGN UP</button>
                            </div>
                        </form>
                        <div class="toggle-btwn-login-signup" class="text-center">
                            <p>Already have an account? <span><a href="login.php">Login</a></span></p>
                        </div>
                        <!-- form ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign up ends -->

    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>

</html>