<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "organization-db";

//create connection
$con = new mysqli($servername, $username, $password, $database);

$id = "";
$fullname = "";
$password = "";
$reset_token = "";
$date_created = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET METHOD: Shows the data of the client

    if (!isset($_GET["id"])) {
        header("location:\cdm-tem\db-dashboard\admin-signin_table.php");
        exit;
    }

    $id = $_GET["id"];

    //read data/row of client from the database
    $sql = "SELECT * FROM adminuser where id=$id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:\cdm-tem\db-dashboard\admin-signin_table.php");
        exit;
    }

    $fullname = $row["username"];
    $password = $row["password"];
    $reset_token = $row["reset_token"];
    $date_created = $row["date_created"];

} else {
    //POST METHOD: Shows the data of the client
    $id = $_POST["id"];
    $fullname = $_POST["name"];
    $password = $_POST["password"];
    $reset_token = $_POST["reset_token"];
    $date_created = $_POST["date"];

    do {
        if (empty($id) || empty($fullname) || empty($password) || empty($reset_token) || empty($date_created)) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE adminuser SET username ='$fullname', password = '$password', reset_token = '$reset_token', 
        date_created = '$date_created' WHERE id = $id";

        $result = $con->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $con->error;
            break;
        }

        $successMessage = "Admin added successfully";

        header("location:\cdm-tem\db-dashboard\admin-signin_table.php");
        exit;


    } while (true);

}
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

    <style>
        .form-group {
            margin: 6px 120px;
        }

        .btn {
            display: inline-block;
        }

        .cancel {
            display: inline-block;
            margin-left: 0px;

        }

        .canc {
            width: 100px;
            background-color: white;
            color: black;
        }
    </style>

</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">


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

        <!--Create form-->
        <div class="container" style="margin-top: 90px;">

            <h2 class="text-center">Add Admin</h2>

            <?php
            if (!empty($errorMessage)) {
                echo "
                       <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='buttoon' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                    ";
            }
            ?>

            <form method="POST" style="padding-bottom: 70px">

                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Enter fullname" name="name"
                        value="<?php echo $fullname; ?>" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="Enter password" name="password"
                        value="<?php echo $password; ?>">
                </div>
                <div class="form-group">
                    <label>Reset Token</label>
                    <input type="text" class="form-control" placeholder="Enter Reset Token" name="reset_token"
                        value="<?php echo $reset_token; ?>" required>
                </div>
                <div class="form-group">
                    <label>Date Created</label>
                    <input type="text" class="form-control" placeholder="Enter Date" name="date"
                        value="<?php echo $date_created; ?>" required>
                </div>

                <?php
                if (!empty($successMessage)) {
                    echo "
                    <div class='offset-sm-3 col-6' h-50 >
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='buttoon' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                    </div>
                    ";
                }
                ?>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary w-25" name="submit">Submit</button>
                    <div class="col-sm-3 d-grid cancel">
                        <a class="btn btn-outline-primary canc " role="button"
                            href="/cdm-tem/db-dashboard/admin-signin_table.php">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
        <!-- End Create form-->

    </div><!--End content-wrapper-->


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
    <script src="../assets/admin-assets/js/bootstrap.bundle.min.js"></script>

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