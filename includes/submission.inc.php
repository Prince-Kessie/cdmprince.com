<?php
include_once 'conn.inc.php';

if (isset($_POST['login'])) {
    # code...
    loginFunction($conn);
}

function loginFunction($conn)
{
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $password = $_POST['password'];

        $sql_query = mysqli_query($conn, "SELECT * FROM adminuser WHERE username = '$user' AND password='$password'");
        if ($sql_query->num_rows > 0) {
            # code...
            $_SESSION['user'] = $user;
            header('location: ../db-dashboard');
        } else {

            session_start();
            $_SESSION['error'] = 'Wrong Credentials';
            header('location: ../db-dashboard/login/');

        }

    } else {
        echo "error here";
    }
}
