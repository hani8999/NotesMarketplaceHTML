<?php
include 'db.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>


    <!-- Header -->
    <div class="white-nav style-nav">
        <header class="site-header">
            <div class="header-wrapper">


                <div class="logo-wrapper">
                    <a href="homepage.php">
                        <img src="images/Logo/dark-logo.png" alt="Logo">
                    </a>
                </div>
                <div class="navigation-wrapper">
                    <nav class="main-navigation">
                        <ul class="menu-navigation">
                            <li>
                                <a href="search-notes.php">Search Notes</a>
                            </li>
                            <li>
                                <a href="add-notes.php">Sell Your Notes</a>
                            </li>
                            <li>
                                <a href="buyer-requests.php">Buyer Request</a>
                            </li>
                            <li>
                                <a href="faq.php">FAQ</a>
                            </li>
                            <li>
                                <a href="Contact-us.php">Contact Us</a>
                            </li>
                            <li class="logged-in-user-photo-li">
                                <div class="dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="logged-in-user-photo">
                                            <img src="images/User-Profile/user-img.png" alt="User Photo" class="rounded-circle">
                                        </div>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item active" href="user-profile.php">My Profile</a>
                                        <a class="dropdown-item" href="download-notes.php">My Downloads</a>
                                        <a class="dropdown-item" href="sold-notes.php">My Sold Notes</a>
                                        <a class="dropdown-item" href="rejected-notes.php">My Rejected Notes</a>
                                        <a class="dropdown-item" href="change-password.php">Change Password</a>
                                        <a class="dropdown-item logout-btn-dropdown" href="login.php">Logout</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="btn btn-general btn-purple" href="login.php" title="Download" role="button">Logout</a>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div>
        </header>
    </div>
    <!-- Header ends -->

    <!-- Thanks popup -->
    <div id="thanks-popup">
        <div class="modal fade" id="thanks-popup-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="images/Notes-detail/close.png" alt="close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="thanks-img text-center">
                            <img src="images/Notes-detail/success.png" alt="success">
                        </div>
                        <p class="thanks-heading">Thank you for purchasing!</p>
                        <p class="buyers-name"><strong>Dear Smith,</strong></p>
                        <p>As this is paid notes - you need to pay to seller Rahil Shah offline. We will send him an emial that you want to download this note. He may contact you further for payment process completion.</p>
                        <p>In case, you have urgency,<br>Please contact us on +919658745692.</p>
                        <p>Once he receives the payment and acknowledgde us - selected notes you can see over my downloads tab for download.</p>
                        <p>Have a good day.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Thanks popup -->


    <div id="notes-details">
        <!-- Notes details Upper Section -->
        <div class="container">
            <div class="notes-upper content-box-md">
                <!-- Notes details Upper Left Section -->
                <p class="notes-heading-1">Notes Details</p>
                <div class="row no-gutters">
                    <div class="notes-details-left col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <img src="images/Notes-detail/1.jpg" alt="note" class="notes-img img-fluid">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="notes-details-box">
                                    <p class="notes-name">Computer Science</p>
                                    <p class="notes-type">Sciences</p>
                                    <p class="notes-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque voluptatum sit, iusto temporibus ipsam. Nesciunt earum ipsam error, aut vitae molestiae sit. </p>
                                    <?php
                                    if (isset($_SESSION['email'])) {
                                        echo "<a class='btn btn-general btn-purple' role='button' data-toggle='modal' data-target='#thanks-popup-model'>Download / $15</a>";
                                    } else {
                                        echo "<a class='btn btn-general btn-purple' role='button' href = 'login.php'>Download / $15</a>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Notes details Upper Left Section Ends -->

                    <!-- Notes details Upper Right Section -->
                    <div class="notes-details-right col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="notes-details-left-section">
                                    <p class="about-notes">Institution:</p>
                                    <p class="about-notes">Country:</p>
                                    <p class="about-notes">Course Name:</p>
                                    <p class="about-notes">Course Code</p>
                                    <p class="about-notes">Professor:</p>
                                    <p class="about-notes">Number of Pages:</p>
                                    <p class="about-notes">Approved Date:</p>
                                    <p class="about-notes">Rating:</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="notes-details-right-section">
                                    <p class="about-notes">University of California</p>
                                    <p class="about-notes">United State</p>
                                    <p class="about-notes">Computer Engineering</p>
                                    <p class="about-notes">248705</p>
                                    <p class="about-notes">Mr.Richard Brown</p>
                                    <p class="about-notes">277</p>
                                    <p class="about-notes">November 25 2020</p>
                                    <p class="about-notes">
                                        <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i id="star" class="fa fa-star-o" style="color:gray"></i>
                                        </span>100 Reviews
                                    </p>
                                </div>
                            </div>
                            <p class="user-review">5 Users marked this note as inappropriate</p>
                        </div>
                    </div>
                    <!-- Notes details Upper Right Section Ends -->
                </div>
            </div>
        </div>
        <!-- Notes details Upper Section Ends -->

        <div class="border-bottom"></div>

        <!-- Notes details Lower Section  -->
        <div class="container">
            <div class="content-box-lg">
                <div class="row no-gutters">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="notes-preview-box">
                            <p class="notes-heading">Notes Preview</p>
                            <iframe src="images/Notes-detail/sample.pdf"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                        <div class="review-section">
                            <p class="notes-heading">Customer Review</p>
                            <div class="review-box">
                                <div class="review-box-des">
                                    <div class="row no-gutters">
                                        <div class="col-lg-2 col-md-3 col-sm-2 col-12">
                                            <img class="reviewer-img" src="images/Notes-detail/reviewer-1.png" alt="customer">
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-10 col-12">
                                            <p class="reviewer-name">Richard Brown</p>
                                            <p class="reviewer-rating">
                                                <span>
                                                    <img src="images/Notes-detail/star.png" alt="star">
                                                    <img src="images/Notes-detail/star.png" alt="star">
                                                    <img src="images/Notes-detail/star.png" alt="star">
                                                    <img src="images/Notes-detail/star.png" alt="star">
                                                    <img src="images/Notes-detail/star-white.png" alt="star">
                                                </span>
                                            </p>
                                            <p class="reviewer-text">Lorem ipsum is simply dummy text of the perinting and type casting industry.it has been the industr standard dummy text ever since the 1500s.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="review-border"></div>

                                <div class="review-box-des">
                                    <div class="row no-gutters">
                                        <div class="col-lg-2 col-md-3 col-sm-2 col-12">
                                            <img class="reviewer-img" src="images/Notes-detail/reviewer-2.png" alt="customer">
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-10 col-12">
                                            <p class="reviewer-name">Alice Ortiaz</p>
                                            <p class="reviewer-rating">
                                                <span>
                                                    <img src="images/Notes-detail/star.png" alt="star">
                                                    <img src="images/Notes-detail/star.png" alt="star">
                                                    <img src="images/Notes-detail/star.png" alt="star">
                                                    <img src="images/Notes-detail/star.png" alt="star">
                                                    <img src="images/Notes-detail/star-white.png" alt="star">
                                                </span>
                                            </p>
                                            <p class="reviewer-text">Lorem ipsum is simply dummy text of the perinting and type casting industry.it has been the industr standard dummy text ever since the 1500s, an unknown.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="review-border"></div>

                                <div class="review-box-des">
                                    <div class="row no-gutters">
                                        <div class="col-lg-2 col-md-3 col-sm-2 col-12">
                                            <img class="reviewer-img" src="images/Notes-detail/reviewer-3.png" alt="customer">
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-10 col-12">
                                            <p class="reviewer-name">Sara Passmore</p>
                                            <p class="reviewer-rating">
                                                <span>
                                                    <img src="images/Notes-detail/star.png" alt="star">
                                                    <img src="images/Notes-detail/star.png" alt="star">
                                                    <img src="images/Notes-detail/star.png" alt="star">
                                                    <img src="images/Notes-detail/star.png" alt="star">
                                                    <img src="images/Notes-detail/star-white.png" alt="star">
                                                </span>
                                            </p>
                                            <p class="reviewer-text">Lorem ipsum is simply dummy text of the perinting and type casting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Note details Lower Section Ends -->
    </div>

    <!-- Footer-->
    <?php include 'footer.php'; ?>
    <!-- Footer End-->


    <!-- Popper Js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>

</body>

</html>