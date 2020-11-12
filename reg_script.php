<?php

include "conn.php";

session_start();

$user_id = '';
$nickname = '';
$email = '';
$password = '';




if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    $nickname = mysqli_real_escape_string($conn, $_POST["nickname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);


    $hash = password_hash($password, PASSWORD_DEFAULT );


    $sql="INSERT INTO user_table (user_id, nickname, email, password) VALUES ('$user_id', '$nickname', '$email', '$hash')";


    $query = mysqli_query($conn, $sql);

    if ($query)
    {
        echo 'New user added';
        $_SESSION['registered'] = 'YES';
        $_SESSION['user'] = htmlspecialchars($user_id);
        header('Location: index.php');
    }else{
        echo 'Error: ' . $sql . "<br>" . mysqli_error($conn);
    }
}

if (!$query) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}






?>