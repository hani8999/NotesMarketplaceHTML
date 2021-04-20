<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>

    <!-- Sign-up section-->
    <!-- Background image-->
    <img class="back-img" src="images/login/banner-with-overlay.jpg" alt="backimage">
    <!-- Background image-->

    <section id="sign-up">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="top-logo">
                        <a href="#">
                            <img class="image-fluid" src="images/login/top-logo.png" alt="Notes Marketplace">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="sign-up-box">
                        <h2 class="text-center">Create an Account</h2>
                        <p class="user-guide">Enter your details to signup</p>
                        <div class="msg">
                            <p><span><i class="fa fa-check-circle"></i></span> Your account has been successfully created.</p>
                        </div>

                        <!-- form elements-->
                        <form>
                            <div class="form-group">
                                <label class="control-label" for="email-field">First Name</label>
                                <input type="text" class="form-control input-box" id="email-field" aria-describedby="emailHelp" placeholder="Enter your first name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email-field">Last Name</label>
                                <input type="text" class="form-control input-box" id="email-field" aria-describedby="emailHelp" placeholder="Enter your last name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email-field">Email</label>
                                <input type="email" class="form-control input-box" id="email-field" aria-describedby="emailHelp" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password-field">Password</label>
                                <input type="password" class="form-control input-box" id="password-field" placeholder="Enter your password" autocomplete="on">
                                <div class="eye"><img class="eye-img" src="images/login/eye.png" alt="eye"></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password-field">Confirm Password</label>
                                <input type="password" class="form-control input-box" id="password-field" placeholder="Enter your confirm password" autocomplete="on">
                                <div class="eye"><img class="eye-img" src="images/login/eye.png" alt="eye"></div>
                            </div>
                            <div class="form-btn">
                                <button type="submit" class="btn btn-general btn-purple" form action="../html/user-profile.html">Sign Up</button>
                            </div>
                        </form>
                        <div class="toggle-btwn-login-signup" class="text-center">
                            <p>Already have an account? <span><a href="login.php">Login</a></span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>

</html>