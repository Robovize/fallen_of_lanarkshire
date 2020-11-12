<?php
include "conn.php";

session_start();
ob_start();


/* checking if admin is logged in. If not, error login page is diplayed */
if (!isset ($_SESSION['nickname']))
{
    header('location: login_error.php');
}
ob_end_flush();


if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $nickname = mysqli_real_escape_string($conn, $_POST['nickname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM user_table WHERE nickname='$nickname'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);

    $dbPassword = $row['password'];

    if (password_verify($password, $dbPassword))
    {
       $_SESSION['nickname'] = $row['nickname'];
       $_SESSION['user_id'] = $row['user_id'];
        header("location: login_success.php");
    }else{
        header("location: login_error.php");
    }
}

ob_end_flush();







?>