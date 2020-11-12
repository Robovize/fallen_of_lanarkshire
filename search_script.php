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
    <main>
        <?php

include "conn.php";
include "inc_header.php"; 


/* checking if admin is logged in. If not, error login page is diplayed */





if(isset($_POST['submit'])){
    
    $first_name=mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $regiment = mysqli_real_escape_string($conn, $_POST['regiment']);
    $service_number = mysqli_real_escape_string($conn, $_POST['service_number']);
    $rank = mysqli_real_escape_string($conn, $_POST['rank']);
    $memorial_location = mysqli_real_escape_string($conn, $_POST['memorial_location']);
    
    
    
    $query="SELECT * FROM people_table WHERE first_name LIKE '%$first_name%' AND  last_name LIKE '%$last_name%' AND REGIMENT LIKE '%$regiment%' AND service_number LIKE '%$service_number%' AND rank LIKE '%$rank%' AND memorial_location LIKE '%$memorial_location%'";
    
    $result=mysqli_query($conn, $query);
    
       $rowcount=mysqli_num_rows($result);
    }

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
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
                </tr>
                <?php 
        
        while ($row = mysqli_fetch_array($result)){
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $regiment = $row['regiment'];
        $service_number = $row['service_number'];
        $rank = $row['rank'];
        $memorial_location = $row['memorial_location'];

    ?>





                <tr class="item">
                    <td><?php echo $first_name ?></td>
                    <td><?php echo $last_name ?></td>
                    <td><?php echo $regiment ?></td>
                    <td><?php echo $service_number ?></td>
                    <td><?php echo $rank ?></td>
                    <td><?php echo $memorial_location ?></td>
                 
                </tr>


                <?php   }
    ?>

            </table>
        </div>











    </main>




    <?php   include "inc_footer.php"  ?>




</body>

</html>



<?php
    mysqli_close($conn);
    ?>