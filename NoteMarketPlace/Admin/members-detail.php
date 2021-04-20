<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>

    <!-- Header -->
    <div class="white-nav style-nav white-nav-with-mb">
        <header class="site-header">
            <div class="header-wrapper">

                <!-- Mobile Menu Open Button -->
                <span id="mobile-nav-open-btn">&#9776;</span>

                <div class="logo-wrapper">
                    <a href="dashboard.php" title="Site Logo">
                        <img src="images/logo/dark-logo.png" alt="Logo">
                    </a>
                </div>
                <div class="navigation-wrapper">
                    <nav class="main-navigation">
                        <ul class="menu-navigation">
                            <li>
                                <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li>
                                <div class="dropdown notes-btn-dropdown">
                                    <a role="button" id="notes-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notes</a>

                                    <div class="dropdown-menu" aria-labelledby="notes-dropdown-lable">
                                        <a class="dropdown-item" href="notes-under-review.php">Notes Under Review</a>
                                        <a class="dropdown-item" href="published-notes.php">Published Notes</a>
                                        <a class="dropdown-item" href="downloaded-notes.php">Downloaded Notes</a>
                                        <a class="dropdown-item" href="rejected-notes.php">Rejected Notes</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="members.php">Members</a>
                            </li>
                            <li>
                                <div class="dropdown reports-btn-dropdown">
                                    <a role="button" id="reports-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>

                                    <div class="dropdown-menu" aria-labelledby="reports-dropdown-lable">
                                        <a class="dropdown-item" href="spam-reports.php">Spam Reports</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown settings-btn-dropdown">
                                    <a role="button" id="settings-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>

                                    <div class="dropdown-menu" aria-labelledby="settings-dropdown-lable">
                                        <a class="dropdown-item" href="manage-system-configuration.php">Manage System Configuration</a>
                                        <a class="dropdown-item" href="manage-administrator.php">Manage Administrator</a>
                                        <a class="dropdown-item" href="manage-category.php">Manage Category</a>
                                        <a class="dropdown-item" href="manage-type.php">Manage Type</a>
                                        <a class="dropdown-item" href="manage-country.php">Manage Countries</a>
                                    </div>
                                </div>
                            </li>
                            <li class="logged-in-user-photo-li">
                                <div class="dropdown user-picture-dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="logged-in-user-photo">
                                            <img src="images/Dashboard/user-img.png" alt="User Photo" class="rounded-circle">
                                        </div>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="my-profile.php">Update Profile</a>
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

                <!-- Mobile Menu -->
                <div id="mobile-nav">
                    <img class="logo-in-mobile-menu" src="images/logo/dark-logo.png" alt="Notes Logo">
                    <!-- Mobile Menu Close Button -->
                    <span id="mobile-nav-close-btn">&times;</span>

                    <div id="mobile-nav-content">
                        <ul class="nav">
                            <li>
                                <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li>
                                <div class="dropdown notes-btn-dropdown">
                                    <a role="button" id="notes-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notes</a>

                                    <div class="dropdown-menu" aria-labelledby="notes-dropdown-lable">
                                        <a class="dropdown-item" href="notes-under-review.php">Notes Under Review</a>
                                        <a class="dropdown-item" href="published-notes.php">Published Notes</a>
                                        <a class="dropdown-item" href="downloaded-notes.php">Downloaded Notes</a>
                                        <a class="dropdown-item" href="rejected-notes.php">Rejected Notes</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="members.php">Members</a>
                            </li>
                            <li>
                                <div class="dropdown reports-btn-dropdown">
                                    <a role="button" id="reports-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>

                                    <div class="dropdown-menu" aria-labelledby="reports-dropdown-lable">
                                        <a class="dropdown-item" href="spam-reports.php">Spam Reports</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown settings-btn-dropdown">
                                    <a role="button" id="settings-dropdown-lable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>

                                    <div class="dropdown-menu" aria-labelledby="settings-dropdown-lable">
                                        <a class="dropdown-item" href="manage-system-configuration.php">Manage System Configuration</a>
                                        <a class="dropdown-item" href="manage-administrator.php">Manage Administrator</a>
                                        <a class="dropdown-item" href="manage-category.php">Manage Category</a>
                                        <a class="dropdown-item" href="manage-type.php">Manage Type</a>
                                        <a class="dropdown-item" href="manage-country.php">Manage Countries</a>
                                    </div>
                                </div>
                            </li>
                            <li class="logged-in-user-photo-li">
                                <div class="dropdown user-picture-dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="logged-in-user-photo">
                                            <img src="images/Dashboard/user-img.png" alt="User Photo" class="rounded-circle">
                                        </div>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="my-profile.php">Update Profile</a>
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

    <div id="member-details">
        <!-- member details box -->
        <div class="container">
            <div class="content-box-lg">
                <p class="member-heading">Member Details</p>
                <div class="row no-gutters member-details-wrapper">
                    <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">
                        <div class="member-photo">
                            <img src="images/member-details/member.png" alt="">
                        </div>
                    </div>

                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 ">
                        <div class="row no-gutters detail-part">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="member-personal-details-wrapper">
                                    <div class="row no-gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="member-single-detail-left-wrapper">
                                                <p class="member-single-detail-left">First Name: </p>
                                                <p class="member-single-detail-left">Last Name:</p>
                                                <p class="member-single-detail-left">Email:</p>
                                                <p class="member-single-detail-left">DOB:</p>
                                                <p class="member-single-detail-left">Phone Number:</p>
                                                <p class="member-single-detail-left">College/University:</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="member-single-detail-right-wrapper">
                                                <p class="member-single-detail-right">Richard</p>
                                                <p class="member-single-detail-right">Brown</p>
                                                <p class="member-single-detail-right">richbrown77@gmail.com</p>
                                                <p class="member-single-detail-right">13-08-1990</p>
                                                <p class="member-single-detail-right">9856742033</p>
                                                <p class="member-single-detail-right">University of California</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="member-address-wrapper">
                                    <div class="row no-gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="member-single-detail-left-wrapper">
                                                <p class="member-single-detail-left">Address 1:</p>
                                                <p class="member-single-detail-left">Address 2:</p>
                                                <p class="member-single-detail-left">City:</p>
                                                <p class="member-single-detail-left">State:</p>
                                                <p class="member-single-detail-left">Country:</p>
                                                <p class="member-single-detail-left">Zip Code:</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="member-single-detail-right-wrapper">
                                                <p class="member-single-detail-right">144-Diamond Height</p>
                                                <p class="member-single-detail-right">Star Colony</p>
                                                <p class="member-single-detail-right">New Youk</p>
                                                <p class="member-single-detail-right">New York State</p>
                                                <p class="member-single-detail-right">United State</p>
                                                <p class="member-single-detail-right">11004-05</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- member details box -->

        <div class="notes-detail-border-bottom"></div>

        <!-- manage-administrator table -->
        <div class="content-box-lg">

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-left">
                        <p class="member-note-heading">Notes</p>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="member-notes-table general-table-responsive">
                    <div class="table-responsive-xl">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">sr no.</th>
                                    <th scope="col">Note Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" class="text-center">Downloaded Notes</th>
                                    <th scope="col" class="text-center">Total Earnings</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col">Published Date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="purple-td">Software Development</td>
                                    <td>IT</td>
                                    <td>Published</td>
                                    <td class="text-center">22</td>
                                    <td class="text-center">$177</td>
                                    <td>09-10-2020, 10:10</td>
                                    <td>09-10-2020, 10:10</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="downloaded-notes.php">Download Notes</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="purple-td">Computer Basic</td>
                                    <td>Computer</td>
                                    <td>Published</td>
                                    <td class="text-center">4</td>
                                    <td class="text-center">$125</td>
                                    <td>10-10-2020, 11:25</td>
                                    <td>10-10-2020, 11:25</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="downloaded-notes.php">Download Notes</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="purple-td">Human Body</td>
                                    <td>Science</td>
                                    <td>In Review</td>
                                    <td class="text-center">17</td>
                                    <td class="text-center">$978</td>
                                    <td>11-10-2020, 01:00</td>
                                    <td>11-10-2020, 01:00</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="downloaded-notes.php">Download Notes</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="purple-td">World War 2</td>
                                    <td>History</td>
                                    <td>Published</td>
                                    <td class="text-center">28</td>
                                    <td class="text-center">$15254</td>
                                    <td>12-10-2020, 10:10</td>
                                    <td>12-10-2020, 10:10</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="downloaded-notes.php">Download Notes</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="purple-td">Accounting</td>
                                    <td>Account</td>
                                    <td>Published</td>
                                    <td class="text-center">0</td>
                                    <td class="text-center">$69</td>
                                    <td>13-10-2020, 11:25</td>
                                    <td>NA</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="downloaded-notes.php">Download Notes</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

        </div>
        <!-- published note table -->

        <!-- pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="" aria-label="Previous">
                        <img src="images/pagination/left-arrow.png" alt="">
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="" aria-label="Next">
                        <img style="color: white;" src="images/pagination/right-arrow.png" alt="">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- pagination -->


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