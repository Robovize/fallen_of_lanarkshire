<?php
include "conn.php";

session_start();



/* checking if admin is logged in. If not, error login page is diplayed */
if (!isset ($_SESSION['nickname']))
{
    header('location: login_error.php');
}
ob_end_flush();


function redirect_to($location = NULL)
{
    if ($location != NULL)
    {
        header("Location: {$location}");
        exit;
    }
}


/* getting data from item_add.php form */
if (isset($_POST['add']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $regiment = $_POST['regiment'];
    $rank = $_POST['rank'];
    $service_number = $_POST['service_number'];
    $war = $_POST['war'];
    $died = $_POST['died'];
    $town = $_POST['town'];
    $memorial_location = $_POST['memorial_location'];
    $code1 = $_POST['code1'];
    $code2 = $_POST['code2'];
    $code3 = $_POST['code3'];
    $code4 = $_POST['code4'];
    $code5 = $_POST['code5'];
    $code6 = $_POST['code6'];
    $code7 = $_POST['code7'];
    $code8 = $_POST['code8'];


/* inserting data from item_add.php to the database */
    $query = "INSERT INTO people_table (first_name, last_name, regiment, rank, service_number, war, died, town, memorial_location, code1, code2, code3, code4, code5, code6, code7, code8)
    VALUES ('$first_name', '$last_name', '$regiment', '$rank', '$service_number', '$war', '$died', '$town', '$memorial_location', '$code1', '$code2', '$code3', '$code4', '$code5', '$code6', '$code7', '$code8')";
                
    $result = mysqli_query($conn, $query);
    
    redirect_to('item_list.php');

/* error handling */
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }















    
}


?>