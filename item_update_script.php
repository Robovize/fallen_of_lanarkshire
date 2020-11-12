<?php
session_start();

include "conn.php";

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

$query0 = "SELECT * FROM people_table";
$result0 = mysqli_query($conn, $query0);
$row0 = mysqli_fetch_array($result0);




if (isset($_POST['update'])){
    $person_id=mysqli_real_escape_string($conn, $_POST['person_id']);
    $first_name=mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $regiment = mysqli_real_escape_string($conn, $_POST['regiment']);
    $service_number = mysqli_real_escape_string($conn, $_POST['service_number']);
    $war = mysqli_real_escape_string($conn, $_POST['war']);
    $died = mysqli_real_escape_string($conn, $_POST['died']);
    $town = mysqli_real_escape_string($conn, $_POST['town']);
    $rank = mysqli_real_escape_string($conn, $_POST['rank']);
    $memorial_location = mysqli_real_escape_string($conn, $_POST['memorial_location']);
    $code1 = mysqli_real_escape_string($conn, $_POST['code1']);
    $code2 = mysqli_real_escape_string($conn, $_POST['code2']);
    $code3 = mysqli_real_escape_string($conn, $_POST['code3']);
    $code4 = mysqli_real_escape_string($conn, $_POST['code4']);
    $code5 = mysqli_real_escape_string($conn, $_POST['code5']);
    $code6 = mysqli_real_escape_string($conn, $_POST['code6']);
    $code7 = mysqli_real_escape_string($conn, $_POST['code7']);
    $code8 = mysqli_real_escape_string($conn, $_POST['code8']);
    

if (!$result0) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
    $query = "UPDATE people_table SET
                first_name = '{$first_name}',
                last_name = '{$last_name}',
                regiment = '{$regiment}',
                service_number = '{$service_number}',
                rank = '{$rank}',
                war = '{$war}',
                died = '{$died}',
                town = '{$town}',
                memorial_location = '{$memorial_location}',
                code1 = '{$code1}',
                code2 = '{$code2}',
                code3 = '{$code3}',
                code4 = '{$code4}',
                code5 = '{$code5}',
                code6 = '{$code6}',
                code7 = '{$code7}',
                code8 = '{$code8}' WHERE
                person_id='{$person_id}'";

    $result = mysqli_query($conn, $query);

    redirect_to('item_list.php');


    
}
else if (isset($_POST['delete']))
{
    $person_id = $_POST['person_id'];
    $query = "DELETE FROM people_table WHERE person_id = '{$person_id}' LIMIT 1";

    $result = mysqli_query($conn, $query);
    redirect_to('item_list.php');
}
?>