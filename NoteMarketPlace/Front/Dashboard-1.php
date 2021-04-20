<?php
include "db.php";

if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
}

$limit = 5;
$start = ($page * $limit) - $limit;

if (isset($_POST['search'])) {

    $search_result = $_POST['search_result'];

    $query = "SELECT notes.ID,notes.CreatedDate,notes.Note_Title, category.Category_name,referencedata.Value FROM notes LEFT JOIN  category ON notes.Category=category.ID LEFT JOIN referencedata ON notes.Status=referencedata.ID WHERE notes.Note_Title LIKE '%$search_result%' OR notes.Category LIKE '%$search_result%' OR notes.Status LIKE '%$search_result%' AND notes.IsActive=1 AND referencedata.ID IN (6,7,8) ORDER BY notes.CreatedDate DESC LIMIT $start, $limit";
    $result = mysqli_query($conn, $query);

    $result_num = mysqli_query($conn, "SELECT COUNT(ID) FROM notes WHERE Note_Title LIKE '%$search_result%' AND notes.Category LIKE '%$search_result%' AND notes.Status LIKE '%$search_result%' AND notes.IsActive=1 AND Status IN (6,7,8)");
    $row = mysqli_fetch_row($result_num);

    $total_records = $row[0];
    $total_page = ceil($total_records / $limit);
} else {
    $query = "SELECT notes.ID,notes.CreatedDate,notes.Note_Title, category.Category_name,referencedata.Value FROM notes LEFT JOIN  category ON notes.Category=category.ID LEFT JOIN referencedata ON notes.Status=referencedata.ID WHERE  notes.IsActive=1 AND referencedata.ID IN (6,7,8) ORDER BY notes.CreatedDate DESC LIMIT $start, $limit";
    $result = mysqli_query($conn, $query);
    $result_num = mysqli_query($conn, "SELECT COUNT(ID) FROM notes WHERE notes.IsActive=1 AND Status IN (6,7,8)");
    $row = mysqli_fetch_row($result_num);
    $total_records = $row[0];
    $total_page = ceil($total_records / $limit);
}
?>
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
                            <li class="active">
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

                <!-- Mobile Menu -->
                <div id="mobile-nav">
                    <img class="logo-in-mobile-menu" src="images/Logo/dark-logo.png" alt="Notes Logo">
                    <!-- Mobile Menu Close Button -->
                    <span id="mobile-nav-close-btn">&times;</span>

                    <div id="mobile-nav-content">
                        <ul class="menu-navigation">
                            <li>
                                <a href="search-notes.php">Search Notes</a>
                            </li>
                            <li class="active">
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
                <div class="row no-gutters total-notes">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-left">
                        <p class="dashboard-heading">Dashboard</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                        <button class="btn btn-general btn-purple add-note-btn" onclick="window.location.href='add-notes.php'">Add Note</button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row no-gutters dashboard-left">

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="my-earning-heading dashboard-box">
                                    <img src="images/Dashboard/earning-icon.svg" alt="">
                                    <p class="box-heading text-center">My Earning</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="numbers-of-notes dashboard-box">
                                    <p class="dashboard-single-detail text-center">100</p>
                                    <p class="dashboard-detail-heading text-center">Numbers of Notes Sold</p>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="money-earned dashboard-box">
                                    <p class="dashboard-single-detail text-center">$10,00,000</p>
                                    <p class="dashboard-detail-heading text-center">Money Earned</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 dashboard-right">
                        <div class="row no-gutters ">

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="my-download dashboard-box">
                                    <p class="dashboard-single-detail text-center">38</p>
                                    <p class="dashboard-detail-heading text-center">My Downloads</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="rejected-notes dashboard-box">
                                    <p class="dashboard-single-detail text-center">12</p>
                                    <p class="dashboard-detail-heading text-center">My Rejected Notes</p>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="buyer-request dashboard-box">
                                    <p class="dashboard-single-detail text-center">102</p>
                                    <p class="dashboard-detail-heading text-center">Buyer Request</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dashboard box End -->

        <!-- Progress Notes Box-->

        <div class="content-box-lg">
            <div class="container">
                <form action="Dashboard-1.php" method="POST">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
                            <p class="progress-heading">In Progress Notes</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                                <div class="form-group search-in">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control search-bar" name="search_result" placeholder="Search">
                                </div>
                                <button name="search" class="btn btn-general btn-purple progress-btn">Search</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

            <div class="container">
                <div class="progress-notes-table general-table-responsive">
                    <div class="table-responsive-xl">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Added Date</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $date = $row['CreatedDate'];
                                    $title = $row['Note_Title'];
                                    $category_name = $row['Category_name'];
                                    $refe_data = $row['Value'];
                                    $noteid = $row['ID'];
                                    echo "<tr>
                                    <td>$date</td>
                                    <td>$title</td>
                                    <td>$category_name</td>
                                    <td>$refe_data</td>";
                                    if ($refe_data == 'Draft') {
                                        echo " <td> 
                                        <a href='delete_draft.php?id=$noteid'>
                                        <img src='images/Dashboard/delete.png' onclick='Delete()'>   
                                        <a href='add-notes.php?id=$noteid'>
                                        <img src='images/Dashboard/edit.png' title='Click to Edit' alt='edit'></a>
                                    </td>
                                </tr>";
                                    } else {
                                        echo " <td>
                                   <a href='note-details.php'>
                                        <img src='images/Dashboard/eye.png' title='Click to View' alt='View'>
                                        </a>";
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Progress Notes Box End-->

        <!-- pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php
                echo "<li class='page-item'><a class='page-link' href='Dashboard-1.php?page=" . ($page - 1)
                    . "'> <img src='images/Pagination/left-arrow.png' alt='previous'> </a></li>";
                for ($i = 1; $i <= $total_page; $i++) {
                    if ($i == $page) {
                        echo "<li class='page-item '><a class='page-link' href='Dashboard-1.php?page=$i'>$i</a></li>";
                    } else echo "<li class='page-item'><a class='page-link' href='Dashboard-1.php?page=$i'>$i</a></li>";
                }
                echo "<li class='page-item'><a class='page-link' href='Dashboard-1.php?page=" . ($page + 1)
                    . "'> <img style='color: white;' src='images/Pagination/right-arrow.png' alt='next'> </a></li>";
                ?>
            </ul>
        </nav>
        <!-- pagination -->

        <!-- published note table -->
        <?php

        include "db.php";

        if (isset($_GET["page2"])) {
            $page2  = $_GET["page2"];
        } else {
            $page2 = 1;
        }

        $limit = 5;
        $start = ($page2 * $limit) - $limit;

        if (isset($_POST['published-search'])) {

            $search_publish = $_POST['search-publish'];

            $query = "SELECT notes.PublishedDate,notes.Note_Title, category.Category_name,referencedata.Value,notes.Price FROM notes LEFT JOIN  category ON notes.Category=category.ID LEFT JOIN referencedata ON notes.Is_Paid=referencedata.ID WHERE( notes.Note_Title LIKE '%$search_publish%' OR notes.Category LIKE '%$search_publish%' OR notes.Status LIKE '%$search_publish%' )AND notes.IsActive=1 AND notes.Status=9 ORDER BY notes.PublishedDate DESC LIMIT $start, $limit";
            $result2 = mysqli_query($conn, $query);

            $result_num2 = mysqli_query($conn, "SELECT COUNT(ID) FROM notes WHERE Note_Title LIKE '%$search_publish%' OR notes.Category LIKE '%$search_publish%' OR notes.Status LIKE '%$search_publish%' AND notes.IsActive=1 AND notes.Status=9");
            $row2 = mysqli_fetch_row($result_num2);

            $total_records2 = $row2[0];
            $total_page2 = ceil($total_records2 / $limit);
        } else {
            $query = "SELECT notes.PublishedDate,notes.Note_Title, category.Category_name,referencedata.Value,notes.Price FROM notes LEFT JOIN  category ON notes.Category=category.ID LEFT JOIN referencedata ON notes.Is_Paid=referencedata.ID WHERE  notes.IsActive=1 AND notes.Status=9 ORDER BY notes.PublishedDate DESC LIMIT $start, $limit";
            $result2 = mysqli_query($conn, $query);

            $result_num2 = mysqli_query($conn, "SELECT COUNT(ID) FROM notes WHERE notes.IsActive=1 AND notes.Status=9");
            $row2 = mysqli_fetch_row($result_num2);

            $total_records2 = $row2[0];
            $total_page2 = ceil($total_records2 / $limit);
        }
        ?>

        <!-- published note table -->
        <div class="content-box-lg">
            <div class="container">
                <form actiom="Dashboard-1.php" method="POST">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left box-heading-wrapper">
                            <p class="progress-heading">Published Notes</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="row no-gutters text-right general-search-bar-btn-wrapper">
                                <div class="form-group search-in">
                                    <span class="fa fa-search form-control-feedback"></span>
                                    <input type="text" class="form-control search-bar" name="search-publish" placeholder="Search">
                                </div>
                                <button name="published-search" class="btn btn-general btn-purple progress-btn">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="progress-notes-table general-table-responsive">
                    <div class="table-responsive-xl">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Added date</th>
                                    <th scope="col">title</th>
                                    <th scope="col">category</th>
                                    <th scope="col">sell type</th>
                                    <th scope="col">price</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result2)) {
                                    $date2 = $row['PublishedDate'];
                                    $title2 = $row['Note_Title'];
                                    $category_name2 = $row['Category_name'];
                                    $refe_data2 = $row['Value'];
                                    $sell_price = $row['Price'];
                                    echo "<tr>
                                        <td>$date2</td>
                                        <td>$title2</td>
                                        <td>$category_name2</td>
                                        <td>$refe_data2</td> 
                                        <td>$sell_price</td>
                                        <td> <a href='Notes-details.php'><img src='images/Login/eye.png' title='Click to View' alt='View'></a> </td>
                                         </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- published note table ends-->

        <!-- pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php
                echo "<li class='page-item'><a class='page-link' href='Dashboard-1.php?page=" . ($page2 - 1)
                    . "'><img src='images/Pagination/left-arrow.png' alt='previous'></a></li>";
                for ($i = 1; $i <= $total_page2; $i++) {
                    if ($i == $page2) {
                        echo "<li class='page-item active'><a class='page-link' href='Dashboard-1.php?page=$i'>$i</a></li>";
                    } else echo "<li class='page-item'><a class='page-link' href='Dashboard-1.php?page=$i'>$i</a></li>";
                }
                echo "<li class='page-item'><a class='page-link' href='Dashboard-1.php?page=" . ($page2 + 1)
                    . "'><img style='color: white;' src='images/Pagination/right-arrow.png' alt='next'></a></li>";
                ?>
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