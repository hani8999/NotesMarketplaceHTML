<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>

    <!-- Header -->
    <div class="white-nav style-nav">
        <header class="site-header">
            <div class="header-wrapper">

                <!-- Mobile Menu Open Button-->
                <span id="mobile-nav-open-btn">&#9776;</span>

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
                                <a href="Dashboard-1.php">Sell Your Notes</a>
                            </li>
                            <li>
                                <a href="buyer-requests.php">Buyer Requests</a>
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
                                        <a class="dropdown-item" href="user-profile.php">My Profile</a>
                                        <a class="dropdown-item active" href="download-notes.php">My Downloads</a>
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

                <!-- Mobile Menu-->
                <div id="mobile-nav">
                    <img class="logo-in-mobile-menu" src="images/Logo/dark-logo.png" alt="Notes Logo">
                    <!-- Mobile Menu Close Button -->
                    <span id="mobile-nav-close-btn">&times;</span>

                    <div id="mobile-nav-content">
                        <ul class="nav">
                            <li>
                                <a href="search-notes.php">Search Notes</a>
                            </li>
                            <li>
                                <a href="Dashboard-1.php">Sell Your Notes</a>
                            </li>
                            <li>
                                <a href="buyer-requests.php">Buyer Requests</a>
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
                                        <a class="dropdown-item" href="user-profile.php">My Profile</a>
                                        <a class="dropdown-item active" href="download-notes.php">My Downloads</a>
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
                    </div>
                </div>

            </div>
        </header>
    </div>
    <!-- Header ends -->

    <!-- Download popup -->
    <!-- Modal -->
    <div id="download-popup">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="images/Notes-detail/close.png" alt="">
                        </button>
                    </div>
                    <div class="modal-body">

                        <p class="add-review-heading">Add Review</p>

                        <div class="add-reviews-stars">
                            <img src="images/Notes-detail/star.png" alt="">
                            <img src="images/Notes-detail/star.png" alt="">
                            <img src="images/Notes-detail/star.png" alt="">
                            <img src="images/Notes-detail/star.png" alt="">
                            <img src="images/Notes-detail/star-white.png" alt="">
                        </div>

                        <div class="form-group">
                            <label class="info-label" for="comment-questions">Comments *</label>
                            <textarea class="form-control input-box-style" id="" placeholder="Comments..."></textarea>
                        </div>

                        <div class="form-btn">
                            <button class="btn btn-general btn-purple">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- download popup -->

    <!-- My-downloads  part-->
    <div id="my-downloads">
        <div class="content-box-lg">
            <div class="container">
                <div class="row no-gutters total-notes">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="download-heading">My Downloads</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                            <div class="form-group search-in">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" class="form-control search-bar" placeholder="Search">
                            </div>
                            <button class="btn btn-general btn-purple progress-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--My-download table-->
            <div class="container">

                <div class="my-downloads-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Sr no.</th>
                                    <th scope="col">Note title</th>
                                    <th scope="col">category</th>
                                    <th scope="col">Buyer</th>
                                    <th scope="col">Sell type</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Downloaded time</th>
                                    <th scope="col" width="80px">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td class="purple-td">Data Science</td>
                                    <td>Science</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$250</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <img class="eye-img-in-table" src="images/Dashboard/eye.png" alt="edit">

                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
                                                <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td class="purple-td">Accounts</td>
                                    <td>Commerce</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <img class="eye-img-in-table" src="images/Dashboard/eye.png" alt="edit">

                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
                                                <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td class="purple-td">Social Study</td>
                                    <td>Social</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <img class="eye-img-in-table" src="images/Dashboard/eye.png" alt="edit">

                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
                                                <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td class="purple-td">AI</td>
                                    <td>IT</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$158</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <img class="eye-img-in-table" src="images/Dashboard/eye.png" alt="edit">

                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>-+
                                                <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td class="purple-td">Lorem ipsum</td>
                                    <td>Lorem</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$555</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <img class="eye-img-in-table" src="images/Dashboard/eye.png" alt="edit">

                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
                                                <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td class="purple-td">Data Science</td>
                                    <td>Science</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <img class="eye-img-in-table" src="images/Dashboard/eye.png" alt="edit">

                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
                                                <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td class="purple-td">Accounts</td>
                                    <td>Commerce</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <img class="eye-img-in-table" src="images/Dashboard/eye.png" alt="edit">

                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
                                                <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td class="purple-td">Social Study</td>
                                    <td>Social</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <img class="eye-img-in-table" src="images/Dashboard/eye.png" alt="edit">

                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
                                                <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td class="purple-td">AI</td>
                                    <td>IT</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$250</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <img class="eye-img-in-table" src="images/Dashboard/eye.png" alt="edit">

                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
                                                <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>10</td>
                                    <td class="purple-td">Lorem ipsum</td>
                                    <td>Lorem</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$115</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <img class="eye-img-in-table" src="images/Dashboard/eye.png" alt="edit">

                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Download Note</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Add Reviews / Feedback</a>
                                                <a class="dropdown-item" href="#">Report as Inappropriate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="" aria-label="Previous">
                            <img src="images/Pagination/left-arrow.png" alt="">
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="" aria-label="Next">
                            <img style="color: white;" src="images/Pagination/right-arrow.png" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- pagination -->
        </div>
    </div>
    <!-- My-downloads  part ends-->

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