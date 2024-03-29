<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CDM | Admin Login</title>
    <!-- loader-->
    <link href="../assets/admin-assets/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/admin-assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="../assets/admin-assets/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="../assets/admin-assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="../assets/admin-assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="../assets/admin-assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="../assets/admin-assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme2">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <div class="loader-wrapper">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="card card-authentication1 mx-auto my-5">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="../assets/admin-assets/images/logocdm2.png" alt="logo icon">
                    </div>
                    <div class="card-title text-uppercase text-center py-3">Admin Signin Form</div>

                    <form action="../includes/signin_inc.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputUsername" class="sr-only">Username</label>
                            <div class="position-relative has-icon-right">
                                <input type="text" id="exampleInputUsername" name="username"
                                    class="form-control input-shadow" placeholder="Enter Username">
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword" class="sr-only">Password</label>
                            <div class="position-relative has-icon-right">
                                <input type="password" id="exampleInputPassword" name="password"
                                    class="form-control input-shadow" placeholder="Enter Password">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername" class="sr-only">Reset Token</label>
                            <div class="position-relative has-icon-right">
                                <input type="text" id="exampleInputUsername" name="reset"
                                    class="form-control input-shadow" placeholder="Enter reset Token">
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername" class="sr-only">Date Created</label>
                            <div class="position-relative has-icon-right">
                                <input type="date" id="exampleInputUsername" name="datat"
                                    class="form-control input-shadow" placeholder="Enter date created">
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="login" class="btn btn-light btn-block">Signin</button>

                        <?php if (isset($_SESSION['error'])): ?>
                            <div class="text-center py-3 color-red">
                                <?= $_SESSION['error'] ?>
                            </div>
                        <?php endif;
                        unset($_SESSION['error']); ?>


                    </form>
                </div>
            </div>
        </div>

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->


    </div><!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/admin-assets/js/jquery.min.js"></script>
    <script src="../assets/admin-assets/js/popper.min.js"></script>
    <script src="../assets/admin-assets/js/bootstrap.min.js"></script>

    <!-- sidebar-menu js -->
    <script src="../assets/admin-assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="../assets/admin-assets/js/app-script.js"></script>

</body>

</html>