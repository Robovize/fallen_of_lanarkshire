<?php
/* clear session so everytime I want to visit admin pages I need to login first */
session_start();
session_destroy();
header("Location: login.php");
?>