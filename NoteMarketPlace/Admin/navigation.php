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
                             <div class="logged-in-user-photo">
                                 <div class="dropdown">
                                     <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <img src="images/Dashboard/user-img.png" alt="User Photo" class="rounded-circle">
                                     </a>

                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                         <a class="dropdown-item" href="my-profile.php">Update Profile</a>
                                         <a class="dropdown-item" href="change-password.php">Change Password</a>
                                         <a class="dropdown-item logout-btn-dropdown" href="login.php">Logout</a>
                                     </div>
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