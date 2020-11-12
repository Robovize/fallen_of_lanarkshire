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
    <title>List of Records</title>
</head>

<body>
    <main>


        <?php
        
        
        include "inc_header_admin.php";



$query = "SELECT * FROM people_table LIMIT 1000";
$result = mysqli_query($conn, $query);



    ?>







        <div id="itemList">
            <table>
                <tr class="itemLegend">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Regiment</th>
                    <th>Service Number</th>
                    <th>Rank</th>
                    <th>Memorial Location</th>
                    <th>Code 1</th>
                    <th>Code 2</th>
                    <th>Code 3</th>
                    <th>Code 4</th>
                    <th>Code 5</th>
                    <th>Code 6</th>
                    <th>Code 7</th>
                    <th>Code 8</th>
                    <th>Update</th>
                </tr>
                <?php 
        

    /* create table row for each record for as long as specified in $query */

        while ($row = mysqli_fetch_array($result)){
        $person_id = $row['person_id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $regiment = $row['regiment'];
        $service_number = $row['service_number'];
        $rank = $row['rank'];
        $memorial_location = $row['memorial_location'];
        $code1 = $row['code1'];
        $code2 = $row['code2'];
        $code3 = $row['code3'];
        $code4 = $row['code4'];
        $code5 = $row['code5'];
        $code6 = $row['code6'];
        $code7 = $row['code7'];
        $code8 = $row['code8'];
        

    ?>




                <tr class="item">
                    <td><?php echo $first_name ?></td>
                    <td><?php echo $last_name ?></td>
                    <td><?php echo $regiment ?></td>
                    <td><?php echo $service_number ?></td>
                    <td><?php echo $rank ?></td>
                    <td><?php echo $memorial_location ?></td>
                    <td><?php echo $code1 ?></td>
                    <td><?php echo $code2 ?></td>
                    <td><?php echo $code3 ?></td>
                    <td><?php echo $code4 ?></td>
                    <td><?php echo $code5 ?></td>
                    <td><?php echo $code6 ?></td>
                    <td><?php echo $code7 ?></td>
                    <td><?php echo $code8 ?></td>
                    <td><a href="item_update.php?person_id=<?=$row['person_id']?>">Update</a></td>

                </tr>


                <?php   }
    ?>

            </table>
        </div>
    </main>
</body>

</html>



<?php
    mysqli_close($conn);
    ?>