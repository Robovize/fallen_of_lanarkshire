<?php
session_start();
ob_start();

/* checking if admin is logged in. If not, error login page is diplayed */
if (!isset ($_SESSION['nickname']))
{
    header('location: login_error.php');
}
ob_end_flush();
?>



<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400i%2C700%2C700i%7CRoboto+Mono%3A400%2C700&#038;display=swap&#038;ver=5.0.9">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Fallen of Lanarkshire</title>
</head>








<main id="userArea">






<?php include "inc_header_admin.php"; ?>












    <section class="admin_dashboard">
        <h1>Records Administration</h1>


        <div class="admin_wrapper">
        <a href="item_add.php"><div class="admin_item" id="add_record">Add</div></a>
        <a href="item_list.php"><div class="admin_item" id="update_record">Update and Delete</div></a>

        <!--
        3rd button to delete records. Currently this function is combined with update function as its more convenient.
        <a href="item_delete.php"><div class="admin_item" id="delete_record">Delete</div></a>
        -->
        </div>


    </section>









</main>
</body>

</html>