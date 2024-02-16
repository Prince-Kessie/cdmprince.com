<?php $url = 'http://localhost/cdm-tem/'; ?>

<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'organization-db';

// Server is localhost with
// port number 3306
$servername = 'localhost';
$mysqli = new mysqli($servername, $user, $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM client_reply ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CDM | Dashboard</title>
    <!-- loader-->
    <link href="../assets/admin-assets/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/admin-assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="../assets/admin-assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="../assets/admin-assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="../assets/admin-assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="../assets/admin-assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="../assets/admin-assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="../assets/admin-assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="../assets/admin-assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="../assets/admin-assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="../assets/admin-assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">CDM Admin Dashboard</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="<?= $url ?>#">
                        <i class="fa fa-dribbble"></i> <span>CDM Website</span>
                    </a>
                </li>
                <li style="padding-left: 19px;">

                    <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>

                </li>

                <li>
                    <a href="<?= $url ?>db-dashboard/index.php">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>CDM Leadership</span>
                        <small class="badge float-right badge-light">View</small>
                    </a>
                </li>
                <li>
                    <a href="<?= $url ?>db-dashboard/cdm-members_table.php">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>CDM Membership</span>
                        <small class="badge float-right badge-light">View</small>
                    </a>
                </li>
                <li>
                    <a href="<?= $url ?>db-dashboard/clients_contact_table.php">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Clients Contact</span>
                        <small class="badge float-right badge-light">View</small>
                    </a>
                </li>

                <li>
                    <a href="<?= $url ?>db-dashboard/client_subscribe_table.php">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Clients Subscribe</span>
                        <small class="badge float-right badge-light">View</small>
                    </a>
                </li>
                <li>
                    <a href="<?= $url ?>db-dashboard/client_email_footer_table.php">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Clients Email</span>
                        <small class="badge float-right badge-light">View</small>
                    </a>
                </li>
                <li>
                    <a href="<?= $url ?>db-dashboard/clients_reply_table.php">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Clients Reply</span>
                        <small class="badge float-right badge-light">View</small>
                    </a>
                </li>
                <li>
                    <a href="member-delete.php">
                        <i class="fa fa-trash"></i> <span>Remove CDM Member</span>
                    </a>
                </li>
                <li>
                    <a href="leader-delete.php">
                        <i class="fa fa-trash"></i> <span>Remove CDM Leader</span>
                    </a>
                </li>
            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="../assets/admin-assets/images/chin.jpg"" class="
                                    img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="../assets/admin-assets/images/chin.jpg"" alt=" user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Prince E. Kessie</h6>
                                            <p class="user-subtitle">kessieprince9@gmail.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i><a
                                    href="\cdm-tem\db-dashboard\admin_login.php"> Logout</a></li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->



                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Clients Reply Table</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="bg-info bg-gradient">
                                            <th scope="col">Id</th>
                                            <th scope="col">Fullname</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // LOOP TILL END OF DATA
                                        while ($rows = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <!-- FETCHING DATA FROM EACH
                                                             ROW OF EVERY COLUMN -->
                                                <td>
                                                    <?php echo $rows['id']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $rows['fullname']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $rows['email']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $rows['contact']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $rows['message']; ?>
                                                </td>

                                            </tr>
                                            <?php
                                        }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->

            <!--End Dashboard Content-->

            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->

        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © 2024 CDM Admin
            </div>
        </div>
    </footer>
    <!--End footer-->

    <!--start color switcher-->
    <div class="right-sidebar">
        <div class="switcher-icon">
            <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
        </div>
        <div class="right-sidebar-content">

            <p class="mb-0">Gaussion Texture</p>
            <hr>

            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>

            <p class="mb-0">Gradient Background</p>
            <hr>

            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
            </ul>

        </div>
    </div>
    <!--end color switcher-->

    </div><!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/admin-assets/js/jquery.min.js"></script>
    <script src="../assets/admin-assets/js/popper.min.js"></script>
    <script src="../assets/admin-assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="../assets/admin-assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="../assets/admin-assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <script src="../assets/admin-assets/js/jquery.loading-indicator.js"></script>
    <!-- Custom scripts -->
    <script src="../assets/admin-assets/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="../assets/admin-assets/plugins/Chart.js/Chart.min.js"></script>

    <!-- Index js -->
    <script src="../assets/admin-assets/js/index.js"></script>


</body>

</html>