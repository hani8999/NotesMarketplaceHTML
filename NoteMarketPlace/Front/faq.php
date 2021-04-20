<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body data-spy="scroll" data-target=".navbar" data-offset="65">

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
                            <li class="active">
                                <a href="faq.php">FAQ</a>
                            </li>
                            <li>
                                <a href="Contact-us.php">Contact Us</a>
                            </li>
                            <li>
                                <a class="btn btn-general btn-purple" href="login.php" title="Download" role="button">Login</a>
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
                            <li class="active">
                                <a href="faq.php">FAQ</a>
                            </li>
                            <li>
                                <a href="Contact-us.php">Contact Us</a>
                            </li>
                            <li>
                                <a class="btn btn-general btn-purple" href="login.php" title="Download" role="button">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </header>
    </div>
    <!-- Header ends -->


    <!-- background-->
    <div id="faq">
        <!-- back img-->
        <div class="top-heading">
            <p class="text-center">Frequently Asked Questions</p>
        </div>
        <!-- back img-->

        <!-- General-box -->
        <div class="general-box">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <p class="faq1-heading">General Questions</p>
                    </div>
                </div>
                <div class="container">

                    <div class="row">
                        <div class="accordion faq1" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <p>What is Notes Marketplace?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-1" aria-expanded="true" aria-controls="faq-1">
                                            <img src="images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-1" aria-expanded="true" aria-controls="faq-1">
                                            <img src="images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptatem officiis perferendis omnis perspiciatis pariatur. Delectus voluptatum dolorem qui aut, magnam, eveniet, unde possimus reprehenderit laudantium nisi tempora! Id, neque.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="accordion faq2" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <p>What do the University say?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-2" aria-expanded="true" aria-controls="faq-2">
                                            <img src="images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-2" aria-expanded="true" aria-controls="faq-2">
                                            <img src="images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, corrupti doloremque deserunt odit quos quam nisi error numquam. Provident illum quibusdam praesentium doloribus. Sit quo necessitatibus repellat velit quibusdam unde?
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="accordion faq3" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <p>Is this legal?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-3" aria-expanded="true" aria-controls="faq-3">
                                            <img src="images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-3" aria-expanded="true" aria-controls="faq-3">
                                            <img src="images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et itaque maiores reiciendis enim tempora, nostrum fuga! Sunt veniam unde, ipsa soluta consequatur maiores quibusdam illum eum quo ab. Nisi, fuga.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- General-box -->

        <!-- General-box -->
        <div class="general-box">
            <div class="content-box-lg">

                <div class="container">
                    <div class="row">
                        <p class="faq-heading">Uploaders</p>
                    </div>
                </div>

                <div class="container">

                    <div class="row">
                        <div class="accordion faq4" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <p>What can't I sell?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-4" aria-expanded="true" aria-controls="faq-4">
                                            <img src="images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-4" aria-expanded="true" aria-controls="faq-4">
                                            <img src="images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae labore delectus molestiae dicta necessitatibus itaque debitis consequuntur mollitia ut quibusdam accusantium consectetur laboriosam officiis molestias voluptatum ipsum, possimus accusamus sed.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="accordion faq5" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <p>What Notes can I sell?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-5" aria-expanded="true" aria-controls="faq-5">
                                            <img src="images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-5" aria-expanded="true" aria-controls="faq-5">
                                            <img src="images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo veniam cumque expedita sed corrupti, adipisci officiis eum nisi suscipit minus recusandae iure aperiam quibusdam exercitationem tenetur doloremque quasi provident at?
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- General-box -->

        <!-- General-box -->
        <div class="general-box">
            <div class="content-box-lg">

                <div class="container">
                    <div class="row">
                        <p class="faq-heading">Downloaders</p>
                    </div>
                </div>

                <div class="container">

                    <div class="row">
                        <div class="accordion faq6" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <p>How do I buy notes?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-6" aria-expanded="true" aria-controls="faq-6">
                                            <img src="images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-6" aria-expanded="true" aria-controls="faq-6">
                                            <img src="images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-6" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia deleniti, possimus numquam reprehenderit recusandae, nihil odit aspernatur et excepturi, nesciunt hic quaerat ad ipsa culpa facere ut veritatis itaque sapiente!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="accordion faq7" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <p>Can I edit the notes I purchased?</p>
                                    <div class="faq-plus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-7" aria-expanded="true" aria-controls="faq-7">
                                            <img src="images/FAQ/add.png" alt="">
                                        </button>
                                    </div>
                                    <div class="faq-minus">
                                        <button class="btn" type="button" data-toggle="collapse" data-target="#faq-7" aria-expanded="true" aria-controls="faq-7">
                                            <img src="images/FAQ/minus.png" alt="">
                                        </button>
                                    </div>
                                </div>

                                <div id="faq-7" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, praesentium ratione voluptas hic eos mollitia alias, dolores dolor quibusdam voluptatibus ullam aspernatur doloribus commodi explicabo at earum porro? Incidunt, placeat!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- General-box -->


        <!-- Footer-->
        <?php include 'footer.php'; ?>
        <!-- Footer End-->

    </div>
    <!-- Footer End-->


    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Popper Js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>

</body>

</html>