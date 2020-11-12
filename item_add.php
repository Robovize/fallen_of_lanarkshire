<?php include "conn.php"; 

session_start();
ob_start();

/* checking if admin is logged in. If not, error login page is diplayed */
if (!isset ($_SESSION['nickname']))
{
    header('location: login_error.php');
}
ob_end_flush();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <title>Add Record</title>
</head>

<body>

    <?php include "inc_header_admin.php"; ?>






    <main id="item_add">
        <form action="item_add_script.php" method="post" class="update_form">



            <div class="update_form__field">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" value="">
            </div>

            <div class="update_form__field">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="">
            </div>

            <div class="update_form__field">
                <label for="regiment">Regiment</label>
                <input type="text" id="regiment" name="regiment" value="">
            </div>

            <div class="update_form__field">
                <label for="service_number">Service Number</label>
                <input type="text" id="service_number" name="service_number" value="">
            </div>

            <div class="update_form__field">
                <label for="rank">Rank</label>
                <input type="text" id="rank" name="rank" value="">
            </div>


            <div class="update_form__field">
                <label for="war">Rank</label>
                <input type="text" id="war" name="war" value="W.W.1. OR W.W.2.">
            </div>

            <div class="update_form__field">
                <label for="died">Died</label>
                <input type="text" id="died" name="died" value="Yes or No">
            </div>

            <div class="update_form__field">
                <label for="town">Town</label>
                <input type="text" id="town" name="town" value="">
            </div>

            <div class="update_form__field">
                <label for="memorial_location">Memorial Location</label>
                <input type="text" id="memorial_location" name="memorial_location" value="">
            </div>

            <div class="update_form__field">
                <label for="code1">Code 1</label>
                <input type="text" id="code1" name="code1" value="">
            </div>

            <div class="update_form__field">
                <label for="code2">Code 2</label>
                <input type="text" id="code2" name="code2" value="">
            </div>

            <div class="update_form__field">
                <label for="code3">Code 3</label>
                <input type="text" id="code3" name="code3" value="">
            </div>

            <div class="update_form__field">
                <label for="code4">Code 4</label>
                <input type="text" id="code4" name="code4" value="">
            </div>

            <div class="update_form__field">
                <label for="code5">Code 5</label>
                <input type="text" id="code5" name="code5" value="">
            </div>

            <div class="update_form__field">
                <label for="code6">Code 6</label>
                <input type="text" id="code6" name="code6" value="">
            </div>

            <div class="update_form__field">
                <label for="code7">Code 7</label>
                <input type="text" id="code7" name="code7" value="">
            </div>

            <div class="update_form__field">
                <label for="code8">Code 8</label>
                <input type="text" id="code8" name="code8" value="">
            </div>

            <div class="update_form__submit">
                <input type="submit" name="add" value="Add Record" class="submitButton">
                <div>
        </form>

    </main>










</body>

</html>