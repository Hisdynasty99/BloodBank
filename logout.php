<?php
// unset($_SESSION['logged_in']);  
session_start();
session_destroy();
header("location: home.php");
?>