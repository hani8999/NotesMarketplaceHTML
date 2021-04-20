<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>

    <!-- forgot section-->
    <!-- Background image-->
    <img class="back-img" src="images/login/banner-with-overlay.jpg" alt="backimage">
    <!-- Background image-->
    <section id="forgot-password">
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
                    <div id="forgot-pswd-box">
                        <h2 class="text-center">Forgot Password?</h2>
                        <p class="user-guide">Enter your email to reset your password</p>

                        <!-- form elements-->
                        <form>
                            <div class="form-group">
                                <label class="control-label" for="email-field">Email</label>
                                <input type="email" class="form-control input-box" id="email-field" aria-describedby="emailHelp" placeholder="Enter your email">
                            </div>
                            <div class="form-btn">
                                <button type="submit" class="btn btn-general btn-purple" form action="../html/user-profile.html">SUBMIT</button>
                            </div>
                        </form>


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