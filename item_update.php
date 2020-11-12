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

<body>






    <?php 
    include "inc_header_admin.php";


$person_id = ( isset($_GET["person_id"]) && !empty($_GET["person_id"]) ? $_GET["person_id"] : "");
$query = "SELECT * FROM people_table WHERE person_id= $person_id";


$result = mysqli_query($conn, $query);


while ($row = mysqli_fetch_array($result)){
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $regiment = $row['regiment'];
    $service_number = $row['service_number'];
    $rank = $row['rank'];
    $war = $row['war'];
    $died = $row['died'];
    $town = $row['town'];
    $memorial_location = $row['memorial_location'];
    $code1 = $row['code1'];
    $code2 = $row['code2'];
    $code3 = $row['code3'];
    $code4 = $row['code4'];
    $code5 = $row['code5'];
    $code6 = $row['code6'];
    $code7 = $row['code7'];
    $code8 = $row['code8'];
}
    ?>





   
        <main id="item_update">
                <form action="item_update_script.php" method="post" class="update_form">

                <div class="update_form__field">
                <label for="person_id">ID</label>
                <input type="text" name="person_id" value="<?php echo "$person_id";?>" readonly>
                </div>

                    <div class="update_form__field">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" value="<?php echo "$first_name";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" value="<?php echo "$last_name";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="regiment">Regiment</label>
                        <input type="text" id="regiment" name="regiment" value="<?php echo "$regiment";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="service_number">Service Number</label>
                        <input type="text" id="service_number" name="service_number" value="<?php echo "$service_number";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="rank">Rank</label>
                        <input type="text" id="rank" name="rank" value="<?php echo "$rank";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="war">War</label>
                        <input type="text" id="war" name="war" value="<?php echo "$war";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="died">Died</label>
                        <input type="text" id="died" name="died" value="<?php echo "$died";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="town">Town</label>
                        <input type="text" id="town" name="town" value="<?php echo "$town";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="memorial_location">Memorial Location</label>
                        <input type="text" id="memorial_location" name="memorial_location" value="<?php echo "$memorial_location";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="code1">Code 1</label>
                        <input type="text" id="code1" name="code1" value="<?php echo "$code1";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="code2">Code 2</label>
                        <input type="text" id="code2" name="code2" value="<?php echo "$code2";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="code3">Code 3</label>
                        <input type="text" id="code3" name="code3" value="<?php echo "$code3";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="code4">Code 4</label>
                        <input type="text" id="code4" name="code4" value="<?php echo "$code4";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="code5">Code 5</label>
                        <input type="text" id="code5" name="code5" value="<?php echo "$code5";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="code6">Code 6</label>
                        <input type="text" id="code6" name="code6" value="<?php echo "$code6";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="code7">Code 7</label>
                        <input type="text" id="code7" name="code7" value="<?php echo "$code7";?>">
                    </div>

                    <div class="update_form__field">
                        <label for="code8">Code 8</label>
                        <input type="text" id="code8" name="code8" value="<?php echo "$code8";?>">
                    </div>

                    <div class="update_form__submit">
                    <input type="submit" name="delete" value="Delete Item" class="deleteButton">
                    <input type="submit" name="update" value="Update Item" class="submitButton">
                    <div>
                </form>

        </main>




    </body>

    </html>



    <?php
    mysqli_close($conn);
    ?>