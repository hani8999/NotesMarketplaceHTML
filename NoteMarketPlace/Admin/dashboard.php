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
                            <li class="active">
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
                            <li class="active">
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
    <!-- Dashboard content-->

    <div id="dashboard">
        <!-- Dashboard box-->
        <div class="content-box-lg">
            <div class="container">
                <div class="row no-gutters all-notes">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                        <p class="dashboard-heading">Dashboard</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row dashboard-content">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="number-of-notes dashboard-box">
                            <p class="dashboard-single-details text-center">20</p>
                            <p class="dashboard-detail-heading text-center">Numbers of Notes in Review for Publish </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="number-of-download dashboard-box">
                            <p class="dashboard-single-details text-center">103</p>
                            <p class="dashboard-detail-heading text-center">Number of New Notes Downloaded (Last 7 Days)</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="number-of-registration dashboard-box">
                            <p class="dashboard-single-details text-center">223</p>
                            <p class="dashboard-detail-heading text-center">Number of New Registration (Last 7 Days)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard box End -->

        <!-- Progress Notes Box-->

        <div class="content-box-lg">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-left box-heading-wrapper">
                        <p class="progress-heading">Published Notes</p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                            <div class="form-group has-search">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" class="form-control search-bar" placeholder="Search">
                            </div>
                            <button class="btn btn-general btn-purple progress-btn">Search</button>
                            <select class="form-control options-arrow-down input-light-color month-box">
                                <option selected disabled>Select Month</option>
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="manage-type-table general-table-responsive">
                    <div class="table-responsive-xl">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Sr no.</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Attachment Size</th>
                                    <th scope="col">Sell type</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Publisher</th>
                                    <th scope="col">Published date</th>
                                    <th scope="col" class="text-center">Number of<br>downloads</th>
                                    <th scope="col" width="80px"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td class="purple-td">Data Science</td>
                                    <td>Science</td>
                                    <td class="text-center">10 KB</td>
                                    <td class="text-center">Paid</td>
                                    <td>$0</td>
                                    <td>Pritesh Panchal</td>
                                    <td>09-10-2020, 10:10</td>
                                    <td class="purple-td text-center">10</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="downloaded-notes.php">Download Note</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td class="purple-td">Accounts</td>
                                    <td>Commerce</td>
                                    <td class="text-center">23 MB</td>
                                    <td class="text-center">Free</td>
                                    <td>$22</td>
                                    <td>Rahil Shah</td>
                                    <td>10-10-2020, 12:30</td>
                                    <td class="purple-td text-center">21</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="downloaded-notes.php">Download Note</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td class="purple-td">Social Study</td>
                                    <td>Social</td>
                                    <td class="text-center">3 MB</td>
                                    <td class="text-center">Free</td>
                                    <td>$56</td>
                                    <td>Anish Patel</td>
                                    <td>11-10-2020, 01:00</td>
                                    <td class="purple-td text-center">13</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="downloaded-notes.php">Download Note</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td class="purple-td">AI</td>
                                    <td>IT</td>
                                    <td class="text-center">1 MB</td>
                                    <td class="text-center">Paid</td>
                                    <td>$0</td>
                                    <td>Vijay Vaishnav</td>
                                    <td>12-10-2020, 10:10</td>
                                    <td class="purple-td text-center">34</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="downloaded-notes.php">Download Note</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td class="purple-td">Lorem ipsum</td>
                                    <td>Lorem</td>
                                    <td class="text-center">105 KB</td>
                                    <td class="text-center">Free</td>
                                    <td>$90</td>
                                    <td>Mehul Patel</td>
                                    <td>13-10-2020, 11:25</td>
                                    <td class="purple-td text-center">9</td>
                                    <td class="text-center visible-overflow-for-dropdown">
                                        <div class="dropdown dropdown-dots-table">
                                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="dots-in-table" src="images/Dashboard/dots.png" alt="edit">
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="downloaded-notes.php">Download Note</a>
                                                <a class="dropdown-item" href="#">View More Details</a>
                                                <a class="dropdown-item" href="#">Unpublish</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- Progress Notes Box End-->
        <!-- pagination -->
        <nav aria-label="Page navigation example">
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


        <!-- Footer-->
        <?php include 'footer.php'; ?>
        <!-- Footer End-->
    </div>

    <!-- Dashboard content End-->


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