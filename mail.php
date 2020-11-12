<?php

function redirect_to($location = NULL)
{
    if ($location != NULL)
    {
        header("Location: {$location}");
        exit;
    }
}



if (isset($_POST['submit']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$recipient = "30088689@my.nclan.ac.uk";
$subject = "Fallen of Lanarkshire - Website Message";
$mailheader = "From: $email $name \r\n";
mail($recipient, $subject, $message, $mailheader);


if(mail($recipient, $subject, $message, $mailheader)) {
    redirect_to('index.php');
  } else {
     redirect_to('index.php');
  }

}


?>